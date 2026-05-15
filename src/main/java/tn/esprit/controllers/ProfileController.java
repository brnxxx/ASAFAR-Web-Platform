package tn.esprit.controllers;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.Button;
import javafx.scene.control.Dialog;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.GridPane;
import javafx.stage.Modality;
import javafx.stage.Stage;
import tn.esprit.entities.Utilisateur;
import javafx.geometry.Insets;

import javafx.event.ActionEvent;
import java.io.IOException;
import java.sql.SQLException;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import tn.esprit.services.MailService;


public class ProfileController {
    @FXML
    private Button btnRetour;

    @FXML private Label lblName;
    @FXML private Label lblEmail;
    @FXML private Label lblPhone;
    @FXML private Label lblRole;
    @FXML private Label lblStatus;
    @FXML private ImageView profileImage;
    @FXML
    private Label lblMemberSince;
    @FXML
    private Button btnLogout;

    private int idUser;
    private Utilisateur currentUser;
    private final UtilisateurService service = new UtilisateurService();
    @FXML
    public void initialize() {

    }

    public void setUser(Utilisateur user) {
        this.currentUser = user;
        refreshUI();
        loadUserImage();
    }
    private void refreshUI() {

        if (currentUser == null)
            return;

        /* info utilisat*/

        lblName.setText(
                (currentUser.getNom() != null ? currentUser.getNom() : "")
                        + " " +
                        (currentUser.getPrenom() != null ? currentUser.getPrenom() : "")
        );

        lblEmail.setText(
                currentUser.getEmail() != null
                        ? currentUser.getEmail()
                        : "-"
        );

        lblPhone.setText(
                currentUser.getTelephone() != null
                        ? currentUser.getTelephone()
                        : "-"
        );

        /*role*/

        lblRole.getStyleClass().setAll("badge-base");

        String role = currentUser.getRole();

        if ("client".equalsIgnoreCase(role)) {

            lblRole.setText("CLIENT");
            lblRole.getStyleClass().add("badge-client");

        } else if ("admin".equalsIgnoreCase(role)) {

            lblRole.setText("ADMIN");
            lblRole.getStyleClass().add("badge-admin");

        } else {

            lblRole.setText("-");
        }

        /* status */

        lblStatus.getStyleClass().setAll("badge-base");

        String statut = currentUser.getStatut();

        if ("actif".equalsIgnoreCase(statut)) {

            lblStatus.setText("● COMPTE ACTIF");
            lblStatus.getStyleClass().add("badge-active");

        } else if ("bloqué".equalsIgnoreCase(statut)) {

            lblStatus.setText("● COMPTE BLOQUÉ");
            lblStatus.getStyleClass().add("badge-blocked");

        } else {

            lblStatus.setText("-");
        }


        if (currentUser.getDateInscription() != null) {

            java.time.LocalDate inscription =
                    currentUser.getDateInscription();

            java.time.LocalDate today =
                    java.time.LocalDate.now();

            java.time.Period period =
                    java.time.Period.between(inscription, today);

            int years = period.getYears();
            int months = period.getMonths();
            int days = period.getDays();

            if (years > 0) {
                lblMemberSince.setText(years + " an(s)");
            }
            else if (months > 0) {
                lblMemberSince.setText(months + " mois");
            }
            else {
                lblMemberSince.setText(days + " jour(s)");
            }

        } else {
            lblMemberSince.setText("-");
        }

    }

    @FXML
    private void handleDeleteAccount() {

        if (currentUser == null) return;

        Alert confirm = new Alert(Alert.AlertType.CONFIRMATION);
        confirm.setTitle("Confirmation");
        confirm.setHeaderText("Supprimer votre compte ?");
        confirm.setContentText("Cette action est irréversible.");

        confirm.showAndWait().ifPresent(response -> {

            if (response == ButtonType.OK) {

                try {
                    service.delete(currentUser);

                    Alert success = new Alert(Alert.AlertType.INFORMATION);
                    success.setContentText("Compte supprimé !");
                    success.show();

                    Stage stage = (Stage) lblName.getScene().getWindow();
                    stage.close();

                } catch (SQLException e) {
                    showError("Erreur suppression !");
                }
            }
        });
    }

    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setContentText(message);
        alert.show();
    }
    @FXML
    private void handleEditProfile() {

        if (currentUser == null) return;

        Dialog<ButtonType> dialog = new Dialog<>();
        dialog.setTitle("Modifier Profil");

        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/profile.css").toExternalForm()
        );
        dialog.getDialogPane().getStyleClass().add("dialog-pane");

        ButtonType saveButtonType =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);

        dialog.getDialogPane().getButtonTypes()
                .addAll(ButtonType.CANCEL, saveButtonType);

        //champs
        TextField tfNom = new TextField(currentUser.getNom());
        TextField tfPrenom = new TextField(currentUser.getPrenom());
        TextField tfEmail = new TextField(currentUser.getEmail());
        TextField tfTel = new TextField(currentUser.getTelephone());

        Label emailError = new Label();
        Label telError = new Label();

        emailError.getStyleClass().add("error-label");
        telError.getStyleClass().add("error-label");

        // valid email
        tfEmail.textProperty().addListener((obs, oldVal, newVal) -> {

            if (!newVal.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {

                tfEmail.getStyleClass().remove("field-valid");
                if (!tfEmail.getStyleClass().contains("field-error"))
                    tfEmail.getStyleClass().add("field-error");

                emailError.setText("Email invalide");

            } else {

                tfEmail.getStyleClass().remove("field-error");
                if (!tfEmail.getStyleClass().contains("field-valid"))
                    tfEmail.getStyleClass().add("field-valid");

                emailError.setText("");
            }
        });

        // val tel
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {

            // Autoriser uniquement chiffres
            if (!newVal.matches("\\d*")) {
                tfTel.setText(newVal.replaceAll("[^\\d]", ""));
                return;
            }

            if (newVal.length() != 8) {

                tfTel.getStyleClass().remove("field-valid");
                if (!tfTel.getStyleClass().contains("field-error"))
                    tfTel.getStyleClass().add("field-error");

                telError.setText("Le numéro doit contenir exactement 8 chiffres");

            } else {

                tfTel.getStyleClass().remove("field-error");
                if (!tfTel.getStyleClass().contains("field-valid"))
                    tfTel.getStyleClass().add("field-valid");

                telError.setText("");
            }
        });

        GridPane grid = new GridPane();
        grid.setHgap(20);
        grid.setVgap(12);
        grid.setPadding(new javafx.geometry.Insets(25));

        grid.add(new Label("Nom:"), 0, 0);
        grid.add(tfNom, 1, 0);

        grid.add(new Label("Prénom:"), 0, 1);
        grid.add(tfPrenom, 1, 1);

        grid.add(new Label("Email:"), 0, 2);
        grid.add(tfEmail, 1, 2);
        grid.add(emailError, 1, 3);

        grid.add(new Label("Téléphone:"), 0, 4);
        grid.add(tfTel, 1, 4);
        grid.add(telError, 1, 5);

        dialog.getDialogPane().setContent(grid);

        //save
        Button saveButton =
                (Button) dialog.getDialogPane().lookupButton(saveButtonType);

        saveButton.disableProperty().bind(
                tfNom.textProperty().isEmpty()
                        .or(tfPrenom.textProperty().isEmpty())
                        .or(tfEmail.textProperty().isEmpty())
                        .or(tfTel.textProperty().isEmpty())
        );

        //act save
        dialog.showAndWait().ifPresent(response -> {

            if (response == saveButtonType) {

                // Sécurité finale
                if (!tfEmail.getText().matches("^[A-Za-z0-9+_.-]+@(.+)$")
                        || tfTel.getText().length() != 8) {

                    Alert alert = new Alert(Alert.AlertType.ERROR);
                    alert.setContentText("Veuillez corriger les champs invalides !");
                    alert.show();
                    return;
                }

                currentUser.setNom(tfNom.getText());
                currentUser.setPrenom(tfPrenom.getText());
                currentUser.setEmail(tfEmail.getText());
                currentUser.setTelephone(tfTel.getText());

                try {
                    service.modifier(currentUser);
                    refreshUI();
                } catch (SQLException e) {
                    showError("Erreur lors de la mise à jour !");
                }
            }
        });
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;

        // charger utilisateur connecté depuis DB
        Utilisateur user = service.getById(idUser);

        if (user != null) {
            setUser(user);
        }
    }

    private void loadUserImage() {

        if (profileImage == null || currentUser == null)
            return;

        try {

            String path = currentUser.getImage();
            System.out.println("IMAGE DB = " + path);

            if (path == null || path.trim().isEmpty()) {
                profileImage.setImage(null);
                return;
            }

            Image img;

            java.io.File file = new java.io.File(path);

            // image stockée sur disque
            if (file.exists()) {
                img = new Image(file.toURI().toString());
            }
            else {
                var resource = getClass().getResource("/images/" + path);

                if (resource == null) {
                    profileImage.setImage(null);
                    return;
                }

                img = new Image(resource.toExternalForm());
            }

            profileImage.setImage(img);

        } catch (Exception e) {
            e.printStackTrace();
            profileImage.setImage(null); // rien afficher
        }
    }

    @FXML
    private void handleChangePassword() {

        TextInputDialog dialog = new TextInputDialog();
        dialog.setTitle("Réinitialisation");
        dialog.setHeaderText("Entrer votre email");
        dialog.setContentText("Email :");
        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/profile.css").toExternalForm()
        );


        dialog.showAndWait().ifPresent(email -> {

            if (!email.equalsIgnoreCase(currentUser.getEmail())) {
                showError("Email incorrect !");
                return;
            }

            String code = generateCode();

            // envoyer mail
            MailService.sendMail(email, code);

            askCodeAndChangePassword(code);
        });
    }

    private String generateCode() {
        return String.valueOf((int)(Math.random() * 900000) + 100000);
    }
    private void askCodeAndChangePassword(String realCode) {

        Dialog<ButtonType> dialog = new Dialog<>();
        dialog.setTitle("Vérification");

        TextField tfCode = new TextField();
        PasswordField newPass = new PasswordField();

        GridPane grid = new GridPane();
        grid.setHgap(10);
        grid.setVgap(10);

        grid.add(new Label("Code reçu:"), 0, 0);
        grid.add(tfCode, 1, 0);

        grid.add(new Label("Nouveau mot de passe:"), 0, 1);
        grid.add(newPass, 1, 1);

        dialog.getDialogPane().setContent(grid);
        dialog.getDialogPane().getButtonTypes().addAll(ButtonType.OK, ButtonType.CANCEL);

        dialog.showAndWait().ifPresent(response -> {

            if (response == ButtonType.OK) {

                if (!tfCode.getText().equals(realCode)) {
                    showError("Code incorrect !");
                    return;
                }

                try {
                    service.updatePassword(currentUser.getIdUser(), newPass.getText());
                } catch (Exception e) {
                    showError("Erreur modification !");
                }
            }
        });
    }
    @FXML
    private void handleLogout(ActionEvent event) {

        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/AuthContainer.fxml"));

            Parent root = loader.load();

            Stage stage = (Stage) ((Node) event.getSource())
                    .getScene()
                    .getWindow();

            stage.setScene(new Scene(root));
            stage.setTitle("Login");

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    @FXML
    private void goBack() {

        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/sidebarB.fxml"));

            Parent root = loader.load();

            // récupérer controller sidebar
            sidebarControllerB controller = loader.getController();

            // renvoyer utilisateur connecté
            controller.setIdUserConnecte(idUser);

            Stage stage =
                    (Stage) btnRetour.getScene().getWindow();

            stage.setScene(new Scene(root));
            stage.setTitle("Accueil");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }



}
