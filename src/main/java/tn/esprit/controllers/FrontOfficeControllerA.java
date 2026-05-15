package tn.esprit.controllers;
import javafx.animation.*;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.ImageView;
import javafx.scene.layout.*;
import javafx.scene.paint.Color;
import javafx.scene.shape.Circle;
import javafx.scene.web.WebView;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Duration;
import tn.esprit.entities.Transport;
import tn.esprit.entities.Reservation;
import tn.esprit.services.TransportService;
import tn.esprit.services.ReservationService;
import java.io.IOException;
import java.time.LocalDate;
import java.util.List;
import javafx.scene.layout.VBox;
import javafx.scene.control.*;
import tn.esprit.utils.MyDatabase;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import tn.esprit.utils.MyDatabase;
public class FrontOfficeControllerA {
    @FXML
    private Circle profileCircle;
    @FXML private StackPane leftContainer;
    @FXML private ImageView logo;
    @FXML private HBox topBar;
    @FXML
    private StackPane contentArea;

    @FXML private Button btnAccueil;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Button btnNotif;
    @FXML private ListView<Transport> transportListView;
    @FXML private StackPane mapContainer;
    @FXML private WebView mapView;
    @FXML private Button btnExpandMap;
    @FXML private Button btnReserve;
    @FXML private Button btnLogout;
    private Timeline sidebarTimeline;
    private Timeline notifAnimation;

    private int idUserConnecte;
    public int getIdUserConnecte() {
        return idUserConnecte;
    }
    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
    }


    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;
    private boolean mapExpanded = false;

    private ObservableList<Transport> transportList = FXCollections.observableArrayList();
    private TransportService transportService;
    private ReservationService reservationService;

    @FXML
    public void initialize() {

        if (leftContainer == null || logo == null) return;

        // Sidebar setup
        leftContainer.setPrefWidth(collapsedWidth);
        logo.setFitHeight(55);
        setTexts(false);

        startNotificationGlow();
        Platform.runLater(this::animateTopBar);

        // Services
        transportService = new TransportService();
        reservationService = new ReservationService();

        // Load transports
        loadTransports();

        transportListView.setOnMouseClicked(event -> {
            if (event.getClickCount() == 2) { // double clic
                Transport selected = transportListView.getSelectionModel().getSelectedItem();
                if (selected != null) {
                    openReclamationPopup(selected);
                }
            }
        });


        // Map
        if (btnExpandMap != null) btnExpandMap.setOnAction(e -> toggleMap());
        if (mapView != null) mapView.getEngine().load("https://www.google.com/maps");

        // Réserver button
        if (btnReserve != null) btnReserve.setOnAction(e -> openReservationPopup());
    }

    /** Popup réservation **/
    @FXML
    private void openReservationPopup() {

        Transport selected = transportListView.getSelectionModel().getSelectedItem();

        if (selected == null) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Avertissement");
            alert.setHeaderText("Aucun transport sélectionné");
            alert.setContentText("Veuillez sélectionner un transport dans la liste.");
            alert.showAndWait();
            return;
        }

        Stage popupStage = new Stage();
        popupStage.initModality(Modality.APPLICATION_MODAL);
        popupStage.setTitle("Réserver : " + selected.getNom());

        VBox root = new VBox(15);
        root.setPadding(new Insets(20));
        root.setStyle(
                "-fx-background-color: linear-gradient(to bottom right, #141E30, #243B55);" +
                        "-fx-background-radius: 20;" +
                        "-fx-effect: dropshadow(gaussian, rgba(0,0,0,0.7), 40, 0.4, 0, 15);"
        );


        Label title = new Label("Réservation du transport");
        title.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 20px; -fx-font-weight: bold;");

        Label lblNom = new Label("Nom : " + selected.getNom());
        Label lblType = new Label("Type : " + selected.getType());
        Label lblPrix = new Label("Prix : " + selected.getPrix() + " €");

        lblNom.setStyle("-fx-text-fill: #A7E3FF;");
        lblType.setStyle("-fx-text-fill: #A7E3FF;");
        lblPrix.setStyle("-fx-text-fill: #A7E3FF;");

        TextField txtClient = new TextField();
        txtClient.setPromptText("Votre nom");
        txtClient.setStyle("-fx-background-radius: 10; -fx-padding: 5; "
                + "-fx-border-color: #2FA8FF; -fx-border-radius: 10; -fx-text-fill: white;");

        Button btnConfirm = new Button("Confirmer la réservation");
        btnConfirm.setStyle("-fx-background-color: linear-gradient(to right, #2FA8FF, #1E6FA8); "
                + "-fx-text-fill: white; -fx-background-radius: 15; -fx-padding: 8 20; "
                + "-fx-font-weight: bold;");
        btnConfirm.setStyle(buttonStyle());
        btnConfirm.setOnMouseEntered(e -> btnConfirm.setScaleX(1.05));
        btnConfirm.setOnMouseExited(e -> btnConfirm.setScaleX(1));


        btnConfirm.setOnAction(ev -> {

            if (txtClient.getText().isEmpty()) {

                Alert a = new Alert(Alert.AlertType.WARNING);
                a.setTitle("Erreur");
                a.setHeaderText("Nom du client vide");
                a.setContentText("Veuillez entrer votre nom.");
                a.showAndWait();

            } else {

                // ✅ NOUVEAU CONSTRUCTEUR ADAPTÉ
                Reservation reservation = new Reservation(
                        LocalDate.now(),                // dateReservation
                        selected.getType(),             // typeReservation
                        selected.getPrix(),             // montantTotal
                        "CONFIRMEE",                    // statut
                        getIdUserConnecte(),                              // idUser (à remplacer si login actif)
                        selected.getIdTransport()       // idTransport
                );

                reservationService.ajouter(reservation);

                Alert conf = new Alert(Alert.AlertType.INFORMATION);
                conf.setTitle("Réservation confirmée");
                conf.setHeaderText(null);
                conf.setContentText("Réservation enregistrée pour " + txtClient.getText());
                conf.showAndWait();

                popupStage.close();
            }
        });

        root.getChildren().addAll(title, lblNom, lblType, lblPrix, txtClient, btnConfirm);

        Scene scene = new Scene(root, 400, 300);
        popupStage.setScene(scene);
        popupStage.showAndWait();
    }


    /** Chargement des transports et ListView stylée **/
    private void loadTransports() {
        List<Transport> transports = transportService.afficher();
        transportList.setAll(transports);
        transportListView.setItems(transportList);

        transportListView.setCellFactory(lv -> new ListCell<Transport>() {
            @Override
            protected void updateItem(Transport t, boolean empty) {
                super.updateItem(t, empty);

                if (empty || t == null) {
                    setText(null);
                    setGraphic(null);
                } else {
                    VBox card = new VBox(5);
                    card.setPadding(new Insets(12));
                    card.setStyle(
                            "-fx-background-color: linear-gradient(to bottom right, #123A5C, #1E6FA8);" +
                                    "-fx-background-radius: 12;" +
                                    "-fx-effect: dropshadow(gaussian, rgba(0,0,0,0.25), 6, 0.5, 0, 2);"
                    );

                    // Tous les attributs
                    Label lblNom = new Label("Nom: " + t.getNom());
                    Label lblType = new Label("Type: " + t.getType());
                    Label lblPrix = new Label("Prix: " + t.getPrix() + " €");
                    Label lblDesc = new Label("Description: " + t.getDescription());

                    // Style général
                    for (Label lbl : new Label[]{ lblNom, lblType, lblPrix, lblDesc}) {
                        lbl.setStyle("-fx-text-fill: #C9EFFF; -fx-font-size: 13px;");
                    }
                    lblNom.setStyle("-fx-font-weight: bold; -fx-font-size: 15px; -fx-text-fill: #A7E3FF;");

                    card.getChildren().addAll(lblNom, lblType, lblPrix, lblDesc);

                    setGraphic(card);
                }
            }
        });

    }

    /** MAP toggle **/
    private void toggleMap() {
        double targetWidth = mapExpanded ? 450 : 900;
        Timeline timeline = new Timeline(
                new KeyFrame(Duration.millis(350),
                        new KeyValue(mapContainer.prefWidthProperty(), targetWidth, Interpolator.EASE_BOTH)
                )
        );
        timeline.play();
        mapExpanded = !mapExpanded;
    }

    /** Sidebar animation **/
    @FXML
    private void expandSidebar() { animateSidebar(expandedWidth, 110); setTexts(true); }
    @FXML
    private void collapseSidebar() { animateSidebar(collapsedWidth, 55); setTexts(false); }

    private void animateSidebar(double targetWidth, double targetLogoHeight) {
        if (sidebarTimeline != null) sidebarTimeline.stop();
        sidebarTimeline = new Timeline(
                new KeyFrame(Duration.millis(250),
                        new KeyValue(leftContainer.prefWidthProperty(), targetWidth, Interpolator.EASE_BOTH),
                        new KeyValue(logo.fitHeightProperty(), targetLogoHeight, Interpolator.EASE_BOTH)
                )
        );
        sidebarTimeline.play();
    }

    private void setTexts(boolean expanded) {
        if (btnAccueil == null) return;
        btnAccueil.setText(expanded ? "ACCUEIL" : "");
        btnHebergement.setText(expanded ? "HÉBERGEMENTS" : "");
        btnLoisirs.setText(expanded ? "LOISIRS" : "");
        btnTransport.setText(expanded ? "TRANSPORTS" : "");
        btnAvis.setText(expanded ? "RÉCLAMATIONS" : "");
    }

    /** Notification glow **/
    private void startNotificationGlow() {
        if (btnNotif == null) return;
        DropShadow glow = new DropShadow();
        glow.setRadius(0);
        glow.setColor(Color.web("#FFC107"));
        btnNotif.setEffect(glow);
        notifAnimation = new Timeline(
                new KeyFrame(Duration.ZERO, new KeyValue(glow.radiusProperty(), 0)),
                new KeyFrame(Duration.seconds(1), new KeyValue(glow.radiusProperty(), 20))
        );
        notifAnimation.setAutoReverse(true);
        notifAnimation.setCycleCount(Animation.INDEFINITE);
        notifAnimation.play();
    }

    /** TopBar animation **/
    private void animateTopBar() {
        if (topBar == null) return;
        topBar.setOpacity(0);
        topBar.setTranslateY(-30);
        TranslateTransition slide = new TranslateTransition(Duration.millis(350), topBar);
        slide.setToY(0); slide.setInterpolator(Interpolator.EASE_OUT);
        FadeTransition fade = new FadeTransition(Duration.millis(350), topBar);
        fade.setToValue(1);
        new ParallelTransition(slide, fade).play();
    }

    @FXML
    private void handleLogout() {
        try {
            // Récupère la fenêtre actuelle
            Stage currentStage = (Stage) btnLogout.getScene().getWindow();
            currentStage.close(); // ferme la fenêtre FrontOffice

            // Charge le FXML du login
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AuthContainer.fxml"));
            Parent root = loader.load();

            // Crée un nouveau stage pour le login
            Stage loginStage = new Stage();
            loginStage.setTitle("Login");
            loginStage.setScene(new Scene(root));
            loginStage.initModality(Modality.APPLICATION_MODAL); // si tu veux le modal
            loginStage.show();

        } catch (IOException e) {
            e.printStackTrace();
            // Optionnel : afficher une alerte si le login ne peut pas s'ouvrir
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erreur");
            alert.setHeaderText("Impossible d'ouvrir la fenêtre de login");
            alert.setContentText(e.getMessage());
            alert.showAndWait();
        }
    }


    private void openReclamationPopup(Transport transport) {

        Stage stage = new Stage();
        stage.initModality(Modality.APPLICATION_MODAL);
        stage.setTitle("Réclamation");

        VBox root = new VBox(15);
        root.setPadding(new Insets(25));
        root.setStyle(
                "-fx-background-color: linear-gradient(to bottom right, #141E30, #243B55);" +
                        "-fx-background-radius: 20;" +
                        "-fx-effect: dropshadow(gaussian, rgba(0,0,0,0.4), 15,0,0,4);"
        );

        Label title = new Label("Signaler un problème");
        title.setStyle("-fx-text-fill: #00E5FF; -fx-font-size: 20px; -fx-font-weight: bold;");

        Label lblNom = new Label("Transport : " + transport.getNom());
        lblNom.setStyle("-fx-text-fill: white; -fx-font-size: 14px;");

        TextField txtSujet = new TextField();
        txtSujet.setPromptText("Sujet");
        txtSujet.setStyle(fieldStyle());

        TextArea txtDescription = new TextArea();
        txtDescription.setPromptText("Description");
        txtDescription.setPrefHeight(120);
        txtDescription.setStyle(fieldStyle());

        Button btnEnvoyer = new Button("Envoyer");
        btnEnvoyer.setStyle(buttonStyle());

        btnEnvoyer.setOnAction(e -> {

            if (txtSujet.getText().isEmpty() || txtDescription.getText().isEmpty()) {
                shakeNode(root); // Animation d'erreur si champs vides
                return;
            }

            String sql = "INSERT INTO reclamation " +
                    "(sujet, description, dateReclamation, statut, reponseAdmin, idUser) " +
                    "VALUES (?, ?, ?, ?, ?, ?)";

            // ⚠️ Connexion récupérée sans la fermer pour éviter "connection closed"
            Connection conn = MyDatabase.getInstance().getConx();
            try (PreparedStatement ps = conn.prepareStatement(sql)) {

                ps.setString(1, txtSujet.getText());
                ps.setString(2, txtDescription.getText());
                ps.setDate(3, java.sql.Date.valueOf(LocalDate.now()));
                ps.setString(4, "EN_ATTENTE");
                ps.setString(5, null);
                ps.setInt(6, getIdUserConnecte()); // Id utilisateur connecté

                ps.executeUpdate();

                // Animation de fermeture
                FadeTransition ft = new FadeTransition(Duration.millis(200), root);
                ft.setFromValue(1);
                ft.setToValue(0);
                ft.setOnFinished(ev -> stage.close());
                ft.play();

            } catch (SQLException ex) {
                System.err.println("Erreur SQL : " + ex.getMessage());
                shakeNode(root); // secoue le popup en cas d'erreur SQL
            }
        });

        root.getChildren().addAll(title, lblNom, txtSujet, txtDescription, btnEnvoyer);

        Scene scene = new Scene(root, 450, 400);
        stage.setScene(scene);

        // Animation d'apparition
        FadeTransition ftIn = new FadeTransition(Duration.millis(250), root);
        ftIn.setFromValue(0);
        ftIn.setToValue(1);
        ftIn.play();

        stage.showAndWait();
    }


    private String fieldStyle() {
        return
                "-fx-background-color: transparent;" +
                        "-fx-control-inner-background: #2f3e52;" +   // ✅ fond réel
                        "-fx-text-fill: white;" +
                        "-fx-prompt-text-fill: #9fb3c8;" +
                        "-fx-background-radius: 12;" +
                        "-fx-border-radius: 12;" +
                        "-fx-border-color: #00E5FF;" +
                        "-fx-border-width: 1.5px;" +
                        "-fx-padding: 10;";
    }

    private String buttonStyle() {
        return "-fx-background-color: linear-gradient(to right, #00E5FF, #0072FF);" +
                "-fx-text-fill: white;" +
                "-fx-background-radius: 20;" +
                "-fx-padding: 10 25;" +
                "-fx-font-weight: bold;";
    }
    private void fadeIn(Stage stage) {
        FadeTransition ft = new FadeTransition(Duration.millis(300), stage.getScene().getRoot());
        ft.setFromValue(0);
        ft.setToValue(1);
        ft.play();
    }
    private void fadeClose(Stage stage) {
        FadeTransition ft = new FadeTransition(Duration.millis(250), stage.getScene().getRoot());
        ft.setFromValue(1);
        ft.setToValue(0);
        ft.setOnFinished(e -> stage.close());
        ft.play();
    }
    private void shakeNode(javafx.scene.Node node) {
        TranslateTransition tt = new TranslateTransition(Duration.millis(60), node);
        tt.setFromX(-10);
        tt.setToX(10);
        tt.setCycleCount(6);
        tt.setAutoReverse(true);
        tt.play();
    }
    @FXML
    private void openProfile() {
        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/Profil.fxml"));

            Parent root = loader.load();

            // ✅ récupérer le controller du profil
            ProfileController profileController = loader.getController();

            // ✅ envoyer l'utilisateur connecté
            profileController.setIdUser(idUserConnecte);

            Stage stage = new Stage();
            stage.setTitle("Mon Profil");
            stage.setScene(new Scene(root));
            stage.initModality(Modality.APPLICATION_MODAL);

            stage.show();

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







}
