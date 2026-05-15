package tn.esprit.controllers;

import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.application.Platform;
import javafx.embed.swing.SwingFXUtils;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import javafx.scene.image.Image;
import javafx.stage.Stage;
import javafx.util.Duration;

import com.github.sarxos.webcam.Webcam;

import javax.imageio.ImageIO;
import java.awt.image.BufferedImage;
import java.io.File;

import tn.esprit.services.FacePlusPlusService;
import tn.esprit.services.AuthService;

import org.json.JSONObject;

public class FaceCameraController {

    private AuthService authService = new AuthService();

    // ================= UI =================
    @FXML private ImageView cameraView;
    @FXML private Label lblStatus;
    @FXML private Label lblLockTimer;

    // ================= CAMERA =================
    private Webcam webcam;
    private boolean running = false;

    // ================= SECURITY =================
    private boolean loginLocked = false;
    private long lockEndTime = 0;
    private int lockLevel = 0;

    private Timeline lockTimeline;

    private int idUserConnecte;

    // =============================================
    public void setIdUser(int id) {
        this.idUserConnecte = id;
    }

    // =============================================
    @FXML
    public void initialize() {
        startCamera();
    }

    // =============================================
    // CAMERA MANAGEMENT
    // =============================================
    private void startCamera() {

        if (webcam != null && webcam.isOpen())
            return;

        webcam = Webcam.getDefault();

        if (webcam == null) {
            System.out.println("❌ Webcam introuvable");
            return;
        }

        webcam.open();
        running = true;

        Thread cameraThread = new Thread(() -> {

            while (running) {
                try {

                    BufferedImage image = webcam.getImage();

                    if (image != null) {
                        Image fxImage =
                                SwingFXUtils.toFXImage(image, null);

                        Platform.runLater(() ->
                                cameraView.setImage(fxImage));
                    }

                    Thread.sleep(33);

                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });

        cameraThread.setDaemon(true);
        cameraThread.start();
    }

    public void stopCamera() {

        running = false;

        if (webcam != null && webcam.isOpen()) {
            webcam.close();
            System.out.println("📷 Webcam fermée");
        }
    }

    // =============================================
    private long getLockDuration() {

        switch (lockLevel) {
            case 0: return 30_000;
            case 1: return 3 * 60_000;
            default: return 10 * 60_000;
        }
    }

    // =============================================
    private void startLockCountdown() {

        if (lockTimeline != null)
            lockTimeline.stop();

        lockTimeline = new Timeline(
                new KeyFrame(Duration.seconds(1), e -> {

                    long remaining =
                            (lockEndTime - System.currentTimeMillis()) / 1000;

                    if (remaining <= 0) {

                        loginLocked = false;
                        lblLockTimer.setText("✅ Compte réactivé");

                        startCamera();
                        lockTimeline.stop();
                    }
                    else {
                        lblLockTimer.setText(
                                "Compte verrouillé : " + remaining + "s"
                        );
                    }
                })
        );

        lockTimeline.setCycleCount(Timeline.INDEFINITE);
        lockTimeline.play();
    }

    // =============================================
    private void openSidebar() {

        try {

            stopCamera();

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/sidebarB.fxml"));

            Parent root = loader.load();

            sidebarControllerB controller = loader.getController();
            controller.setIdUserConnecte(idUserConnecte);

            Stage stage =
                    (Stage) cameraView.getScene().getWindow();

            stage.setScene(new Scene(root));
            stage.setTitle("Accueil");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    @FXML
    private void captureFace() {

        // ================= CHECK LOCK =================
        if (loginLocked) {

            long remaining = lockEndTime - System.currentTimeMillis();

            if (remaining > 0) {
                lblStatus.setText("⛔ Compte verrouillé");
                return;
            }

            loginLocked = false;
            lblLockTimer.setText("");
            startCamera();
        }

        try {

            BufferedImage buffered = webcam.getImage();
            if (buffered == null) return;

            String basePath = System.getProperty("user.dir") + "/faces/";
            new File(basePath).mkdirs();

            // ⭐ image unique (évite bugs IO)
            File captured =
                    new File(basePath + "camera_" + System.currentTimeMillis() + ".jpg");

            ImageIO.write(buffered, "jpg", captured);

            File stored =
                    new File(basePath + "user_" + idUserConnecte + ".jpg");

            if (!stored.exists()) {
                lblStatus.setText("❌ Image utilisateur absente");
                return;
            }

            // ================= FACE++ =================
            String result =
                    FacePlusPlusService.compareFaces(stored, captured);

            JSONObject json = new JSONObject(result);
            double confidence = json.getDouble("confidence");

            boolean faceOk = confidence >= 80;

            System.out.println("Face confidence = " + confidence);

            // ================= CALCUL TRUST SCORE =================
            // ⭐ IMPORTANT : on calcule AVANT sauvegarde
            double trustScore =
                    authService.computeTrustScore(
                            idUserConnecte,
                            confidence,
                            false,   // pas password
                            true     // tentative biométrique
                    );

            System.out.println("TrustScore = " + trustScore);

            // ================= SAVE ATTEMPT =================
            authService.saveLoginAttempt(
                    idUserConnecte,
                    faceOk,
                    confidence,
                    "FACE",
                    faceOk ? null : "BAD_FACE",
                    trustScore
            );

            // =====================================================
            // ✅ VISAGE VALIDE → ACCÈS DIRECT
            // =====================================================
            if (faceOk) {

                lblStatus.setText("✅ Identité confirmée");

                stopCamera();
                openSidebar();
                return;
            }

            // =====================================================
            // ⚠ SCORE MOYEN → RETRY
            // =====================================================
            if (trustScore >= 60) {

                lblStatus.setText("⚠ Visage incertain — réessayez");
                return;
            }

            // =====================================================
            // ❌ SCORE FAIBLE → LOCK
            // =====================================================
            loginLocked = true;

            long duration = getLockDuration();
            lockEndTime = System.currentTimeMillis() + duration;
            lockLevel++;

            stopCamera();

            lblStatus.setText("❌ Accès bloqué");

            startLockCountdown();

        } catch (Exception e) {
            e.printStackTrace();
            lblStatus.setText("Erreur reconnaissance faciale");
        }
    }








}
