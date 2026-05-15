package tn.esprit.controllers;

import tn.esprit.entities.Hebergement;
import tn.esprit.entities.ReservationY;
import tn.esprit.services.HebergementService;
import tn.esprit.services.ReservationHebergementService;
import javafx.fxml.FXML;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.Spinner;
import javafx.scene.control.SpinnerValueFactory;
import javafx.stage.Stage;

import java.time.LocalDate;
import java.time.temporal.ChronoUnit;

public class ModifierReservationHebergementController {

    @FXML private Label lblHebergementNom;
    @FXML private Label lblPrixParNuit;
    @FXML private DatePicker dateArrivee;
    @FXML private DatePicker dateDepart;
    @FXML private Spinner<Integer> spinnerPersonnes;
    @FXML private Label lblPrixTotal;
    @FXML private Label lblNbNuits;

    private ReservationY reservation;
    private Hebergement hebergement;
    private final ReservationHebergementService service = new ReservationHebergementService();
    private final HebergementService hebergementService = new HebergementService();
    private Runnable onSaveCallback;

    public void setReservation(ReservationY r) {
        this.reservation = r;

        try {
            hebergement = hebergementService.getHebergementById(r.getHebergementId());

            if (hebergement != null) {
                lblHebergementNom.setText(hebergement.getNom());
                lblPrixParNuit.setText(hebergement.getPrixParNuit() + " DT / nuit");

                // Convertir les String en LocalDate
                LocalDate arrivee = LocalDate.parse(r.getDateArrivee());
                LocalDate depart = LocalDate.parse(r.getDateDepart());

                dateArrivee.setValue(arrivee);
                dateDepart.setValue(depart);

                SpinnerValueFactory<Integer> valueFactory =
                        new SpinnerValueFactory.IntegerSpinnerValueFactory(1, 10, r.getNbPersonnes());
                spinnerPersonnes.setValueFactory(valueFactory);

                setupListeners();
                calculerPrixTotal();
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
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

                int prixTotal = (int) (hebergement.getPrixParNuit() * nbNuits);
                lblPrixTotal.setText(prixTotal + " DT");
            } else {
                lblNbNuits.setText("(0 nuits)");
                lblPrixTotal.setText("0 DT");
            }
        }
    }

    @FXML
    private void enregistrerModification() {
        try {
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

            // Mettre à jour la réservation avec les nouvelles valeurs
            reservation.setDateArrivee(dateArrivee.getValue().toString());
            reservation.setDateDepart(dateDepart.getValue().toString());
            reservation.setNbPersonnes(spinnerPersonnes.getValue());
            reservation.setPrixTotal(prixTotal);

            service.modifier(reservation);

            if (onSaveCallback != null) {
                onSaveCallback.run();
            }

            Stage stage = (Stage) lblPrixTotal.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
            showError("Erreur lors de la modification: " + e.getMessage());
        }
    }

    private void showError(String message) {
        javafx.scene.control.Alert alert = new javafx.scene.control.Alert(javafx.scene.control.Alert.AlertType.ERROR);
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