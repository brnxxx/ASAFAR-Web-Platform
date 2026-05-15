package tn.esprit.controllers;

import tn.esprit.entities.Hebergement;
import tn.esprit.entities.ReservationY;
import tn.esprit.entities.Utilisateur;
import javafx.event.ActionEvent;
import javafx.scene.control.Tooltip;
import tn.esprit.services.HebergementService;
import tn.esprit.utils.MyDatabase;
import javafx.animation.*;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.control.*;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonBar.ButtonData;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.*;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.util.Duration;
import tn.esprit.services.ReservationHebergementService;

import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import java.util.Optional;

public class AdminControllerY {

    // ================= SIDEBAR COMPONENTS =================
    @FXML private StackPane leftContainer;
    @FXML private ImageView logo;
    @FXML private HBox topBar;
    @FXML private Button btnAccueil;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Button btnLogout;

    // ================= NOUVEAU BOUTON CLIENT =================
    @FXML private Button btnVoirSite;

    // ================= HEBERGEMENT COMPONENTS =================
    @FXML private Label lblTotalHebergements;
    @FXML private Label lblTotalDisponibles;
    @FXML private Label lblNoteMoyenne;
    @FXML private Label lblPrixMoyen;
    @FXML private Label lblStatusMessage;
    @FXML private TextField txtSearchAdmin;
    @FXML private ListView<Hebergement> listViewHebergements;
    @FXML private HBox statusBar;
    @FXML private Button btnAjouterPopup;
    @FXML private Button btnSearchAdmin;
    @FXML private Button btnCloseStatus;

    // ================= RÉSERVATIONS COMPONENTS =================
    @FXML private Label lblTotalReservations;
    @FXML private ListView<ReservationY> listViewReservations;

    // ================= SERVICES & DATA =================
    private final HebergementService hebergementService = new HebergementService();
    private final ReservationHebergementService reservationService = new ReservationHebergementService();
    private final ObservableList<Hebergement> hebergementList = FXCollections.observableArrayList();
    private final ObservableList<ReservationY> reservationList = FXCollections.observableArrayList();

    // ================= GESTION DE L'UTILISATEUR CONNECTÉ =================
    private int idUserConnecte;

    // ================= SIDEBAR ANIMATION =================
    private Timeline sidebarTimeline;
    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    // ================= UPLOAD IMAGE =================
    private File selectedImageFile;
    private String imagePath;

    @FXML
    public void initialize() {

        // ---------- SIDEBAR INIT ----------
        if (leftContainer != null && logo != null) {
            leftContainer.setPrefWidth(collapsedWidth);
            logo.setFitHeight(55);
            setTexts(false);
        }

        // ---------- HEBERGEMENT INIT ----------
        setupListView();
        chargerDonnees();
        chargerStatistiques();

        // ---------- RÉSERVATIONS INIT ----------
        setupReservationsListView();
        chargerReservations();

        // ---------- BUTTON ACTIONS ----------
        if (btnAjouterPopup != null) btnAjouterPopup.setOnAction(e -> showAjouterPopup());
        if (btnSearchAdmin != null) btnSearchAdmin.setOnAction(e -> rechercherHebergements());
        if (btnCloseStatus != null) {
            btnCloseStatus.setOnAction(e -> {
                statusBar.setVisible(false);
                statusBar.setManaged(false);
            });
        }
        if (btnLogout != null) btnLogout.setOnAction(e -> handleLogout());

        // ---------- BOUTON VOIR LE SITE ----------
        if (btnVoirSite != null) {
            btnVoirSite.setOnAction(e -> ouvrirInterfaceClient());
        }

        // ---------- MENU ACTIONS ----------
        if (btnAccueil != null) btnAccueil.setOnAction(e -> switchView("/Dashboard.fxml"));
        if (btnHebergement != null) btnHebergement.setOnAction(e -> switchView("/AdminInterface.fxml"));
        if (btnLoisirs != null) btnLoisirs.setOnAction(e -> switchView("/Loisirs.fxml"));
        if (btnTransport != null) btnTransport.setOnAction(e -> switchView("/Transport.fxml"));
        if (btnAvis != null) btnAvis.setOnAction(e -> switchView("/Avis.fxml"));

        // ---------- ANIMATIONS ----------
        Platform.runLater(this::animateTopBar);
        txtSearchAdmin.textProperty().addListener((observable, oldValue, newValue) -> {
            rechercherHebergements();
        });
    }

    /* ================= GESTION DE L'UTILISATEUR CONNECTÉ ================= */

    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
        System.out.println("🔑 AdminControllerY reçoit ID: " + idUser);

        // Optionnel : charger les infos de l'admin si besoin
        // Utilisateur admin = getUtilisateurById(idUser);
    }

    private Utilisateur getUtilisateurById(int id) {
        String query = "SELECT * FROM utilisateur WHERE idUser = ?";
        try (PreparedStatement ps = MyDatabase.getInstance().getConx().prepareStatement(query)) {
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                Utilisateur u = new Utilisateur();
                u.setIdUser(rs.getInt("idUser"));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setEmail(rs.getString("email"));
                u.setTelephone(rs.getString("telephone"));
                u.setRole(rs.getString("role"));
                return u;
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return null;
    }

    /* ================= SIDEBAR METHODS ================= */

    @FXML
    private void expandSidebar() {
        animateSidebar(expandedWidth, 110);
        setTexts(true);
    }

    @FXML
    private void collapseSidebar() {
        animateSidebar(collapsedWidth, 55);
        setTexts(false);
    }

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
        if (expanded) {
            btnAccueil.setText("ACCUEIL");
            btnHebergement.setText("HÉBERGEMENTS");
            btnLoisirs.setText("LOISIRS");
            btnTransport.setText("TRANSPORTS");
            btnAvis.setText("AVIS & RÉCLAMATIONS");
        } else {
            btnAccueil.setText("");
            btnHebergement.setText("");
            btnLoisirs.setText("");
            btnTransport.setText("");
            btnAvis.setText("");
        }
    }

    private void animateTopBar() {
        if (topBar == null) return;
        topBar.setOpacity(0);
        topBar.setTranslateY(-30);
        TranslateTransition slide = new TranslateTransition(Duration.millis(350), topBar);
        slide.setToY(0);
        FadeTransition fade = new FadeTransition(Duration.millis(350), topBar);
        fade.setToValue(1);
        new ParallelTransition(slide, fade).play();
    }

    private void switchView(String fxmlPath) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
            Parent root = loader.load();
            leftContainer.getScene().setRoot(root);
        } catch (Exception e) {
            System.err.println("❌ Erreur chargement FXML: " + fxmlPath);
        }
    }

    private void handleLogout() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/login.fxml"));
            Parent root = loader.load();
            leftContainer.getScene().setRoot(root);
        } catch (Exception e) {
            System.err.println("❌ Erreur déconnexion");
        }
    }

    /* ================= INTERFACE CLIENT ================= */

    private void ouvrirInterfaceClient() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ClientInterfaceY.fxml"));
            Parent root = loader.load();
            leftContainer.getScene().setRoot(root);
        } catch (Exception e) {
            System.err.println("❌ Erreur chargement interface client: " + e.getMessage());
            e.printStackTrace();
        }
    }

    /* ================= UPLOAD IMAGE METHODS ================= */

    private String handleUploadImage(ImageView imageView) {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Choisir une image pour l'hébergement");

        fileChooser.getExtensionFilters().addAll(
                new FileChooser.ExtensionFilter("Images", "*.png", "*.jpg", "*.jpeg", "*.gif", "*.bmp"),
                new FileChooser.ExtensionFilter("PNG", "*.png"),
                new FileChooser.ExtensionFilter("JPG", "*.jpg", "*.jpeg"),
                new FileChooser.ExtensionFilter("Tous les fichiers", "*.*")
        );

        Stage stage = (Stage) leftContainer.getScene().getWindow();
        File file = fileChooser.showOpenDialog(stage);

        if (file != null) {
            try {
                String savedPath = saveImageToProject(file);

                if (imageView != null) {
                    Image image = new Image(new File(savedPath).toURI().toString());
                    imageView.setImage(image);
                    imageView.setFitWidth(70);
                    imageView.setFitHeight(70);
                    imageView.setPreserveRatio(true);
                    imageView.setSmooth(true);
                    imageView.setCache(true);
                }

                showStatus("✅ Image uploadée avec succès", "success");
                return savedPath;

            } catch (IOException e) {
                e.printStackTrace();
                showAlert("Erreur", "Erreur lors du chargement de l'image: " + e.getMessage(), AlertType.ERROR);
            }
        }
        return null;
    }

    private String saveImageToProject(File file) throws IOException {
        String uploadDir = "uploads/hebergements/";

        File directory = new File(uploadDir);
        if (!directory.exists()) {
            directory.mkdirs();
        }

        String fileName = System.currentTimeMillis() + "_" + file.getName();
        fileName = fileName.replaceAll("[^a-zA-Z0-9._-]", "_");

        Path destination = Paths.get(uploadDir + fileName);
        Files.copy(file.toPath(), destination, StandardCopyOption.REPLACE_EXISTING);

        System.out.println("✅ Image sauvegardée: " + destination.toString());
        return "uploads/hebergements/" + fileName;
    }

    private boolean deleteImage(String imagePath) {
        if (imagePath != null && !imagePath.isEmpty()) {
            try {
                File imageFile = new File(imagePath);
                if (imageFile.exists()) {
                    return imageFile.delete();
                }
            } catch (Exception e) {
                System.err.println("❌ Erreur lors de la suppression de l'image: " + e.getMessage());
            }
        }
        return false;
    }

    /* ================= HEBERGEMENT CRUD METHODS ================= */

    private void setupListView() {
        listViewHebergements.setItems(hebergementList);
        listViewHebergements.setPrefWidth(Double.MAX_VALUE);

        listViewHebergements.setCellFactory(param -> new ListCell<Hebergement>() {
            @Override
            protected void updateItem(Hebergement h, boolean empty) {
                super.updateItem(h, empty);
                if (empty || h == null) {
                    setGraphic(null);
                    return;
                }

                HBox cardContainer = new HBox(15);
                cardContainer.setPadding(new Insets(15));
                cardContainer.setStyle("-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8); -fx-background-radius: 20; -fx-border-width: 0;");
                cardContainer.setMaxWidth(Double.MAX_VALUE);

                // ===== IMAGE =====
                VBox imageBox = new VBox();
                imageBox.setAlignment(Pos.CENTER);
                imageBox.setPrefWidth(100);
                imageBox.setPrefHeight(100);

                ImageView typeImage = new ImageView();
                typeImage.setFitWidth(70);
                typeImage.setFitHeight(70);
                typeImage.setPreserveRatio(true);

                if (h.getImagePath() != null && !h.getImagePath().isEmpty()) {
                    try {
                        File imageFile = new File(h.getImagePath());
                        if (imageFile.exists()) {
                            Image img = new Image(imageFile.toURI().toString());
                            typeImage.setImage(img);
                            imageBox.getChildren().add(typeImage);
                        } else {
                            showDefaultImage(imageBox);
                        }
                    } catch (Exception e) {
                        showDefaultImage(imageBox);
                    }
                } else {
                    showDefaultImage(imageBox);
                }

                // ===== CONTENU =====
                VBox contentBox = new VBox(8);
                contentBox.setPadding(new Insets(0, 0, 0, 10));
                contentBox.setMaxWidth(Double.MAX_VALUE);

                Label lblNom = new Label(h.getNom().toUpperCase());
                lblNom.setStyle("-fx-font-size: 20px; -fx-font-weight: bold; -fx-text-fill: white;");

                Label lblInfos = new Label(
                        "Type: " + h.getType() +
                                " | Ville: " + h.getLocalisation() +
                                " | Prix: " + h.getPrixParNuit() + " € / nuit" +
                                " | Note: " + h.getNoteMoyenne() + "/5"
                );
                lblInfos.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 14px;");

                Label lblDispo = new Label("Statut: " + h.getDisponibilite());
                if (h.getDisponibilite().equalsIgnoreCase("Disponible")) {
                    lblDispo.setStyle("-fx-background-color: #28a745; -fx-text-fill: white; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                } else if (h.getDisponibilite().equalsIgnoreCase("Occupé")) {
                    lblDispo.setStyle("-fx-background-color: #ffc107; -fx-text-fill: black; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                } else {
                    lblDispo.setStyle("-fx-background-color: #dc3545; -fx-text-fill: white; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                }

                Label lblDescription = new Label(h.getDescription());
                lblDescription.setWrapText(true);
                lblDescription.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 13px;");
                lblDescription.setMaxWidth(Double.MAX_VALUE);

                // ===== ACTIONS =====
                HBox actions = new HBox(15);
                actions.setAlignment(Pos.CENTER_LEFT);
                actions.setPadding(new Insets(15, 0, 5, 0));
                actions.setStyle("-fx-border-color: rgba(255,255,255,0.2); -fx-border-width: 1 0 0 0; -fx-padding: 15 0 5 0;");

                Button btnModifier = new Button();
                btnModifier.setStyle("-fx-background-color: #FF8F00; -fx-background-radius: 15; -fx-cursor: hand; -fx-padding: 10 15;");
                btnModifier.setOnAction(e -> showModifierPopup(h));

                try {
                    Image imgModif = new Image(getClass().getResourceAsStream("/images/modifier.png"));
                    if (imgModif != null && !imgModif.isError()) {
                        ImageView iconModif = new ImageView(imgModif);
                        iconModif.setFitHeight(24);
                        iconModif.setFitWidth(24);
                        btnModifier.setGraphic(iconModif);
                        btnModifier.setTooltip(new Tooltip("Modifier"));
                    } else {
                        btnModifier.setText("✏️");
                        btnModifier.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-size: 18px; -fx-font-weight: bold; -fx-background-radius: 15; -fx-padding: 8 15;");
                    }
                } catch (Exception e) {
                    btnModifier.setText("✏️");
                    btnModifier.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-size: 18px; -fx-font-weight: bold; -fx-background-radius: 15; -fx-padding: 8 15;");
                }

                Button btnSupprimer = new Button();
                btnSupprimer.setStyle("-fx-background-color: #FF8F00; -fx-background-radius: 15; -fx-cursor: hand; -fx-padding: 10 15;");
                btnSupprimer.setOnAction(e -> showSupprimerPopup(h));

                try {
                    Image imgSupp = new Image(getClass().getResourceAsStream("/images/delete.png"));
                    if (imgSupp != null && !imgSupp.isError()) {
                        ImageView iconSupp = new ImageView(imgSupp);
                        iconSupp.setFitHeight(24);
                        iconSupp.setFitWidth(24);
                        btnSupprimer.setGraphic(iconSupp);
                        btnSupprimer.setTooltip(new Tooltip("Supprimer"));
                    } else {
                        btnSupprimer.setText("🗑️");
                        btnSupprimer.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-size: 18px; -fx-font-weight: bold; -fx-background-radius: 15; -fx-padding: 8 15;");
                    }
                } catch (Exception e) {
                    btnSupprimer.setText("🗑️");
                    btnSupprimer.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-size: 18px; -fx-font-weight: bold; -fx-background-radius: 15; -fx-padding: 8 15;");
                }

                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                actions.getChildren().addAll(btnModifier, btnSupprimer, spacer);
                contentBox.getChildren().addAll(lblNom, lblInfos, lblDispo, lblDescription, actions);
                cardContainer.getChildren().addAll(imageBox, contentBox);
                setGraphic(cardContainer);
            }

            private void showDefaultImage(VBox imageBox) {
                try {
                    Image defaultImg = new Image(getClass().getResourceAsStream("/images/default-hotel.png"));
                    if (defaultImg != null && !defaultImg.isError()) {
                        ImageView defaultImageView = new ImageView(defaultImg);
                        defaultImageView.setFitWidth(70);
                        defaultImageView.setFitHeight(70);
                        defaultImageView.setPreserveRatio(true);
                        imageBox.getChildren().add(defaultImageView);
                    } else {
                        Label noImageLabel = new Label("🏨");
                        noImageLabel.setStyle("-fx-font-size: 52px; -fx-text-fill: white;");
                        imageBox.getChildren().add(noImageLabel);
                    }
                } catch (Exception e) {
                    Label noImageLabel = new Label("🏨");
                    noImageLabel.setStyle("-fx-font-size: 52px; -fx-text-fill: white;");
                    imageBox.getChildren().add(noImageLabel);
                }
            }
        });
    }

    /* ================= STATISTIQUES HÉBERGEMENTS ================= */

    private void chargerStatistiques() {
        List<Hebergement> list = hebergementService.afficherHebergements();

        int totalHebergements = list.size();
        lblTotalHebergements.setText(String.valueOf(totalHebergements));

        long disponibles = list.stream()
                .filter(h -> "Disponible".equalsIgnoreCase(h.getDisponibilite()))
                .count();
        lblTotalDisponibles.setText(String.valueOf(disponibles));

        double moyenneNote = list.stream()
                .mapToInt(Hebergement::getNoteMoyenne)
                .average()
                .orElse(0.0);
        lblNoteMoyenne.setText(String.format("%.1f", moyenneNote));

        double prixMoyen = list.stream()
                .mapToInt(Hebergement::getPrixParNuit)
                .average()
                .orElse(0.0);
        lblPrixMoyen.setText(String.format("%.0f €", prixMoyen));
    }

    private void chargerDonnees() {
        List<Hebergement> list = hebergementService.afficherHebergements();
        hebergementList.setAll(list);
        lblTotalHebergements.setText(String.valueOf(list.size()));
        long disponibles = list.stream().filter(h -> "Disponible".equalsIgnoreCase(h.getDisponibilite())).count();
        lblTotalDisponibles.setText(String.valueOf(disponibles));
    }

    private void rechercherHebergements() {
        String recherche = txtSearchAdmin.getText().toLowerCase().trim();
        List<Hebergement> tous = hebergementService.afficherHebergements();
        hebergementList.clear();

        if (recherche.isEmpty()) {
            hebergementList.setAll(tous);
            showStatus(tous.size() + " hébergement(s) trouvé(s)", "info");
        } else {
            int compteur = 0;
            for (Hebergement h : tous) {
                if (h.getNom().toLowerCase().contains(recherche) ||
                        h.getLocalisation().toLowerCase().contains(recherche) ||
                        h.getType().toLowerCase().contains(recherche)) {
                    hebergementList.add(h);
                    compteur++;
                }
            }
            if (compteur == 0) {
                showStatus("Aucun résultat pour \"" + recherche + "\"", "warning");
            } else {
                showStatus(compteur + " résultat(s) pour \"" + recherche + "\"", "success");
            }
        }
    }

    /* ================= RÉSERVATIONS METHODS ================= */

    private void setupReservationsListView() {
        listViewReservations.setItems(reservationList);
        listViewReservations.setPrefWidth(Double.MAX_VALUE);

        listViewReservations.setCellFactory(param -> new ListCell<ReservationY>() {
            @Override
            protected void updateItem(ReservationY r, boolean empty) {
                super.updateItem(r, empty);
                if (empty || r == null) {
                    setGraphic(null);
                    return;
                }

                VBox cardContainer = new VBox(15);
                cardContainer.setPadding(new Insets(20));
                cardContainer.setStyle("-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8); -fx-background-radius: 20; -fx-border-width: 0;");
                cardContainer.setMaxWidth(Double.MAX_VALUE);

                // ===== EN-TÊTE =====
                HBox headerBox = new HBox(15);
                headerBox.setAlignment(Pos.CENTER_LEFT);

                Label lblId = new Label("Réservation #" + r.getId());
                lblId.setStyle("-fx-font-size: 18px; -fx-font-weight: bold; -fx-text-fill: white;");

                Region spacer1 = new Region();
                HBox.setHgrow(spacer1, Priority.ALWAYS);

                Label lblStatut = new Label(r.getStatut());
                if (r.getStatut().equalsIgnoreCase("Confirmée")) {
                    lblStatut.setStyle("-fx-background-color: #28a745; -fx-text-fill: white; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                } else if (r.getStatut().equalsIgnoreCase("En attente")) {
                    lblStatut.setStyle("-fx-background-color: #ffc107; -fx-text-fill: black; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                } else {
                    lblStatut.setStyle("-fx-background-color: #dc3545; -fx-text-fill: white; -fx-padding: 5 20; -fx-background-radius: 20; -fx-font-size: 13px; -fx-font-weight: bold;");
                }

                headerBox.getChildren().addAll(lblId, spacer1, lblStatut);

                // ===== INFORMATIONS CLIENT =====
                HBox clientBox = new HBox(20);
                clientBox.setAlignment(Pos.CENTER_LEFT);
                clientBox.setPadding(new Insets(10, 0, 5, 0));

                Label iconClient = new Label("👤");
                iconClient.setStyle("-fx-font-size: 24px;");

                VBox clientInfo = new VBox(3);
                Label lblClientNom = new Label(r.getClientNom());
                lblClientNom.setStyle("-fx-font-size: 16px; -fx-font-weight: bold; -fx-text-fill: #FFD700;");

                Label lblClientEmail = new Label("📧 " + r.getClientEmail());
                lblClientEmail.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 13px;");

                Label lblClientTel = new Label("📞 " + r.getClientTel());
                lblClientTel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 13px;");

                clientInfo.getChildren().addAll(lblClientNom, lblClientEmail, lblClientTel);
                clientBox.getChildren().addAll(iconClient, clientInfo);

                // ===== INFORMATIONS HÉBERGEMENT =====
                HBox hebergementBox = new HBox(20);
                hebergementBox.setAlignment(Pos.CENTER_LEFT);
                hebergementBox.setPadding(new Insets(5, 0, 5, 0));

                Label iconHebergement = new Label("🏨");
                iconHebergement.setStyle("-fx-font-size: 24px;");

                VBox hebergementInfo = new VBox(3);
                Label lblHebergementNom = new Label(r.getHebergementNom());
                lblHebergementNom.setStyle("-fx-font-size: 16px; -fx-font-weight: bold; -fx-text-fill: #FF8F00;");

                Label lblHebergementId = new Label("ID: " + r.getHebergementId());
                lblHebergementId.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");

                hebergementInfo.getChildren().addAll(lblHebergementNom, lblHebergementId);
                hebergementBox.getChildren().addAll(iconHebergement, hebergementInfo);

                // ===== DATES =====
                HBox datesBox = new HBox(30);
                datesBox.setAlignment(Pos.CENTER_LEFT);
                datesBox.setPadding(new Insets(5, 0, 5, 0));

                VBox arriveeBox = new VBox(2);
                Label lblArriveeLabel = new Label("📅 Arrivée");
                lblArriveeLabel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");
                Label lblArrivee = new Label(r.getDateArrivee());
                lblArrivee.setStyle("-fx-text-fill: white; -fx-font-weight: bold; -fx-font-size: 14px;");
                arriveeBox.getChildren().addAll(lblArriveeLabel, lblArrivee);

                VBox departBox = new VBox(2);
                Label lblDepartLabel = new Label("📅 Départ");
                lblDepartLabel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");
                Label lblDepart = new Label(r.getDateDepart());
                lblDepart.setStyle("-fx-text-fill: white; -fx-font-weight: bold; -fx-font-size: 14px;");
                departBox.getChildren().addAll(lblDepartLabel, lblDepart);

                VBox reservationBox = new VBox(2);
                Label lblReservationLabel = new Label("📆 Réservé le");
                lblReservationLabel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");
                Label lblReservation = new Label(r.getDateReservation());
                lblReservation.setStyle("-fx-text-fill: white; -fx-font-weight: bold; -fx-font-size: 14px;");
                reservationBox.getChildren().addAll(lblReservationLabel, lblReservation);

                datesBox.getChildren().addAll(arriveeBox, departBox, reservationBox);

                // ===== PRIX ET PERSONNES =====
                HBox footerBox = new HBox(30);
                footerBox.setAlignment(Pos.CENTER_LEFT);
                footerBox.setPadding(new Insets(10, 0, 5, 0));
                footerBox.setStyle("-fx-border-color: rgba(255,255,255,0.2); -fx-border-width: 1 0 0 0; -fx-padding: 15 0 5 0;");

                VBox prixBox = new VBox(2);
                Label lblPrixLabel = new Label("💰 Prix total");
                lblPrixLabel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");
                Label lblPrix = new Label(r.getPrixTotal() + " €");
                lblPrix.setStyle("-fx-text-fill: #FF8F00; -fx-font-weight: bold; -fx-font-size: 20px;");
                prixBox.getChildren().addAll(lblPrixLabel, lblPrix);

                VBox personnesBox = new VBox(2);
                Label lblPersonnesLabel = new Label("👥 Personnes");
                lblPersonnesLabel.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");
                Label lblPersonnes = new Label(r.getNbPersonnes() + " personne(s)");
                lblPersonnes.setStyle("-fx-text-fill: white; -fx-font-weight: bold; -fx-font-size: 14px;");
                personnesBox.getChildren().addAll(lblPersonnesLabel, lblPersonnes);

                Region spacer2 = new Region();
                HBox.setHgrow(spacer2, Priority.ALWAYS);

                HBox actions = new HBox(10);
                actions.setAlignment(Pos.CENTER_RIGHT);

                Button btnVoirDetails = new Button("👁️");
                btnVoirDetails.setStyle("-fx-background-color: #2FA8FF; -fx-background-radius: 15; -fx-cursor: hand; -fx-padding: 8 12;");
                btnVoirDetails.setTooltip(new Tooltip("Voir détails"));
                btnVoirDetails.setOnAction(e -> showReservationDetailsPopup(r));

                Button btnAnnuler = new Button("✕");
                btnAnnuler.setStyle("-fx-background-color: #E74C3C; -fx-background-radius: 15; -fx-cursor: hand; -fx-padding: 8 12;");
                btnAnnuler.setTooltip(new Tooltip("Annuler la réservation"));
                btnAnnuler.setOnAction(e -> showAnnulerReservationPopup(r));

                actions.getChildren().addAll(btnVoirDetails, btnAnnuler);

                footerBox.getChildren().addAll(prixBox, personnesBox, spacer2, actions);

                cardContainer.getChildren().addAll(
                        headerBox,
                        new Separator(),
                        clientBox,
                        hebergementBox,
                        datesBox,
                        footerBox
                );

                setGraphic(cardContainer);
            }
        });
    }

    private void chargerReservations() {
        try {
            List<ReservationY> list = reservationService.getAllReservations(); // CORRIGÉ : utiliser getAllReservations() au lieu de getByUserId(0)
            reservationList.setAll(list);
            if (lblTotalReservations != null) {
                lblTotalReservations.setText(list.size() + " réservation(s)");
            }
            System.out.println("✅ " + list.size() + " réservation(s) chargée(s)");
        } catch (Exception e) {
            e.printStackTrace();
            showStatus("Erreur chargement réservations", "error");
        }
    }

    private void showReservationDetailsPopup(ReservationY r) {
        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Détails de la réservation");
        dialog.setHeaderText("Réservation #" + r.getId());

        DialogPane dialogPane = dialog.getDialogPane();
        dialogPane.setStyle("-fx-background-color: linear-gradient(to bottom, #1E3B5A, #0B2D4A); -fx-background-radius: 20;");
        dialogPane.setPrefWidth(350);

        ButtonType okButton = new ButtonType("OK", ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().add(okButton);

        VBox content = new VBox(10);
        content.setPadding(new Insets(15));
        content.setAlignment(Pos.TOP_CENTER);

        String sectionStyle = "-fx-text-fill: #FF8F00; -fx-font-size: 14px; -fx-font-weight: bold; -fx-padding: 5 0 2 0;";
        String labelStyle = "-fx-text-fill: #A7E3FF; -fx-font-size: 12px; -fx-font-weight: bold;";
        String valueStyle = "-fx-text-fill: white; -fx-font-size: 12px; -fx-padding: 0 0 2 10;";

        // SECTION CLIENT
        Label lblClientSection = new Label("👤 CLIENT:");
        lblClientSection.setStyle(sectionStyle);

        GridPane clientGrid = new GridPane();
        clientGrid.setHgap(5);
        clientGrid.setVgap(3);
        clientGrid.setPadding(new Insets(0, 0, 5, 10));

        Label lblClientNom = new Label("Nom:");
        lblClientNom.setStyle(labelStyle);
        Label lblClientNomVal = new Label(r.getClientNom() != null ? r.getClientNom() : "");
        lblClientNomVal.setStyle(valueStyle);

        Label lblClientEmail = new Label("Email:");
        lblClientEmail.setStyle(labelStyle);
        Label lblClientEmailVal = new Label(r.getClientEmail() != null ? r.getClientEmail() : "");
        lblClientEmailVal.setStyle(valueStyle);

        Label lblClientTel = new Label("Tél:");
        lblClientTel.setStyle(labelStyle);
        Label lblClientTelVal = new Label(r.getClientTel() != null ? r.getClientTel() : "");
        lblClientTelVal.setStyle(valueStyle);

        clientGrid.add(lblClientNom, 0, 0);
        clientGrid.add(lblClientNomVal, 1, 0);
        clientGrid.add(lblClientEmail, 0, 1);
        clientGrid.add(lblClientEmailVal, 1, 1);
        clientGrid.add(lblClientTel, 0, 2);
        clientGrid.add(lblClientTelVal, 1, 2);

        // SECTION HÉBERGEMENT
        Label lblHebergementSection = new Label("🏨 HÉBERGEMENT:");
        lblHebergementSection.setStyle(sectionStyle);

        GridPane hebergementGrid = new GridPane();
        hebergementGrid.setHgap(5);
        hebergementGrid.setVgap(3);
        hebergementGrid.setPadding(new Insets(0, 0, 5, 10));

        Label lblHebergementNom = new Label("Nom:");
        lblHebergementNom.setStyle(labelStyle);
        Label lblHebergementNomVal = new Label(r.getHebergementNom() != null ? r.getHebergementNom() : "");
        lblHebergementNomVal.setStyle(valueStyle);

        Label lblHebergementId = new Label("ID:");
        lblHebergementId.setStyle(labelStyle);
        Label lblHebergementIdVal = new Label(String.valueOf(r.getHebergementId()));
        lblHebergementIdVal.setStyle(valueStyle);

        hebergementGrid.add(lblHebergementNom, 0, 0);
        hebergementGrid.add(lblHebergementNomVal, 1, 0);
        hebergementGrid.add(lblHebergementId, 0, 1);
        hebergementGrid.add(lblHebergementIdVal, 1, 1);

        // SECTION DATES
        Label lblDatesSection = new Label("📅 DATES:");
        lblDatesSection.setStyle(sectionStyle);

        GridPane datesGrid = new GridPane();
        datesGrid.setHgap(5);
        datesGrid.setVgap(3);
        datesGrid.setPadding(new Insets(0, 0, 5, 10));

        Label lblReservation = new Label("Réservation:");
        lblReservation.setStyle(labelStyle);
        Label lblReservationVal = new Label(r.getDateReservation() != null ? r.getDateReservation() : "");
        lblReservationVal.setStyle(valueStyle);

        Label lblArrivee = new Label("Arrivée:");
        lblArrivee.setStyle(labelStyle);
        Label lblArriveeVal = new Label(r.getDateArrivee() != null ? r.getDateArrivee() : "");
        lblArriveeVal.setStyle(valueStyle);

        Label lblDepart = new Label("Départ:");
        lblDepart.setStyle(labelStyle);
        Label lblDepartVal = new Label(r.getDateDepart() != null ? r.getDateDepart() : "");
        lblDepartVal.setStyle(valueStyle);

        datesGrid.add(lblReservation, 0, 0);
        datesGrid.add(lblReservationVal, 1, 0);
        datesGrid.add(lblArrivee, 0, 1);
        datesGrid.add(lblArriveeVal, 1, 1);
        datesGrid.add(lblDepart, 0, 2);
        datesGrid.add(lblDepartVal, 1, 2);

        // SECTION PERSONNES
        Label lblPersonnesSection = new Label("👥 PERSONNES:");
        lblPersonnesSection.setStyle(sectionStyle);

        Label lblPersonnesVal = new Label(r.getNbPersonnes() + " personne(s)");
        lblPersonnesVal.setStyle("-fx-text-fill: white; -fx-font-size: 12px; -fx-padding: 0 0 5 10;");

        // SECTION PRIX
        Label lblPrixSection = new Label("💰 PRIX TOTAL:");
        lblPrixSection.setStyle(sectionStyle);

        Label lblPrixVal = new Label(r.getPrixTotal() + " €");
        lblPrixVal.setStyle("-fx-text-fill: #FF8F00; -fx-font-size: 18px; -fx-font-weight: bold; -fx-padding: 0 0 5 10;");

        // SECTION STATUT
        Label lblStatutSection = new Label("📊 STATUT:");
        lblStatutSection.setStyle(sectionStyle);

        Label lblStatutVal = new Label(r.getStatut() != null ? r.getStatut() : "");

        String statutColor;
        if (r.getStatut() != null && r.getStatut().equalsIgnoreCase("Confirmée")) {
            statutColor = "#28a745";
        } else if (r.getStatut() != null && r.getStatut().equalsIgnoreCase("En attente")) {
            statutColor = "#ffc107";
        } else {
            statutColor = "#dc3545";
        }
        lblStatutVal.setStyle("-fx-background-color: " + statutColor + "; -fx-text-fill: white; -fx-padding: 4 15; -fx-background-radius: 20; -fx-font-weight: bold; -fx-font-size: 12px;");

        HBox statutBox = new HBox(lblStatutVal);
        statutBox.setPadding(new Insets(0, 0, 0, 10));

        Separator sep1 = new Separator();
        Separator sep2 = new Separator();
        Separator sep3 = new Separator();
        Separator sep4 = new Separator();
        Separator sep5 = new Separator();

        sep1.setPadding(new Insets(3, 0, 3, 0));
        sep2.setPadding(new Insets(3, 0, 3, 0));
        sep3.setPadding(new Insets(3, 0, 3, 0));
        sep4.setPadding(new Insets(3, 0, 3, 0));
        sep5.setPadding(new Insets(3, 0, 3, 0));

        content.getChildren().addAll(
                lblClientSection, clientGrid, sep1,
                lblHebergementSection, hebergementGrid, sep2,
                lblDatesSection, datesGrid, sep3,
                lblPersonnesSection, lblPersonnesVal, sep4,
                lblPrixSection, lblPrixVal, sep5,
                lblStatutSection, statutBox
        );

        dialogPane.setContent(content);

        Button okBtn = (Button) dialog.getDialogPane().lookupButton(okButton);
        okBtn.setStyle(
                "-fx-background-color: #FF8F00;" +
                        "-fx-text-fill: white;" +
                        "-fx-font-weight: bold;" +
                        "-fx-background-radius: 25;" +
                        "-fx-padding: 6 25;" +
                        "-fx-font-size: 12px;" +
                        "-fx-cursor: hand;"
        );

        dialog.showAndWait();
    }

    private void showAnnulerReservationPopup(ReservationY r) {
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Confirmation d'annulation");
        alert.setHeaderText("Annuler la réservation #" + r.getId());
        alert.setContentText("Êtes-vous sûr de vouloir annuler cette réservation ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            try {
                reservationService.supprimer(r.getId());
                chargerReservations();
                showStatus("✅ Réservation annulée avec succès", "success");
            } catch (Exception e) {
                e.printStackTrace();
                showAlert("Erreur", "Impossible d'annuler la réservation", AlertType.ERROR);
            }
        }
    }

    /* ================= POPUPS HÉBERGEMENTS ================= */

    private void showAjouterPopup() {
        Dialog<Hebergement> dialog = new Dialog<>();
        dialog.setTitle("Ajouter un hébergement");
        dialog.setHeaderText("Nouvel hébergement");

        DialogPane dialogPane = dialog.getDialogPane();
        dialogPane.setStyle("-fx-background-color: linear-gradient(to bottom, #1E3B5A, #2A4F6E); -fx-background-radius: 15;");
        dialogPane.setPrefWidth(520);
        dialogPane.setPrefHeight(500);

        ButtonType ajouterButton = new ButtonType("AJOUTER", ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(ajouterButton, ButtonType.CANCEL);

        String labelStyle = "-fx-text-fill: #E0F2FE; -fx-font-weight: bold; -fx-font-size: 13px;";
        String fieldStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #64B5F6; -fx-border-radius: 10;";
        String fieldErrorStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #FF6B6B; -fx-border-radius: 10; -fx-border-width: 2;";
        String errorStyle = "-fx-text-fill: #FF6B6B; -fx-font-size: 11px; -fx-padding: 2 0 5 5; -fx-font-weight: bold;";

        GridPane grid = new GridPane();
        grid.setHgap(12);
        grid.setVgap(2);
        grid.setPadding(new Insets(15));

        ColumnConstraints col1 = new ColumnConstraints(90);
        ColumnConstraints col2 = new ColumnConstraints(350);
        grid.getColumnConstraints().addAll(col1, col2);

        // ===== CHAMPS AVEC VALIDATION =====

        // NOM
        Label lblNom = new Label("🏨 Nom :");
        lblNom.setStyle(labelStyle);
        TextField txtNom = new TextField();
        txtNom.setPromptText("Nom de l'hébergement");
        txtNom.setStyle(fieldStyle);

        Label lblNomError = new Label();
        lblNomError.setStyle(errorStyle);
        lblNomError.setWrapText(true);

        // TYPE
        Label lblType = new Label("🏷️ Type :");
        lblType.setStyle(labelStyle);
        ComboBox<String> comboType = new ComboBox<>();
        comboType.getItems().addAll("Hôtel", "Villa", "Appartement", "Chalet", "Maison d'hôtes", "Auberge");
        comboType.setPromptText("Sélectionner un type");
        comboType.setStyle(fieldStyle);
        comboType.setEditable(false);
        comboType.setPrefWidth(350);
        Label lblTypeError = new Label();
        lblTypeError.setStyle(errorStyle);
        lblTypeError.setWrapText(true);

        // VILLE
        Label lblVille = new Label("📍 Ville :");
        lblVille.setStyle(labelStyle);
        TextField txtVille = new TextField();
        txtVille.setPromptText("Ville");
        txtVille.setStyle(fieldStyle);

        Label lblVilleError = new Label();
        lblVilleError.setStyle(errorStyle);
        lblVilleError.setWrapText(true);

        // PRIX
        Label lblPrix = new Label("💰 Prix :");
        lblPrix.setStyle(labelStyle);
        TextField txtPrix = new TextField();
        txtPrix.setPromptText("Prix par nuit");
        txtPrix.setStyle(fieldStyle);

        Label lblPrixError = new Label();
        lblPrixError.setStyle(errorStyle);
        lblPrixError.setWrapText(true);

        // DISPONIBILITÉ
        Label lblDispo = new Label("📊 Disponibilité :");
        lblDispo.setStyle(labelStyle);
        ComboBox<String> comboDispo = new ComboBox<>();
        comboDispo.getItems().addAll("✅ Disponible", "⏳ Occupé", "🔧 Maintenance");
        comboDispo.setValue("✅ Disponible");
        comboDispo.setStyle(fieldStyle);
        comboDispo.setPrefWidth(350);

        // NOTE
        Label lblNote = new Label("⭐ Note :");
        lblNote.setStyle(labelStyle);

        HBox noteBox = new HBox(8);
        noteBox.setAlignment(Pos.CENTER_LEFT);

        Slider sliderNote = new Slider(0, 5, 3);
        sliderNote.setShowTickLabels(true);
        sliderNote.setMajorTickUnit(1);
        sliderNote.setPrefWidth(220);
        sliderNote.setStyle("-fx-accent: #90CAF9;");

        Label lblNoteValue = new Label("3.0");
        lblNoteValue.setStyle("-fx-text-fill: #FFD700; -fx-font-weight: bold; -fx-font-size: 14px;");

        sliderNote.valueProperty().addListener((obs, old, newVal) ->
                lblNoteValue.setText(String.format("%.1f", newVal))
        );

        noteBox.getChildren().addAll(sliderNote, lblNoteValue);

        // DESCRIPTION
        Label lblDesc = new Label("📝 Description :");
        lblDesc.setStyle(labelStyle);

        TextArea txtDescription = new TextArea();
        txtDescription.setPromptText("Description détaillée...");
        txtDescription.setPrefRowCount(2);
        txtDescription.setWrapText(true);
        txtDescription.setStyle(fieldStyle + "-fx-background-color: white; -fx-text-fill: black;");
        Label lblDescError = new Label();
        lblDescError.setStyle(errorStyle);
        lblDescError.setWrapText(true);

        // ===== IMAGE =====
        Label lblImage = new Label("🖼️ Image :");
        lblImage.setStyle(labelStyle);

        ImageView imagePreview = new ImageView();
        imagePreview.setFitWidth(70);
        imagePreview.setFitHeight(70);
        imagePreview.setStyle("-fx-background-color: rgba(255,255,255,0.1); -fx-background-radius: 8; -fx-border-color: #64B5F6; -fx-border-radius: 8;");

        Label lblNoImage = new Label("Aucune image");
        lblNoImage.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px; -fx-font-weight: bold;");
        lblNoImage.setAlignment(Pos.CENTER);

        StackPane imageContainer = new StackPane(imagePreview, lblNoImage);
        imageContainer.setPrefSize(70, 70);

        Button btnUploadImage = new Button("📤 Choisir");
        btnUploadImage.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 15; -fx-cursor: hand; -fx-font-size: 11px; -fx-padding: 5 10;");

        Button btnDeleteImage = new Button("🗑️ Supprimer");
        btnDeleteImage.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 15; -fx-cursor: hand; -fx-font-size: 11px; -fx-padding: 5 10;");
        btnDeleteImage.setDisable(true);

        final String[] uploadedImagePath = {null};

        btnUploadImage.setOnAction(e -> {
            String path = handleUploadImage(imagePreview);
            if (path != null) {
                uploadedImagePath[0] = path;
                lblNoImage.setVisible(false);
                btnDeleteImage.setDisable(false);
            }
        });

        btnDeleteImage.setOnAction(e -> {
            if (uploadedImagePath[0] != null) {
                deleteImage(uploadedImagePath[0]);
                uploadedImagePath[0] = null;
                imagePreview.setImage(null);
                lblNoImage.setVisible(true);
                btnDeleteImage.setDisable(true);
            }
        });

        HBox imageControls = new HBox(5, btnUploadImage, btnDeleteImage);
        imageControls.setAlignment(Pos.CENTER);

        VBox imageBox = new VBox(5, imageContainer, imageControls);
        imageBox.setAlignment(Pos.CENTER);

        // ===== VALIDATION EN TEMPS RÉEL AVEC MESSAGES SOUS LES CHAMPS =====

        // Validation Nom
        txtNom.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblNomError.setText("❌ Le nom est requis");
                txtNom.setStyle(fieldErrorStyle);
            } else if (text.length() < 3) {
                lblNomError.setText("❌ Le nom doit contenir au moins 3 caractères");
                txtNom.setStyle(fieldErrorStyle);
            } else if (text.matches(".*\\d.*")) {
                lblNomError.setText("❌ Le nom ne doit pas contenir de chiffres");
                txtNom.setStyle(fieldErrorStyle);
            } else {
                lblNomError.setText("");
                txtNom.setStyle(fieldStyle);
            }
        });

        // Validation Type
        comboType.valueProperty().addListener((obs, old, newVal) -> {
            if (newVal == null || newVal.isEmpty()) {
                lblTypeError.setText("❌ Veuillez sélectionner un type d'hébergement");
                comboType.setStyle(fieldErrorStyle);
            } else {
                lblTypeError.setText("");
                comboType.setStyle(fieldStyle);
            }
        });

        // Validation Ville
        txtVille.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblVilleError.setText("❌ La ville est requise");
                txtVille.setStyle(fieldErrorStyle);
            } else if (text.length() < 2) {
                lblVilleError.setText("❌ La ville doit contenir au moins 2 caractères");
                txtVille.setStyle(fieldErrorStyle);
            } else if (text.matches(".*\\d.*")) {
                lblVilleError.setText("❌ La ville ne doit pas contenir de chiffres");
                txtVille.setStyle(fieldErrorStyle);
            } else {
                lblVilleError.setText("");
                txtVille.setStyle(fieldStyle);
            }
        });

        // Validation Prix
        txtPrix.textProperty().addListener((obs, old, newVal) -> {
            if (newVal.isEmpty()) {
                lblPrixError.setText("❌ Le prix est requis");
                txtPrix.setStyle(fieldErrorStyle);
            } else {
                try {
                    int prix = Integer.parseInt(newVal);
                    if (prix <= 0) {
                        lblPrixError.setText("❌ Le prix doit être supérieur à 0");
                        txtPrix.setStyle(fieldErrorStyle);
                    } else if (prix > 10000) {
                        lblPrixError.setText("❌ Le prix ne peut pas dépasser 10000 DT");
                        txtPrix.setStyle(fieldErrorStyle);
                    } else {
                        lblPrixError.setText("");
                        txtPrix.setStyle(fieldStyle);
                    }
                } catch (NumberFormatException e) {
                    lblPrixError.setText("❌ Veuillez entrer un nombre valide");
                    txtPrix.setStyle(fieldErrorStyle);
                }
            }
        });

        // Validation Description
        txtDescription.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblDescError.setText("❌ La description est requise");
                txtDescription.setStyle(fieldErrorStyle + "-fx-background-color: white; -fx-text-fill: black;");
            } else if (text.length() < 10) {
                lblDescError.setText("❌ La description doit contenir au moins 10 caractères");
                txtDescription.setStyle(fieldErrorStyle + "-fx-background-color: white; -fx-text-fill: black;");
            } else {
                lblDescError.setText("");
                txtDescription.setStyle(fieldStyle + "-fx-background-color: white; -fx-text-fill: black;");
            }
        });

        // ===== AJOUT À LA GRILLE AVEC MESSAGES D'ERREUR SOUS CHAQUE CHAMP =====
        int row = 0;

        // Ligne Nom
        grid.add(lblNom, 0, row);
        grid.add(txtNom, 1, row++);
        grid.add(lblNomError, 1, row++);

        // Ligne Type
        grid.add(lblType, 0, row);
        grid.add(comboType, 1, row++);
        grid.add(lblTypeError, 1, row++);

        // Ligne Ville
        grid.add(lblVille, 0, row);
        grid.add(txtVille, 1, row++);
        grid.add(lblVilleError, 1, row++);

        // Ligne Prix
        grid.add(lblPrix, 0, row);
        grid.add(txtPrix, 1, row++);
        grid.add(lblPrixError, 1, row++);

        // Ligne Disponibilité (pas de message d'erreur)
        grid.add(lblDispo, 0, row);
        grid.add(comboDispo, 1, row++);
        grid.add(new Label(""), 1, row++);

        // Ligne Note (pas de message d'erreur)
        grid.add(lblNote, 0, row);
        grid.add(noteBox, 1, row++);
        grid.add(new Label(""), 1, row++);

        // Ligne Description
        grid.add(lblDesc, 0, row);
        grid.add(txtDescription, 1, row++);
        grid.add(lblDescError, 1, row++);

        // Ligne Image (pas de message d'erreur)
        grid.add(lblImage, 0, row);
        grid.add(imageBox, 1, row++);

        // ===== SCROLLPANE =====
        ScrollPane scrollPane = new ScrollPane();
        scrollPane.setContent(grid);
        scrollPane.setFitToWidth(true);
        scrollPane.setHbarPolicy(ScrollPane.ScrollBarPolicy.NEVER);
        scrollPane.setVbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        scrollPane.setStyle("-fx-background: transparent; -fx-background-color: transparent; -fx-border-color: transparent;");

        VBox mainContainer = new VBox(scrollPane);
        mainContainer.setStyle("-fx-background-color: transparent;");

        dialog.getDialogPane().setContent(mainContainer);

        // ===== STYLE BOUTONS =====
        Button ajouterBtn = (Button) dialog.getDialogPane().lookupButton(ajouterButton);
        ajouterBtn.setStyle("-fx-background-color: #4CAF50; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        Button cancelBtn = (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);
        cancelBtn.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        // ===== VALIDATION AVANT SOUMISSION =====
        ajouterBtn.addEventFilter(ActionEvent.ACTION, event -> {
            if (!lblNomError.getText().isEmpty() ||
                    !lblTypeError.getText().isEmpty() ||
                    !lblVilleError.getText().isEmpty() ||
                    !lblPrixError.getText().isEmpty() ||
                    !lblDescError.getText().isEmpty()) {

                event.consume();
                showAlert("Erreur de validation",
                        "Veuillez corriger les erreurs signalées en rouge",
                        AlertType.ERROR);
            }
        });

        // ===== RÉSULTAT =====
        dialog.setResultConverter(dialogButton -> {
            if (dialogButton == ajouterButton) {
                try {
                    if (!lblNomError.getText().isEmpty() ||
                            !lblTypeError.getText().isEmpty() ||
                            !lblVilleError.getText().isEmpty() ||
                            !lblPrixError.getText().isEmpty() ||
                            !lblDescError.getText().isEmpty()) {
                        return null;
                    }

                    int noteValue = (int) Math.round(sliderNote.getValue());

                    Hebergement h = new Hebergement(
                            txtNom.getText().trim(),
                            comboType.getValue(),
                            txtVille.getText().trim(),
                            txtDescription.getText().trim(),
                            Integer.parseInt(txtPrix.getText().trim()),
                            comboDispo.getValue().replace("✅ ", "").replace("⏳ ", "").replace("🔧 ", ""),
                            noteValue
                    );

                    h.setImagePath(uploadedImagePath[0]);
                    return h;
                } catch (NumberFormatException e) {
                    showAlert("Erreur", "Le prix doit être un nombre valide", AlertType.ERROR);
                    return null;
                } catch (Exception e) {
                    showAlert("Erreur", "Veuillez remplir tous les champs correctement", AlertType.ERROR);
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(h -> {
            hebergementService.ajouterHebergement(h);
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Hébergement ajouté avec succès", "success");
        });
    }

    private void showModifierPopup(Hebergement selected) {
        if (selected == null) return;

        Dialog<Hebergement> dialog = new Dialog<>();
        dialog.setTitle("Modifier un hébergement");
        dialog.setHeaderText("Modification - " + selected.getNom());

        DialogPane dialogPane = dialog.getDialogPane();
        dialogPane.setStyle("-fx-background-color: linear-gradient(to bottom, #1E3B5A, #2A4F6E); -fx-background-radius: 15;");
        dialogPane.setPrefWidth(520);
        dialogPane.setPrefHeight(500);

        ButtonType modifierButton = new ButtonType("MODIFIER", ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(modifierButton, ButtonType.CANCEL);

        String labelStyle = "-fx-text-fill: #E0F2FE; -fx-font-weight: bold; -fx-font-size: 13px;";
        String fieldStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #64B5F6; -fx-border-radius: 10;";
        String fieldErrorStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #FF6B6B; -fx-border-radius: 10; -fx-border-width: 2;";
        String errorStyle = "-fx-text-fill: #FF6B6B; -fx-font-size: 11px; -fx-padding: 2 0 5 5; -fx-font-weight: bold;";

        GridPane grid = new GridPane();
        grid.setHgap(12);
        grid.setVgap(2);
        grid.setPadding(new Insets(15));

        ColumnConstraints col1 = new ColumnConstraints(90);
        ColumnConstraints col2 = new ColumnConstraints(350);
        grid.getColumnConstraints().addAll(col1, col2);

        // ===== CHAMPS AVEC VALIDATION =====

        // NOM
        Label lblNom = new Label("🏨 Nom :");
        lblNom.setStyle(labelStyle);
        TextField txtNom = new TextField(selected.getNom());
        txtNom.setPromptText("Nom de l'hébergement");
        txtNom.setStyle(fieldStyle);

        Label lblNomError = new Label();
        lblNomError.setStyle(errorStyle);
        lblNomError.setWrapText(true);

        // TYPE
        Label lblType = new Label("🏷️ Type :");
        lblType.setStyle(labelStyle);
        ComboBox<String> comboType = new ComboBox<>();
        comboType.getItems().addAll("Hôtel", "Villa", "Appartement", "Chalet", "Maison d'hôtes", "Auberge");
        comboType.setPromptText("Sélectionner un type");
        comboType.setStyle(fieldStyle);
        comboType.setValue(selected.getType());
        comboType.setPrefWidth(350);
        Label lblTypeError = new Label();
        lblTypeError.setStyle(errorStyle);
        lblTypeError.setWrapText(true);

        // VILLE
        Label lblVille = new Label("📍 Ville :");
        lblVille.setStyle(labelStyle);
        TextField txtVille = new TextField(selected.getLocalisation());
        txtVille.setPromptText("Ville");
        txtVille.setStyle(fieldStyle);

        Label lblVilleError = new Label();
        lblVilleError.setStyle(errorStyle);
        lblVilleError.setWrapText(true);

        // PRIX
        Label lblPrix = new Label("💰 Prix :");
        lblPrix.setStyle(labelStyle);
        TextField txtPrix = new TextField(String.valueOf(selected.getPrixParNuit()));
        txtPrix.setPromptText("Prix par nuit");
        txtPrix.setStyle(fieldStyle);

        Label lblPrixError = new Label();
        lblPrixError.setStyle(errorStyle);
        lblPrixError.setWrapText(true);

        // DISPONIBILITÉ
        Label lblDispo = new Label("📊 Disponibilité :");
        lblDispo.setStyle(labelStyle);
        ComboBox<String> comboDispo = new ComboBox<>();
        comboDispo.getItems().addAll("✅ Disponible", "⏳ Occupé", "🔧 Maintenance");
        comboDispo.setValue(selected.getDisponibilite());
        comboDispo.setStyle(fieldStyle);
        comboDispo.setPrefWidth(350);

        // NOTE
        Label lblNote = new Label("⭐ Note :");
        lblNote.setStyle(labelStyle);

        HBox noteBox = new HBox(8);
        noteBox.setAlignment(Pos.CENTER_LEFT);

        Slider sliderNote = new Slider(0, 5, selected.getNoteMoyenne());
        sliderNote.setShowTickLabels(true);
        sliderNote.setMajorTickUnit(1);
        sliderNote.setPrefWidth(220);
        sliderNote.setStyle("-fx-accent: #90CAF9;");

        Label lblNoteValue = new Label(String.format("%.1f", (double) selected.getNoteMoyenne()));
        lblNoteValue.setStyle("-fx-text-fill: #FFD700; -fx-font-weight: bold; -fx-font-size: 14px;");

        sliderNote.valueProperty().addListener((obs, old, newVal) ->
                lblNoteValue.setText(String.format("%.1f", newVal.doubleValue()))
        );

        noteBox.getChildren().addAll(sliderNote, lblNoteValue);

        // DESCRIPTION
        Label lblDesc = new Label("📝 Description :");
        lblDesc.setStyle(labelStyle);

        TextArea txtDescription = new TextArea(selected.getDescription());
        txtDescription.setPromptText("Description détaillée...");
        txtDescription.setPrefRowCount(2);
        txtDescription.setWrapText(true);
        txtDescription.setStyle(fieldStyle + "-fx-background-color: white; -fx-text-fill: black;");
        Label lblDescError = new Label();
        lblDescError.setStyle(errorStyle);
        lblDescError.setWrapText(true);

        // ===== IMAGE =====
        Label lblImage = new Label("🖼️ Image :");
        lblImage.setStyle(labelStyle);

        ImageView imagePreview = new ImageView();
        imagePreview.setFitWidth(70);
        imagePreview.setFitHeight(70);
        imagePreview.setStyle("-fx-background-color: rgba(255,255,255,0.1); -fx-background-radius: 8; -fx-border-color: #64B5F6; -fx-border-radius: 8;");

        if (selected.getImagePath() != null && !selected.getImagePath().isEmpty()) {
            try {
                File imageFile = new File(selected.getImagePath());
                if (imageFile.exists()) {
                    imagePreview.setImage(new Image(imageFile.toURI().toString()));
                }
            } catch (Exception e) {}
        }

        Label lblImageStatus = new Label(selected.getImagePath() != null ? "✓" : "✗");
        lblImageStatus.setStyle(selected.getImagePath() != null ?
                "-fx-text-fill: #4CAF50; -fx-font-size: 16px; -fx-font-weight: bold;" :
                "-fx-text-fill: #A7E3FF; -fx-font-size: 16px; -fx-font-weight: bold;");

        StackPane imageContainer = new StackPane(imagePreview, lblImageStatus);
        imageContainer.setPrefSize(70, 70);

        Button btnUploadImage = new Button("📤 Changer");
        btnUploadImage.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 15; -fx-cursor: hand; -fx-font-size: 11px; -fx-padding: 5 10;");

        Button btnDeleteImage = new Button("🗑️ Supprimer");
        btnDeleteImage.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 15; -fx-cursor: hand; -fx-font-size: 11px; -fx-padding: 5 10;");

        final String[] uploadedImagePath = {selected.getImagePath()};

        btnUploadImage.setOnAction(e -> {
            String path = handleUploadImage(imagePreview);
            if (path != null) {
                uploadedImagePath[0] = path;
                lblImageStatus.setText("✓");
                lblImageStatus.setStyle("-fx-text-fill: #4CAF50; -fx-font-size: 16px; -fx-font-weight: bold;");
            }
        });

        btnDeleteImage.setOnAction(e -> {
            if (uploadedImagePath[0] != null) {
                deleteImage(uploadedImagePath[0]);
                uploadedImagePath[0] = null;
                imagePreview.setImage(null);
                lblImageStatus.setText("✗");
                lblImageStatus.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 16px; -fx-font-weight: bold;");
            }
        });

        HBox imageControls = new HBox(5, btnUploadImage, btnDeleteImage);
        imageControls.setAlignment(Pos.CENTER);

        VBox imageBox = new VBox(5, imageContainer, imageControls);
        imageBox.setAlignment(Pos.CENTER);

        // ===== VALIDATION EN TEMPS RÉEL AVEC MESSAGES SOUS LES CHAMPS =====

        // Validation Nom
        txtNom.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblNomError.setText("❌ Le nom est requis");
                txtNom.setStyle(fieldErrorStyle);
            } else if (text.length() < 3) {
                lblNomError.setText("❌ Le nom doit contenir au moins 3 caractères");
                txtNom.setStyle(fieldErrorStyle);
            } else if (text.matches(".*\\d.*")) {
                lblNomError.setText("❌ Le nom ne doit pas contenir de chiffres (tu as écrit: " + text + ")");
                txtNom.setStyle(fieldErrorStyle);
            } else {
                lblNomError.setText("");
                txtNom.setStyle(fieldStyle);
            }
        });

        // Validation Type
        comboType.valueProperty().addListener((obs, old, newVal) -> {
            if (newVal == null || newVal.isEmpty()) {
                lblTypeError.setText("❌ Veuillez sélectionner un type d'hébergement");
                comboType.setStyle(fieldErrorStyle);
            } else {
                lblTypeError.setText("");
                comboType.setStyle(fieldStyle);
            }
        });

        // Validation Ville
        txtVille.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblVilleError.setText("❌ La ville est requise");
                txtVille.setStyle(fieldErrorStyle);
            } else if (text.length() < 2) {
                lblVilleError.setText("❌ La ville doit contenir au moins 2 caractères");
                txtVille.setStyle(fieldErrorStyle);
            } else if (text.matches(".*\\d.*")) {
                lblVilleError.setText("❌ La ville ne doit pas contenir de chiffres (tu as écrit: " + text + ")");
                txtVille.setStyle(fieldErrorStyle);
            } else {
                lblVilleError.setText("");
                txtVille.setStyle(fieldStyle);
            }
        });

        // Validation Prix
        txtPrix.textProperty().addListener((obs, old, newVal) -> {
            if (newVal.isEmpty()) {
                lblPrixError.setText("❌ Le prix est requis");
                txtPrix.setStyle(fieldErrorStyle);
            } else {
                try {
                    int prix = Integer.parseInt(newVal);
                    if (prix <= 0) {
                        lblPrixError.setText("❌ Le prix doit être supérieur à 0");
                        txtPrix.setStyle(fieldErrorStyle);
                    } else if (prix > 10000) {
                        lblPrixError.setText("❌ Le prix ne peut pas dépasser 10000 DT");
                        txtPrix.setStyle(fieldErrorStyle);
                    } else {
                        lblPrixError.setText("");
                        txtPrix.setStyle(fieldStyle);
                    }
                } catch (NumberFormatException e) {
                    lblPrixError.setText("❌ Veuillez entrer un nombre valide (pas de lettres)");
                    txtPrix.setStyle(fieldErrorStyle);
                }
            }
        });

        // Validation Description
        txtDescription.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblDescError.setText("❌ La description est requise");
                txtDescription.setStyle(fieldErrorStyle + "-fx-background-color: white; -fx-text-fill: black;");
            } else if (text.length() < 10) {
                lblDescError.setText("❌ La description doit contenir au moins 10 caractères");
                txtDescription.setStyle(fieldErrorStyle + "-fx-background-color: white; -fx-text-fill: black;");
            } else {
                lblDescError.setText("");
                txtDescription.setStyle(fieldStyle + "-fx-background-color: white; -fx-text-fill: black;");
            }
        });

        // ===== AJOUT À LA GRILLE AVEC MESSAGES D'ERREUR SOUS CHAQUE CHAMP =====
        int row = 0;

        // Ligne Nom
        grid.add(lblNom, 0, row);
        grid.add(txtNom, 1, row++);
        grid.add(lblNomError, 1, row++);

        // Ligne Type
        grid.add(lblType, 0, row);
        grid.add(comboType, 1, row++);
        grid.add(lblTypeError, 1, row++);

        // Ligne Ville
        grid.add(lblVille, 0, row);
        grid.add(txtVille, 1, row++);
        grid.add(lblVilleError, 1, row++);

        // Ligne Prix
        grid.add(lblPrix, 0, row);
        grid.add(txtPrix, 1, row++);
        grid.add(lblPrixError, 1, row++);

        // Ligne Disponibilité (pas de message d'erreur)
        grid.add(lblDispo, 0, row);
        grid.add(comboDispo, 1, row++);
        grid.add(new Label(""), 1, row++);

        // Ligne Note (pas de message d'erreur)
        grid.add(lblNote, 0, row);
        grid.add(noteBox, 1, row++);
        grid.add(new Label(""), 1, row++);

        // Ligne Description
        grid.add(lblDesc, 0, row);
        grid.add(txtDescription, 1, row++);
        grid.add(lblDescError, 1, row++);

        // Ligne Image (pas de message d'erreur)
        grid.add(lblImage, 0, row);
        grid.add(imageBox, 1, row++);

        // ===== SCROLLPANE =====
        ScrollPane scrollPane = new ScrollPane();
        scrollPane.setContent(grid);
        scrollPane.setFitToWidth(true);
        scrollPane.setHbarPolicy(ScrollPane.ScrollBarPolicy.NEVER);
        scrollPane.setVbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        scrollPane.setStyle("-fx-background: transparent; -fx-background-color: transparent; -fx-border-color: transparent;");

        VBox mainContainer = new VBox(scrollPane);
        mainContainer.setStyle("-fx-background-color: transparent;");

        dialog.getDialogPane().setContent(mainContainer);

        // ===== STYLE BOUTONS =====
        Button modifierBtn = (Button) dialog.getDialogPane().lookupButton(modifierButton);
        modifierBtn.setStyle("-fx-background-color: #4CAF50; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        Button cancelBtn = (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);
        cancelBtn.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        // ===== VALIDATION AVANT SOUMISSION =====
        modifierBtn.addEventFilter(ActionEvent.ACTION, event -> {
            if (!lblNomError.getText().isEmpty() ||
                    !lblTypeError.getText().isEmpty() ||
                    !lblVilleError.getText().isEmpty() ||
                    !lblPrixError.getText().isEmpty() ||
                    !lblDescError.getText().isEmpty()) {

                event.consume();
                showAlert("Erreur de validation",
                        "Veuillez corriger les erreurs signalées en rouge",
                        AlertType.ERROR);
            }
        });

        // ===== RÉSULTAT =====
        dialog.setResultConverter(dialogButton -> {
            if (dialogButton == modifierButton) {
                try {
                    if (!lblNomError.getText().isEmpty() ||
                            !lblTypeError.getText().isEmpty() ||
                            !lblVilleError.getText().isEmpty() ||
                            !lblPrixError.getText().isEmpty() ||
                            !lblDescError.getText().isEmpty()) {
                        return null;
                    }

                    Hebergement h = new Hebergement(
                            txtNom.getText().trim(),
                            comboType.getValue(),
                            txtVille.getText().trim(),
                            txtDescription.getText().trim(),
                            Integer.parseInt(txtPrix.getText().trim()),
                            comboDispo.getValue().replace("✅ ", "").replace("⏳ ", "").replace("🔧 ", ""),
                            (int) Math.round(sliderNote.getValue())
                    );
                    h.setIdHebergement(selected.getIdHebergement());
                    h.setImagePath(uploadedImagePath[0]);
                    return h;
                } catch (Exception e) {
                    showAlert("Erreur", "Erreur lors de la création: " + e.getMessage(), AlertType.ERROR);
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(h -> {
            hebergementService.modifierHebergement(h);
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Hébergement modifié avec succès", "success");
        });
    }

    private void showSupprimerPopup(Hebergement selected) {
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Confirmation");
        alert.setHeaderText("Supprimer " + selected.getNom());
        alert.setContentText("Voulez-vous vraiment supprimer cet hébergement ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            if (selected.getImagePath() != null) {
                deleteImage(selected.getImagePath());
            }

            hebergementService.supprimerHebergement(selected.getIdHebergement());
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Hébergement supprimé", "success");
        }
    }

    private boolean validateFields(TextField nom, ComboBox<String> type, TextField ville,
                                   TextField prix, TextArea desc, Label nomError,
                                   Label typeError, Label villeError, Label prixError,
                                   Label descError) {
        boolean isValid = true;

        if (nom.getText().trim().isEmpty()) {
            nomError.setText("❌ Nom requis");
            isValid = false;
        } else if (nom.getText().matches(".*\\d.*")) {
            nomError.setText("❌ Pas de chiffres");
            isValid = false;
        } else if (nom.getText().length() < 3) {
            nomError.setText("❌ Minimum 3 caractères");
            isValid = false;
        }

        if (type.getValue() == null || type.getValue().trim().isEmpty()) {
            typeError.setText("❌ Type requis");
            isValid = false;
        }

        if (ville.getText().trim().isEmpty()) {
            villeError.setText("❌ Ville requise");
            isValid = false;
        } else if (ville.getText().matches(".*\\d.*")) {
            villeError.setText("❌ Pas de chiffres");
            isValid = false;
        } else if (ville.getText().length() < 2) {
            villeError.setText("❌ Minimum 2 caractères");
            isValid = false;
        }

        if (prix.getText().trim().isEmpty()) {
            prixError.setText("❌ Prix requis");
            isValid = false;
        } else {
            try {
                int p = Integer.parseInt(prix.getText());
                if (p <= 0) {
                    prixError.setText("❌ Prix doit être > 0");
                    isValid = false;
                }
            } catch (NumberFormatException e) {
                prixError.setText("❌ Format invalide");
                isValid = false;
            }
        }

        if (desc.getText().trim().isEmpty()) {
            descError.setText("❌ Description requise");
            isValid = false;
        } else if (desc.getText().length() < 10) {
            descError.setText("❌ Minimum 10 caractères");
            isValid = false;
        }

        return isValid;
    }

    /* ================= STATUS ================= */

    private void showStatus(String message, String type) {
        if (lblStatusMessage != null && statusBar != null) {
            lblStatusMessage.setText(message);
            statusBar.setVisible(true);
            statusBar.setManaged(true);

            new Thread(() -> {
                try {
                    Thread.sleep(3000);
                    Platform.runLater(() -> {
                        statusBar.setVisible(false);
                        statusBar.setManaged(false);
                    });
                } catch (InterruptedException e) {
                    // Ignorer
                }
            }).start();
        }
    }

    private void showAlert(String title, String content, AlertType type) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }
}