package tn.esprit.controllers;
import tn.esprit.entities.Excursion;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.FlowPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import tn.esprit.services.ExcursionService;

import java.io.File;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;

public class AfficherEB implements Initializable {

    @FXML private FlowPane excursionContainer;
    @FXML private TextField txtDestination;
    @FXML private DatePicker datePicker;
    @FXML private Button btnRechercher;
    private final ExcursionService excursionService = new ExcursionService();

    // =====================================================
    // INITIALIZE
    // =====================================================
    @Override
    public void initialize(URL url, ResourceBundle rb) {


        javafx.application.Platform.runLater(() -> {
            chargerRecommandations();
        });


        btnRechercher.setOnAction(e -> ouvrirPageResultats());
    }

    // =====================================================
    // NAVIGATION RESULTATS
    // =====================================================
    @FXML
    private void ouvrirPageResultats() {

        try {
            FXMLLoader loader =
                    new FXMLLoader(getClass().getResource("/ResultatsB.fxml"));

            Parent root = loader.load();

            ResultatsCB controller = loader.getController();

            controller.chargerResultats(
                    txtDestination.getText(),
                    datePicker.getValue()
            );

            Stage stage = (Stage) btnRechercher.getScene().getWindow();
            stage.getScene().setRoot(root);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    // =====================================================
    // RECOMMANDATIONS
    // =====================================================
    public void chargerRecommandations() {

        excursionContainer.getChildren().clear();

        try {
            List<Excursion> excursions =
                    excursionService.getRecommendedExcursions();


            if (excursions == null || excursions.isEmpty()) {
                Label empty = new Label("Aucune recommandation disponible.");
                empty.getStyleClass().add("empty-label");
                excursionContainer.getChildren().add(empty);
                return;
            }

            for (Excursion e : excursions) {
                excursionContainer.getChildren().add(createCard(e));
            }

        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }



    // =====================================================
    // CARD VIEW
    // =====================================================
    private VBox createCard(Excursion e) {

        VBox card = new VBox(12);
        card.setPrefWidth(260);
        card.getStyleClass().add("excursion-card");

        // ================= IMAGE =================
        ImageView image = new ImageView();
        image.setFitWidth(260);
        image.setFitHeight(160);
        image.setPreserveRatio(false);

        try {

            Image img;
            String path = e.getImageUrl();

            if (path != null && !path.isBlank()) {

                File file = new File(path);

                if (file.exists()) {
                    // image uploadée depuis le disque
                    img = new Image(file.toURI().toString(), true);
                } else {
                    // fallback si fichier introuvable
                    img = new Image(
                            getClass()
                                    .getResource("/images/default.jpg")
                                    .toExternalForm()
                    );
                }

            } else {
                // image par défaut
                img = new Image(
                        getClass()
                                .getResource("/images/default.jpg")
                                .toExternalForm()
                );
            }

            image.setImage(img);

        } catch (Exception ex) {

            image.setImage(
                    new Image(
                            getClass()
                                    .getResource("/images/default.jpg")
                                    .toExternalForm()
                    )
            );
        }


        // ================= TITRE =================
        Label titre = new Label("🌍 " + e.getTitre());
        titre.getStyleClass().add("card-title");

        // ================= LIEU =================
        Label lieu = new Label("📍 " + e.getLieu());
        lieu.getStyleClass().add("card-sub");

        // ================= PRIX =================
        Label prix = new Label("💰 " + e.getPrixAdulte() + " DT");
        prix.getStyleClass().add("card-price");

        // ================= BOUTON =================
        Button btn = new Button("Voir détails");
        btn.getStyleClass().add("card-button");
        btn.setMaxWidth(Double.MAX_VALUE);
        btn.setPrefHeight(45);

        HBox buttonBox = new HBox(btn);
        buttonBox.setAlignment(Pos.CENTER);

        card.getChildren().addAll(image, titre, lieu, prix, buttonBox);

        return card;
    }

    // =====================================================
    // OUVRIR DETAILS
    // =====================================================
    private void ouvrirDetails(Excursion e) {
        System.out.println("Excursion sélectionnée : " + e.getTitre());
    }



}
