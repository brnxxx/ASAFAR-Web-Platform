package tn.esprit.controllers;

import tn.esprit.entities.Hebergement;
import tn.esprit.entities.ReservationY;
import tn.esprit.services.ReservationHebergementService;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.stage.Stage;

import java.time.LocalDate;
import java.time.temporal.ChronoUnit;

public class ReservationHebergementPopupController {

    @FXML private Label lblHebergementNom;
    @FXML private Label lblPrixParNuit;
    @FXML private TextField txtNomClient;
    @FXML private TextField txtEmail;
    @FXML private TextField txtTelephone;
    @FXML private DatePicker dateArrivee;
    @FXML private DatePicker dateDepart;
    @FXML private Spinner<Integer> spinnerPersonnes;
    @FXML private Label lblPrixTotal;
    @FXML private Label lblNbNuits;

    private Hebergement hebergement;
    private final ReservationHebergementService service = new ReservationHebergementService();
    private Runnable onSaveCallback;
    private int idUserConnecte;

    public void setHebergement(Hebergement h, LocalDate dateArriveeDefaut, LocalDate dateDepartDefaut) {
        this.hebergement = h;

        lblHebergementNom.setText(h.getNom());
        lblPrixParNuit.setText(h.getPrixParNuit() + " DT / nuit");

        dateArrivee.setValue(dateArriveeDefaut != null ? dateArriveeDefaut : LocalDate.now());
        dateDepart.setValue(dateDepartDefaut != null ? dateDepartDefaut : LocalDate.now().plusDays(2));

        SpinnerValueFactory<Integer> valueFactory = new SpinnerValueFactory.IntegerSpinnerValueFactory(1, 10, 2);
        spinnerPersonnes.setValueFactory(valueFactory);

        setupListeners();
        calculerPrixTotal();
    }

    public void setIdUserConnecte(int idUser) {
        this.idUserConnecte = idUser;
    }

    public void setOnSaveCallback(Runnable callback) {
        this.onSaveCallback = callback;
    }

    private void setupListeners() {
        dateArrivee.valueProperty().addListener((obs, old, newVal) -> calculerPrixTotal());
        dateDepart.valueProperty().addListener((obs, old, newVal) -> calculerPrixTotal());
        spinnerPersonnes.valueProperty().addListener((obs, old, newVal) -> calculerPrixTotal());
    }

    private void calculerPrixTotal() {
        if (dateArrivee.getValue() != null && dateDepart.getValue() != null && hebergement != null) {
            if (dateDepart.getValue().isAfter(dateArrivee.getValue())) {
                long nbNuits = ChronoUnit.DAYS.between(dateArrivee.getValue(), dateDepart.getValue());
                lblNbNuits.setText("(" + nbNuits + " nuits)");

                int prixTotal = hebergement.getPrixParNuit() * (int) nbNuits;
                lblPrixTotal.setText(prixTotal + " DT");
            } else {
                lblNbNuits.setText("(0 nuits)");
                lblPrixTotal.setText("0 DT");
            }
        }
    }

    @FXML
    private void confirmerReservation() {
        try {
            // Validation des champs
            if (txtNomClient.getText().trim().isEmpty()) {
                showError("Veuillez saisir votre nom");
                return;
            }

            if (txtEmail.getText().trim().isEmpty() || !txtEmail.getText().contains("@")) {
                showError("Email invalide");
                return;
            }

            if (txtTelephone.getText().trim().isEmpty() || txtTelephone.getText().length() < 8) {
                showError("Téléphone invalide (8 chiffres requis)");
                return;
            }

            if (dateArrivee.getValue() == null || dateDepart.getValue() == null) {
                showError("Veuillez sélectionner les dates");
                return;
            }

            if (!dateDepart.getValue().isAfter(dateArrivee.getValue())) {
                showError("La date de départ doit être après la date d'arrivée");
                return;
            }

            long nbNuits = ChronoUnit.DAYS.between(dateArrivee.getValue(), dateDepart.getValue());
            if (nbNuits <= 0) nbNuits = 1;

            int prixTotal = hebergement.getPrixParNuit() * (int) nbNuits;

            ReservationY reservation = new ReservationY();
            reservation.setUserId(idUserConnecte);
            reservation.setHebergementId(hebergement.getIdHebergement());
            reservation.setHebergementNom(hebergement.getNom());
            reservation.setClientNom(txtNomClient.getText().trim());
            reservation.setClientEmail(txtEmail.getText().trim());
            reservation.setClientTel(txtTelephone.getText().trim());
            reservation.setDateArrivee(dateArrivee.getValue().toString());
            reservation.setDateDepart(dateDepart.getValue().toString());
            reservation.setNbPersonnes(spinnerPersonnes.getValue());
            reservation.setPrixTotal(prixTotal);
            reservation.setStatut("EN_ATTENTE");
            reservation.setDateReservation(LocalDate.now().toString());

            service.ajouter(reservation);

            if (onSaveCallback != null) {
                onSaveCallback.run();
            }

            Stage stage = (Stage) lblPrixTotal.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
            showError("Erreur lors de la réservation: " + e.getMessage());
        }
    }

    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    @FXML
    private void annuler() {
        Stage stage = (Stage) lblPrixTotal.getScene().getWindow();
        stage.close();
    }
}