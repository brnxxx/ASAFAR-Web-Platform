package tn.esprit.controllers;

import javafx.animation.*;
import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.shape.Circle;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Duration;
import tn.esprit.entities.Reservation;
import tn.esprit.entities.Transport;

import java.io.IOException;
import java.net.URL;
import java.time.LocalDate;
import java.util.ResourceBundle;

public class sidebarYController implements Initializable {

    private int idUserConnecte;

    public int getIdUserConnecte() {
        return idUserConnecte;
    }

    @FXML
    private Circle profileCircle;

    @FXML
    private StackPane contentArea; // IMPORTANT : doit exister
    @FXML private StackPane leftContainer;
    @FXML private ImageView logo;
    @FXML private HBox topBar;
    @FXML private Button btnAccueil;
    @FXML private Button btnHebergement;
    @FXML private Button btnExcursions;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Button btnNotif;
    @FXML private Button btnLogout;
    @FXML private Button btnReservation;

    private Timeline timeline;
    private Timeline notifAnimation;

    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        System.out.println("🔍 sidebarYController.initialize() - idUserConnecte = " + idUserConnecte);

        leftContainer.setPrefWidth(collapsedWidth);
        logo.setFitHeight(55);
        setTexts(false);

        startNotificationGlow();

        Platform.runLater(this::animateTopBar);

        // ❌ SUPPRIMEZ CETTE LIGNE - NE CHARGEZ PAS LA PAGE ICI
        // loadPage("ClientInterfaceY.fxml");

        // Navigation boutons (on garde les actions)
        btnAccueil.setOnAction(e -> loadPage("AccueilClient.fxml"));
        btnHebergement.setOnAction(e -> loadPage("ClientInterfaceY.fxml"));
        btnExcursions.setOnAction(e -> loadPage("AfficherEB.fxml"));
        btnTransport.setOnAction(e -> loadPage("Transport.fxml"));
        btnAvis.setOnAction(e -> loadPage("ReclamationFront.fxml"));
        btnReservation.setOnAction(e -> loadPage("MesReservations.fxml"));
    }

    @FXML
    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
        System.out.println("🔑 sidebarYController.setIdUserConnecte() reçu ID: " + idUser);

        // ✅ Charger la page APRÈS avoir reçu l'ID
        loadPage("ClientInterfaceY.fxml");
    }

    // ====================================
    // SIDEBAR ANIMATION
    // ====================================

    @FXML
    private void expandSidebar() {
        animateTo(expandedWidth, 110);
        setTexts(true);
    }

    @FXML
    private void collapseSidebar() {
        animateTo(collapsedWidth, 55);
        setTexts(false);
    }

    private void animateTo(double targetWidth, double targetLogoHeight) {

        if (timeline != null) timeline.stop();

        timeline = new Timeline(
                new KeyFrame(Duration.millis(250),
                        new KeyValue(leftContainer.prefWidthProperty(), targetWidth, Interpolator.EASE_BOTH),
                        new KeyValue(leftContainer.maxWidthProperty(), targetWidth, Interpolator.EASE_BOTH),
                        new KeyValue(logo.fitHeightProperty(), targetLogoHeight, Interpolator.EASE_BOTH)
                )
        );

        timeline.play();
    }

    private void setTexts(boolean expanded) {

        btnAccueil.setText(expanded ? "ACCUEIL" : "");
        btnHebergement.setText(expanded ? "HÉBERGEMENTS" : "");
        btnExcursions.setText(expanded ? "EXCURSIONS" : "");
        btnTransport.setText(expanded ? "TRANSPORTS" : "");
        btnAvis.setText(expanded ? "AVIS & RÉCLAMATIONS" : "");
        btnReservation.setText(expanded ? "RÉSERVATIONS" : "");
    }

    // ====================================
    // NOTIFICATION GLOW
    // ====================================

    private void startNotificationGlow() {

        if (btnNotif == null) return;

        DropShadow glow = new DropShadow();
        glow.setRadius(0);
        glow.setColor(Color.web("#2FA8FF"));

        btnNotif.setEffect(glow);

        notifAnimation = new Timeline(
                new KeyFrame(Duration.ZERO,
                        new KeyValue(glow.radiusProperty(), 0)
                ),
                new KeyFrame(Duration.seconds(1),
                        new KeyValue(glow.radiusProperty(), 25)
                )
        );

        notifAnimation.setAutoReverse(true);
        notifAnimation.setCycleCount(Animation.INDEFINITE);
        notifAnimation.play();
    }

    // ====================================
    // TOP BAR ANIMATION
    // ====================================

    private void animateTopBar() {

        if (topBar == null) return;

        topBar.setOpacity(0);
        topBar.setTranslateY(-20);

        TranslateTransition slide = new TranslateTransition(Duration.millis(300), topBar);
        slide.setToY(0);
        slide.setInterpolator(Interpolator.EASE_OUT);

        FadeTransition fade = new FadeTransition(Duration.millis(300), topBar);
        fade.setToValue(1);

        slide.play();
        fade.play();
    }

    // ====================================
    // PAGE LOADER
    // ====================================

    public void loadPage(String fxml) {

        try {

            // chercher le fichier FXML dans resources
            URL url = getClass().getResource("/" + fxml);

            // ✅ vérification importante
            if (url == null) {
                System.out.println("FXML INTROUVABLE : " + fxml);
                return;
            }

            FXMLLoader loader = new FXMLLoader(url);
            Parent page = loader.load();

            // Passer l'ID utilisateur au contrôleur si nécessaire
            Object controller = loader.getController();
            if (controller instanceof ClientControllerY) {
                ((ClientControllerY) controller).setIdUserConnecte(idUserConnecte);
            } else if (controller instanceof AfficherEB) {
                // Si besoin de passer l'ID à AfficherEB
                // ((AfficherEB) controller).setIdUserConnecte(idUserConnecte);
            } else if (controller instanceof ReclamationFrontController) {
                ((ReclamationFrontController) controller).setIdUser(idUserConnecte);
            }

            // remplacer le contenu central
            contentArea.getChildren().setAll(page);

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void handleLogout() {

        try {

            // charger la page de connexion
            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/Login.fxml"));

            Parent root = loader.load();

            // récupérer la fenêtre actuelle
            Stage stage = (Stage) btnLogout.getScene().getWindow();

            // remplacer la scène actuelle
            stage.setScene(new Scene(root));
            stage.setTitle("Connexion");
            stage.show();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void handleReservation() {

        try {
            Parent root = FXMLLoader.load(
                    getClass().getResource("/MesReservations.fxml")
            );

            Stage stage = (Stage) btnReservation.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("Mes Réservations");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void openReservations(ActionEvent event) {

        try {
            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/MesReservations.fxml"));

            Parent root = loader.load();

            // récupérer la fenêtre actuelle
            Stage stage =
                    (Stage) ((Node) event.getSource()).getScene().getWindow();

            // remplacer seulement le contenu
            stage.getScene().setRoot(root);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void openProfile() {
        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/Profil.fxml"));

            Parent root = loader.load();

            // récupérer controller profil
            ProfileController profileController = loader.getController();

            // envoyer utilisateur connecté
            profileController.setIdUser(idUserConnecte);

            // ✅ récupérer la fenêtre actuelle
            Stage stage = (Stage) profileCircle.getScene().getWindow();

            // ✅ remplacer la scène actuelle
            stage.setScene(new Scene(root));
            stage.setTitle("Mon Profil");

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void openReclamations() {

        try {

            FXMLLoader loader = new FXMLLoader(
                    getClass().getResource("/ReclamationFront.fxml"));

            Parent view = loader.load();

            // ✅ récupérer controller
            ReclamationFrontController controller =
                    loader.getController();

            // ✅ envoyer utilisateur connecté
            controller.setIdUser(idUserConnecte);

            contentArea.getChildren().setAll(view);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void openExcursions() {
        System.out.println("CLICK EXCURSIONS");
        loadPage("AfficherEB.fxml");
    }

}