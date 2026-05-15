package tn.esprit.controllers;
import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.*;
import javafx.fxml.FXML;
import javafx.scene.chart.PieChart;
import javafx.scene.control.*;
import javafx.scene.control.Button;
import javafx.scene.control.Dialog;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.image.ImageView;
import javafx.stage.Modality;
import javafx.util.Duration;
import tn.esprit.entities.Utilisateur;
import javafx.geometry.Insets;

import javax.swing.*;
import java.awt.*;
import java.sql.SQLException;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import tn.esprit.controllers.UtilisateurService;
public class BackofficeController {

    /* ================= SIDEBAR ================= */

    @FXML private StackPane leftContainer;
    @FXML private ImageView logo;
    @FXML
    private Button btnAddUser;
    @FXML private Button btnAccueil;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Label lblPercent;

    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    /* ================= ADMIN ================= */

    @FXML private TableView<Utilisateur> tableUsers;
    @FXML private TableColumn<Utilisateur, String> colNom;
    @FXML private TableColumn<Utilisateur, String> colPrenom;
    @FXML private TableColumn<Utilisateur, String> colEmail;
    @FXML private TableColumn<Utilisateur, String> colTelephone;
    @FXML private TableColumn<Utilisateur, String> colRole;
    @FXML private TableColumn<Utilisateur, String> colStatut;
    @FXML private TableColumn<Utilisateur, Void> colActions;

    @FXML private Label lblTotalUsers;
    @FXML private Label lblAdmins;
    @FXML private Label lblBlocked;

    private final UtilisateurService service = new UtilisateurService();
    private final ObservableList<Utilisateur> list = FXCollections.observableArrayList();

    @FXML private Label lblTime;
    @FXML private Label lblDate;

    @FXML
    public void initialize() {

        leftContainer.setPrefWidth(collapsedWidth);
        setTexts(false);
        btnAddUser.setOnAction(e -> showAddDialog());

        setupColumns();
        setupActions();

        pieChart.setLabelsVisible(true);
        pieChart.setLegendVisible(false);
        pieChart.setAnimated(true);

        loadUsers();
        startClock();
    }


    /* ================= SIDEBAR METHODS ================= */

    @FXML
    private void expandSidebar() {
        leftContainer.setPrefWidth(expandedWidth);
        setTexts(true);
    }

    @FXML
    private void collapseSidebar() {
        leftContainer.setPrefWidth(collapsedWidth);
        setTexts(false);
    }

    private void setTexts(boolean expanded) {
        if (expanded) {
            btnAccueil.setText("ACCUEIL");
            btnHebergement.setText("GESTION HÉBERGEMENTS");
            btnLoisirs.setText("GESTION LOISIRS");
            btnTransport.setText("GESTION TRANSPORTS");
            btnAvis.setText("GESTION RÉCLAMATIONS");
        } else {
            btnAccueil.setText("");
            btnHebergement.setText("");
            btnLoisirs.setText("");
            btnTransport.setText("");
            btnAvis.setText("");
        }
    }

    /* ================= TABLE ================= */

    private void setupColumns() {


        colNom.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getNom()));
        colPrenom.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getPrenom()));
        colEmail.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getEmail()));
        colTelephone.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getTelephone()));
        colRole.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getRole()));
        colStatut.setCellValueFactory(d -> new SimpleStringProperty(d.getValue().getStatut()));

        tableUsers.setItems(list);
    }

    private void loadUsers() {
        try {
            list.setAll(service.afficherList());
            updateStats();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    private void updateStats() {

        lblTotalUsers.setText(String.valueOf(list.size()));

        long admins = list.stream()
                .filter(u -> "admin".equalsIgnoreCase(u.getRole()))
                .count();

        long blocked = list.stream()
                .filter(u -> "bloqué".equalsIgnoreCase(u.getStatut()))
                .count();

        long actifs = list.size() - blocked;

        lblAdmins.setText(String.valueOf(admins));
        lblBlocked.setText(String.valueOf(blocked));

        // IMPORTANT
        updateChart((int) actifs, (int) blocked);
    }

    private void setupActions() {

        colActions.setCellFactory(param -> new TableCell<>() {

            private final Button btnDelete = new Button();
            private final Button btnEdit = new Button();
            private final HBox container = new HBox(10); // espace entre icônes

            {
                // 🔹 Icône supprimer
                ImageView deleteIcon = new ImageView(
                        new Image(getClass().getResourceAsStream("/images/delete.png"))
                );
                deleteIcon.setFitHeight(18);
                deleteIcon.setFitWidth(18);
                btnDelete.setGraphic(deleteIcon);
                btnDelete.getStyleClass().add("btn-icon-delete");

                // 🔹 Icône modifier
                ImageView editIcon = new ImageView(
                        new Image(getClass().getResourceAsStream("/images/edit.png"))
                );
                editIcon.setFitHeight(18);
                editIcon.setFitWidth(18);
                btnEdit.setGraphic(editIcon);
                btnEdit.getStyleClass().add("btn-icon-edit");

                // 🔹 Action supprimer
                btnDelete.setOnAction(e -> {
                    Utilisateur u = getTableView().getItems().get(getIndex());
                    try {
                        service.delete(u);
                        loadUsers();
                    } catch (SQLException ex) {
                        ex.printStackTrace();
                    }
                });

                // 🔹 Action modifier
                btnEdit.setOnAction(e -> {
                    Utilisateur u = getTableRow().getItem();
                    if (u == null) return;

                    showEditDialog(u);
                });


                container.getChildren().addAll(btnEdit, btnDelete);
            }

            @Override
            protected void updateItem(Void item, boolean empty) {
                super.updateItem(item, empty);
                setGraphic(empty ? null : container);
            }
        });
    }


    @FXML
    private PieChart pieChart;

    public void updateChart(int actifs, int bloques) {

        pieChart.getData().clear();

        PieChart.Data d1 = new PieChart.Data("Actifs", actifs);
        PieChart.Data d2 = new PieChart.Data("Bloqués", bloques);

        pieChart.getData().addAll(d1, d2);

        int total = actifs + bloques;

        if (total > 0) {
            int percent = (int) ((actifs * 100.0) / total);
            lblPercent.setText(percent + "%");
        }
    }
    private void showEditDialog(Utilisateur user) {

        Dialog<ButtonType> dialog = new Dialog<>();
        dialog.initOwner(tableUsers.getScene().getWindow());
        dialog.initModality(Modality.APPLICATION_MODAL);
        dialog.setTitle("Modifier Utilisateur");

        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/modifadmin.css").toExternalForm()
        );
        dialog.getDialogPane().getStyleClass().add("dialog-pane");

        ButtonType saveButtonType =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);

        dialog.getDialogPane().getButtonTypes().addAll(
                ButtonType.CANCEL,
                saveButtonType
        );

        // ===== CHAMPS =====
        TextField tfNom = new TextField(user.getNom());
        TextField tfPrenom = new TextField(user.getPrenom());
        TextField tfEmail = new TextField(user.getEmail());
        TextField tfTel = new TextField(user.getTelephone());

        ComboBox<String> cbRole = new ComboBox<>();
        cbRole.getItems().addAll("admin", "client");
        cbRole.setValue(user.getRole());

        ComboBox<String> cbStatut = new ComboBox<>();
        cbStatut.getItems().addAll("actif", "bloqué");
        cbStatut.setValue(user.getStatut());

        tfNom.setPrefWidth(300);
        tfPrenom.setPrefWidth(300);
        tfEmail.setPrefWidth(300);
        tfTel.setPrefWidth(300);
        cbRole.setPrefWidth(300);
        cbStatut.setPrefWidth(300);

        // ===== LABELS ERREUR =====
        Label emailError = new Label();
        Label phoneError = new Label();

        emailError.getStyleClass().add("error-label");
        phoneError.getStyleClass().add("error-label");

        // ===== TELEPHONE chiffres uniquement =====
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("\\d*")) {
                tfTel.setText(newVal.replaceAll("[^\\d]", ""));
            }
        });

        // ===== EMAIL validation live =====
        tfEmail.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
                tfEmail.getStyleClass().add("field-error");
                tfEmail.getStyleClass().remove("field-valid");
                emailError.setText("Email invalide");
            } else {
                tfEmail.getStyleClass().add("field-valid");
                tfEmail.getStyleClass().remove("field-error");
                emailError.setText("");
            }
        });

        // ===== PHONE validation live =====
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal.length() < 8) {
                tfTel.getStyleClass().add("field-error");
                tfTel.getStyleClass().remove("field-valid");
                phoneError.setText("Numéro invalide");
            } else {
                tfTel.getStyleClass().add("field-valid");
                tfTel.getStyleClass().remove("field-error");
                phoneError.setText("");
            }
        });

        // ===== LAYOUT =====
        GridPane grid = new GridPane();
        grid.setHgap(25);
        grid.setVgap(12);
        grid.setPadding(new Insets(40));
        grid.setPrefWidth(550);

        grid.add(new Label("Nom:"), 0, 0);
        grid.add(tfNom, 1, 0);

        grid.add(new Label("Prénom:"), 0, 1);
        grid.add(tfPrenom, 1, 1);

        grid.add(new Label("Email:"), 0, 2);
        grid.add(tfEmail, 1, 2);
        grid.add(emailError, 1, 3);

        grid.add(new Label("Téléphone:"), 0, 4);
        grid.add(tfTel, 1, 4);
        grid.add(phoneError, 1, 5);

        grid.add(new Label("Rôle:"), 0, 6);
        grid.add(cbRole, 1, 6);

        grid.add(new Label("Statut:"), 0, 7);
        grid.add(cbStatut, 1, 7);

        dialog.getDialogPane().setContent(grid);

        // ===== DÉSACTIVER BOUTON SI CHAMPS VIDES =====
        Button saveButton =
                (Button) dialog.getDialogPane().lookupButton(saveButtonType);

        saveButton.disableProperty().bind(
                tfNom.textProperty().isEmpty()
                        .or(tfPrenom.textProperty().isEmpty())
                        .or(tfEmail.textProperty().isEmpty())
                        .or(tfTel.textProperty().isEmpty())
                        .or(cbRole.valueProperty().isNull())
                        .or(cbStatut.valueProperty().isNull())
        );

        // ===== SAVE =====
        dialog.showAndWait().ifPresent(response -> {

            if (response == saveButtonType) {

                // Sécurité finale
                if (!tfEmail.getText().matches("^[A-Za-z0-9+_.-]+@(.+)$")
                        || tfTel.getText().length() < 8) {

                    Alert alert = new Alert(Alert.AlertType.ERROR);
                    alert.setContentText("Veuillez corriger les champs invalides !");
                    alert.show();
                    return;
                }

                user.setNom(tfNom.getText());
                user.setPrenom(tfPrenom.getText());
                user.setEmail(tfEmail.getText());
                user.setTelephone(tfTel.getText());
                user.setRole(cbRole.getValue());
                user.setStatut(cbStatut.getValue());

                try {
                    service.modifier(user);
                    loadUsers();
                } catch (SQLException ex) {
                    ex.printStackTrace();
                }
            }
        });
    }

    private void showAddDialog() {

        Dialog<ButtonType> dialog = new Dialog<>();
        dialog.initOwner(tableUsers.getScene().getWindow());
        dialog.initModality(Modality.APPLICATION_MODAL);
        dialog.setTitle("Ajouter Utilisateur");

        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/ajouter.css").toExternalForm()
        );

        dialog.getDialogPane().getStyleClass().add("dialog-pane");

        ButtonType saveButtonType = new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(ButtonType.CANCEL, saveButtonType);

        // Champs
        TextField tfNom = new TextField();
        TextField tfPrenom = new TextField();
        TextField tfEmail = new TextField();
        PasswordField tfPassword = new PasswordField();
        TextField tfTel = new TextField();
        ComboBox<String> cbRole = new ComboBox<>();

        cbRole.getItems().addAll("admin", "client");

        tfNom.setPrefWidth(300);
        tfPrenom.setPrefWidth(300);
        tfEmail.setPrefWidth(300);
        tfPassword.setPrefWidth(300);
        tfTel.setPrefWidth(300);
        cbRole.setPrefWidth(300);

        // Messages erreur
        Label emailError = new Label();
        Label passError = new Label();
        Label phoneError = new Label();

        emailError.getStyleClass().add("error-label");
        passError.getStyleClass().add("error-label");
        phoneError.getStyleClass().add("error-label");

        // TELEPHONE chiffres seulement
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("\\d*")) {
                tfTel.setText(newVal.replaceAll("[^\\d]", ""));
            }
        });

        // EMAIL validation live
        tfEmail.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
                tfEmail.getStyleClass().add("field-error");
                tfEmail.getStyleClass().remove("field-valid");
                emailError.setText("Email invalide");
            } else {
                tfEmail.getStyleClass().add("field-valid");
                tfEmail.getStyleClass().remove("field-error");
                emailError.setText("");
            }
        });

        // PASSWORD validation live
        tfPassword.textProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal.length() < 6) {
                tfPassword.getStyleClass().add("field-error");
                tfPassword.getStyleClass().remove("field-valid");
                passError.setText("Minimum 6 caractères");
            } else {
                tfPassword.getStyleClass().add("field-valid");
                tfPassword.getStyleClass().remove("field-error");
                passError.setText("");
            }
        });

        // PHONE validation
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal.length() < 8) {
                tfTel.getStyleClass().add("field-error");
                tfTel.getStyleClass().remove("field-valid");
                phoneError.setText("Numéro invalide");
            } else {
                tfTel.getStyleClass().add("field-valid");
                tfTel.getStyleClass().remove("field-error");
                phoneError.setText("");
            }
        });

        GridPane grid = new GridPane();
        grid.setHgap(25);
        grid.setVgap(12);
        grid.setPadding(new Insets(40));
        grid.setPrefWidth(550);

        grid.add(new Label("Nom:"), 0, 0);
        grid.add(tfNom, 1, 0);

        grid.add(new Label("Prénom:"), 0, 1);
        grid.add(tfPrenom, 1, 1);

        grid.add(new Label("Email:"), 0, 2);
        grid.add(tfEmail, 1, 2);
        grid.add(emailError, 1, 3);

        grid.add(new Label("Mot de passe:"), 0, 4);
        grid.add(tfPassword, 1, 4);
        grid.add(passError, 1, 5);

        grid.add(new Label("Téléphone:"), 0, 6);
        grid.add(tfTel, 1, 6);
        grid.add(phoneError, 1, 7);

        grid.add(new Label("Rôle:"), 0, 8);
        grid.add(cbRole, 1, 8);

        dialog.getDialogPane().setContent(grid);

        // Désactiver bouton tant que invalide
        Button saveButton = (Button) dialog.getDialogPane().lookupButton(saveButtonType);
        saveButton.disableProperty().bind(
                tfNom.textProperty().isEmpty()
                        .or(tfPrenom.textProperty().isEmpty())
                        .or(tfEmail.textProperty().isEmpty())
                        .or(tfPassword.textProperty().isEmpty())
                        .or(tfTel.textProperty().isEmpty())
                        .or(cbRole.valueProperty().isNull())
        );
        dialog.showAndWait().ifPresent(response -> {

            if (response == saveButtonType) {

                Utilisateur newUser = new Utilisateur(
                        0,
                        tfNom.getText(),
                        tfPrenom.getText(),
                        tfEmail.getText(),
                        tfPassword.getText(),
                        tfTel.getText(),
                        cbRole.getValue(),
                        java.time.LocalDate.now(),
                        "actif"
                );

                try {
                    service.add(newUser);
                    loadUsers();
                } catch (SQLException ex) {
                    ex.printStackTrace();
                }
            }
        });
    }
    private void startClock() {

        Timeline clock = new Timeline(
                new KeyFrame(Duration.ZERO, e -> {

                    LocalDateTime now = LocalDateTime.now();

                    // Heure
                    DateTimeFormatter timeFormatter =
                            DateTimeFormatter.ofPattern("HH:mm:ss");

                    lblTime.setText(now.format(timeFormatter));

                    // Date
                    DateTimeFormatter dateFormatter =
                            DateTimeFormatter.ofPattern("dd MMM yyyy");

                    lblDate.setText(now.format(dateFormatter));

                }),
                new KeyFrame(Duration.seconds(1))
        );

        clock.setCycleCount(Timeline.INDEFINITE);
        clock.play();
    }



}
