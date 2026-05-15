package tn.esprit.controllers;
import tn.esprit.entities.Excursion;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Priority;
import javafx.scene.layout.Region;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import tn.esprit.services.ExcursionService;
import java.io.File;
import java.time.LocalDate;
import java.util.List;
public class ResultatsCB {

    // ========================= FXML =========================
    @FXML private VBox resultsContainer;
    @FXML private Label lblTitre;
    @FXML private Button btnBack;
    @FXML private Button btnRechercher;
    @FXML private TextField txtDestination;
    @FXML private DatePicker datePicker;

    // ========================= SERVICE =========================
    private final ExcursionService service = new ExcursionService();

    private String currentDestination;
    private LocalDate currentDate;

    @FXML
    private void initialize() {
        try {
            Image img = new Image(
                    getClass().getResourceAsStream("/images/retour.png")
            );

            ImageView icon = new ImageView(img);
            icon.setFitWidth(32);
            icon.setFitHeight(32);
            icon.setPreserveRatio(true);

            btnBack.setGraphic(icon);
            btnBack.setPrefWidth(45);
            btnBack.setPrefHeight(45);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    // ============================================================
    // CHARGEMENT DES RESULTATS
    // ============================================================

    public void chargerResultats(String destination) {
        chargerResultats(destination, null);
    }

    public void chargerResultats(String destination, LocalDate date) {

        currentDestination = destination;
        currentDate = date;

        txtDestination.setText(destination);
        datePicker.setValue(date);

        lblTitre.setText("Attractions à " + destination);

        List<Excursion> list = service.rechercherParLieu(destination);
        afficherListe(list);
    }

    // ============================================================
    // ACTION RECHERCHE
    // ============================================================

    @FXML
    private void onRechercher(ActionEvent e) {

        String dest = txtDestination.getText() == null ? "" : txtDestination.getText().trim();
        LocalDate date = datePicker.getValue();

        if (dest.isEmpty()) {
            lblTitre.setText("Veuillez saisir une destination");
            resultsContainer.getChildren().clear();
            return;
        }

        chargerResultats(dest, date);
    }

    // ============================================================
    // ACTION RETOUR
    // ============================================================

    @FXML
    private void onRetour(ActionEvent e) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/sidebarB.fxml"));
            Parent root = loader.load();

            Stage stage = (Stage) btnBack.getScene().getWindow();
            stage.getScene().setRoot(root);

        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

    // ============================================================
    // AFFICHAGE LISTE
    // ============================================================

    private void afficherListe(List<Excursion> list) {

        resultsContainer.getChildren().clear();

        if (list == null || list.isEmpty()) {
            Label empty = new Label("Aucune excursion trouvée.");
            empty.getStyleClass().add("empty-label");
            resultsContainer.getChildren().add(empty);
            return;
        }

        for (Excursion ex : list) {
            resultsContainer.getChildren().add(createRow(ex));
        }
    }

    // ============================================================
    // CREATION CARTE RESULTAT
    // ============================================================
    private HBox createRow(Excursion e) {

        HBox card = new HBox(30);
        card.getStyleClass().add("result-item");
        card.setAlignment(Pos.CENTER_LEFT);

        // ================= IMAGE =================
        ImageView imageView = new ImageView();
        imageView.setFitWidth(240);
        imageView.setFitHeight(170);
        imageView.setPreserveRatio(false);
        imageView.setSmooth(true);

        Image image = chargerImage(e.getImageUrl());
        imageView.setImage(image);

        imageView.getStyleClass().add("result-image");

        // ================= CONTENU =================
        VBox content = new VBox(12);
        content.setAlignment(Pos.TOP_LEFT);

        // 🔥 TRÈS IMPORTANT
        HBox.setHgrow(content, Priority.ALWAYS);

        Label titre = new Label(e.getTitre());
        titre.getStyleClass().add("result-title");

        Label desc = new Label(e.getDescription());
        desc.getStyleClass().add("result-description");
        desc.setWrapText(true);

        Button btnReserver = new Button("Réserver");
        btnReserver.getStyleClass().add("btn-reserver");

        btnReserver.setPrefWidth(160);
        btnReserver.setPrefHeight(40);

        btnReserver.setOnAction(ev -> {

            try {

                FXMLLoader loader =
                        new FXMLLoader(getClass().getResource("/ReservationPopupB.fxml"));

                Parent root = loader.load();

                ReservationPopupControllerB controller = loader.getController();
                controller.setExcursion(e , datePicker.getValue());

                Stage stage = new Stage();
                stage.setScene(new javafx.scene.Scene(root));
                stage.setTitle("Réservation");
                stage.showAndWait();

            } catch (Exception ex) {
                ex.printStackTrace();
            }
        });


        // ===== Ligne bas avec bouton à droite =====
        HBox bottomRow = new HBox();
        Region spacer = new Region();
        HBox.setHgrow(spacer, Priority.ALWAYS);

        bottomRow.getChildren().addAll(spacer, btnReserver);

        content.getChildren().addAll(titre, desc, bottomRow);

        card.getChildren().addAll(imageView, content);

        return card;
    }


    private Image chargerImage(String path) {

        Image defaultImage = new Image(
                getClass()
                        .getResource("/images/default.jpg")
                        .toExternalForm()
        );

        try {

            if (path == null || path.isBlank())
                return defaultImage;

            path = path.trim();

            System.out.println("VALEUR DB = [" + path + "]");

            // --------------------------------------------------
            // IMAGE UPLOADÉE (CHEMIN DISQUE)
            // --------------------------------------------------
            File file = new File(path);

            if (file.exists()) {
                System.out.println("Image chargée depuis DISQUE");
                return new Image(file.toURI().toString(), true);
            }

            // --------------------------------------------------
            // IMAGE DANS RESOURCES
            // --------------------------------------------------
            var resource = getClass().getResource("/images/" + path);

            if (resource != null) {
                System.out.println("Image chargée depuis RESOURCES");
                return new Image(resource.toExternalForm(), true);
            }

        } catch (Exception e) {
            e.printStackTrace();
        }


        System.out.println("Image DEFAULT utilisée");
        return defaultImage;
    }




}
