package tn.esprit.controllers;

import tn.esprit.entities.Hebergement;
import tn.esprit.entities.ReservationY;

import tn.esprit.services.HebergementService;
import tn.esprit.services.ReservationHebergementService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Priority;
import javafx.scene.layout.Region;
import javafx.scene.layout.VBox;
import javafx.stage.Modality;
import javafx.stage.Stage;

import java.io.File;
import java.io.IOException;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.List;

public class MesReservationsHebergementController {

    @FXML private ListView<ReservationY> listViewReservation;
    @FXML private Label lblTotal;
    @FXML private Button btnBack;
    @FXML private Button btnRetourSidebar;

    private final ReservationHebergementService reservationService = new ReservationHebergementService();
    private final HebergementService hebergementService = new HebergementService();
    private final ObservableList<ReservationY> data = FXCollections.observableArrayList();

    private int idUserConnecte = 1; // À remplacer par l'ID de l'utilisateur connecté

    @FXML
    public void initialize() {
        chargerReservations();
        setupListView();
    }

    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
        chargerReservations();
    }

    private void chargerReservations() {
        try {
            List<ReservationY> list = reservationService.getByUserId(idUserConnecte);
            System.out.println("Réservations chargées = " + list.size());

            data.clear();
            data.addAll(list);
            listViewReservation.setItems(data);
            lblTotal.setText(String.valueOf(data.size()));
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Erreur", "Impossible de charger les réservations: " + e.getMessage());
        }
    }

    private void setupListView() {
        listViewReservation.setCellFactory(param -> new ListCell<ReservationY>() {
            @Override
            protected void updateItem(ReservationY r, boolean empty) {
                super.updateItem(r, empty);

                if (empty || r == null) {
                    setGraphic(null);
                    setText(null);
                    return;
                }

                // ================= CONTAINER PRINCIPAL =================
                HBox card = new HBox(20);
                card.setPadding(new Insets(18));
                card.setAlignment(Pos.CENTER_LEFT);
                card.setStyle("""
                    -fx-background-color: linear-gradient(to right, #1E5C86, #3A93D1);
                    -fx-background-radius: 25;
                    -fx-effect: dropshadow(gaussian, rgba(0,0,0,0.2), 10, 0, 0, 5);
                """);

                // ================= IMAGE =================
                ImageView imageView = new ImageView();
                imageView.setFitWidth(80);
                imageView.setFitHeight(80);
                imageView.setPreserveRatio(true);

                try {
                    Hebergement h = hebergementService.getHebergementById(r.getHebergementId());
                    if (h != null && h.getImagePath() != null && !h.getImagePath().isEmpty()) {
                        File file = new File(h.getImagePath());
                        if (file.exists()) {
                            Image img = new Image(file.toURI().toString());
                            imageView.setImage(img);
                        } else {
                            setDefaultImage(imageView);
                        }
                    } else {
                        setDefaultImage(imageView);
                    }
                } catch (Exception e) {
                    setDefaultImage(imageView);
                }

                // ================= INFOS =================
                VBox infos = new VBox(8);

                String dateArrivee = r.getDateArrivee() != null ?
                        formatDate(r.getDateArrivee()) : "N/A";
                String dateDepart = r.getDateDepart() != null ?
                        formatDate(r.getDateDepart()) : "N/A";

                Label hebergementNom = new Label("🏨 " + r.getHebergementNom());
                Label dates = new Label("📅 " + dateArrivee + " → " + dateDepart);
                Label personnes = new Label("👥 " + r.getNbPersonnes() + " personne(s)");
                Label prix = new Label("💰 " + r.getPrixTotal() + " DT");
                Label statut = new Label("Statut : " + r.getStatut());

                hebergementNom.setStyle("-fx-text-fill: white; -fx-font-weight: bold; -fx-font-size: 16px;");
                dates.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 14px;");
                personnes.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 14px;");
                prix.setStyle("-fx-text-fill: #FFD166; -fx-font-weight: bold; -fx-font-size: 15px;");
                statut.setStyle("-fx-text-fill: #FF8F00; -fx-font-weight: bold;");

                infos.getChildren().addAll(hebergementNom, dates, personnes, prix, statut);

                // ================= SPACER =================
                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                // ================= ACTIONS =================
                VBox actions = new VBox(15);
                actions.setAlignment(Pos.CENTER);

                Button btnModifier = createIconButton("/images/modifier.png");
                Button btnSupprimer = createIconButton("/images/delete.png");

                boolean editable = "EN_ATTENTE".equals(r.getStatut());
                actions.setVisible(editable);
                actions.setManaged(editable);

                btnModifier.setOnAction(e -> modifierReservation(r));
                btnSupprimer.setOnAction(e -> supprimerReservation(r));

                actions.getChildren().addAll(btnModifier, btnSupprimer);

                // ================= FINAL =================
                card.getChildren().addAll(imageView, infos, spacer, actions);
                setGraphic(card);
            }
        });
    }

    private String formatDate(String dateStr) {
        try {
            LocalDate date = LocalDate.parse(dateStr);
            return date.format(DateTimeFormatter.ofPattern("dd/MM/yyyy"));
        } catch (Exception e) {
            return dateStr;
        }
    }

    private void setDefaultImage(ImageView imageView) {
        try {
            Image defaultImg = new Image(getClass().getResourceAsStream("/images/default-hotel.png"));
            if (defaultImg != null) {
                imageView.setImage(defaultImg);
            } else {
                imageView.setImage(null);
            }
        } catch (Exception e) {
            imageView.setImage(null);
        }
    }

    private Button createIconButton(String path) {
        try {
            ImageView icon = new ImageView(new Image(getClass().getResourceAsStream(path)));
            icon.setFitHeight(22);
            icon.setPreserveRatio(true);

            Button btn = new Button();
            btn.setGraphic(icon);
            btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.15);
                -fx-background-radius: 14;
                -fx-cursor: hand;
                -fx-padding: 8;
            """);

            btn.setOnMouseEntered(e -> btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.35);
                -fx-background-radius: 14;
                -fx-scale-x: 1.1;
                -fx-scale-y: 1.1;
            """));

            btn.setOnMouseExited(e -> btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.15);
                -fx-background-radius: 14;
                -fx-scale-x: 1;
                -fx-scale-y: 1;
            """));

            return btn;
        } catch (Exception e) {
            return new Button("...");
        }
    }

    private void supprimerReservation(ReservationY r) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation");
        alert.setHeaderText("Supprimer la réservation");
        alert.setContentText("Voulez-vous vraiment supprimer cette réservation ?");

        alert.showAndWait().ifPresent(res -> {
            if (res == ButtonType.OK) {
                try {
                    reservationService.supprimer(r.getId());
                    data.remove(r);
                    lblTotal.setText(String.valueOf(data.size()));
                    showAlert("Succès", "Réservation supprimée avec succès");
                } catch (SQLException e) {
                    e.printStackTrace();
                    showAlert("Erreur", "Impossible de supprimer la réservation: " + e.getMessage());
                }
            }
        });
    }

    private void modifierReservation(ReservationY r) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/ModifierReservationHebergement.fxml"));
            Parent root = loader.load();

            ModifierReservationHebergementController controller = loader.getController();
            controller.setReservation(r);
            controller.setOnSaveCallback(this::chargerReservations);

            Stage stage = new Stage();
            stage.setTitle("Modifier la réservation");
            stage.setScene(new Scene(root));
            stage.initModality(Modality.APPLICATION_MODAL);
            stage.showAndWait();

        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Erreur", "Impossible d'ouvrir la fenêtre de modification");
        }
    }

    @FXML
    private void onRetour(ActionEvent e) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/sidebarY.fxml"));
            Parent root = loader.load();

            sidebarYController controller = loader.getController();
            controller.setIdUserConnecte(idUserConnecte);

            Stage stage = (Stage) btnBack.getScene().getWindow();
            stage.getScene().setRoot(root);
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

    @FXML
    private void onRetourSidebar() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/sidebarY.fxml"));
            Parent root = loader.load();

            sidebarYController controller = loader.getController();
            controller.setIdUserConnecte(idUserConnecte);

            Stage stage = (Stage) btnRetourSidebar.getScene().getWindow();
            stage.getScene().setRoot(root);
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}