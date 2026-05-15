package tn.esprit;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.stage.Stage;
import tn.esprit.utils.MyDatabase;

public class Main extends Application {

    @Override
    public void start(Stage stage) {

        try {

            // 🔥 Initialiser la connexion DB
            MyDatabase.getInstance();

            FXMLLoader loader = new FXMLLoader(
                    Main.class.getResource("/Profil.fxml")
            );

            Scene scene = new Scene(loader.load());

            stage.setTitle("ASAFAR Dashboard");
            stage.setScene(scene);
            stage.setWidth(1300);
            stage.setHeight(800);
            stage.setResizable(false);
            stage.show();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        launch(args);
    }
}
