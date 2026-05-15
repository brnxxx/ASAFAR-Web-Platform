package tn.esprit;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.stage.Stage;
import tn.esprit.utils.MyDatabase;

public class Mainfx extends Application {

    @Override
    public void start(Stage stage) throws Exception {
        FXMLLoader loader = new FXMLLoader(
                Mainfx.class.getResource("/CreateAccount.fxml")
        );

        Scene scene = new Scene(loader.load());

        stage.setTitle("ASAFAR Dashboard");
        stage.setScene(scene);
        stage.setWidth(1300);
        stage.setHeight(800);
        stage.show();
    }

    public static void main(String[] args) {
        launch(args);
    }
}
