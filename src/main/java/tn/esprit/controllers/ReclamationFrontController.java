package tn.esprit.controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.layout.*;
import tn.esprit.entities.Reclamation;
import tn.esprit.services.ReclamationService;
import tn.esprit.utils.MyDatabase;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

public class ReclamationFrontController {

    @FXML
    private ListView<Reclamation> reclamationListView;

    private final ReclamationService service =
            new ReclamationService();

    private final ObservableList<Reclamation> data =
            FXCollections.observableArrayList();

    // utilisateur connecté
    private int idUser;

    // ================= INITIALIZE =================
    @FXML
    public void initialize() {

        // IMPORTANT : on prépare seulement le design ici
        setupListViewDesign();

        // liaison observable list
        reclamationListView.setItems(data);
    }

    // ================= RECEVOIR USER CONNECTÉ =================
    public void setIdUser(int idUser) {
        this.idUser = idUser;
        loadReclamations(); // recharge après réception
    }

    // ================= LOAD DATA =================
    private void loadReclamations() {

        if (idUser == 0) return; // sécurité

        List<Reclamation> list =
                service.afficherParUtilisateur(idUser);

        data.setAll(list);
    }

    // ================= PROFESSIONAL CARD DESIGN =================
    private void setupListViewDesign() {

        reclamationListView.setCellFactory(list -> new ListCell<>() {

            @Override
            protected void updateItem(Reclamation r, boolean empty) {
                super.updateItem(r, empty);

                if (empty || r == null) {
                    setGraphic(null);
                    return;
                }

                // ===== TITRE =====
                Label sujet = new Label(r.getSujet());
                sujet.getStyleClass().add("rec-title");

                // ===== DESCRIPTION =====
                Label desc = new Label(r.getDescription());
                desc.getStyleClass().add("rec-desc");
                desc.setWrapText(true);

                // ===== DATE =====
                Label date = new Label("📅 " + r.getDateReclamation());
                date.getStyleClass().add("rec-date");

                // ===== STATUT =====
                Label statut = new Label(r.getStatut());

                if ("TRAITEE".equalsIgnoreCase(r.getStatut())) {
                    statut.getStyleClass().add("status-done");
                } else {
                    statut.getStyleClass().add("status-wait");
                }

                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                HBox header = new HBox(10, sujet, spacer, statut);

                // ===== BOUTONS =====
                Button btnEdit = new Button("✏");
                Button btnDelete = new Button("🗑");

                btnEdit.getStyleClass().add("btn-edit");
                btnDelete.getStyleClass().add("btn-delete");

                btnEdit.setOnAction(e -> modifierReclamation(r));
                btnDelete.setOnAction(e -> supprimerReclamation(r));

                HBox actions = new HBox(10, btnEdit, btnDelete);

                VBox card = new VBox(12, header, desc, date, actions);
                card.getStyleClass().add("reclamation-card");

                setGraphic(card);
            }
        });
    }

    private void supprimerReclamation(Reclamation r) {

        Alert confirm = new Alert(Alert.AlertType.CONFIRMATION);
        confirm.setTitle("Suppression");
        confirm.setHeaderText("Supprimer cette réclamation ?");
        confirm.setContentText(r.getSujet());

        confirm.showAndWait().ifPresent(response -> {

            if (response == ButtonType.OK) {

                service.supprimer(r.getIdReclamation());
                loadReclamations();
            }
        });
    }
    private void modifierReclamation(Reclamation r) {

        Dialog<ButtonType> dialog = new Dialog<>();
        dialog.setTitle("Modifier la réclamation");

        // ===== Champs =====
        TextField txtSujet = new TextField(r.getSujet());
        TextArea txtDescription = new TextArea(r.getDescription());

        txtDescription.setPrefHeight(120);

        VBox content = new VBox(10,
                new Label("Sujet :"),
                txtSujet,
                new Label("Description :"),
                txtDescription
        );

        content.setStyle("-fx-padding:15;");

        dialog.getDialogPane().setContent(content);

        // boutons
        dialog.getDialogPane().getButtonTypes().addAll(
                ButtonType.OK,
                ButtonType.CANCEL
        );

        dialog.showAndWait().ifPresent(response -> {

            if (response == ButtonType.OK) {

                service.modifier(
                        r.getIdReclamation(),
                        txtSujet.getText(),
                        txtDescription.getText()
                );

                loadReclamations(); // refresh liste
            }
        });
    }


}
