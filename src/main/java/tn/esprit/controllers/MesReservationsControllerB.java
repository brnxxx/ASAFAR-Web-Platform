package tn.esprit.controllers;
import tn.esprit.entities.Excursion;
import  tn.esprit.entities.ReservationB;
import  tn.esprit.entities.StatutReservationB;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.*;
import javafx.stage.Stage;
import  tn.esprit.services.ExcursionService;
import tn.esprit.services.ReservationServiceB;

import java.sql.SQLException;
import java.util.List;


public class MesReservationsControllerB {

    @FXML private ListView<ReservationB> listViewReservation;
    @FXML private Label lblTotal;
    @FXML private Button btnBack;

    private final ReservationServiceB reservationService =
            new ReservationServiceB();

    private final ObservableList<ReservationB> data =
            FXCollections.observableArrayList();

    // ⚠️ remplacer par user connecté
    private final int USER_ID = 1;
    private ExcursionService excursionService;

    @FXML
    public void initialize() throws SQLException {
        excursionService = new ExcursionService(); // ⭐ MANQUANT

        chargerReservations();
        setupListView();
    }
    private Button createIconButton(String path) {

        ImageView icon = new ImageView(
                new Image(getClass().getResource(path).toExternalForm())
        );

        icon.setFitHeight(22);
        icon.setPreserveRatio(true);

        Button btn = new Button();
        btn.setGraphic(icon);

        btn.setStyle("""
        -fx-background-color: rgba(255,255,255,0.15);
        -fx-background-radius:14;
        -fx-cursor: hand;
        -fx-padding:8;
    """);

        // hover animation
        btn.setOnMouseEntered(e ->
                btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.35);
                -fx-background-radius:14;
                -fx-scale-x:1.1;
                -fx-scale-y:1.1;
            """));

        btn.setOnMouseExited(e ->
                btn.setStyle("""
                -fx-background-color: rgba(255,255,255,0.15);
                -fx-background-radius:14;
                -fx-scale-x:1;
                -fx-scale-y:1;
            """));

        return btn;
    }

    private void chargerReservations() throws SQLException {

        List<ReservationB> list =
                reservationService.getByUser(USER_ID);

        System.out.println("Reservations loaded = " + list.size());

        data.clear();
        data.addAll(list);

        listViewReservation.setItems(null);
        listViewReservation.setItems(data);

        lblTotal.setText(String.valueOf(data.size()));
    }


    private void setupListView() {

        listViewReservation.setCellFactory(param -> new ListCell<>() {


            protected void updateItem(ReservationB r, boolean empty) {
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
                -fx-background-color: linear-gradient(to right,#1E5C86,#3A93D1);
                -fx-background-radius:25;
            """);

                // ================= INFOS =================
                VBox infos = new VBox(8);

                Label date = new Label("📅 " + r.getDateReservation());
                Label prix = new Label("💰 " + r.getMontantTotal() + " DT");
                Label statut = new Label("Statut : " + r.getStatut());

                date.setStyle("-fx-text-fill:#A7E3FF;");
                prix.setStyle("-fx-text-fill:white; -fx-font-weight:bold;");
                statut.setStyle("-fx-text-fill:#FFD166;");

                infos.getChildren().addAll(date, prix, statut);

                // ================= SPACER (POUSSE À DROITE) =================
                Region spacer = new Region();
                HBox.setHgrow(spacer, Priority.ALWAYS);

                // ================= ACTIONS ICÔNES =================
                VBox actions = new VBox(15);
                actions.setAlignment(Pos.CENTER);

                Button btnModifier =
                        createIconButton("/images/modifier.png");

                Button btnSupprimer =
                        createIconButton("/images/delete.png");

                boolean editable =
                        r.getStatut() == StatutReservationB.EN_ATTENTE;

                actions.setVisible(editable);
                actions.setManaged(editable);

                btnModifier.setOnAction(e -> modifierReservation(r));
                btnSupprimer.setOnAction(e -> supprimer(r));

                actions.getChildren().addAll(btnModifier, btnSupprimer);

                // ================= FINAL =================
                card.getChildren().addAll(infos, spacer, actions);

                setGraphic(card);
            }
        });
    }

    private void supprimer(ReservationB r) {

        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setContentText("Supprimer cette réservation ?");

        alert.showAndWait().ifPresent(res -> {

            if (res == ButtonType.OK) {
                try {
                    reservationService.delete(r);
                } catch (SQLException e) {
                    throw new RuntimeException(e);
                }
                data.remove(r);
            }
        });
    }
    private void modifierReservation(ReservationB r) {

        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Modifier Réservation");

        ButtonType saveBtn =
                new ButtonType("Enregistrer", ButtonBar.ButtonData.OK_DONE);

        dialog.getDialogPane().getButtonTypes()
                .addAll(saveBtn, ButtonType.CANCEL);

        // ================= LOAD CSS (IMPORTANT POUR DATEPICKER) =================
        dialog.getDialogPane().getStylesheets()
                .add(getClass().getResource("/style.css").toExternalForm());

        // ================= STYLE BUTTONS =================
        Button btnSave =
                (Button) dialog.getDialogPane().lookupButton(saveBtn);

        Button btnCancel =
                (Button) dialog.getDialogPane().lookupButton(ButtonType.CANCEL);

        String actionBtnStyle = """
        -fx-background-radius:18;
        -fx-background-insets:0;
        -fx-border-color:transparent;
        -fx-focus-color:transparent;
        -fx-faint-focus-color:transparent;
        -fx-font-size:15px;
        -fx-font-weight:bold;
        -fx-text-fill:white;
        -fx-padding:12 30 12 30;
    """;

        btnSave.setStyle(actionBtnStyle +
                "-fx-background-color:linear-gradient(to right,#2FA8FF,#1E6FA8);");

        btnCancel.setStyle(actionBtnStyle +
                "-fx-background-color:linear-gradient(to right,#FF8F00,#FFC107);");


        // ================= RECUPERATION EXCURSION =================
        Excursion excursion = null;

        try {
            if (r.getIdExcursion() != null)
                excursion = excursionService.getById(r.getIdExcursion());
        } catch (Exception ex) {
            ex.printStackTrace();
        }

        double prixAdulte = excursion != null ? excursion.getPrixAdulte() : 0;
        double prixEnfant = excursion != null ? excursion.getPrixEnfant() : 0;
        double prixBebe   = excursion != null ? excursion.getPrixBebe()   : 0;

        // ================= GRID =================
        GridPane grid = new GridPane();
        grid.setHgap(30);
        grid.setVgap(22);
        grid.setPadding(new Insets(30));

        grid.setStyle("""
        -fx-background-color: linear-gradient(to bottom right,#1E4F74,#2F6FA3);
        -fx-background-radius:28;
    """);


        // ================= STEPPER AVEC ICONES =================
        java.util.function.Function<Integer, HBox> createStepper = (initial) -> {

            ImageView minusIcon = new ImageView(
                    new Image(getClass().getResource("/images/moins.png").toExternalForm()));
            minusIcon.setFitWidth(18);
            minusIcon.setPreserveRatio(true);

            ImageView plusIcon = new ImageView(
                    new Image(getClass().getResource("/images/plus.png").toExternalForm()));
            plusIcon.setFitWidth(18);
            plusIcon.setPreserveRatio(true);

            Button minus = new Button("", minusIcon);
            Button plus  = new Button("", plusIcon);

            String btnStyle = """
            -fx-background-color: linear-gradient(to bottom,#2F8BFF,#1E5BBF);
            -fx-background-radius:12;
            -fx-background-insets:0;
            -fx-border-color:transparent;
            -fx-focus-color:transparent;
            -fx-faint-focus-color:transparent;
            -fx-min-width:36;
            -fx-min-height:36;
            -fx-cursor:hand;
        """;

            minus.setStyle(btnStyle);
            plus.setStyle(btnStyle);

            Label value = new Label(String.valueOf(initial));
            value.setStyle("""
            -fx-text-fill:white;
            -fx-font-size:18px;
            -fx-font-weight:bold;
            -fx-min-width:40;
            -fx-alignment:center;
        """);

            minus.setOnAction(e -> {
                int v = Integer.parseInt(value.getText());
                if (v > 0) value.setText(String.valueOf(v - 1));
            });

            plus.setOnAction(e ->
                    value.setText(String.valueOf(
                            Integer.parseInt(value.getText()) + 1)));

            // hover animation FIX
            minus.setOnMouseEntered(e -> {
                minus.setScaleX(1.1);
                minus.setScaleY(1.1);
            });
            minus.setOnMouseExited(e -> {
                minus.setScaleX(1);
                minus.setScaleY(1);
            });

            plus.setOnMouseEntered(e -> {
                plus.setScaleX(1.1);
                plus.setScaleY(1.1);
            });
            plus.setOnMouseExited(e -> {
                plus.setScaleX(1);
                plus.setScaleY(1);
            });

            HBox box = new HBox(15, minus, value, plus);
            box.setAlignment(Pos.CENTER_LEFT);
            box.setUserData(value);

            return box;
        };


        // ================= STEPPERS =================
        HBox adultesBox = createStepper.apply(r.getNbAdultes());
        HBox enfantsBox = createStepper.apply(r.getNbEnfants());
        HBox bebesBox   = createStepper.apply(r.getNbBebes());

        Label adultesVal = (Label) adultesBox.getUserData();
        Label enfantsVal = (Label) enfantsBox.getUserData();
        Label bebesVal   = (Label) bebesBox.getUserData();


        // ================= DATE PICKER =================
        DatePicker datePicker = new DatePicker(r.getDateExcursion());
        // ⚠️ NE PAS ajouter date-picker-popup ici


        // ================= TOTAL =================
        Label lblTotal = new Label();
        lblTotal.setStyle("""
        -fx-text-fill:#FFD166;
        -fx-font-size:18px;
        -fx-font-weight:bold;
    """);

        Runnable updateTotal = () -> {

            int a = Integer.parseInt(adultesVal.getText());
            int e = Integer.parseInt(enfantsVal.getText());
            int b = Integer.parseInt(bebesVal.getText());

            double total =
                    a * prixAdulte +
                            e * prixEnfant +
                            b * prixBebe;

            lblTotal.setText("Total : " + total + " DT");
        };

        adultesVal.textProperty().addListener((o,a,b)->updateTotal.run());
        enfantsVal.textProperty().addListener((o,a,b)->updateTotal.run());
        bebesVal.textProperty().addListener((o,a,b)->updateTotal.run());

        updateTotal.run();


        // ================= STATUT =================
        Label lblStatut = new Label(r.getStatut().toString());
        lblStatut.setStyle("""
        -fx-background-color:#0B2D4A;
        -fx-padding:10 14 10 14;
        -fx-background-radius:12;
        -fx-text-fill:white;
        -fx-font-weight:bold;
    """);


        // ================= LAYOUT =================
        grid.add(createLabel("Adultes"), 0, 0);
        grid.add(adultesBox, 1, 0);

        grid.add(createLabel("Enfants"), 0, 1);
        grid.add(enfantsBox, 1, 1);

        grid.add(createLabel("Bébés"), 0, 2);
        grid.add(bebesBox, 1, 2);

        grid.add(createLabel("Date excursion"), 0, 3);
        grid.add(datePicker, 1, 3);

        grid.add(createLabel("Statut"), 0, 4);
        grid.add(lblStatut, 1, 4);

        grid.add(createLabel("Montant"), 0, 5);
        grid.add(lblTotal, 1, 5);


        VBox wrapper = new VBox(grid);
        wrapper.setPadding(new Insets(25));
        wrapper.setAlignment(Pos.CENTER);

        dialog.getDialogPane().setContent(wrapper);


        // ================= SAVE =================
        dialog.setResultConverter(button -> {

            if (button == saveBtn) {
                try {

                    int adultes = Integer.parseInt(adultesVal.getText());
                    int enfants = Integer.parseInt(enfantsVal.getText());
                    int bebes   = Integer.parseInt(bebesVal.getText());

                    double total =
                            adultes * prixAdulte +
                                    enfants * prixEnfant +
                                    bebes * prixBebe;

                    r.setNbAdultes(adultes);
                    r.setNbEnfants(enfants);
                    r.setNbBebes(bebes);
                    r.setDateExcursion(datePicker.getValue());
                    r.setMontantTotal(total);
                    System.out.println("Adultes = " + r.getNbAdultes());
                    System.out.println("Enfants = " + r.getNbEnfants());
                    System.out.println("Bebes = " + r.getNbBebes());
                    System.out.println("Excursion ID = " + r.getIdExcursion());

                    reservationService.modifier(r);
                    chargerReservations();

                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
            return null;
        });

        dialog.showAndWait();
    }

    @FXML
    private void onRetour(ActionEvent e) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/sidebar.fxml"));
            Parent root = loader.load();

            Stage stage = (Stage) btnBack.getScene().getWindow();
            stage.getScene().setRoot(root);

        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
    private void styleField(TextField tf) {
        tf.setStyle("""
        -fx-background-radius:10;
        -fx-border-radius:10;
        -fx-border-color:#2FA8FF;
        -fx-padding:6;
        -fx-text-fill:white;
    """);
    }
    private void styleCombo(ComboBox<?> cb) {
        cb.setStyle("""
        -fx-background-radius:10;
        -fx-border-radius:10;
        -fx-border-color:#2FA8FF;
        -fx-text-fill:white;
    """);
    }
    private void allowIntegerOnly(TextField tf) {
        tf.textProperty().addListener((obs, oldV, newV) -> {
            if (!newV.matches("\\d*"))
                tf.setText(newV.replaceAll("[^\\d]", ""));
        });
    }
    private Label createLabel(String text) {

        Label lbl = new Label(text);

        lbl.setStyle("""
        -fx-text-fill:#A7E3FF;
        -fx-font-size:14px;
        -fx-font-weight:bold;
    """);

        return lbl;
    }


}
