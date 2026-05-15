package tn.esprit.controllers;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import tn.esprit.entities.Utilisateur;

import javafx.scene.image.ImageView;

import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;

public class CreateAccountController {

    @FXML private TextField tfNom;
    @FXML private TextField tfPrenom;
    @FXML private TextField tfEmail;
    @FXML private TextField tfTel;
    @FXML private PasswordField tfPassword;
    @FXML private PasswordField tfConfirmPassword;
    @FXML private Label lblError;
    @FXML private Label errNom;
    @FXML private Label errPrenom;
    @FXML private Label errEmail;
    @FXML private Label errTel;
    @FXML private Label errPassword;
    @FXML private Label errConfirm;
    private UtilisateurService service = new UtilisateurService();



    @FXML
    public void initialize() {

        System.out.println("ImageView injected = " + imageViewUser);
        setupValidation();
    }
    @FXML
    private void handleCreateAccount() {

        lblError.setText("");

        try {

            // ================= VALIDATIONS =================

            if (tfNom.getText().isEmpty()
                    || tfPrenom.getText().isEmpty()
                    || tfEmail.getText().isEmpty()
                    || tfTel.getText().isEmpty()
                    || tfPassword.getText().isEmpty()
                    || tfConfirmPassword.getText().isEmpty()) {

                showGlobalError("Tous les champs sont obligatoires !");
                return;
            }

            if (!tfEmail.getText().matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
                showGlobalError("Email invalide !");
                return;
            }

            if (!tfTel.getText().matches("\\d{8}")) {
                showGlobalError("Téléphone doit contenir 8 chiffres !");
                return;
            }

            if (!tfPassword.getText().equals(tfConfirmPassword.getText())) {
                showGlobalError("Les mots de passe ne correspondent pas !");
                return;
            }

            // ================= CREATION UTILISATEUR =================

            Utilisateur u = new Utilisateur();
            u.setImage(imagePath);

            u.setNom(tfNom.getText());
            u.setPrenom(tfPrenom.getText());
            u.setEmail(tfEmail.getText());
            u.setMotDePasse(tfPassword.getText());
            u.setTelephone(tfTel.getText());

            // valeurs automatiques
            u.setRole("client");
            u.setStatut("actif");

            // ================= INSERT DB =================

            service.add(u);

            System.out.println("Utilisateur ajouté en base ✔");

            showGlobalError("Compte créé avec succès !");
            lblError.getStyleClass().add("success-label");

        } catch (Exception e) {
            e.printStackTrace();
            showGlobalError("Erreur lors de la création !");
        }
    }

    private void showGlobalError(String message) {

        lblError.setText(message);

        // rendre visible
        lblError.setVisible(true);
        lblError.setManaged(true);

        // style erreur par défaut
        lblError.getStyleClass().removeAll("success-label");
        if (!lblError.getStyleClass().contains("error-label")) {
            lblError.getStyleClass().add("error-label");
        }
    }


    private void setupValidation() {

        // ===== NOM =====
        tfNom.textProperty().addListener((obs, oldVal, newVal) -> {

            if (newVal.trim().length() < 2) {
                setError(tfNom);
                showError(errNom, "Nom trop court");
            } else {
                setValid(tfNom);
                hideError(errNom);
            }
        });

        // ===== PRENOM =====
        tfPrenom.textProperty().addListener((obs, oldVal, newVal) -> {

            if (newVal.trim().length() < 2) {
                setError(tfPrenom);
                showError(errPrenom, "Prénom invalide");
            } else {
                setValid(tfPrenom);
                hideError(errPrenom);
            }
        });

        // ===== EMAIL =====
        tfEmail.textProperty().addListener((obs, oldVal, newVal) -> {

            if (!newVal.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
                setError(tfEmail);
                showError(errEmail, "Email invalide");
            } else {
                setValid(tfEmail);
                hideError(errEmail);
            }
        });

        // ===== TELEPHONE =====
        tfTel.textProperty().addListener((obs, oldVal, newVal) -> {

            if (!newVal.matches("\\d*")) {
                tfTel.setText(newVal.replaceAll("[^\\d]", ""));
                return;
            }

            if (newVal.length() != 8) {
                setError(tfTel);
                showError(errTel, "8 chiffres requis");
            } else {
                setValid(tfTel);
                hideError(errTel);
            }
        });

        // ===== PASSWORD =====
        tfPassword.textProperty().addListener((obs, o, n) -> {

            if (n.length() < 6) {
                setError(tfPassword);
                showError(errPassword, "Minimum 6 caractères");
            } else {
                setValid(tfPassword);
                hideError(errPassword);
            }
        });

        // ===== CONFIRM PASSWORD =====
        tfConfirmPassword.textProperty().addListener((obs, o, n) -> {

            if (!n.equals(tfPassword.getText())) {
                setError(tfConfirmPassword);
                showError(errConfirm, "Les mots de passe ne correspondent pas");
            } else {
                setValid(tfConfirmPassword);
                hideError(errConfirm);
            }
        });
    }

    private void setValid(Control field) {
        field.getStyleClass().remove("field-error");
        if (!field.getStyleClass().contains("field-valid"))
            field.getStyleClass().add("field-valid");
    }

    private void setError(Control field) {
        field.getStyleClass().remove("field-valid");
        if (!field.getStyleClass().contains("field-error"))
            field.getStyleClass().add("field-error");
    }
    @FXML
    private void handleLoginRedirect() {

        try {

            Parent root = FXMLLoader.load(
                    getClass().getResource("/Login.fxml")
            );

            Stage stage = (Stage) tfNom.getScene().getWindow();
            stage.setScene(new Scene(root));

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private void showError(Label label, String message) {
        label.setText(message);
        label.setVisible(true);
        label.setManaged(true);
    }

    private void hideError(Label label) {
        label.setVisible(false);
        label.setManaged(false);
    }


    @FXML
    private ImageView imageViewUser;

    private String imagePath; // chemin sauvegardé en BD

    private File selectedImageFile; // pour sauvegarder plus tard
    @FXML
    private void handleUploadImage() {

        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Choisir une image");

        fileChooser.getExtensionFilters().add(
                new FileChooser.ExtensionFilter(
                        "Images (*.png, *.jpg, *.jpeg)",
                        "*.png", "*.jpg", "*.jpeg")
        );

        Stage stage = (Stage) imageViewUser.getScene().getWindow();
        File file = fileChooser.showOpenDialog(stage);

        if (file != null) {
            try {

                String uploadDir = "uploads/";
                File directory = new File(uploadDir);

                if (!directory.exists()) {
                    directory.mkdirs();
                }

                String fileName = System.currentTimeMillis() + "_" + file.getName();

                Path destination = Paths.get(uploadDir + fileName);

                Files.copy(
                        file.toPath(),
                        destination,
                        StandardCopyOption.REPLACE_EXISTING
                );

                // ✅ CHEMIN SAUVEGARDÉ EN BD
                imagePath = "uploads/" + fileName;

                Image image = new Image(destination.toUri().toString());
                imageViewUser.setImage(image);

                System.out.println("Image upload OK : " + imagePath);

            } catch (IOException e) {
                e.printStackTrace();
                showGlobalError("Erreur lors du chargement de l'image");
            }
        }
    }


    private String saveImageToProject(File file) throws IOException {

        String uploadDir = "uploads/";

        File directory = new File(uploadDir);
        if (!directory.exists()) {
            directory.mkdirs();
        }

        String fileName = System.currentTimeMillis() + "_" + file.getName();

        Path destination = Paths.get(uploadDir + fileName);

        Files.copy(file.toPath(), destination, StandardCopyOption.REPLACE_EXISTING);

        return destination.toString();
    }






}
