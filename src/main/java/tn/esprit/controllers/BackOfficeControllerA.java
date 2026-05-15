package tn.esprit.controllers;
import tn.esprit.entities.Reservation;
import tn.esprit.entities.Transport;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Modality;
import javafx.stage.Stage;
import tn.esprit.services.ReservationService;
import tn.esprit.services.TransportService;
import java.io.IOException;
import java.math.BigDecimal;
import java.util.List;
import java.util.Optional;

public class BackOfficeControllerA {

    @FXML private ListView<Transport> listViewTransport;
    @FXML private Label lblTotalTransports;
    @FXML private Label lblPrixMoyen;
    @FXML private Label lblStatusMessage;
    @FXML private HBox statusBar;
    @FXML private Button btnAjouter;
    @FXML private Button btnLogout;
    @FXML private TextField txtRecherche;

    private final TransportService transportService = new TransportService();
    private final ObservableList<Transport> transportList = FXCollections.observableArrayList();

    @FXML private ListView<Reservation> listViewReservation;
    @FXML private TextField txtRechercheReservation; // pour rechercher dans les réservations
    @FXML private Label lblTotalReservations;
    @FXML private Label lblStatusReservation;
    @FXML private HBox statusBarReservation;

    private final ReservationService reservationService = new ReservationService();
    private final ObservableList<Reservation> reservationList = FXCollections.observableArrayList();


    @FXML
    public void initialize() {
        // ⚠️ Vérification des fx:id avant usage
        if (listViewTransport != null) setupListView();
        chargerDonnees();
        chargerStatistiques();
        if (listViewReservation != null) setupListViewReservation();
        chargerReservations();


        if (btnAjouter != null) btnAjouter.setOnAction(e -> showAjouterPopup());
    }

    /* ================= LISTVIEW ================= */
    private void setupListView() {
        listViewTransport.setItems(transportList);

        listViewTransport.setCellFactory(param -> new ListCell<Transport>() {
            @Override
            protected void updateItem(Transport t, boolean empty) {
                super.updateItem(t, empty);

                if (empty || t == null) {
                    setGraphic(null);
                    return;
                }

                VBox card = new VBox(8);
                card.setPadding(new Insets(15));
                card.setStyle("-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8);"
                        + "-fx-background-radius: 20;");

                Label lblNom = new Label("🚍 " + t.getNom());
                lblNom.setStyle("-fx-font-size: 18px; -fx-font-weight: bold; -fx-text-fill: white;");

                Label lblType = new Label("Type: " + t.getType());
                lblType.setStyle("-fx-text-fill: #A7E3FF;");

                Label lblPrix = new Label("Prix: " + t.getPrix() + " €");
                lblPrix.setStyle("-fx-text-fill: #A7E3FF;");

                Label lblDesc = new Label("Description: " + t.getDescription());
                lblDesc.setWrapText(true);
                lblDesc.setStyle("-fx-text-fill: #C9EFFF;");

                Label lblDate = new Label("Créé le: " + t.getDateCreation());
                lblDate.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");

                Label lblUser = new Label("Créé par ID: " + t.getIdUser());
                lblUser.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");

                HBox actions = new HBox(10);
                actions.setAlignment(Pos.CENTER_LEFT);

                Button btnModifier = new Button("✏️");
                btnModifier.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white;");
                btnModifier.setOnAction(e -> showModifierPopup(t));

                Button btnSupprimer = new Button("🗑️");
                btnSupprimer.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white;");
                btnSupprimer.setOnAction(e -> showSupprimerPopup(t));

                actions.getChildren().addAll(btnModifier, btnSupprimer);

                card.getChildren().addAll(lblNom, lblType, lblPrix, lblDesc, lblDate, lblUser, actions);
                setGraphic(card);
            }
        });
    }

    private void setupListViewReservation() {
        listViewReservation.setItems(reservationList); // reservationList = ObservableList<Reservation>

        listViewReservation.setCellFactory(param -> new ListCell<Reservation>() {
            @Override
            protected void updateItem(Reservation r, boolean empty) {
                super.updateItem(r, empty);

                if (empty || r == null) {
                    setGraphic(null);
                    return;
                }

                VBox card = new VBox(8);
                card.setPadding(new Insets(15));
                card.setStyle(
                        "-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8);" +
                                "-fx-background-radius: 20;" +
                                "-fx-effect: dropshadow(gaussian, rgba(0,0,0,0.25), 6,0.5,0,2);"
                );

                Label lblClient = new Label("👤 " + r.getNomClient());
                lblClient.setStyle("-fx-font-size: 16px; -fx-font-weight: bold; -fx-text-fill: white;");

                Label lblTransport = new Label("Transport: " + r.getTransportNom());
                lblTransport.setStyle("-fx-text-fill: #A7E3FF;");

                Label lblPrix = new Label("Prix: " + r.getMontantTotal() + " €");
                lblPrix.setStyle("-fx-text-fill: #A7E3FF;");

                Label lblStatut = new Label("Statut: " + r.getStatut());
                lblStatut.setStyle("-fx-text-fill: #C9EFFF;");

                Label lblDate = new Label("Date: " + r.getDateReservation());
                lblDate.setStyle("-fx-text-fill: #A7E3FF; -fx-font-size: 12px;");

                HBox actions = new HBox(10);
                actions.setAlignment(Pos.CENTER_LEFT);

                Button btnModifier = new Button("✏️");
                btnModifier.setStyle("-fx-background-color: #FF8F00; -fx-text-fill: white;");
                btnModifier.setOnAction(e -> showModifierReservationPopup(r));

                Button btnSupprimer = new Button("🗑️");
                btnSupprimer.setStyle("-fx-background-color: #E74C3C; -fx-text-fill: white;");
                btnSupprimer.setOnAction(e -> showSupprimerReservationPopup(r));

                actions.getChildren().addAll(btnModifier, btnSupprimer);

                card.getChildren().addAll(lblClient, lblTransport, lblPrix, lblStatut, lblDate, actions);

                setGraphic(card);
            }
        });
    }



    /* ================= DATA ================= */
    private void chargerDonnees() {
        List<Transport> list = transportService.afficher();
        transportList.setAll(list);
        if (lblTotalTransports != null)
            lblTotalTransports.setText(String.valueOf(list.size()));
    }
    private void chargerReservations() {
        List<Reservation> list = reservationService.afficher();
        reservationList.setAll(list);

        if (lblTotalReservations != null)
            lblTotalReservations.setText(String.valueOf(list.size()));
    }


    private void chargerStatistiques() {
        List<Transport> list = transportService.afficher();

        BigDecimal totalPrix = list.stream()
                .map(Transport::getPrix)
                .reduce(BigDecimal.ZERO, BigDecimal::add);

        double prixMoyen = list.isEmpty() ? 0 :
                totalPrix.divide(BigDecimal.valueOf(list.size()), 2, BigDecimal.ROUND_HALF_UP).doubleValue();

        if (lblPrixMoyen != null)
            lblPrixMoyen.setText(String.format("%.2f €", prixMoyen));
    }

    /* ================= POPUPS ================= */
    private void showAjouterPopup() {
        Dialog<Transport> dialog = new Dialog<>();
        dialog.setTitle("Ajouter Transport");
        dialog.setHeaderText(null);

        // Boutons
        ButtonType btnAdd = new ButtonType("AJOUTER", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(btnAdd, ButtonType.CANCEL);

        // Content
        VBox content = new VBox(12);
        content.setPadding(new Insets(20));
        content.setStyle("-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8); " +
                "-fx-background-radius: 15; -fx-effect: dropshadow(gaussian, rgba(0,0,0,0.25), 10,0,0,2);");

        TextField txtNom = createStyledTextField("Nom");
        TextField txtType = createStyledTextField("Type");
        TextField txtPrix = createStyledTextField("Prix");
        TextField txtDesc = createStyledTextField("Description");
        TextField txtIdUser = createStyledTextField("ID Utilisateur");

        content.getChildren().addAll(
                createLabel("Nom:"), txtNom,
                createLabel("Type:"), txtType,
                createLabel("Prix:"), txtPrix,
                createLabel("Description:"), txtDesc,
                createLabel("ID Utilisateur:"), txtIdUser
        );

        dialog.getDialogPane().setContent(content);

        dialog.setResultConverter(button -> {
            if (button == btnAdd) {
                if (txtNom.getText().isEmpty() || txtType.getText().isEmpty() || txtPrix.getText().isEmpty()) {
                    showStatus("❌ Veuillez remplir correctement tous les champs");
                    return null;
                }
                try {
                    BigDecimal prix = new BigDecimal(txtPrix.getText());
                    return new Transport(
                            0,
                            txtNom.getText(),
                            txtType.getText(),
                            prix,
                            txtDesc.getText(),
                            null
                    );
                } catch (NumberFormatException e) {
                    showStatus("❌ Le prix doit être un nombre valide");
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(t -> {
            transportService.ajouter(t);
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Transport ajouté");
        });
    }

    private void showModifierPopup(Transport t) {
        Dialog<Transport> dialog = new Dialog<>();
        dialog.setTitle("Modifier Transport");
        dialog.setHeaderText(null);

        ButtonType btnModify = new ButtonType("MODIFIER", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(btnModify, ButtonType.CANCEL);

        VBox content = new VBox(12);
        content.setPadding(new Insets(20));
        content.setStyle("-fx-background-color: linear-gradient(to bottom right, #0B2D4A, #1E6FA8); " +
                "-fx-background-radius: 15; -fx-effect: dropshadow(gaussian, rgba(0,0,0,0.25), 10,0,0,2);");

        TextField txtNom = createStyledTextField(t.getNom());
        TextField txtType = createStyledTextField(t.getType());
        TextField txtPrix = createStyledTextField(t.getPrix().toString());
        TextField txtDesc = createStyledTextField(t.getDescription());

        content.getChildren().addAll(
                createLabel("Nom:"), txtNom,
                createLabel("Type:"), txtType,
                createLabel("Prix:"), txtPrix,
                createLabel("Description:"), txtDesc
        );

        dialog.getDialogPane().setContent(content);

        dialog.setResultConverter(button -> {
            if (button == btnModify) {
                try {
                    t.setNom(txtNom.getText());
                    t.setType(txtType.getText());
                    t.setPrix(new BigDecimal(txtPrix.getText()));
                    t.setDescription(txtDesc.getText());
                    return t;
                } catch (Exception e) {
                    showStatus("❌ Erreur lors de la modification");
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(updated -> {
            transportService.modifier(updated);
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Transport modifié");
        });
    }

    private void showSupprimerPopup(Transport t) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation");
        alert.setHeaderText("Supprimer le transport");
        alert.setContentText("Êtes-vous sûr de vouloir supprimer : " + t.getNom() + " ?");

        DialogPane dp = alert.getDialogPane();
        dp.setStyle("-fx-background-color: #1E3F5C; -fx-font-size: 14px; -fx-text-fill: white;");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            transportService.supprimer(t.getIdTransport());
            chargerDonnees();
            chargerStatistiques();
            showStatus("✅ Transport supprimé");
        }
    }

    private void showModifierReservationPopup(Reservation r) {
        Dialog<Reservation> dialog = new Dialog<>();
        dialog.setTitle("Modifier Réservation");
        dialog.setHeaderText(null);

        ButtonType btnModify = new ButtonType("MODIFIER", ButtonBar.ButtonData.OK_DONE);
        dialog.getDialogPane().getButtonTypes().addAll(btnModify, ButtonType.CANCEL);

        VBox content = new VBox(12);
        content.setPadding(new Insets(20));
        content.setStyle("-fx-background-color: linear-gradient(to bottom right, #123A5C, #1E6FA8); " +
                "-fx-background-radius: 15; -fx-effect: dropshadow(gaussian, rgba(0,0,0,0.25), 10,0,0,2);");

        TextField txtClient = createStyledTextField(r.getNomClient());
        TextField txtTransport = createStyledTextField(r.getTransportNom());
        TextField txtPrix = createStyledTextField(r.getMontantTotal().toString());
        TextField txtStatut = createStyledTextField(r.getStatut());

        content.getChildren().addAll(
                createLabel("Nom du client:"), txtClient,
                createLabel("Transport réservé:"), txtTransport,
                createLabel("Prix:"), txtPrix,
                createLabel("Statut:"), txtStatut
        );

        dialog.getDialogPane().setContent(content);

        dialog.setResultConverter(button -> {
            if (button == btnModify) {
                try {
                    r.setNomClient(txtClient.getText());
                    r.setTransportNom(txtTransport.getText());
                    r.setMontantTotal(new BigDecimal(txtPrix.getText()));
                    r.setStatut(txtStatut.getText());
                    return r;
                } catch (Exception e) {
                    showStatusReservation("❌ Veuillez vérifier les champs");
                    return null;
                }
            }
            return null;
        });

        dialog.showAndWait().ifPresent(updated -> {
            reservationService.modifier(updated);
            chargerReservations();
            showStatusReservation("✅ Réservation modifiée");
        });
    }

    private void showSupprimerReservationPopup(Reservation r) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Supprimer Réservation");
        alert.setHeaderText(null);
        alert.setContentText("Voulez-vous vraiment supprimer la réservation de " + r.getNomClient() + " ?");

        DialogPane dp = alert.getDialogPane();
        dp.setStyle("-fx-background-color: #1E3F5C; -fx-font-size: 14px; -fx-text-fill: white;");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            reservationService.supprimer(r.getIdReservation());
            chargerReservations();
            showStatusReservation("✅ Réservation supprimée");
        }
    }

    private void showStatusReservation(String message) {
        if (lblStatusReservation != null && statusBarReservation != null) {
            lblStatusReservation.setText(message);
            statusBarReservation.setVisible(true);
            statusBarReservation.setManaged(true);

            new Thread(() -> {
                try { Thread.sleep(3000); } catch (InterruptedException ignored) {}
                Platform.runLater(() -> {
                    statusBarReservation.setVisible(false);
                    statusBarReservation.setManaged(false);
                });
            }).start();
        }
    }



    /* ================= POPUP HELPERS ================= */
    private Label createLabel(String text) {
        Label lbl = new Label(text);
        lbl.setStyle("-fx-text-fill: #A7E3FF; -fx-font-weight: bold; -fx-font-size: 14px;");
        return lbl;
    }

    private TextField createStyledTextField(String prompt) {
        TextField tf = new TextField();
        tf.setPromptText(prompt);
        tf.setStyle(
                "-fx-background-radius: 10; " +
                        "-fx-border-radius: 10; " +
                        "-fx-border-color: #2FA8FF; " +
                        "-fx-padding: 6; " +
                        "-fx-text-fill: white;"
        );
        return tf;
    }


    /* ================= STATUS ================= */
    private void showStatus(String message) {
        if (lblStatusMessage != null && statusBar != null) {
            lblStatusMessage.setText(message);
            statusBar.setVisible(true);
            statusBar.setManaged(true);

            new Thread(() -> {
                try { Thread.sleep(3000); } catch (InterruptedException ignored) {}
                Platform.runLater(() -> {
                    statusBar.setVisible(false);
                    statusBar.setManaged(false);
                });
            }).start();
        }
    }

    /* ================= SIDEBAR ================= */
    public void expandSidebar(MouseEvent mouseEvent) {}
    public void collapseSidebar(MouseEvent mouseEvent) {}

    @FXML
    private void handleLogout() {
        try {
            // Récupère la fenêtre actuelle
            Stage currentStage = (Stage) btnLogout.getScene().getWindow();
            currentStage.close(); // ferme la fenêtre FrontOffice

            // Charge le FXML du login
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/login.fxml"));
            Parent root = loader.load();

            // Crée un nouveau stage pour le login
            Stage loginStage = new Stage();
            loginStage.setTitle("Login");
            loginStage.setScene(new Scene(root));
            loginStage.initModality(Modality.APPLICATION_MODAL); // si tu veux le modal
            loginStage.show();

        } catch (IOException e) {
            e.printStackTrace();
            // Optionnel : afficher une alerte si le login ne peut pas s'ouvrir
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erreur");
            alert.setHeaderText("Impossible d'ouvrir la fenêtre de login");
            alert.setContentText(e.getMessage());
            alert.showAndWait();
        }
    }

    @FXML
    private void rechercherTransport() {
        String query = txtRecherche.getText().toLowerCase().trim();

        if (query.isEmpty()) {
            // Si la recherche est vide, on recharge tous les transports
            chargerDonnees();
            return;
        }

        List<Transport> resultats = transportList.stream()
                .filter(t -> t.getNom().toLowerCase().contains(query)
                        || t.getType().toLowerCase().contains(query))
                .toList();

        listViewTransport.setItems(FXCollections.observableArrayList(resultats));

        // Mise à jour du nombre de résultats
        if (lblTotalTransports != null)
            lblTotalTransports.setText(String.valueOf(resultats.size()));
    }
}
