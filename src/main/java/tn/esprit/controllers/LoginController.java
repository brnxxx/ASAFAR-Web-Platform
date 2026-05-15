package tn.esprit.controllers;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import tn.esprit.utils.PasswordUtils;
import javafx.scene.shape.Polygon;
import javafx.beans.value.ChangeListener;


import javax.swing.text.JTextComponent;
import java.io.IOException;
import java.sql.*;

public class LoginController {

    @FXML private Pane welcomePane;
    @FXML private TextField txtEmail;
    @FXML private PasswordField txtPassword;
    @FXML private Label lblError;
    private final String URL = "jdbc:mysql://localhost:3306/esprit";
    private final String USER = "root";
    private final String PASSWORD = "";

    // =====================================
    // UI INIT
    // =====================================
    @FXML
    public void initialize() {

        Polygon clip = new Polygon();

        ChangeListener<Number> sizeListener = (obs, oldVal, newVal) -> {

            double w = welcomePane.getWidth();
            double h = welcomePane.getHeight();

            clip.getPoints().setAll(
                    0.0, 0.0,
                    w, 0.0,
                    w * 0.75, h,
                    0.0, h
            );
        };

        welcomePane.widthProperty().addListener(sizeListener);
        welcomePane.heightProperty().addListener(sizeListener);

        welcomePane.setClip(clip);
    }





    private void openFaceCamera(int userId) {
        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/FaceCamera.fxml"));

            Parent root = loader.load();

            FaceCameraController controller = loader.getController();
            controller.setIdUser(userId); // ⭐⭐⭐ CRUCIAL

            Stage stage = (Stage) txtEmail.getScene().getWindow();
            stage.setScene(new Scene(root));

        } catch (Exception e) {
            e.printStackTrace();
        }
    }


    // REGISTER
    // =====================================
    @FXML
    private void handleRegisterRedirect() {

        AuthContainerController parent =
                (AuthContainerController)
                        txtEmail.getScene().getRoot().getUserData();

        parent.showRegister();
    }
    @FXML
    private void handleFaceLogin() {

        String email = txtEmail.getText().trim();

        if (email.isEmpty()) {
            showAlert(Alert.AlertType.WARNING,
                    "Email requis",
                    "Veuillez entrer votre email avant FaceID.");
            return;
        }

        String query = "SELECT idUser FROM utilisateur WHERE email = ?";

        try (Connection con =
                     DriverManager.getConnection(URL, USER, PASSWORD);
             PreparedStatement ps = con.prepareStatement(query)) {

            ps.setString(1, email);
            ResultSet rs = ps.executeQuery();

            if (!rs.next()) {
                showAlert(Alert.AlertType.ERROR,
                        "Utilisateur introuvable",
                        "Aucun compte associé à cet email.");
                return;
            }

            int userId = rs.getInt("idUser");

            showAlert(Alert.AlertType.INFORMATION,
                    "FaceID",
                    "Ouverture de la caméra pour vérification.");

            openFaceCamera(userId);

        } catch (SQLException e) {
            e.printStackTrace();

            showAlert(Alert.AlertType.ERROR,
                    "Erreur base de données",
                    "Impossible d'accéder aux utilisateurs.");
        }
    }

    private void showAlert(Alert.AlertType type,
                           String title,
                           String message) {

        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    private void openSidebar(int userId) {
        try {

            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/sidebarB.fxml"));

            Parent root = loader.load();

            sidebarControllerB controller = loader.getController();
            controller.setIdUserConnecte(userId);

            Stage stage = (Stage) txtEmail.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("Accueil");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    public void handleLogin(ActionEvent event) {

        String email = txtEmail.getText().trim().toLowerCase();
        String password = txtPassword.getText().trim();

        if (email.isEmpty() || password.isEmpty()) {
            lblError.setText("Veuillez remplir tous les champs.");
            return;
        }

        // ✅ On récupère AUSSI le role
        String query =
                "SELECT idUser, motDePasse, role FROM utilisateur WHERE email = ?";

        try (Connection con =
                     DriverManager.getConnection(URL, USER, PASSWORD);
             PreparedStatement ps = con.prepareStatement(query)) {

            ps.setString(1, email);
            ResultSet rs = ps.executeQuery();

            if (!rs.next()) {
                lblError.setText("Email ou mot de passe incorrect.");
                return;
            }

            int userId = rs.getInt("idUser");
            String hashedPassword = rs.getString("motDePasse");
            String role = rs.getString("role");

            tn.esprit.services.AuthService authService = new tn.esprit.services.AuthService();

            // ================= PASSWORD CHECK =================
            boolean passwordOK =
                    PasswordUtils.checkPassword(password, hashedPassword);

            // ================= TRUST SCORE =================
            double trustScore =
                    authService.computeTrustScore(
                            userId,
                            0,
                            true,
                            passwordOK
                    );

            // ================= SAVE ATTEMPT =================
            authService.saveLoginAttempt(
                    userId,
                    passwordOK,
                    0,
                    "PASSWORD",
                    passwordOK ? null : "BAD_PASSWORD",
                    trustScore
            );

            // 🔒 Face verification si score faible
            if (trustScore < 60) {
                lblError.setText("🔒 Vérification faciale requise");
                openFaceCamera(userId);
                return;
            }

            // ✅ LOGIN OK → redirection par ROLE
            if (passwordOK) {
                redirectByRole(role, userId);
                return;
            }

            lblError.setText("Mot de passe incorrect.");

        }
        catch (SQLException e) {
            e.printStackTrace();
            lblError.setText("Erreur connexion base");
        }
    }
    private void redirectByRole(String role, int userId) {
        try {
            Stage stage = (Stage) txtEmail.getScene().getWindow();
            Parent root;

            if ("admin".equalsIgnoreCase(role)) {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/backoffice.fxml"));
                root = loader.load();
                BackofficeController controller = loader.getController();
                controller.setIdUserConnecte(userId);
            } else {
                // ✅ 1. Créer le loader
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/sidebarY.fxml"));

                // ✅ 2. Loader le FXML (initialize() s'exécute ici)
                root = loader.load();

                // ✅ 3. Récupérer le contrôleur
                sidebarYController controller = loader.getController();

                // ✅ 4. SETTER L'ID (important : après le load)
                controller.setIdUserConnecte(userId);
                System.out.println("🔑 LoginController envoie ID: " + userId + " à sidebarYController");

                // ✅ 5. MAINTENANT, charger la page avec le bon ID
                //    (dans sidebarYController, setIdUserConnecte() doit charger la page)
            }

            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            lblError.setText("Erreur chargement interface.");
        }
    }

    private int idUserConnecte;
    public int getIdUserConnecte() {
        return idUserConnecte;
    }
    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
    }






}
