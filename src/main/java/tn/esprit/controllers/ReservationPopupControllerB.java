package tn.esprit.controllers;

import tn.esprit.entities.Excursion;
import tn.esprit.entities.ReservationB;
import javafx.fxml.FXML;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import tn.esprit.services.ReservationServiceB;

import java.time.LocalDate;

public class ReservationPopupControllerB {

    // ================= FXML =================
    @FXML private Label lblAdult;
    @FXML private Label lblChild;
    @FXML private Label lblBaby;
    @FXML private Label lblTotal;

    @FXML private Label lblPrixAdulte;
    @FXML private Label lblPrixEnfant;
    @FXML private Label lblPrixBebe;

    @FXML private DatePicker datePicker;
    private LocalDate currentDate;

    // ================= DATA =================
    private int adult = 0;
    private int child = 0;
    private int baby = 0;

    private Excursion excursion;

    private final ReservationServiceB service = new ReservationServiceB();

    // prix venant de la DB
    private double prixAdulte;
    private double prixEnfant;
    private double prixBebe;

    public void setDateRecherche(LocalDate date) {
        if (date != null) {
            datePicker.setValue(date);
        }
    }

    // ================= RECEVOIR EXCURSION =================
    public void setExcursion(Excursion e , LocalDate date) {

        this.excursion = e;
        currentDate = date;

        datePicker.setValue(date);

        // 🔥 PRIX DEPUIS LA BASE
        prixAdulte = e.getPrixAdulte();
        prixEnfant = e.getPrixEnfant();
        prixBebe   = e.getPrixBebe();

        // affichage prix UI
        lblPrixAdulte.setText(
                String.format("Adulte (%.2f DT)", prixAdulte));

        lblPrixEnfant.setText(
                String.format("Enfant (%.2f DT)", prixEnfant));

        lblPrixBebe.setText(
                String.format("Bébé (%.2f DT)", prixBebe));

        update();
    }

    // ================= PLUS / MINUS =================

    @FXML
    private void plusAdult() { adult++; update(); }

    @FXML
    private void minusAdult() {
        if (adult > 0) adult--;
        update();
    }

    @FXML
    private void plusChild() { child++; update(); }

    @FXML
    private void minusChild() {
        if (child > 0) child--;
        update();
    }

    @FXML
    private void plusBaby() { baby++; update(); }

    @FXML
    private void minusBaby() {
        if (baby > 0) baby--;
        update();
    }

    // ================= CALCUL TOTAL =================

    private void update() {

        lblAdult.setText(String.valueOf(adult));
        lblChild.setText(String.valueOf(child));
        lblBaby.setText(String.valueOf(baby));

        double total =
                (adult * prixAdulte)
                        + (child * prixEnfant)
                        + (baby * prixBebe);

        lblTotal.setText(
                String.format("Total : %.2f DT", total));
    }

    // ================= CONFIRMATION =================

    @FXML
    private void confirmerReservation() {

        try {

            if (adult + child + baby == 0) {
                System.out.println("Aucune personne sélectionnée");
                return;
            }

            // sécurité si date non reçue
            LocalDate selectedDate = datePicker.getValue();
            if (selectedDate == null) {
                System.out.println("Date non sélectionnée");
                return;
            }

            ReservationB r = new ReservationB();

            r.setIdExcursion(excursion.getIdExcursion());
            r.setNbAdultes(adult);
            r.setNbEnfants(child);
            r.setNbBebes(baby);

            double total =
                    (adult * prixAdulte)
                            + (child * prixEnfant)
                            + (baby * prixBebe);

            r.setMontantTotal(total);

            // conversion LocalDate -> LocalDateTime
            r.setDateReservation(selectedDate.atStartOfDay());

            service.add(r);

            System.out.println("Reservation ajoutée");

            // fermer popup
            Stage stage = (Stage) lblTotal.getScene().getWindow();
            stage.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
