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

public class sidebarControllerB implements Initializable {
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
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Button btnNotif;
    @FXML private Button btnLogout;

    private Timeline timeline;
    private Timeline notifAnimation;

    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;
    @FXML
    private Button btnReservation;

    @Override
    public void initialize(URL url, ResourceBundle rb) {

        leftContainer.setPrefWidth(collapsedWidth);
        logo.setFitHeight(55);
        setTexts(false);

        startNotificationGlow();

        Platform.runLater(this::animateTopBar);

        // Charger page par défaut
        loadPage("AfficherEB.fxml");

        // Navigation boutons
        btnAccueil.setOnAction(e -> loadPage("AfficherEB.fxml"));
        btnHebergement.setOnAction(e -> loadPage("ClientInterfaceY.fxml"));
        btnLoisirs.setOnAction(e -> loadPage("AfficherEB.fxml"));
        btnTransport.setOnAction(e -> loadPage("Transport.fxml"));
        btnAvis.setOnAction(e -> loadPage("ReclamationFront.fxml"));
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
        btnLoisirs.setText(expanded ? "LOISIRS" : "");
        btnTransport.setText(expanded ? "TRANSPORTS" : "");
        btnAvis.setText(expanded ? "AVIS & RÉCLAMATIONS" : "");
        btnReservation.setText(expanded ? "RESERVATIONS" : "");
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

            // remplacer le contenu central
            contentArea.getChildren().setAll(page);

        } catch (IOException e) {
            e.printStackTrace();
        }
    }



    @FXML
    private void handleLogout() {

        try {

            // charger la page BackOffice
            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/backofficeB.fxml"));

            Parent root = loader.load();

            // récupérer la fenêtre actuelle
            Stage stage = (Stage) btnLogout.getScene().getWindow();

            // remplacer la scène actuelle
            stage.setScene(new Scene(root));
            stage.setTitle("Back Office");
            stage.show();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void handleReservation() {

        try {
            Parent root = FXMLLoader.load(
                    getClass().getResource("/BackOfficeB.fxml")
            );

            Stage stage = (Stage) btnReservation.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("Gestion des Réservations");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    @FXML
    private void openReservations(ActionEvent event) {

        try {
            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/MesReservationsB.fxml"));

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
    private void openLoisirs() {
        System.out.println("CLICK LOISIRS");
        loadPage("AfficherEB.fxml");
    }
    @FXML
    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
    }




}
