package tn.esprit.controllers;

import javafx.animation.*;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.util.Duration;

public class SidebarController {
    @FXML public StackPane leftContainer;
    //@FXML private VBox leftContainer;
    @FXML private ImageView logo;
    @FXML private HBox topBar;     // ✅ AJOUT IMPORTANT

    @FXML private Button btnAccueil;
    @FXML private Button btnHebergement;
    @FXML private Button btnLoisirs;
    @FXML private Button btnTransport;
    @FXML private Button btnAvis;
    @FXML private Button btnNotif;

    private Timeline timeline;
    private Timeline notifAnimation;

    private final double expandedWidth = 300;
    private final double collapsedWidth = 100;

    @FXML
    public void initialize() {

        leftContainer.setPrefWidth(collapsedWidth);
        logo.setFitHeight(55);
        setTexts(false);

        startNotificationGlow();

        Platform.runLater(this::animateTopBar);  // ✅ appel correct
    }

    @FXML
    private void expandSidebar() {
        animateTo(expandedWidth, 110);
        setTexts(true);
    }

    @FXML
    private void collapseSidebar() {
        animateTo(collapsedWidth, 55);
        setTexts(false);
    }

    private void animateTo(double targetWidth, double targetLogoHeight) {

        if (timeline != null) timeline.stop();

        timeline = new Timeline(
                new KeyFrame(Duration.millis(250),
                        new KeyValue(leftContainer.prefWidthProperty(), targetWidth, Interpolator.EASE_BOTH),
                        new KeyValue(leftContainer.maxWidthProperty(), targetWidth, Interpolator.EASE_BOTH),
                        new KeyValue(logo.fitHeightProperty(), targetLogoHeight, Interpolator.EASE_BOTH)
                )
        );

        timeline.play();
    }

    private void setTexts(boolean expanded) {

        if (expanded) {
            btnAccueil.setText("ACCUEIL");
            btnHebergement.setText("HÉBERGEMENTS");
            btnLoisirs.setText("LOISIRS");
            btnTransport.setText("TRANSPORTS");
            btnAvis.setText("AVIS & RÉCLAMATIONS");
        } else {
            btnAccueil.setText("");
            btnHebergement.setText("");
            btnLoisirs.setText("");
            btnTransport.setText("");
            btnAvis.setText("");
        }
    }

    private void startNotificationGlow() {

        if (btnNotif == null) return;

        DropShadow glow = new DropShadow();
        glow.setRadius(0);
        glow.setColor(Color.web("#2FA8FF"));

        btnNotif.setEffect(glow);

        notifAnimation = new Timeline(
                new KeyFrame(Duration.ZERO,
                        new KeyValue(glow.radiusProperty(), 0)
                ),
                new KeyFrame(Duration.seconds(1),
                        new KeyValue(glow.radiusProperty(), 25)
                )
        );

        notifAnimation.setAutoReverse(true);
        notifAnimation.setCycleCount(Animation.INDEFINITE);
        notifAnimation.play();
    }

    private void animateTopBar() {

        if (topBar == null) return;

        topBar.setOpacity(0);
        topBar.setTranslateY(-20);

        TranslateTransition slide = new TranslateTransition(Duration.millis(300), topBar);
        slide.setToY(0);
        slide.setInterpolator(Interpolator.EASE_OUT);

        FadeTransition fade = new FadeTransition(Duration.millis(300), topBar);
        fade.setToValue(1);

        slide.play();
        fade.play();
    }
}
