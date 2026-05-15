package tn.esprit.controllers;
import javafx.beans.value.ChangeListener;
import javafx.scene.shape.Polygon;
import tn.esprit.utils.PasswordUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.layout.Pane;
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
    private Pane welcomePane;
    @FXML
    public void initialize() {
        allowIntegerOnly(tfTel);
        System.out.println("ImageView injected = " + imageViewUser);

        setupValidation();

        applyDiagonalClip();

    }
    @FXML
    private void handleCreateAccount() {

        lblError.setText("");

        if (!validateForm()) {
            showGlobalError("Veuillez corriger les champs !");
            return;
        }

        // Vérifier image choisie
        if (imagePath == null || imagePath.isEmpty()) {
            showGlobalError("Veuillez choisir une image !");
            return;
        }

        try {

            Utilisateur u = new Utilisateur();

            u.setNom(tfNom.getText());
            u.setPrenom(tfPrenom.getText());
            u.setEmail(tfEmail.getText());
            String hashed = PasswordUtils.hashPassword(tfPassword.getText());
            u.setMotDePasse(hashed);
            u.setTelephone(tfTel.getText());
            u.setRole("client");
            u.setStatut("actif");
            u.setImage(imagePath);

            service.add(u);

            showGlobalError("Compte créé avec succès !");

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

        //erreur
        lblError.getStyleClass().removeAll("success-label");
        if (!lblError.getStyleClass().contains("error-label")) {
            lblError.getStyleClass().add("error-label");
        }
    }


    private void setupValidation() {

        //nom
        tfNom.textProperty().addListener((obs, oldVal, newVal) -> {

            if (newVal.trim().length() < 2) {
                setError(tfNom);
                showError(errNom, "Nom trop court");
            } else {
                setValid(tfNom);
                hideError(errNom);
            }
        });

        // prenom
        tfPrenom.textProperty().addListener((obs, oldVal, newVal) -> {

            if (newVal.trim().length() < 2) {
                setError(tfPrenom);
                showError(errPrenom, "Prénom invalide");
            } else {
                setValid(tfPrenom);
                hideError(errPrenom);
            }
        });

        //mail
        tfEmail.textProperty().addListener((obs, oldVal, newVal) -> {

            if (!newVal.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
                setError(tfEmail);
                showError(errEmail, "Email invalide");
            } else {
                setValid(tfEmail);
                hideError(errEmail);
            }
        });

        //tel
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

        // psswd
        tfPassword.textProperty().addListener((obs, o, n) -> {

            if (n.length() < 6) {
                setError(tfPassword);
                showError(errPassword, "Minimum 6 caractères");
            } else {
                setValid(tfPassword);
                hideError(errPassword);
            }
        });

        // confirm psswd
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

    private String imagePath;

    private File selectedImageFile; // pour sauvegarder
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

    @FXML
    private void handleLoginRedirect() {

        AuthContainerController parent =
                (AuthContainerController)
                        tfNom.getScene().getRoot().getUserData();

        parent.showLogin();
    }
    private void updateClip() {

        double w = welcomePane.getWidth();
        double h = welcomePane.getHeight();

        if (w <= 0 || h <= 0) return;

        double incline = 180;

        Polygon clip = new Polygon(
                incline, 0.0,
                w,       0.0,
                w,       h,
                0.0,     h
        );

        welcomePane.setClip(clip);
    }

    private void applyDiagonalClip() {

        ChangeListener<Number> sizeListener =
                (obs, oldVal, newVal) -> updateClip();

        welcomePane.widthProperty().addListener(sizeListener);
        welcomePane.heightProperty().addListener(sizeListener);

        // 1 calcul
        updateClip();
    }

    private boolean validateForm() {

        boolean valid = true;

        if (tfNom.getText().trim().length() < 2) {
            setError(tfNom);
            showError(errNom, "Nom invalide");
            valid = false;
        }

        // prenom
        if (tfPrenom.getText().trim().length() < 2) {
            setError(tfPrenom);
            showError(errPrenom, "Prénom invalide");
            valid = false;
        }

        //mail
        if (!tfEmail.getText().matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
            setError(tfEmail);
            showError(errEmail, "Email invalide");
            valid = false;
        }

        //tel
        if (!tfTel.getText().matches("\\d{8}")) {
            setError(tfTel);
            showError(errTel, "8 chiffres requis");
            valid = false;
        }

        //psswd
        if (tfPassword.getText().length() < 6) {
            setError(tfPassword);
            showError(errPassword, "Minimum 6 caractères");
            valid = false;
        }

        //confirm psswd
        if (!tfPassword.getText().equals(tfConfirmPassword.getText())) {
            setError(tfConfirmPassword);
            showError(errConfirm, "Mots de passe différents");
            valid = false;
        }

        return valid;
    }
//empêcher l’utilisateur de taper autre chose que des chiffres
    private void allowIntegerOnly(TextField tf) {
        tf.textProperty().addListener((obs, oldV, newV) -> {
            if (!newV.matches("\\d*"))
                tf.setText(newV.replaceAll("[^\\d]", ""));
        });
    }

}
