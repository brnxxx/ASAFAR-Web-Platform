package tn.esprit.controllers;
import tn.esprit.entities.Excursion;
import tn.esprit.entities.ReservationB;
import tn.esprit.entities.StatutReservationB;
import javafx.animation.Interpolator;
import javafx.animation.KeyFrame;
import javafx.animation.KeyValue;
import javafx.animation.Timeline;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.*;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.util.Duration;
import tn.esprit.services.ExcursionService;
import tn.esprit.services.ReservationServiceB;
import java.io.File;
import java.sql.SQLException;
import java.util.List;
import java.util.Optional;

public class BackOfficeControllerB {

    // ================= EXCURSIONS =================
    @FXML private ListView<Excursion> listViewExcursion;
    @FXML private Label lblTotalExcursions;
    @FXML private Button btnLogout;

    private final ExcursionService excursionService = new ExcursionService();
    private final ObservableList<Excursion> excursionList = FXCollections.observableArrayList();

    // ================= RESERVATIONS =================
    @FXML private ListView<ReservationB> listViewReservation;
    @FXML private Label lblTotalReservations;
    @FXML private Label lblStatusReservation;
    @FXML private HBox statusBarReservation;

    private final ReservationServiceB reservationService = new ReservationServiceB();
    private final ObservableList<ReservationB> reservationList = FXCollections.observableArrayList();

    // ================= SIDEBAR =================
    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    @FXML private Button btnAccueil;

    private static String safe(String s) {
        return s == null ? "" : s;
    }


    @FXML private Button btnAjouterExcursion;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private StackPane leftContainer;
    @FXML private ImageView logo;

    private Timeline timeline;

    // =====================================================
    // INITIALIZE
    // =====================================================
    @FXML
    public void initialize() {

        // --- Debug injection (à laisser jusqu’à ce que ça marche) ---
        System.out.println("listViewExcursion injected? " + (listViewExcursion != null));
        System.out.println("listViewReservation injected? " + (listViewReservation != null));

        // ----- EXCURSIONS -----
        if (listViewExcursion != null) {
            setupExcursionList();
            chargerExcursions(); // ne jette plus d'exception
        } else {
            System.out.println(" listViewExcursion est NULL → fx:id ou FXML layout incorrect");
        }

        // ----- RESERVATIONS -----
        if (listViewReservation != null) {
            setupReservationList();
            chargerToutesReservations();
        }
    }

    // =====================================================
    // LISTVIEW EXCURSIONS
    // =====================================================
    private void setupExcursionList() {

        listViewExcursion.setItems(excursionList);

        listViewExcursion.setCellFactory(param -> new ListCell<>() {

            @Override
            protected void updateItem(Excursion e, boolean empty) {
                super.updateItem(e, empty);

                // IMPORTANT : reset cellule recyclée
                if (empty || e == null) {
                    setText(null);
                    setGraphic(null);
                    return;
                }

                // ================= ROOT CARD =================
                HBox root = new HBox(20);
                root.setPadding(new Insets(18));
                root.setAlignment(Pos.CENTER_LEFT);
                root.setMaxWidth(Double.MAX_VALUE);

                root.setStyle(
                        "-fx-background-color: linear-gradient(to bottom right,#1E6FA8,#2FA8FF);" +
                                "-fx-background-radius:20;"
                );

                // =====================================================
                // 🖼 IMAGE A GAUCHE
                // =====================================================
                ImageView imageView = new ImageView();
                imageView.setFitWidth(120);
                imageView.setFitHeight(90);
                imageView.setPreserveRatio(false);
                imageView.setSmooth(true);

                try {

                    Image img;
                    String path = e.getImageUrl();

                    if (path != null && !path.isBlank()) {

                        File file = new File(path);

                        if (file.exists()) {
                            img = new Image(file.toURI().toString());
                        } else {
                            // fallback
                            img = new Image(
                                    getClass()
                                            .getResource("/images/default.jpg")
                                            .toExternalForm()
                            );
                        }

                    } else {

                        img = new Image(
                                getClass()
                                        .getResource("/images/default.jpg")
                                        .toExternalForm()
                        );
                    }

                    imageView.setImage(img);

                } catch (Exception ex) {

                    imageView.setImage(
                            new Image(
                                    getClass()
                                            .getResource("/images/default.jpg")
                                            .toExternalForm()
                            )
                    );
                }

                // coins arrondis visuels
                imageView.setStyle("-fx-background-radius:15;");

                // =====================================================
                // CONTENU (CENTRE)
                // =====================================================
                VBox content = new VBox(10);
                content.setAlignment(Pos.CENTER_LEFT);
                HBox.setHgrow(content, Priority.ALWAYS);

                Label titre = new Label("🌍 " + safe(e.getTitre()));
                titre.setStyle("""
                -fx-font-size:18px;
                -fx-font-weight:bold;
                -fx-text-fill:white;
            """);

                Label lieu = new Label("📍 " + safe(e.getLieu()));
                lieu.setStyle("-fx-text-fill:#A7E3FF;");

                Label date = new Label("📅 " +
                        (e.getDate() != null ? e.getDate().toString() : ""));
                date.setStyle("-fx-text-fill:#A7E3FF;");

                Label prix = new Label("💰 " + e.getPrixAdulte() + " DT");
                prix.setStyle("-fx-text-fill:#C9EFFF;");

                content.getChildren().addAll(titre, lieu, date, prix);

                // pousse actions à droite
                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                // =====================================================
                // 🔵 ACTIONS (DROITE)
                // =====================================================
                VBox actionsBox = new VBox(14);
                actionsBox.setAlignment(Pos.CENTER_RIGHT);

                Button btnModifier = createIconButton("/images/modifier.png");
                Button btnSupprimer = createIconButton("/images/delete.png");

                btnModifier.setOnAction(ev -> modifierExcursion(e));

                btnSupprimer.setOnAction(ev -> {
                    try {
                        supprimerExcursion(e);
                    } catch (SQLException ex) {
                        ex.printStackTrace();
                    }
                });

                actionsBox.getChildren().addAll(btnModifier, btnSupprimer);

                // =====================================================
                // AJOUT FINAL
                // =====================================================
                root.getChildren().addAll(
                        imageView,   // ⭐ IMAGE
                        content,
                        spacer,
                        actionsBox
                );

                setText(null);
                setGraphic(root);
            }
        });
    }



    private Button createIconButton(String imagePath) {

        ImageView icon = new ImageView(
                new Image(getClass().getResourceAsStream(imagePath))
        );

        icon.setFitWidth(30);
        icon.setFitHeight(30);
        icon.setPreserveRatio(true);

        Button btn = new Button();
        btn.setGraphic(icon);

        btn.setStyle("""
        -fx-background-color: transparent;
        -fx-border-color: transparent;
        -fx-cursor: hand;
        -fx-padding:8;
    """);

        // hover effect
        btn.setOnMouseEntered(e ->
                btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.15);
                -fx-background-radius:10;
                -fx-cursor: hand;
                -fx-padding:8;
            """)
        );

        btn.setOnMouseExited(e ->
                btn.setStyle("""
                -fx-background-color: transparent;
                -fx-border-color: transparent;
                -fx-cursor: hand;
                -fx-padding:8;
            """)
        );

        return btn;
    }




    // =====================================================
    // LISTVIEW RESERVATIONS
    // =====================================================
    private void setupReservationList() {

        listViewReservation.setItems(reservationList);

        listViewReservation.setCellFactory(param -> new ListCell<>() {

            @Override
            protected void updateItem(ReservationB r, boolean empty) {
                super.updateItem(r, empty);

                // IMPORTANT : reset cellule recyclée
                if (empty || r == null) {
                    setText(null);
                    setGraphic(null);
                    return;
                }

                // ================= ROOT CARD =================
                HBox root = new HBox(20);
                root.setPadding(new Insets(18));
                root.setAlignment(Pos.CENTER_LEFT);
                root.setMaxWidth(Double.MAX_VALUE);

                root.setStyle(
                        "-fx-background-color: linear-gradient(to bottom right,#1E6FA8,#2FA8FF);" +
                                "-fx-background-radius:20;"
                );

                // =====================================================
                // CONTENU GAUCHE
                // =====================================================
                VBox content = new VBox(10);
                content.setAlignment(Pos.CENTER_LEFT);

                Label prix = new Label("💰 " + r.getMontantTotal() + " DT");
                prix.setStyle("""
                    -fx-font-size:17px;
                    -fx-font-weight:bold;
                    -fx-text-fill:white;
                    """);

                Label date = new Label("📅 " + r.getDateReservation());
                date.setStyle("-fx-text-fill:#A7E3FF;");

                Label statut = new Label("📌 Statut : " + r.getStatut());
                statut.setStyle("-fx-text-fill:#C9EFFF;");

                content.getChildren().addAll(prix, date, statut);

                // pousse les actions à droite
                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                // =====================================================
                // ACTIONS DROITE (ICÔNES)
                // =====================================================
                VBox actionsBox = new VBox(14);
                actionsBox.setAlignment(Pos.CENTER_RIGHT);

                Button btnModifier = createIconButton("/images/modifier.png");
                Button btnSupprimer = createIconButton("/images/delete.png");

                // actions
                btnModifier.setOnAction(e -> modifierReservation(r));

                btnSupprimer.setOnAction(e -> supprimerReservation(r));

                actionsBox.getChildren().addAll(btnModifier, btnSupprimer);

                // =====================================================
                root.getChildren().addAll(content, spacer, actionsBox);

                setText(null);
                setGraphic(root);
            }
        });
    }

    // =====================================================
    // LOAD EXCURSIONS
    // =====================================================
    private void chargerExcursions() {

        try {
            List<Excursion> list = excursionService.afficherList();

            System.out.println("NB excursions chargées = " + (list == null ? "null" : list.size()));
            if (list != null && !list.isEmpty()) {
                System.out.println("   Exemple 1ère excursion: " + list.get(0).getTitre());
            }

            excursionList.setAll(list == null ? List.of() : list);

            if (lblTotalExcursions != null)
                lblTotalExcursions.setText(String.valueOf(excursionList.size()));

            // Debug UI: vérifier que le ListView a une taille visible
            System.out.println("ListViewExcursion height=" + listViewExcursion.getHeight() +
                    ", items=" + listViewExcursion.getItems().size());

        } catch (Exception e) {
            e.printStackTrace();
            System.out.println(" Erreur chargerExcursions(): " + e.getMessage());
        }
    }

    // =====================================================
    // LOAD ALL RESERVATIONS
    // =====================================================
    private void chargerToutesReservations() {
        try {
            List<ReservationB> list = reservationService.afficherList();
            reservationList.setAll(list == null ? List.of() : list);

            if (lblTotalReservations != null)
                lblTotalReservations.setText(String.valueOf(reservationList.size()));

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    // =====================================================
    // LOAD RESERVATIONS BY EXCURSION
    // =====================================================
    private void afficherReservationsExcursion(Excursion e) {

        try {
            List<ReservationB> list = reservationService.getByExcursion(e.getIdExcursion());
            reservationList.setAll(list == null ? List.of() : list);

            if (lblTotalReservations != null)
                lblTotalReservations.setText(String.valueOf(reservationList.size()));
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

    // =====================================================
    // DELETE RESERVATION
    // =====================================================
    private void supprimerReservation(ReservationB r) {

        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Suppression");
        alert.setHeaderText(null);
        alert.setContentText("Supprimer cette réservation ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            try {
                reservationService.delete(r);
                reservationList.remove(r);
                showStatusReservation("Réservation supprimée");
            } catch (Exception e) {
                e.printStackTrace();
                showStatusReservation("Erreur suppression");
            }
        }
    }

    // =====================================================
    // STATUS MESSAGE
    // =====================================================
    private void showStatusReservation(String message) {

        if (lblStatusReservation == null || statusBarReservation == null) return;

        lblStatusReservation.setText(message);
        statusBarReservation.setVisible(true);
        statusBarReservation.setManaged(true);

        new Thread(() -> {
            try { Thread.sleep(3000); } catch (InterruptedException ignored) {}
            Platform.runLater(() -> {
                statusBarReservation.setVisible(false);
                statusBarReservation.setManaged(false);
            });
        }).start();
    }

    // =====================================================
    // LOGOUT → retour login
    // =====================================================
    @FXML
    private void handleLogout() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/sidebar.fxml"));
            Stage stage = (Stage) btnLogout.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("Login");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    // =====================================================
    // SIDEBAR
    // =====================================================
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
        if (btnAccueil != null) btnAccueil.setText(expanded ? "ACCUEIL" : "");
        if (btnHebergement != null) btnHebergement.setText(expanded ? "HÉBERGEMENTS" : "");
        if (btnLoisirs != null) btnLoisirs.setText(expanded ? "LOISIRS" : "");
        if (btnTransport != null) btnTransport.setText(expanded ? "TRANSPORTS" : "");
        if (btnAvis != null) btnAvis.setText(expanded ? "AVIS & RÉCLAMATIONS" : "");
    }

    private void supprimerExcursion(Excursion e) throws SQLException {

        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Suppression");
        alert.setContentText("Supprimer cette excursion ?");

        Optional<ButtonType> result = alert.showAndWait();

        if (result.isPresent() && result.get() == ButtonType.OK) {

            excursionService.delete(e);
            excursionList.remove(e);

            System.out.println("Excursion supprimée");
        }
    }
    private void modifierExcursion(Excursion e) {

        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Modifier Excursion");

        ButtonType saveBtn =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes()
                .addAll(saveBtn, ButtonType.CANCEL);
        // récupérer les vrais boutons du dialog
        Button btnSave =
                (Button) dialog.getDialogPane().lookupButton(saveBtn);

        Button btnCancel =
                (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);

        btnSave.setStyle("""
    -fx-background-color: linear-gradient(to right,#2FA8FF,#1E6FA8);
    -fx-text-fill: white;
    -fx-font-size: 14px;
    -fx-font-weight: bold;
    -fx-font-family: "Segoe UI";
    -fx-background-radius: 12;
    -fx-padding: 9 26 9 26;
    -fx-cursor: hand;
""");
        btnCancel.setStyle("""
   -fx-background-color: linear-gradient(to right,#FF8F00,#FFC107
                                                                 );
    -fx-text-fill: white;
    -fx-font-size: 14px;
    -fx-font-weight: bold;
    -fx-font-family: "Segoe UI";
    -fx-background-radius: 12;
    -fx-padding: 9 26 9 26;
    -fx-cursor: hand;
""");

        // ================= GRID =================
        GridPane grid = new GridPane();
        grid.setHgap(15);
        grid.setVgap(12);
        grid.setPadding(new Insets(25));

        grid.setStyle("""
        -fx-background-color: linear-gradient(to bottom right,#0B2D4A,#1E6FA8);
        -fx-background-radius:20;
    """);

        // ================= FIELDS =================
        TextField tfTitre = new TextField(e.getTitre());
        TextField tfLieu  = new TextField(e.getLieu());

        TextArea taDescription = new TextArea(e.getDescription());
        taDescription.setWrapText(true);
        taDescription.setPrefRowCount(3);
        taDescription.setPrefWidth(260);

        TextField tfPrixAdulte =
                new TextField(String.valueOf(e.getPrixAdulte()));

        TextField tfPrixEnfant =
                new TextField(String.valueOf(e.getPrixEnfant()));

        TextField tfPrixBebe =
                new TextField(String.valueOf(e.getPrixBebe()));

        TextField tfPlaces =
                new TextField(String.valueOf(e.getNombrePlacesDisponibles()));

        // ================= CONTROLES SAISIE =================
        allowDecimalOnly(tfPrixAdulte);
        allowDecimalOnly(tfPrixEnfant);
        allowDecimalOnly(tfPrixBebe);
        allowIntegerOnly(tfPlaces);

        // ================= STYLE INPUT =================
        styleInput(tfTitre);
        styleInput(tfLieu);
        styleInput(tfPrixAdulte);
        styleInput(tfPrixEnfant);
        styleInput(tfPrixBebe);
        styleInput(tfPlaces);
        styleTextArea(taDescription);

        // ================= LAYOUT =================
        grid.add(createLabel("Titre"), 0, 0);
        grid.add(tfTitre, 1, 0);

        grid.add(createLabel("Lieu"), 0, 1);
        grid.add(tfLieu, 1, 1);

        grid.add(createLabel("Description"), 0, 2);
        grid.add(taDescription, 1, 2);

        grid.add(createLabel("Prix Adulte"), 0, 3);
        grid.add(tfPrixAdulte, 1, 3);

        grid.add(createLabel("Prix Enfant"), 0, 4);
        grid.add(tfPrixEnfant, 1, 4);

        grid.add(createLabel("Prix Bébé"), 0, 5);
        grid.add(tfPrixBebe, 1, 5);

        grid.add(createLabel("Places"), 0, 6);
        grid.add(tfPlaces, 1, 6);

        dialog.getDialogPane().setContent(grid);

        // ================= VALIDATION DYNAMIQUE =================


        Runnable validator = () -> {

            boolean valid =
                    !tfTitre.getText().isBlank()
                            && !tfLieu.getText().isBlank()
                            && !taDescription.getText().isBlank()
                            && !tfPrixAdulte.getText().isBlank()
                            && !tfPrixEnfant.getText().isBlank()
                            && !tfPrixBebe.getText().isBlank()
                            && !tfPlaces.getText().isBlank();

            btnSave.setDisable(!valid);
        };

        tfTitre.textProperty().addListener((a,b,c)->validator.run());
        tfLieu.textProperty().addListener((a,b,c)->validator.run());
        taDescription.textProperty().addListener((a,b,c)->validator.run());
        tfPrixAdulte.textProperty().addListener((a,b,c)->validator.run());
        tfPrixEnfant.textProperty().addListener((a,b,c)->validator.run());
        tfPrixBebe.textProperty().addListener((a,b,c)->validator.run());
        tfPlaces.textProperty().addListener((a,b,c)->validator.run());

        validator.run();

        // ================= SAVE (CORRECTION BUG JAVAFX) =================
        btnSave.addEventFilter(javafx.event.ActionEvent.ACTION, event -> {

            try {
                // force commit TextArea
                taDescription.requestFocus();

                e.setTitre(tfTitre.getText().trim());
                e.setLieu(tfLieu.getText().trim());
                e.setDescription(taDescription.getText().trim());

                e.setPrixAdulte(Double.parseDouble(tfPrixAdulte.getText()));
                e.setPrixEnfant(Double.parseDouble(tfPrixEnfant.getText()));
                e.setPrixBebe(Double.parseDouble(tfPrixBebe.getText()));

                e.setNombrePlacesDisponibles(
                        Integer.parseInt(tfPlaces.getText())
                );

                excursionService.modifier(e);

                chargerExcursions();
                showStatusReservation("Excursion modifiée");

            } catch (Exception ex) {
                ex.printStackTrace();
                showStatusReservation(" Erreur modification");

                // empêche fermeture si erreur
                event.consume();
            }
        });

        dialog.showAndWait();
    }

    private void styleInput(TextField tf) {
        tf.setStyle("""
        -fx-background-radius:10;
        -fx-border-radius:10;
        -fx-border-color:#2FA8FF;
        -fx-padding:6;
    """);
    }
    private void styleTextArea(TextArea ta) {
        ta.setStyle("""
        -fx-background-radius:10;
        -fx-border-radius:10;
        -fx-border-color:#2FA8FF;
        -fx-padding:6;
    """);
    }

    private void allowIntegerOnly(TextField field) {

        field.setTextFormatter(new TextFormatter<>(change -> {

            if (change.getControlNewText().matches("\\d*")) {
                return change;
            }

            return null;
        }));
    }


    private void modifierReservation(ReservationB r) {

        // ================= SECURITE =================
        if (r == null) return;

        Excursion excursion = r.getExcursion();

        // évite le crash si l'excursion n'est pas chargée
        double prixAdult = 0;
        double prixChild = 0;
        double prixBaby  = 0;

        if (excursion != null) {
            prixAdult = excursion.getPrixAdulte();
            prixChild = excursion.getPrixEnfant();
            prixBaby  = excursion.getPrixBebe();
        }

        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Modifier Réservation");

        ButtonType saveBtn =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes()
                .addAll(saveBtn, ButtonType.CANCEL);
        // récupérer les vrais boutons du dialog
        Button btnSave =
                (Button) dialog.getDialogPane().lookupButton(saveBtn);

        Button btnCancel =
                (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);

        btnSave.setStyle("""
    -fx-background-color: linear-gradient(to right,#2FA8FF,#1E6FA8);
    -fx-text-fill: white;
    -fx-font-size: 14px;
    -fx-font-weight: bold;
    -fx-font-family: "Segoe UI";
    -fx-background-radius: 12;
    -fx-padding: 9 26 9 26;
    -fx-cursor: hand;
""");
        btnCancel.setStyle("""
   -fx-background-color: linear-gradient(to right,#FF8F00,#FFC107
                                                                 );
    -fx-text-fill: white;
    -fx-font-size: 14px;
    -fx-font-weight: bold;
    -fx-font-family: "Segoe UI";
    -fx-background-radius: 12;
    -fx-padding: 9 26 9 26;
    -fx-cursor: hand;
""");





        // ================= ROOT =================
        VBox root = new VBox(20);
        root.setPadding(new Insets(25));
        root.setStyle("""
        -fx-background-color: linear-gradient(to bottom right,#123A5C,#1E6FA8);
        -fx-background-radius:20;
    """);

        // ================= VALEURS (DB) =================
        final int[] adultes = { r.getNbAdultes() };
        final int[] enfants = { r.getNbEnfants() };
        final int[] bebes   = { r.getNbBebes() };

        // ================= LABELS =================
        Label lblAdult = new Label(String.valueOf(adultes[0]));
        Label lblChild = new Label(String.valueOf(enfants[0]));
        Label lblBaby  = new Label(String.valueOf(bebes[0]));

        lblAdult.setStyle("-fx-text-fill:white;-fx-font-size:15px;");
        lblChild.setStyle("-fx-text-fill:white;-fx-font-size:15px;");
        lblBaby.setStyle("-fx-text-fill:white;-fx-font-size:15px;");

        // ================= BUILDER ROW =================
        java.util.function.BiConsumer<Button, Runnable> setIcon =
                (btn, action) -> {
                    btn.getStyleClass().add("icon-button-flat");
                    btn.setOnAction(e -> action.run());
                };

        java.util.function.Function<String, ImageView> icon =
                path -> {
                    ImageView iv = new ImageView(
                            new Image(getClass()
                                    .getResource(path)
                                    .toExternalForm()));
                    iv.setFitHeight(22);
                    iv.setPreserveRatio(true);
                    return iv;
                };

        java.util.function.Function<String, Label> titleLabel =
                text -> {
                    Label l = new Label(text);
                    l.setStyle("-fx-text-fill:white;-fx-font-size:14px;");
                    return l;
                };

        // méthode locale simulée (builder ligne)
        java.util.function.Function<Object[], HBox> buildRow = params -> {

            String title = (String) params[0];
            Label valueLabel = (Label) params[1];
            Runnable plus = (Runnable) params[2];
            Runnable minus = (Runnable) params[3];

            Button btnMinus = new Button();
            btnMinus.setGraphic(icon.apply("/images/moins.png"));
            btnMinus.setStyle("""
    -fx-background-color: transparent;
    -fx-background-radius: 0;
    -fx-border-color: transparent;
    -fx-padding: 5;
    -fx-cursor: hand;
""");
            Button btnPlus = new Button();
            btnPlus.setGraphic(icon.apply("/images/plus.png"));
            btnPlus.setStyle("""
    -fx-background-color: transparent;
    -fx-background-radius: 0;
    -fx-border-color: transparent;
    -fx-padding: 5;
    -fx-cursor: hand;
""");
            setIcon.accept(btnMinus, minus);
            setIcon.accept(btnPlus, plus);

            HBox counter = new HBox(10, btnMinus, valueLabel, btnPlus);
            counter.setAlignment(Pos.CENTER);
            counter.getStyleClass().add("counter-box");

            Region spacer = new Region();
            HBox.setHgrow(spacer, Priority.ALWAYS);

            HBox row = new HBox(15,
                    titleLabel.apply(title),
                    spacer,
                    counter);

            row.setAlignment(Pos.CENTER_LEFT);

            return row;
        };

        // ================= ROWS =================
        HBox adultRow = buildRow.apply(new Object[]{
                "Adulte (" + prixAdult + " DT)",
                lblAdult,
                (Runnable) () -> {
                    adultes[0]++;
                    lblAdult.setText(String.valueOf(adultes[0]));
                },
                (Runnable) () -> {
                    if (adultes[0] > 0) adultes[0]--;
                    lblAdult.setText(String.valueOf(adultes[0]));
                }
        });

        HBox childRow = buildRow.apply(new Object[]{
                "Enfant (" + prixChild + " DT)",
                lblChild,
                (Runnable) () -> {
                    enfants[0]++;
                    lblChild.setText(String.valueOf(enfants[0]));
                },
                (Runnable) () -> {
                    if (enfants[0] > 0) enfants[0]--;
                    lblChild.setText(String.valueOf(enfants[0]));
                }
        });

        HBox babyRow = buildRow.apply(new Object[]{
                "Bébé (" + prixBaby + " DT)",
                lblBaby,
                (Runnable) () -> {
                    bebes[0]++;
                    lblBaby.setText(String.valueOf(bebes[0]));
                },
                (Runnable) () -> {
                    if (bebes[0] > 0) bebes[0]--;
                    lblBaby.setText(String.valueOf(bebes[0]));
                }
        });

        // ================= STATUT =================
        Label lblStatut = new Label("Statut");
        lblStatut.setStyle("-fx-text-fill:white;");

        ComboBox<StatutReservationB> cbStatut = new ComboBox<>();
        cbStatut.getItems().setAll(StatutReservationB.values());
        cbStatut.setValue(r.getStatut());

        cbStatut.setStyle("""
        -fx-background-radius:8;
        -fx-background-color:#A7E3FF;
    """);

        // ================= UI =================
        root.getChildren().addAll(
                adultRow,
                childRow,
                babyRow,
                lblStatut,
                cbStatut
        );

        dialog.getDialogPane().setContent(root);

        // ================= SAVE =================
        dialog.setResultConverter(button -> {

            if (button == saveBtn) {
                try {

                    r.setNbAdultes(adultes[0]);
                    r.setNbEnfants(enfants[0]);
                    r.setNbBebes(bebes[0]);
                    r.setStatut(cbStatut.getValue());

                    reservationService.modifier(r);

                    chargerToutesReservations();

                    showStatusReservation("Réservation modifiée");

                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
            return null;
        });

        dialog.showAndWait();
    }




    @FXML
    private void ajouterExcursion() {

        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Ajouter Excursion");

        dialog.getDialogPane().setPrefWidth(650);
        dialog.getDialogPane().setPrefHeight(620);

        ButtonType saveBtn =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);

        dialog.getDialogPane().getButtonTypes()
                .addAll(saveBtn, ButtonType.CANCEL);

        // ================= STYLE BUTTONS =================
        Button btnSave =
                (Button) dialog.getDialogPane().lookupButton(saveBtn);

        Button btnCancel =
                (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);

        btnSave.setStyle("""
        -fx-background-color: linear-gradient(to right,#2FA8FF,#1E6FA8);
        -fx-text-fill:white;
        -fx-font-weight:bold;
        -fx-background-radius:12;
        -fx-padding:10 28;
    """);

        btnCancel.setStyle("""
        -fx-background-color: linear-gradient(to right,#FF8F00,#FFC107);
        -fx-text-fill:white;
        -fx-font-weight:bold;
        -fx-background-radius:12;
        -fx-padding:10 28;
    """);

        // ================= GRID =================
        GridPane grid = new GridPane();
        grid.setHgap(50);
        grid.setVgap(20);
        grid.setPadding(new Insets(30));

        grid.setStyle("""
        -fx-background-color: linear-gradient(to bottom right,#0B2D4A,#1E6FA8);
        -fx-background-radius:20;
    """);

        ColumnConstraints c1 = new ColumnConstraints();
        c1.setPercentWidth(30);

        ColumnConstraints c2 = new ColumnConstraints();
        c2.setPercentWidth(70);
        c2.setHgrow(Priority.ALWAYS);

        grid.getColumnConstraints().addAll(c1, c2);

        // ================= FIELDS =================
        TextField tfTitre = createField("Titre");
        TextField tfLieu = createField("Lieu");
        TextField tfDescription = createField("Description");

        DatePicker dpDate = new DatePicker();
        dpDate.setPrefHeight(38);
        dpDate.setMaxWidth(Double.MAX_VALUE);

        TextField tfDuree = createField("Durée (h)");
        TextField tfPrixAdulte = createField("Prix adulte");
        TextField tfPrixEnfant = createField("Prix enfant");
        TextField tfPrixBebe = createField("Prix bébé");
        TextField tfPlaces = createField("Places disponibles");

        allowIntegerOnly(tfDuree);
        allowIntegerOnly(tfPlaces);

        allowDecimalOnly(tfPrixAdulte);
        allowDecimalOnly(tfPrixEnfant);
        allowDecimalOnly(tfPrixBebe);

        // =====================================================
        // ✅ SECTION UPLOAD IMAGE (NOUVELLE)
        // =====================================================

        ImageView imagePreview = new ImageView();
        imagePreview.setFitWidth(110);
        imagePreview.setFitHeight(110);
        imagePreview.setPreserveRatio(true);

        imagePreview.setStyle("""
        -fx-background-color: rgba(255,255,255,0.1);
        -fx-border-color:#64B5F6;
        -fx-border-style:dashed;
        -fx-border-radius:10;
        -fx-background-radius:10;
    """);

        Label lblImageStatus = new Label("Aucune image");
        lblImageStatus.setStyle("-fx-text-fill:#A7E3FF;");

        final String[] uploadedImagePath = {null};

        Button btnUpload = new Button("📤 Upload");
        btnUpload.setStyle("""
        -fx-background-color:#FF8F00;
        -fx-text-fill:white;
        -fx-font-weight:bold;
        -fx-background-radius:20;
    """);

        Button btnDelete = new Button("🗑 Supprimer");
        btnDelete.setStyle("""
        -fx-background-color:#E74C3C;
        -fx-text-fill:white;
        -fx-font-weight:bold;
        -fx-background-radius:20;
    """);

        btnUpload.setOnAction(e -> {

            FileChooser chooser = new FileChooser();
            chooser.setTitle("Choisir image");
            chooser.getExtensionFilters().add(
                    new FileChooser.ExtensionFilter(
                            "Images", "*.png", "*.jpg", "*.jpeg"));

            File file = chooser.showOpenDialog(null);

            if (file != null) {
                Image img = new Image(file.toURI().toString());
                imagePreview.setImage(img);

                uploadedImagePath[0] = file.getAbsolutePath();

                lblImageStatus.setText("Image sélectionnée");
                lblImageStatus.setStyle("-fx-text-fill:#4CAF50;");
            }
        });

        btnDelete.setOnAction(e -> {
            uploadedImagePath[0] = null;
            imagePreview.setImage(null);
            lblImageStatus.setText("Aucune image");
            lblImageStatus.setStyle("-fx-text-fill:#A7E3FF;");
        });

        VBox imageBox = new VBox(10,
                imagePreview,
                lblImageStatus,
                new HBox(10, btnUpload, btnDelete));

        imageBox.setAlignment(Pos.CENTER);

        // ================= LAYOUT =================
        grid.add(createLabel("Titre"),0,0);
        grid.add(tfTitre,1,0);

        grid.add(createLabel("Lieu"),0,1);
        grid.add(tfLieu,1,1);

        grid.add(createLabel("Description"),0,2);
        grid.add(tfDescription,1,2);

        grid.add(createLabel("Date"),0,3);
        grid.add(dpDate,1,3);

        grid.add(createLabel("Durée"),0,4);
        grid.add(tfDuree,1,4);

        grid.add(createLabel("Prix adulte"),0,5);
        grid.add(tfPrixAdulte,1,5);

        grid.add(createLabel("Prix enfant"),0,6);
        grid.add(tfPrixEnfant,1,6);

        grid.add(createLabel("Prix bébé"),0,7);
        grid.add(tfPrixBebe,1,7);

        grid.add(createLabel("Places"),0,8);
        grid.add(tfPlaces,1,8);

        grid.add(createLabel("Image"),0,9);
        grid.add(imageBox,1,9);

        dialog.getDialogPane().setContent(grid);

        // ================= VALIDATION =================
        Runnable validator = () -> {

            boolean valid =
                    !tfTitre.getText().isBlank()
                            && !tfLieu.getText().isBlank()
                            && dpDate.getValue() != null
                            && tfDuree.getText().matches("\\d+")
                            && tfPlaces.getText().matches("\\d+");

            btnSave.setDisable(!valid);
        };

        tfTitre.textProperty().addListener((a,b,c)->validator.run());
        tfLieu.textProperty().addListener((a,b,c)->validator.run());
        tfDuree.textProperty().addListener((a,b,c)->validator.run());
        tfPlaces.textProperty().addListener((a,b,c)->validator.run());
        dpDate.valueProperty().addListener((a,b,c)->validator.run());

        validator.run();

        // ================= SAVE =================
        dialog.setResultConverter(button -> {

            if (button == saveBtn) {
                try {

                    Excursion e = new Excursion();

                    e.setTitre(tfTitre.getText());
                    e.setLieu(tfLieu.getText());
                    e.setDescription(tfDescription.getText());
                    e.setDate(dpDate.getValue());
                    e.setDuree(Integer.parseInt(tfDuree.getText()));
                    e.setPrixAdulte(Double.parseDouble(tfPrixAdulte.getText()));
                    e.setPrixEnfant(Double.parseDouble(tfPrixEnfant.getText()));
                    e.setPrixBebe(Double.parseDouble(tfPrixBebe.getText()));
                    e.setNombrePlacesDisponibles(
                            Integer.parseInt(tfPlaces.getText()));

                    // ⭐ IMAGE UPLOAD
                    e.setImageUrl(uploadedImagePath[0]);

                    excursionService.add(e);

                    chargerExcursions();
                    showStatusReservation("✅ Excursion ajoutée");

                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
            return null;
        });

        dialog.showAndWait();
    }

    private Label createLabel(String text) {
        Label lbl = new Label(text);
        lbl.setStyle("""
        -fx-text-fill:#A7E3FF;
        -fx-font-weight:bold;
        -fx-font-size:14px;
    """);
        return lbl;
    }

    private TextField createField(String prompt) {

        TextField tf = new TextField();
        tf.setPromptText(prompt);
        tf.setPrefWidth(220);

        tf.setStyle("""
        -fx-background-radius:10;
        -fx-border-radius:10;
        -fx-border-color:#2FA8FF;
        -fx-padding:6;
        -fx-text-fill:black;
    """);

        return tf;
    }



    private void allowDecimalOnly(TextField field) {

        field.setTextFormatter(new TextFormatter<>(change -> {

            String newText = change.getControlNewText();

            // autorise : vide OU nombre décimal
            if (newText.matches("\\d*(\\.\\d*)?")) {
                return change;
            }

            return null; // bloque la saisie
        }));



    }




}
