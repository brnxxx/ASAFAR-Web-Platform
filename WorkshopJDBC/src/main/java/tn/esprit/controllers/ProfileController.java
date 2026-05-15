package tn.esprit.controllers;

import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.control.Button;
import javafx.scene.control.Dialog;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import tn.esprit.entities.Utilisateur;

import javafx.geometry.Insets;
import java.sql.SQLException;

public class ProfileController {

    @FXML private Label lblName;
    @FXML private Label lblEmail;
    @FXML private Label lblPhone;
    @FXML private Label lblRole;
    @FXML private Label lblStatus;

    private Utilisateur currentUser;
    private final UtilisateurService service = new UtilisateurService();

    @FXML
    public void initialize() {

        Utilisateur user = service.getById(4);

        if (user != null) {
            setUser(user);
        }
    }

    public void setUser(Utilisateur user) {
        this.currentUser = user;
        refreshUI();
    }
    private void refreshUI() {

        if (currentUser == null) return;

        lblName.setText(currentUser.getNom() + " " + currentUser.getPrenom());
        lblEmail.setText(currentUser.getEmail());
        lblPhone.setText(currentUser.getTelephone());

        /* ================= ROLE ================= */

        lblRole.getStyleClass().setAll("badge-base");

        if (currentUser.getRole().equalsIgnoreCase("client")) {
            lblRole.setText("CLIENT");
            lblRole.getStyleClass().add("badge-client");
        } else {
            lblRole.setText("ADMIN");
            lblRole.getStyleClass().add("badge-admin");
        }

        /* ================= STATUS ================= */

        lblStatus.getStyleClass().setAll("badge-base");

        if (currentUser.getStatut().equalsIgnoreCase("actif")) {
            lblStatus.setText("● COMPTE ACTIF");
            lblStatus.getStyleClass().add("badge-active");
        } else {
            lblStatus.setText("● COMPTE BLOQUÉ");
            lblStatus.getStyleClass().add("badge-blocked");
        }
    }



    @FXML
    private void handleLogout() {
        Stage stage = (Stage) lblName.getScene().getWindow();
        stage.close();
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

        // 🔥 Lier le CSS
        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/profile.css").toExternalForm()
        );
        dialog.getDialogPane().getStyleClass().add("dialog-pane");

        ButtonType saveButtonType =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);

        dialog.getDialogPane().getButtonTypes()
                .addAll(ButtonType.CANCEL, saveButtonType);

        // ================= CHAMPS =================
        TextField tfNom = new TextField(currentUser.getNom());
        TextField tfPrenom = new TextField(currentUser.getPrenom());
        TextField tfEmail = new TextField(currentUser.getEmail());
        TextField tfTel = new TextField(currentUser.getTelephone());

        Label emailError = new Label();
        Label telError = new Label();

        emailError.getStyleClass().add("error-label");
        telError.getStyleClass().add("error-label");

        // ================= VALIDATION EMAIL =================
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

        // ================= VALIDATION TELEPHONE =================
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

        // ================= LAYOUT =================
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

        // ================= BOUTON SAVE =================
        Button saveButton =
                (Button) dialog.getDialogPane().lookupButton(saveButtonType);

        saveButton.disableProperty().bind(
                tfNom.textProperty().isEmpty()
                        .or(tfPrenom.textProperty().isEmpty())
                        .or(tfEmail.textProperty().isEmpty())
                        .or(tfTel.textProperty().isEmpty())
        );

        // ================= ACTION SAVE =================
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








}
