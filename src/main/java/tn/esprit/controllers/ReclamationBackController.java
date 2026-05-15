package tn.esprit.controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import tn.esprit.entities.Reclamation;
import tn.esprit.services.ReclamationService;

public class ReclamationBackController {
    @FXML private StackPane leftContainer;
    @FXML private Button btnAccueil;
    @FXML private Button btnutilisateur;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;

    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    @FXML private TableView<Reclamation> tableReclamations;

    @FXML private TableColumn<Reclamation,Integer> colId;
    @FXML private TableColumn<Reclamation,String> colSujet;
    @FXML private TableColumn<Reclamation,String> colDescription;
    @FXML private TableColumn<Reclamation,String> colDate;
    @FXML private TableColumn<Reclamation,String> colStatut;
    @FXML private TableColumn<Reclamation,String> colReponse;
    @FXML private TableColumn<Reclamation,Void> colActions;

    private final ReclamationService service = new ReclamationService();

    @FXML
    public void initialize() {
        leftContainer.setPrefWidth(collapsedWidth);
        setTexts(false);

        colSujet.setCellValueFactory(new PropertyValueFactory<>("sujet"));
        colDescription.setCellValueFactory(new PropertyValueFactory<>("description"));
        colDate.setCellValueFactory(new PropertyValueFactory<>("dateReclamation"));
        colStatut.setCellValueFactory(new PropertyValueFactory<>("statut"));
        colReponse.setCellValueFactory(new PropertyValueFactory<>("reponseAdmin"));

        loadData();
        addButtons();
    }

    private void loadData() {

        ObservableList<Reclamation> data =
                FXCollections.observableArrayList(service.afficher());

        tableReclamations.setItems(data);
    }


    private void addButtons() {

        colActions.setCellFactory(param -> new TableCell<>() {
            private final Button btnRep = new Button("Répondre");
            private final Button btnSup = new Button("Supprimer");

            {
                btnRep.getStyleClass().add("btn-repondre");
                btnSup.getStyleClass().add("btn-supprimer");

                btnRep.setOnAction(e -> {
                    Reclamation r =
                            getTableView().getItems().get(getIndex());
                    repondre(r);
                });

                btnSup.setOnAction(e -> {
                    Reclamation r =
                            getTableView().getItems().get(getIndex());
                    service.supprimer(r.getIdReclamation());
                    loadData();
                });
            }



            @Override
            protected void updateItem(Void item, boolean empty) {
                super.updateItem(item, empty);

                if (empty) {
                    setGraphic(null);
                } else {
                    setGraphic(new HBox(10, btnRep, btnSup));
                }
            }
        });
    }


    private void repondre(Reclamation r) {

        TextInputDialog dialog = new TextInputDialog();
        dialog.setTitle("Réponse Admin");
        dialog.setHeaderText("Répondre à la réclamation");

        dialog.showAndWait().ifPresent(rep -> {
            service.repondre(r.getIdReclamation(), rep);
            loadData();
        });
    }
    @FXML
    private void refresh() {
        loadData();
    }

    @FXML
    private void expandSidebar() {
        leftContainer.setPrefWidth(expandedWidth);
        setTexts(true);
    }

    @FXML
    private void collapseSidebar() {
        leftContainer.setPrefWidth(collapsedWidth);
        setTexts(false);
    }

    private void setTexts(boolean expanded) {

        if (expanded) {
            btnAccueil.setText("ACCUEIL");
            btnutilisateur.setText("GESTION UTILISATEUR");
            btnHebergement.setText("GESTION HÉBERGEMENTS");
            btnLoisirs.setText("GESTION LOISIRS");
            btnTransport.setText("GESTION TRANSPORTS");
            btnAvis.setText("GESTION RÉCLAMATIONS");
        } else {
            btnAccueil.setText("");
            btnutilisateur.setText("");
            btnHebergement.setText("");
            btnLoisirs.setText("");
            btnTransport.setText("");
            btnAvis.setText("");
        }
    }
    @FXML
    private void openUsers() {

        try {
            Parent root = FXMLLoader.load(
                    getClass().getResource("/backoffice.fxml")
            );

            Stage stage = (Stage) tableReclamations.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }





}
