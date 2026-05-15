package tn.esprit.controllers;

import javafx.animation.TranslateTransition;
import javafx.fxml.FXMLLoader;
import javafx.fxml.FXML;
import javafx.scene.Parent;
import javafx.scene.layout.StackPane;
import javafx.util.Duration;

public class AuthContainerController {

    @FXML
    private StackPane root;

    private Parent loginView;
    private Parent registerView;

    @FXML
    public void initialize() {
        try {

            // login
            FXMLLoader loginLoader =
                    new FXMLLoader(getClass().getResource("/login.fxml"));
            loginView = loginLoader.load();

            // register
            FXMLLoader registerLoader =
                    new FXMLLoader(getClass().getResource("/createaccount.fxml"));
            registerView = registerLoader.load();

            root.setUserData(this);

            // show login first
            root.getChildren().setAll(loginView);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public void showRegister() {

        if (!root.getChildren().contains(registerView)) {
            root.getChildren().add(registerView);
        }

        registerView.setTranslateX(root.getWidth());

        TranslateTransition tt =
                new TranslateTransition(Duration.millis(400), registerView);

        tt.setToX(0);
        tt.play();
    }

    //show login
    public void showLogin() {

        TranslateTransition tt =
                new TranslateTransition(Duration.millis(400), registerView);

        tt.setToX(root.getWidth());

        tt.setOnFinished(e -> {
            root.getChildren().remove(registerView);
            loginView.setTranslateX(0);
        });

        tt.play();
    }
}
