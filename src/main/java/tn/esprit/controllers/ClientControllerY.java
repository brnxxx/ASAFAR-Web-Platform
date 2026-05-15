package tn.esprit.controllers;

import tn.esprit.entities.Hebergement;
import tn.esprit.entities.ReservationY;
import tn.esprit.entities.Utilisateur;
import javafx.event.ActionEvent;
import tn.esprit.services.HebergementService;
import tn.esprit.services.ReservationHebergementService;
import tn.esprit.utils.MyDatabase;
import tn.esprit.utils.CurrencyConverter;
import javafx.animation.*;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonBar.ButtonData;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.*;
import javafx.scene.shape.Circle;
import javafx.stage.Stage;
import javafx.util.Duration;

import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.time.temporal.ChronoUnit;
import java.util.List;
import java.util.ResourceBundle;
import java.util.stream.Collectors;

public class ClientControllerY implements Initializable {

    // ================= COMPOSANTS UI =================
    @FXML private HBox topBar;
    @FXML private Label lblPageTitle;
    @FXML private Label lblUserQuickName;
    @FXML private Circle profileCircle;

    // ================= MENU BUTTONS =================
    @FXML private Button btnNotifications;
    @FXML private Button btnAdmin;

    // ================= COMPOSANTS DE RECHERCHE =================
    @FXML private TextField txtRecherche;
    @FXML private TextField txtDestination;
    @FXML private Button btnRechercher;
    @FXML private Label lblNbResultats;
    @FXML private GridPane gridHebergements;
    @FXML private Button btnRetourAdmin;

    // ===== COMPOSANTS DE FILTRAGE =====
    @FXML private ComboBox<String> comboPays;
    @FXML private Slider sliderPrixMin;
    @FXML private Slider sliderPrixMax;
    @FXML private Label lblPrixMin;
    @FXML private Label lblPrixMax;
    @FXML private Button btnAppliquerFiltres;
    @FXML private Button btnReinitialiserFiltres;
    @FXML private ToggleGroup triGroup;
    @FXML private RadioButton triPrixCroissant;
    @FXML private RadioButton triPrixDecroissant;
    @FXML private RadioButton triNoteCroissant;
    @FXML private RadioButton triNoteDecroissant;

    // ===== STATUS BAR =====
    @FXML private HBox statusBar;
    @FXML private Label lblStatusMessage;
    @FXML private Button btnCloseStatus;

    // ===== SÉLECTEUR DE DEVISE =====
    @FXML private ComboBox<String> comboDevise;
    private String deviseActuelle = "TND";

    // ================= SERVICES & DATA =================
    private HebergementService hebergementService = new HebergementService();
    private ReservationHebergementService reservationService = new ReservationHebergementService();
    private List<Hebergement> tousLesHebergements;
    private List<Hebergement> hebergementsFiltres;

    private int idUserConnecte;
    private Utilisateur utilisateurConnecte;

    // ===== COMPOSANTS DE RECHERCHE =====
    @FXML private DatePicker dateArrivee;
    @FXML private DatePicker dateDepart;
    @FXML private HBox mainContent;
    @FXML private Label lblDestinationChoisie;
    @FXML private Label lblDatesChoisies;

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        System.out.println("🔍 ClientControllerY.initialize() - Début");

        // ---------- CHARGEMENT DES DONNÉES ----------
        chargerHebergements();

        // ---------- INITIALISATION DES FILTRES ----------
        initialiserFiltres();

        // ---------- CONFIGURATION DU SÉLECTEUR DE DEVISE ----------
        if (comboDevise != null) {
            comboDevise.getItems().addAll(
                    "TND", "EUR", "USD", "GBP", "JPY", "CAD", "CHF", "CNY", "AUD"
            );
            comboDevise.setValue("TND");

            comboDevise.valueProperty().addListener((obs, oldVal, newVal) -> {
                deviseActuelle = newVal;
                afficherHebergements(hebergementsFiltres);
            });
        }

        // ---------- CONFIGURATION DES BOUTONS ----------
        setupButtons();

        // ---------- ACTIONS DES FILTRES ----------
        btnRechercher.setOnAction(e -> rechercher());
        btnAppliquerFiltres.setOnAction(e -> appliquerFiltres());
        btnReinitialiserFiltres.setOnAction(e -> reinitialiserFiltres());

        // ---------- RECHERCHE DYNAMIQUE ----------
        if (txtRecherche != null) {
            txtRecherche.textProperty().addListener((observable, oldValue, newValue) -> {
                PauseTransition pause = new PauseTransition(Duration.millis(300));
                pause.setOnFinished(e -> rechercherDynamique(newValue));
                pause.play();
            });
        }

        // ---------- RETOUR ADMIN ----------
        if (btnRetourAdmin != null) {
            btnRetourAdmin.setOnAction(e -> retournerVersAdmin());
        }

        // ---------- LIAISON DES LABELS AVEC LES SLIDERS ----------
        sliderPrixMin.valueProperty().addListener((obs, old, newVal) ->
                lblPrixMin.setText(String.valueOf(newVal.intValue()) + " €"));
        sliderPrixMax.valueProperty().addListener((obs, old, newVal) ->
                lblPrixMax.setText(String.valueOf(newVal.intValue()) + " €"));

        // ---------- TITRE PAR DÉFAUT ----------
        lblPageTitle.setText("Hébergements");

        // ---------- ANIMATION TOP BAR ----------
        Platform.runLater(this::animateTopBar);

        // Initialiser les dates par défaut
        dateArrivee.setValue(LocalDate.now());
        dateDepart.setValue(LocalDate.now().plusDays(2));

        // Cacher le contenu principal au démarrage
        mainContent.setVisible(false);
        mainContent.setManaged(false);

        System.out.println("🔍 ClientControllerY.initialize() - Fin, idUserConnecte = " + idUserConnecte);

        // Test de l'API au démarrage
        Platform.runLater(() -> {
            try {
                double test = CurrencyConverter.convert(100, "TND", "EUR");
                System.out.println("✅ API de conversion fonctionnelle: 100 TND = " + test + " EUR");
            } catch (Exception e) {
                System.out.println("⚠️ API de conversion non disponible: " + e.getMessage());
            }
        });
    }

    /**
     * Configure les boutons
     */
    private void setupButtons() {
        if (btnNotifications != null) {
            btnNotifications.setOnAction(e -> showNotifications());
        }
        if (btnAdmin != null) {
            btnAdmin.setOnAction(e -> ouvrirAdminInterface());
        }
    }

    /**
     * Ouvre la page de profil
     */
    @FXML
    private void openProfile() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Profil.fxml"));
            Parent root = loader.load();

            ProfileController profileController = loader.getController();
            profileController.setIdUser(idUserConnecte);

            Stage stage = (Stage) profileCircle.getScene().getWindow();
            stage.getScene().setRoot(root);

            System.out.println("✅ Navigation vers profil");

        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Erreur", "Impossible d'ouvrir le profil", AlertType.ERROR);
        }
    }

    /**
     * Ouvre l'interface admin
     */
    @FXML
    private void ouvrirAdminInterface() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AdminInterfaceY.fxml"));
            Parent root = loader.load();

            AdminControllerY adminController = loader.getController();
            adminController.setIdUserConnecte(idUserConnecte);

            Stage stage = (Stage) btnAdmin.getScene().getWindow();
            stage.getScene().setRoot(root);

            System.out.println("✅ Navigation vers interface admin");

        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Erreur", "Impossible d'ouvrir l'interface admin", AlertType.ERROR);
        }
    }

    /**
     * Récupère les informations d'un utilisateur depuis la base de données
     */
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
            System.out.println("❌ Erreur lors de la récupération de l'utilisateur: " + e.getMessage());
            e.printStackTrace();
        }
        return null;
    }

    /**
     * Définit l'ID de l'utilisateur connecté - Appelée APRÈS initialize()
     */
    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
        System.out.println("🔑 ClientControllerY.setIdUserConnecte() reçoit ID: " + idUser);

        // Charger les informations de l'utilisateur
        utilisateurConnecte = getUtilisateurById(idUser);

        if (utilisateurConnecte != null) {
            System.out.println("✅ Utilisateur chargé: " + utilisateurConnecte.getPrenom() + " " + utilisateurConnecte.getNom());
            if (lblUserQuickName != null) {
                lblUserQuickName.setText(utilisateurConnecte.getPrenom() + " " + utilisateurConnecte.getNom());
            }

            // Vérifier si l'utilisateur est admin pour afficher/cacher le bouton
            if (btnAdmin != null) {
                if ("admin".equalsIgnoreCase(utilisateurConnecte.getRole())) {
                    btnAdmin.setVisible(true);
                    btnAdmin.setManaged(true);
                } else {
                    btnAdmin.setVisible(false);
                    btnAdmin.setManaged(false);
                }
            }
        } else {
            System.out.println("❌ Utilisateur avec ID " + idUser + " non trouvé!");
            if (btnAdmin != null) {
                btnAdmin.setVisible(false);
                btnAdmin.setManaged(false);
            }
        }
    }

    /**
     * Anime la top bar
     */
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

    /**
     * Affiche les notifications
     */
    private void showNotifications() {
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Notifications");
        alert.setHeaderText("Centre de notifications");

        String content = """
            📬 Vos notifications:
            
            ✅ Bienvenue sur ASAFAR!
            🔔 3 nouveaux hébergements disponibles
            💬 Votre réservation a été confirmée
            """;

        alert.setContentText(content);
        alert.showAndWait();
    }

    /**
     * Retourne à l'interface admin
     */
    private void retournerVersAdmin() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AdminInterfaceY.fxml"));
            Parent root = loader.load();
            btnRetourAdmin.getScene().setRoot(root);
        } catch (Exception e) {
            showAlert("Erreur", "Impossible de retourner à l'interface admin: " + e.getMessage(), AlertType.ERROR);
        }
    }

    /**
     * Charge tous les hébergements depuis la base de données
     */
    private void chargerHebergements() {
        tousLesHebergements = hebergementService.afficherHebergements();
        hebergementsFiltres = new java.util.ArrayList<>(tousLesHebergements);
        afficherHebergements(hebergementsFiltres);
    }

    /**
     * Initialise les composants de filtrage
     */
    private void initialiserFiltres() {
        List<String> pays = tousLesHebergements.stream()
                .map(Hebergement::getLocalisation)
                .distinct()
                .sorted()
                .collect(Collectors.toList());

        comboPays.getItems().clear();
        comboPays.getItems().add("Tous les pays");
        comboPays.getItems().addAll(pays);
        comboPays.setValue("Tous les pays");

        int prixMax = tousLesHebergements.stream()
                .mapToInt(Hebergement::getPrixParNuit)
                .max()
                .orElse(1000);

        sliderPrixMin.setMin(0);
        sliderPrixMin.setMax(prixMax);
        sliderPrixMin.setValue(0);

        sliderPrixMax.setMin(0);
        sliderPrixMax.setMax(prixMax);
        sliderPrixMax.setValue(prixMax);

        lblPrixMin.setText("0 €");
        lblPrixMax.setText(prixMax + " €");

        triGroup = new ToggleGroup();
        triPrixCroissant.setToggleGroup(triGroup);
        triPrixDecroissant.setToggleGroup(triGroup);
        triNoteCroissant.setToggleGroup(triGroup);
        triNoteDecroissant.setToggleGroup(triGroup);
        triPrixCroissant.setSelected(true);
    }

    /**
     * Applique tous les filtres sélectionnés
     */
    private void appliquerFiltres() {
        hebergementsFiltres = new java.util.ArrayList<>(tousLesHebergements);

        String paysSelectionne = comboPays.getValue();
        if (paysSelectionne != null && !"Tous les pays".equals(paysSelectionne)) {
            hebergementsFiltres = hebergementsFiltres.stream()
                    .filter(h -> h.getLocalisation().equals(paysSelectionne))
                    .collect(Collectors.toList());
        }

        int prixMin = (int) sliderPrixMin.getValue();
        int prixMax = (int) sliderPrixMax.getValue();

        hebergementsFiltres = hebergementsFiltres.stream()
                .filter(h -> h.getPrixParNuit() >= prixMin && h.getPrixParNuit() <= prixMax)
                .collect(Collectors.toList());

        appliquerTri();
        afficherHebergements(hebergementsFiltres);

        if (hebergementsFiltres.isEmpty()) {
            showStatus("Aucun hébergement ne correspond à vos critères", "warning");
        } else {
            showStatus(hebergementsFiltres.size() + " hébergement(s) trouvé(s)", "success");
        }
    }

    /**
     * Réinitialise tous les filtres
     */
    private void reinitialiserFiltres() {
        comboPays.setValue("Tous les pays");
        sliderPrixMin.setValue(0);
        sliderPrixMax.setValue(sliderPrixMax.getMax());
        triPrixCroissant.setSelected(true);

        hebergementsFiltres = new java.util.ArrayList<>(tousLesHebergements);
        appliquerTri();
        afficherHebergements(hebergementsFiltres);
        showStatus("Filtres réinitialisés", "success");
    }

    /**
     * Applique le tri sélectionné
     */
    private void appliquerTri() {
        if (triPrixCroissant.isSelected()) {
            hebergementsFiltres.sort((h1, h2) -> Integer.compare(h1.getPrixParNuit(), h2.getPrixParNuit()));
        } else if (triPrixDecroissant.isSelected()) {
            hebergementsFiltres.sort((h1, h2) -> Integer.compare(h2.getPrixParNuit(), h1.getPrixParNuit()));
        } else if (triNoteCroissant.isSelected()) {
            hebergementsFiltres.sort((h1, h2) -> Integer.compare(h1.getNoteMoyenne(), h2.getNoteMoyenne()));
        } else if (triNoteDecroissant.isSelected()) {
            hebergementsFiltres.sort((h1, h2) -> Integer.compare(h2.getNoteMoyenne(), h1.getNoteMoyenne()));
        }
    }

    /**
     * Affiche la liste des hébergements dans la grille
     */
    private void afficherHebergements(List<Hebergement> liste) {
        gridHebergements.getChildren().clear();
        if (lblNbResultats != null) {
            lblNbResultats.setText("(" + liste.size() + " résultat" + (liste.size() > 1 ? "s" : "") + ")");
        }

        for (int i = 0; i < liste.size(); i++) {
            Hebergement h = liste.get(i);
            HBox card = creerLigneHebergement(h);
            gridHebergements.add(card, 0, i);
        }
    }

    /**
     * Crée une carte d'hébergement avec conversion de devises
     */
    private HBox creerLigneHebergement(Hebergement h) {
        HBox card = new HBox(20);
        card.setAlignment(Pos.CENTER_LEFT);
        card.setPadding(new Insets(15));
        card.getStyleClass().add("result-item");
        card.setMaxWidth(Double.MAX_VALUE);

        // ===== IMAGE =====
        ImageView imageView = new ImageView();
        imageView.setFitWidth(180);
        imageView.setFitHeight(130);
        imageView.setPreserveRatio(false);
        imageView.setStyle("-fx-background-color: #2A4F6E; -fx-background-radius: 10;");

        if (h.getImagePath() != null && !h.getImagePath().isEmpty()) {
            try {
                File imageFile = new File(h.getImagePath());
                if (imageFile.exists()) {
                    imageView.setImage(new Image(imageFile.toURI().toString()));
                } else {
                    setDefaultImage(imageView);
                }
            } catch (Exception e) {
                setDefaultImage(imageView);
            }
        } else {
            setDefaultImage(imageView);
        }

        // ===== CONTENU TEXTE =====
        VBox content = new VBox(8);
        content.setAlignment(Pos.TOP_LEFT);
        HBox.setHgrow(content, Priority.ALWAYS);

        // Titre avec icône
        HBox titleBox = new HBox(10);
        titleBox.setAlignment(Pos.CENTER_LEFT);

        Label iconType = new Label(getTypeIcon(h.getType()));
        iconType.setStyle("-fx-font-size: 20px;");

        Label titre = new Label(h.getNom());
        titre.setStyle("-fx-font-size: 20px; -fx-font-weight: bold; -fx-text-fill: #0B2D4A;");
        titre.getStyleClass().add("hebergement-nom");

        titleBox.getChildren().addAll(iconType, titre);

        // Type et ville
        Label info = new Label(h.getType() + " · " + h.getLocalisation());
        info.setStyle("-fx-text-fill: #0B2D4A; -fx-font-size: 16px;");
        info.getStyleClass().add("hebergement-type-ville");

        // ===== PRIX AVEC CONVERSION =====
        VBox priceBox = new VBox(5);
        priceBox.setAlignment(Pos.CENTER_LEFT);

        double prixOriginal = h.getPrixParNuit();
        double prixConverti = prixOriginal;
        String symbole = getDeviseSymbole(deviseActuelle);

        // Conversion selon la devise choisie
        if (!"TND".equals(deviseActuelle)) {
            try {
                prixConverti = CurrencyConverter.convert(prixOriginal, "TND", deviseActuelle);
            } catch (Exception e) {
                System.out.println("⚠️ Erreur conversion: " + e.getMessage());
            }
        }

        // ✅ UN SEUL PRIX (pas de répétition)
        Label prixLabel = new Label(String.format("%.2f %s", prixConverti, symbole));
        prixLabel.setStyle("-fx-font-size: 28px; -fx-font-weight: bold; -fx-text-fill: #FF8F00;");
        prixLabel.getStyleClass().add("hebergement-prix");

        priceBox.getChildren().addAll(prixLabel);

        // ===== NOTE ET ÉTOILES =====
        HBox noteBox = new HBox(10);
        noteBox.setAlignment(Pos.CENTER_RIGHT);

        HBox etoiles = new HBox(3);
        int note = h.getNoteMoyenne();
        for (int i = 1; i <= 5; i++) {
            Label etoile = new Label(i <= note ? "★" : "☆");
            etoile.setStyle(i <= note ?
                    "-fx-text-fill: #FFD700; -fx-font-size: 18px;" :
                    "-fx-text-fill: #CCCCCC; -fx-font-size: 18px;");
            etoiles.getChildren().add(etoile);
        }

        Label lblNote = new Label("(" + note + "/5)");
        lblNote.setStyle("-fx-text-fill: #0B2D4A; -fx-font-size: 16px; -fx-font-weight: bold;");
        lblNote.getStyleClass().add("hebergement-note");

        noteBox.getChildren().addAll(etoiles, lblNote);

        // ===== LIGNE DU PRIX ET NOTE =====
        HBox priceRow = new HBox(20);
        priceRow.setAlignment(Pos.CENTER_LEFT);
        priceRow.getChildren().addAll(priceBox, noteBox);
        HBox.setHgrow(priceBox, Priority.ALWAYS);

        // ===== BOUTONS =====
        HBox actionRow = new HBox(15);
        actionRow.setAlignment(Pos.CENTER_RIGHT);
        actionRow.setPadding(new Insets(10, 0, 0, 0));

        // Badge disponibilité
        Label lblDispo = new Label(h.getDisponibilite());
        if (h.getDisponibilite().equalsIgnoreCase("Disponible")) {
            lblDispo.setStyle("-fx-background-color: #28a745; -fx-text-fill: white; -fx-padding: 8 25; -fx-background-radius: 25; -fx-font-size: 14px; -fx-font-weight: bold;");
            lblDispo.getStyleClass().add("hebergement-dispo");
        } else {
            lblDispo.setStyle("-fx-background-color: #dc3545; -fx-text-fill: white; -fx-padding: 8 25; -fx-background-radius: 25; -fx-font-size: 14px; -fx-font-weight: bold;");
            lblDispo.getStyleClass().add("hebergement-indispo");
        }

        // Bouton réserver
        Button btnReserver = new Button("Réserver");
        btnReserver.setPrefWidth(120);
        btnReserver.setPrefHeight(35);
        btnReserver.setStyle(
                "-fx-background-color: #FF8F00;" +
                        "-fx-text-fill: white;" +
                        "-fx-font-weight: bold;" +
                        "-fx-background-radius: 25;" +
                        "-fx-padding: 12 35;" +
                        "-fx-cursor: hand;"
        );
        btnReserver.getStyleClass().add("btn-reserver");

        if (!h.getDisponibilite().equalsIgnoreCase("Disponible")) {
            btnReserver.setDisable(true);
            btnReserver.setStyle("-fx-background-color: #6c757d; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 25; -fx-padding: 12 35;");
        } else {
            btnReserver.setOnAction(e -> showReserverPopup(h));
        }

        Region spacer = new Region();
        HBox.setHgrow(spacer, Priority.ALWAYS);

        actionRow.getChildren().addAll(lblDispo, spacer, btnReserver);

        // ===== ASSEMBLAGE =====
        content.getChildren().addAll(titleBox, info, priceRow, actionRow);
        card.getChildren().addAll(imageView, content);

        return card;
    }

    /**
     * Retourne le symbole de la devise
     */
    private String getDeviseSymbole(String devise) {
        switch (devise) {
            case "TND": return "TND";
            case "EUR": return "€";
            case "USD": return "$";
            case "GBP": return "£";
            case "JPY": return "¥";
            case "CAD": return "C$";
            case "CHF": return "CHF";
            case "CNY": return "¥";
            case "AUD": return "A$";
            default: return devise;
        }
    }

    /**
     * Retourne l'icône emoji selon le type d'hébergement
     */
    private String getTypeIcon(String type) {
        String typeLower = type.toLowerCase();
        if (typeLower.contains("hotel") || typeLower.contains("hôtel")) return "🏨";
        if (typeLower.contains("villa")) return "🏡";
        if (typeLower.contains("appartement")) return "🏢";
        if (typeLower.contains("chalet")) return "🏠";
        if (typeLower.contains("maison")) return "🏠";
        return "🏨";
    }

    /**
     * Définit l'image par défaut
     */
    private void setDefaultImage(ImageView imageView) {
        try {
            Image defaultImg = new Image(getClass().getResourceAsStream("/images/default-hotel.png"));
            if (defaultImg != null && !defaultImg.isError()) {
                imageView.setImage(defaultImg);
            } else {
                imageView.setImage(null);
                imageView.setStyle("-fx-background-color: #2A4F6E; -fx-background-radius: 10;");
            }
        } catch (Exception e) {
            imageView.setImage(null);
            imageView.setStyle("-fx-background-color: #2A4F6E; -fx-background-radius: 10;");
        }
    }

    /**
     * Recherche dynamique en temps réel
     */
    private void rechercherDynamique(String recherche) {
        String searchText = recherche.toLowerCase().trim();

        if (searchText.isEmpty()) {
            hebergementsFiltres = new java.util.ArrayList<>(tousLesHebergements);
        } else {
            hebergementsFiltres = tousLesHebergements.stream()
                    .filter(h -> h.getNom().toLowerCase().contains(searchText) ||
                            h.getLocalisation().toLowerCase().contains(searchText) ||
                            h.getType().toLowerCase().contains(searchText))
                    .collect(Collectors.toList());
        }

        appliquerTri();
        afficherHebergements(hebergementsFiltres);

        if (hebergementsFiltres.isEmpty()) {
            showStatus("Aucun résultat pour \"" + recherche + "\"", "warning");
        }
    }

    /**
     * Affiche la popup de réservation avec conversion de devises
     */
    private void showReserverPopup(Hebergement h) {
        if (h == null) return;

        System.out.println("🔍 showReserverPopup - idUserConnecte = " + idUserConnecte);
        System.out.println("🔍 showReserverPopup - utilisateurConnecte = " + (utilisateurConnecte != null ? utilisateurConnecte.getEmail() : "null"));

        // Vérification
        if (idUserConnecte <= 0) {
            showAlert("Erreur", "Utilisateur non connecté (ID = " + idUserConnecte + ")", AlertType.ERROR);
            return;
        }

        Dialog<ReservationY> dialog = new Dialog<>();
        dialog.setTitle("Réserver un hébergement");
        dialog.setHeaderText("Réservation - " + h.getNom());

        DialogPane dialogPane = dialog.getDialogPane();
        dialogPane.setStyle("-fx-background-color: linear-gradient(to bottom, #1E3B5A, #2A4F6E); -fx-background-radius: 15;");
        dialogPane.setPrefWidth(520);
        dialogPane.setPrefHeight(650);

        ButtonType reserverButton = new ButtonType("CONFIRMER", ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(reserverButton, ButtonType.CANCEL);

        String labelStyle = "-fx-text-fill: #E0F2FE; -fx-font-weight: bold; -fx-font-size: 13px;";
        String fieldStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #64B5F6; -fx-border-radius: 10;";
        String fieldErrorStyle = "-fx-background-color: rgba(255,255,255,0.15); -fx-text-fill: white; -fx-background-radius: 10; -fx-padding: 8 10; -fx-border-color: #FF6B6B; -fx-border-radius: 10; -fx-border-width: 2;";
        String errorStyle = "-fx-text-fill: #FF6B6B; -fx-font-size: 11px; -fx-padding: 2 0 5 5; -fx-font-weight: bold;";

        GridPane grid = new GridPane();
        grid.setHgap(12);
        grid.setVgap(2);
        grid.setPadding(new Insets(15));

        ColumnConstraints col1 = new ColumnConstraints(120);
        ColumnConstraints col2 = new ColumnConstraints(250);
        ColumnConstraints col3 = new ColumnConstraints(80);
        grid.getColumnConstraints().addAll(col1, col2, col3);

        int row = 0;

        // ===== CHAMPS AVEC PRÉ-REMPLISSAGE =====

        // Nom client
        Label lblClient = new Label("👤 Nom complet :");
        lblClient.setStyle(labelStyle);
        TextField txtClient = new TextField();
        txtClient.setPromptText("Votre nom");
        txtClient.setStyle(fieldStyle);
        txtClient.setPrefWidth(250);
        if (utilisateurConnecte != null) {
            txtClient.setText(utilisateurConnecte.getPrenom() + " " + utilisateurConnecte.getNom());
        }

        Label lblClientError = new Label();
        lblClientError.setStyle(errorStyle);
        lblClientError.setPrefWidth(80);

        grid.add(lblClient, 0, row);
        grid.add(txtClient, 1, row);
        grid.add(lblClientError, 2, row++);

        // Email
        Label lblEmail = new Label("📧 Email :");
        lblEmail.setStyle(labelStyle);
        TextField txtEmail = new TextField();
        txtEmail.setPromptText("votre@email.com");
        txtEmail.setStyle(fieldStyle);
        txtEmail.setPrefWidth(250);
        if (utilisateurConnecte != null) {
            txtEmail.setText(utilisateurConnecte.getEmail());
        }

        Label lblEmailError = new Label();
        lblEmailError.setStyle(errorStyle);
        lblEmailError.setPrefWidth(80);

        grid.add(lblEmail, 0, row);
        grid.add(txtEmail, 1, row);
        grid.add(lblEmailError, 2, row++);

        // Téléphone
        Label lblTel = new Label("📞 Téléphone :");
        lblTel.setStyle(labelStyle);
        TextField txtTel = new TextField();
        txtTel.setPromptText("Votre numéro");
        txtTel.setStyle(fieldStyle);
        txtTel.setPrefWidth(250);
        if (utilisateurConnecte != null && utilisateurConnecte.getTelephone() != null) {
            txtTel.setText(utilisateurConnecte.getTelephone());
        }

        Label lblTelError = new Label();
        lblTelError.setStyle(errorStyle);
        lblTelError.setPrefWidth(80);

        grid.add(lblTel, 0, row);
        grid.add(txtTel, 1, row);
        grid.add(lblTelError, 2, row++);

        // Personnes
        Label lblPersonnes = new Label("👥 Personnes :");
        lblPersonnes.setStyle(labelStyle);
        Spinner<Integer> spinnerPersonnes = new Spinner<>(1, 10, 2);
        spinnerPersonnes.setStyle(fieldStyle);
        spinnerPersonnes.setPrefWidth(100);
        spinnerPersonnes.setEditable(true);

        grid.add(lblPersonnes, 0, row);
        grid.add(spinnerPersonnes, 1, row++);

        // Date arrivée
        Label lblArrivee = new Label("📅 Arrivée :");
        lblArrivee.setStyle(labelStyle);
        DatePicker dateArriveePicker = new DatePicker();
        dateArriveePicker.setStyle(fieldStyle);
        dateArriveePicker.setPromptText("JJ/MM/AAAA");
        dateArriveePicker.setValue(this.dateArrivee.getValue() != null ? this.dateArrivee.getValue() : LocalDate.now());
        dateArriveePicker.setPrefWidth(250);

        Label lblArriveeError = new Label();
        lblArriveeError.setStyle(errorStyle);
        lblArriveeError.setPrefWidth(80);

        grid.add(lblArrivee, 0, row);
        grid.add(dateArriveePicker, 1, row);
        grid.add(lblArriveeError, 2, row++);

        // Date départ
        Label lblDepart = new Label("📅 Départ :");
        lblDepart.setStyle(labelStyle);
        DatePicker dateDepartPicker = new DatePicker();
        dateDepartPicker.setStyle(fieldStyle);
        dateDepartPicker.setPromptText("JJ/MM/AAAA");
        dateDepartPicker.setValue(this.dateDepart.getValue() != null ? this.dateDepart.getValue() : LocalDate.now().plusDays(2));
        dateDepartPicker.setPrefWidth(250);

        Label lblDepartError = new Label();
        lblDepartError.setStyle(errorStyle);
        lblDepartError.setPrefWidth(80);

        grid.add(lblDepart, 0, row);
        grid.add(dateDepartPicker, 1, row);
        grid.add(lblDepartError, 2, row++);

        // ===== PRIX TOTAL AVEC CONVERSIONS =====
        Label lblPrix = new Label("💰 Prix total :");
        lblPrix.setStyle(labelStyle);

        VBox prixBox = new VBox(5);
        prixBox.setAlignment(Pos.CENTER_LEFT);

        Label lblPrixValue = new Label(h.getPrixParNuit() + " TND");
        lblPrixValue.setStyle("-fx-text-fill: #FF8F00; -fx-font-weight: bold; -fx-font-size: 24px;");

        Label lblConversion = new Label();
        lblConversion.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");

        prixBox.getChildren().addAll(lblPrixValue, lblConversion);

        grid.add(lblPrix, 0, row);
        grid.add(prixBox, 1, row++);

        dialog.getDialogPane().setContent(grid);

        // ===== MISE À JOUR DU PRIX =====
        Runnable updatePrix = () -> {
            LocalDate arrivee = dateArriveePicker.getValue();
            LocalDate depart = dateDepartPicker.getValue();

            if (arrivee != null && depart != null && depart.isAfter(arrivee)) {
                long nbNuits = ChronoUnit.DAYS.between(arrivee, depart);
                if (nbNuits > 0) {
                    int prixTotalTND = h.getPrixParNuit() * (int) nbNuits;
                    lblPrixValue.setText(prixTotalTND + " TND");

                    // Conversions multiples
                    try {
                        double prixEUR = CurrencyConverter.convert(prixTotalTND, "TND", "EUR");
                        double prixUSD = CurrencyConverter.convert(prixTotalTND, "TND", "USD");
                        double prixGBP = CurrencyConverter.convert(prixTotalTND, "TND", "GBP");

                        lblConversion.setText(
                                String.format("≈ %.2f € | %.2f $ | %.2f £", prixEUR, prixUSD, prixGBP)
                        );
                    } catch (Exception e) {
                        lblConversion.setText("Conversion temporairement indisponible");
                    }
                }
            } else {
                lblPrixValue.setText(h.getPrixParNuit() + " TND");
                lblConversion.setText("");
            }
        };

        dateArriveePicker.valueProperty().addListener((obs, old, newVal) -> updatePrix.run());
        dateDepartPicker.valueProperty().addListener((obs, old, newVal) -> updatePrix.run());

        // ===== VALIDATION =====
        txtClient.textProperty().addListener((obs, old, newVal) -> {
            String text = newVal.trim();
            if (text.isEmpty()) {
                lblClientError.setText("❌ requis");
                txtClient.setStyle(fieldErrorStyle);
            } else if (text.length() < 3) {
                lblClientError.setText("❌ 3+ car.");
                txtClient.setStyle(fieldErrorStyle);
            } else if (text.matches(".*\\d.*")) {
                lblClientError.setText("❌ pas chiffres");
                txtClient.setStyle(fieldErrorStyle);
            } else {
                lblClientError.setText("");
                txtClient.setStyle(fieldStyle);
            }
        });

        txtEmail.textProperty().addListener((obs, old, newVal) -> {
            String email = newVal.trim();
            if (email.isEmpty()) {
                lblEmailError.setText("❌ requis");
                txtEmail.setStyle(fieldErrorStyle);
            } else if (!email.matches("^[A-Za-z0-9+_.-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,}$")) {
                lblEmailError.setText("❌ invalide");
                txtEmail.setStyle(fieldErrorStyle);
            } else {
                lblEmailError.setText("");
                txtEmail.setStyle(fieldStyle);
            }
        });

        txtTel.textProperty().addListener((obs, old, newVal) -> {
            if (!newVal.matches("\\d*")) {
                txtTel.setText(newVal.replaceAll("[^\\d]", ""));
            }

            String tel = txtTel.getText().trim();
            if (tel.isEmpty()) {
                lblTelError.setText("❌ requis");
                txtTel.setStyle(fieldErrorStyle);
            } else if (!tel.matches("\\d{8}")) {
                lblTelError.setText("❌ 8 chiffres");
                txtTel.setStyle(fieldErrorStyle);
            } else {
                lblTelError.setText("");
                txtTel.setStyle(fieldStyle);
            }
        });

        dateArriveePicker.valueProperty().addListener((obs, old, newVal) -> {
            if (newVal == null) {
                lblArriveeError.setText("❌ requis");
                dateArriveePicker.setStyle(fieldErrorStyle);
            } else if (newVal.isBefore(LocalDate.now())) {
                lblArriveeError.setText("❌ passé");
                dateArriveePicker.setStyle(fieldErrorStyle);
            } else {
                lblArriveeError.setText("");
                dateArriveePicker.setStyle(fieldStyle);
            }
        });

        dateDepartPicker.valueProperty().addListener((obs, old, newVal) -> {
            LocalDate arrivee = dateArriveePicker.getValue();
            if (newVal == null) {
                lblDepartError.setText("❌ requis");
                dateDepartPicker.setStyle(fieldErrorStyle);
            } else if (arrivee != null && !newVal.isAfter(arrivee)) {
                lblDepartError.setText("❌ après arrivée");
                dateDepartPicker.setStyle(fieldErrorStyle);
            } else {
                lblDepartError.setText("");
                dateDepartPicker.setStyle(fieldStyle);
            }
        });

        // Boutons
        Button reserverBtn = (Button) dialog.getDialogPane().lookupButton(reserverButton);
        reserverBtn.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        Button cancelBtn = (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);
        cancelBtn.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white; -fx-font-weight: bold; -fx-background-radius: 20; -fx-padding: 8 25; -fx-cursor: hand;");

        reserverBtn.addEventFilter(ActionEvent.ACTION, event -> {
            if (!lblClientError.getText().isEmpty() ||
                    !lblEmailError.getText().isEmpty() ||
                    !lblTelError.getText().isEmpty() ||
                    !lblArriveeError.getText().isEmpty() ||
                    !lblDepartError.getText().isEmpty()) {
                event.consume();
                showAlert("Erreur", "Veuillez corriger les erreurs", AlertType.ERROR);
            }
        });

        dialog.setResultConverter(dialogButton -> {
            if (dialogButton == reserverButton) {
                try {
                    if (!lblClientError.getText().isEmpty() ||
                            !lblEmailError.getText().isEmpty() ||
                            !lblTelError.getText().isEmpty() ||
                            !lblArriveeError.getText().isEmpty() ||
                            !lblDepartError.getText().isEmpty()) {
                        return null;
                    }

                    LocalDate arrivee = dateArriveePicker.getValue();
                    LocalDate depart = dateDepartPicker.getValue();

                    long nbNuits = ChronoUnit.DAYS.between(arrivee, depart);
                    if (nbNuits <= 0) nbNuits = 1;
                    int prixTotalTND = h.getPrixParNuit() * (int) nbNuits;

                    ReservationY reservation = new ReservationY();
                    reservation.setUserId(idUserConnecte);
                    reservation.setHebergementId(h.getIdHebergement());
                    reservation.setHebergementNom(h.getNom());
                    reservation.setClientNom(txtClient.getText().trim());
                    reservation.setClientEmail(txtEmail.getText().trim().toLowerCase());
                    reservation.setClientTel(txtTel.getText().trim());
                    reservation.setDateArrivee(arrivee.toString());
                    reservation.setDateDepart(depart.toString());
                    reservation.setDateReservation(LocalDate.now().toString());
                    reservation.setNbPersonnes(spinnerPersonnes.getValue());
                    reservation.setPrixTotal(prixTotalTND);
                    reservation.setStatut("Confirmée");

                    return reservation;
                } catch (Exception e) {
                    showAlert("Erreur", "Erreur: " + e.getMessage(), AlertType.ERROR);
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(reservation -> {
            try {
                reservationService.ajouter(reservation);
                showStatus("✅ Réservation confirmée pour " + h.getNom() + " (" + reservation.getPrixTotal() + " TND)", "success");
            } catch (Exception e) {
                e.printStackTrace();
                showAlert("Erreur", "Impossible d'enregistrer la réservation: " + e.getMessage(), AlertType.ERROR);
            }
        });
    }

    /**
     * Affiche une alerte
     */
    private void showAlert(String title, String content, AlertType type) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    /**
     * Recherche principale
     */
    private void rechercher() {
        String destination = txtRecherche.getText().trim();

        if (dateArrivee.getValue() == null || dateDepart.getValue() == null) {
            showAlert("Dates manquantes", "Veuillez sélectionner les dates d'arrivée et de départ", AlertType.WARNING);
            return;
        }

        if (!dateDepart.getValue().isAfter(dateArrivee.getValue())) {
            showAlert("Dates invalides", "La date de départ doit être après la date d'arrivée", AlertType.WARNING);
            return;
        }

        mainContent.setVisible(true);
        mainContent.setManaged(true);

        if (destination.isEmpty()) {
            lblDestinationChoisie.setText("Toutes les destinations");
        } else {
            lblDestinationChoisie.setText("Destination : " + destination);
        }

        String arriveeStr = dateArrivee.getValue().format(DateTimeFormatter.ofPattern("dd/MM/yyyy"));
        String departStr = dateDepart.getValue().format(DateTimeFormatter.ofPattern("dd/MM/yyyy"));
        long nbNuits = ChronoUnit.DAYS.between(dateArrivee.getValue(), dateDepart.getValue());
        lblDatesChoisies.setText("Du " + arriveeStr + " au " + departStr + " (" + nbNuits + " nuits)");

        if (destination.isEmpty()) {
            hebergementsFiltres = new java.util.ArrayList<>(tousLesHebergements);
        } else {
            String searchLower = destination.toLowerCase();
            hebergementsFiltres = tousLesHebergements.stream()
                    .filter(h -> h.getNom().toLowerCase().contains(searchLower) ||
                            h.getLocalisation().toLowerCase().contains(searchLower))
                    .collect(Collectors.toList());
        }

        appliquerTri();
        afficherHebergements(hebergementsFiltres);

        if (hebergementsFiltres.isEmpty()) {
            showStatus("Aucun hébergement trouvé", "warning");
        } else {
            showStatus(hebergementsFiltres.size() + " hébergement(s) trouvé(s)", "success");
        }
    }

    /**
     * Affiche un message temporaire dans la status bar
     */
    private void showStatus(String message, String type) {
        if (lblStatusMessage != null && statusBar != null) {
            lblStatusMessage.setText(message);

            String color = switch (type) {
                case "success" -> "#28a745";
                case "warning" -> "#ffc107";
                case "error" -> "#dc3545";
                default -> "#17a2b8";
            };

            statusBar.setStyle("-fx-background-color: " + color + "; -fx-background-radius: 10;");
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
}