package tn.esprit.services;

import java.sql.*;
import java.time.LocalTime;
import java.util.HashMap;
import java.util.Map;

public class AuthService {

    private final String URL = "jdbc:mysql://localhost:3306/esprit";
    private final String USER = "root";
    private final String PASSWORD = "";
    public void saveLoginAttempt(int userId,
                                 boolean success,
                                 double faceConfidence,
                                 String authMethod,
                                 String reason,
                                 double trustScore) {

        String sql = """
        INSERT INTO login_history
        (user_id, login_time, success, face_confidence,
         auth_method, fail_reason, trust_score)
        VALUES (?, NOW(), ?, ?, ?, ?, ?)
    """;

        try (Connection con =
                     DriverManager.getConnection(URL, USER, PASSWORD);
             PreparedStatement ps = con.prepareStatement(sql)) {

            ps.setInt(1, userId);
            ps.setBoolean(2, success);
            ps.setDouble(3, faceConfidence);
            ps.setString(4, authMethod);
            ps.setString(5, reason);
            ps.setDouble(6, trustScore);

            ps.executeUpdate();

            System.out.println("Login attempt saved (TrustScore = "
                    + trustScore + ")");

        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    private boolean isValidEmail(String email) {
        return email.matches("^[A-Za-z0-9+_.-]+@[A-Za-z0-9.-]+$");
    }
    /*
    public double computeTrustScore(int userId,
                                    double faceConfidence,
                                    boolean usedPassword,
                                    boolean passwordSuccess) {

        double score = 80;

        System.out.println("\n========== TRUST SCORE CALCULATION ==========");
        System.out.println("Initial score = " + score);

        try (Connection con =
                     DriverManager.getConnection(URL, USER, PASSWORD)) {
            // =========================================
// LOAD PREVIOUS TRUST SCORE (AI MEMORY)
// =========================================
            String baseQuery = """
    SELECT trust_score
    FROM login_history
    WHERE user_id = ?
    ORDER BY login_time DESC
    LIMIT 1
""";

            try (PreparedStatement ps = con.prepareStatement(baseQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next() && rs.getObject(1) != null) {
                    double previous = rs.getDouble(1);

// ⭐ amortissement IA (empêche spirale négative)
                    score = Math.max(previous, 30);

                    System.out.println("Previous trust baseline = " + previous +
                            " → stabilized baseline = " + score);
                    System.out.println("Previous trust baseline = " + score);
                }
            }


            // =========================================
            // PASSWORD IMPACT
            // =========================================
            if (usedPassword) {

                if (passwordSuccess) {
                    score += 10;
                    System.out.println("Password SUCCESS → +10");
                } else {
                    score -= 12;
                    System.out.println("Password FAILED → -12");
                }
            }

            System.out.println("Score after password impact = " + score);

            // =========================================
            // PASSWORD FAILURES HISTORY (24h)
            // =========================================
            String failQuery = """
            SELECT COUNT(*)
            FROM login_history
            WHERE user_id = ?
            AND success = false
            AND auth_method='PASSWORD'
            AND login_time > NOW() - INTERVAL 1 DAY
        """;

            try (PreparedStatement ps = con.prepareStatement(failQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next()) {

                    int fails = rs.getInt(1);

// ⭐ vérifier succès récent
                    boolean recentSuccess = false;

                    String successQuery = """
    SELECT COUNT(*)
    FROM login_history
    WHERE user_id = ?
    AND success = true
    AND login_time > NOW() - INTERVAL 2 HOUR
""";

                    try (PreparedStatement ps2 = con.prepareStatement(successQuery)) {
                        ps2.setInt(1, userId);
                        ResultSet rs2 = ps2.executeQuery();
                        if (rs2.next() && rs2.getInt(1) > 0)
                            recentSuccess = true;
                    }

                    double penalty =
                            Math.min(Math.pow(fails, 1.3) * 6, 35);

// ⭐ réduction IA après succès valide
                    if (recentSuccess) {
                        penalty *= 0.35;   // énorme amélioration stabilité
                        System.out.println("Recent success detected → penalty reduced");
                    }

                    double adaptivePenalty = penalty * (score / 100.0);

                    score -= adaptivePenalty;

                    System.out.println("Adaptive penalty = -" + adaptivePenalty);


                    System.out.println("Password failures (24h) = " + fails);
                    System.out.println("Adaptive penalty = -" + adaptivePenalty);
                }
            }

            System.out.println("Score after failure history = " + score);

            // =========================================
            // =========================================
// TRUST RECOVERY (AI TIME DECAY MODEL)
// =========================================
            String recoveryQuery = """
    SELECT TIMESTAMPDIFF(HOUR, MAX(login_time), NOW())
    FROM login_history
    WHERE user_id = ?
    AND success = false
""";

            try (PreparedStatement ps = con.prepareStatement(recoveryQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next()) {

                    Number hoursObj = (Number) rs.getObject(1);

                    if (hoursObj != null) {

                        double hoursSinceLastFail = hoursObj.doubleValue();


                        // ⭐ récupération progressive (courbe exponentielle)
                        double MAX_RECOVERY = 25.0;
                        double RECOVERY_SPEED = 10.0; // plus petit = recovery rapide

                        double recoveryBonus =
                                MAX_RECOVERY *
                                        (1 - Math.exp(-hoursSinceLastFail / RECOVERY_SPEED));

                        if (score < 85) {
                            score += recoveryBonus;
                        }


                        System.out.println("Hours since last failure = "
                                + hoursSinceLastFail);
                        System.out.println("AI recovery bonus = +"
                                + recoveryBonus);
                    }
                }
            }

            System.out.println("Score after recovery = " + score);


            // =========================================
            // HABITUAL LOGIN HOUR (Behaviour AI)
            // =========================================
            String hourQuery = """
            SELECT HOUR(login_time) AS hour
            FROM login_history
            WHERE user_id = ?
            AND success = true
            ORDER BY login_time DESC
            LIMIT 20
        """;

            try (PreparedStatement ps = con.prepareStatement(hourQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                int sumHour = 0;
                int count = 0;

                while (rs.next()) {
                    sumHour += rs.getInt("hour");
                    count++;
                }

                if (count > 0) {

// =========================================
// HABITUAL LOGIN HOUR (Behaviour AI - improved)
// =========================================
                    String hourQuery = """
    SELECT HOUR(login_time) AS hour
    FROM login_history
    WHERE user_id = ?
    AND success = true
    ORDER BY login_time DESC
    LIMIT 20
""";

                    try (PreparedStatement ps = con.prepareStatement(hourQuery)) {

                        ps.setInt(1, userId);
                        ResultSet rs = ps.executeQuery();

                        Map<Integer, Integer> hourFrequency = new HashMap<>();

                        while (rs.next()) {
                            int h = rs.getInt("hour");
                            hourFrequency.put(h,
                                    hourFrequency.getOrDefault(h, 0) + 1);
                        }

                        if (!hourFrequency.isEmpty()) {

                            // ⭐ heure la plus fréquente (habitude réelle)
                            int usualHour = hourFrequency.entrySet()
                                    .stream()
                                    .max(Map.Entry.comparingByValue())
                                    .get()
                                    .getKey();

                            int currentHour =
                                    java.time.LocalTime.now().getHour();

                            int diff = Math.min(
                                    Math.abs(currentHour - usualHour),
                                    24 - Math.abs(currentHour - usualHour)
                            );

                            System.out.println("Usual login hour = " + usualHour);
                            System.out.println("Current hour = " + currentHour);
                            System.out.println("Hour difference = " + diff);

                            if (diff <= 2) {
                                score += 3;
                                System.out.println("Usual hour bonus → +3");
                            }
                            else if (diff <= 4) {
                                score -= 5;
                                System.out.println("Slight unusual hour → -5");
                            }
                            else if (diff <= 8) {
                                score -= 10;
                                System.out.println("Unusual hour → -10");
                            }
                            else {
                                score -= 18;
                                System.out.println("Highly unusual hour → -18");
                            }
                        }
                    }
                    int currentHour =
                            java.time.LocalTime.now().getHour();

                    int diff = Math.min(
                            Math.abs(currentHour - avgHour),
                            24 - Math.abs(currentHour - avgHour)
                    );

                    System.out.println("Average login hour = " + avgHour);
                    System.out.println("Current hour = " + currentHour);
                    System.out.println("Hour difference = " + diff);

                    if (diff <= 2) {
                        score += 3;
                        System.out.println("Usual hour bonus → +3");
                    }
                    else if (diff <= 4) {
                        score -= 5;
                        System.out.println("Slight unusual hour → -5");
                    }
                    else if (diff <= 8) {
                        score -= Math.min(6, score * 0.1);
                    }

                    else {
                        double hourPenalty = Math.min(10, score * 0.15);
                        score -= hourPenalty;

                        System.out.println("Highly unusual hour → -" + hourPenalty);
                    }
                }
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }

        System.out.println("Score before face fusion = " + score);

        // =========================================
        // FACE CONFIDENCE FUSION
        // =========================================
        if (faceConfidence > 0) {

            double oldScore = score;

            if (faceConfidence > 85) {
                score = score * 0.5 + faceConfidence * 0.5;
                System.out.println("Strong biometric recovery applied");
            } else {
                score = score * 0.7 + faceConfidence * 0.3;
            }

            System.out.println("Face confidence = " + faceConfidence);

            System.out.println("Face confidence = " + faceConfidence);
            System.out.println("Fusion: (" + oldScore +
                    "*0.7 + " + faceConfidence + "*0.3)");
        }

        // =========================================
        // NORMALISATION
        // =========================================
        score = Math.max(0, Math.min(100, score));

        System.out.println("FINAL TRUST SCORE = " + score);
        System.out.println("=============================================\n");
        score = Math.round(score * 100.0) / 100.0;
        return score;
    }*/


    public double computeTrustScore(int userId,
                                    double faceConfidence,
                                    boolean usedPassword,
                                    boolean passwordSuccess) {

        double score = 80;

        System.out.println("\n========== TRUST SCORE CALCULATION ==========");
        System.out.println("Initial score = " + score);

        try (Connection con =
                     DriverManager.getConnection(URL, USER, PASSWORD)) {

            // =========================================
            // LOAD PREVIOUS TRUST SCORE (AI MEMORY)
            // =========================================
            String baseQuery = """
            SELECT trust_score
            FROM login_history
            WHERE user_id = ?
            ORDER BY login_time DESC
            LIMIT 1
        """;

            try (PreparedStatement ps = con.prepareStatement(baseQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next() && rs.getObject(1) != null) {

                    double previous = rs.getDouble(1);

                    // ⭐ empêche chute infinie
                    score = Math.max(previous, 30);

                    System.out.println("Previous trust baseline = "
                            + previous + " → stabilized baseline = " + score);
                }
            }

            // =========================================
            // PASSWORD IMPACT
            // =========================================
            if (usedPassword) {

                if (passwordSuccess) {
                    score += 10;
                    System.out.println("Password SUCCESS → +10");
                } else {
                    score -= 12;
                    System.out.println("Password FAILED → -12");
                }
            }

            System.out.println("Score after password impact = " + score);

            // =========================================
            // FAILURE HISTORY (adaptive penalty)
            // =========================================
            String failQuery = """
            SELECT COUNT(*)
            FROM login_history
            WHERE user_id = ?
            AND success = false
            AND auth_method='PASSWORD'
            AND login_time > NOW() - INTERVAL 1 DAY
        """;

            try (PreparedStatement ps = con.prepareStatement(failQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next()) {

                    int fails = rs.getInt(1);

                    // vérifier succès récent
                    boolean recentSuccess = false;

                    String successQuery = """
                    SELECT COUNT(*)
                    FROM login_history
                    WHERE user_id = ?
                    AND success = true
                    AND login_time > NOW() - INTERVAL 2 HOUR
                """;

                    try (PreparedStatement ps2 = con.prepareStatement(successQuery)) {
                        ps2.setInt(1, userId);
                        ResultSet rs2 = ps2.executeQuery();
                        if (rs2.next() && rs2.getInt(1) > 0)
                            recentSuccess = true;
                    }

                    double penalty =
                            Math.min(Math.pow(fails, 1.3) * 6, 35);

                    // réduction si succès récent
                    if (recentSuccess) {
                        penalty *= 0.35;
                        System.out.println("Recent success detected → penalty reduced");
                    }

                    double adaptivePenalty = penalty * (score / 100.0);

                    score -= adaptivePenalty;

                    System.out.println("Password failures (24h) = " + fails);
                    System.out.println("Adaptive penalty = -" + adaptivePenalty);
                }
            }

            System.out.println("Score after failure history = " + score);

            // =========================================
            // TRUST RECOVERY (time decay)
            // =========================================
            String recoveryQuery = """
            SELECT TIMESTAMPDIFF(HOUR, MAX(login_time), NOW())
            FROM login_history
            WHERE user_id = ?
            AND success = false
        """;

            try (PreparedStatement ps = con.prepareStatement(recoveryQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                if (rs.next()) {

                    Number hoursObj = (Number) rs.getObject(1);

                    if (hoursObj != null) {

                        double hoursSinceLastFail = hoursObj.doubleValue();

                        double MAX_RECOVERY = 25.0;
                        double RECOVERY_SPEED = 10.0;

                        double recoveryBonus =
                                MAX_RECOVERY *
                                        (1 - Math.exp(-hoursSinceLastFail / RECOVERY_SPEED));

                        if (score < 85)
                            score += recoveryBonus;

                        System.out.println("Hours since last failure = "
                                + hoursSinceLastFail);
                        System.out.println("AI recovery bonus = +" + recoveryBonus);
                    }
                }
            }

            System.out.println("Score after recovery = " + score);

            // =========================================
            // HABITUAL LOGIN HOUR (REAL BEHAVIOUR AI)
            // =========================================
            String hourQuery = """
            SELECT HOUR(login_time) AS hour
            FROM login_history
            WHERE user_id = ?
            AND success = true
            ORDER BY login_time DESC
            LIMIT 20
        """;

            try (PreparedStatement ps = con.prepareStatement(hourQuery)) {

                ps.setInt(1, userId);
                ResultSet rs = ps.executeQuery();

                Map<Integer, Integer> hourFrequency = new HashMap<>();

                while (rs.next()) {
                    int h = rs.getInt("hour");
                    hourFrequency.put(h,
                            hourFrequency.getOrDefault(h, 0) + 1);
                }

                if (!hourFrequency.isEmpty()) {

                    int usualHour = hourFrequency.entrySet()
                            .stream()
                            .max(Map.Entry.comparingByValue())
                            .get()
                            .getKey();

                    int currentHour =
                            java.time.LocalTime.now().getHour();

                    int diff = Math.min(
                            Math.abs(currentHour - usualHour),
                            24 - Math.abs(currentHour - usualHour)
                    );

                    System.out.println("Usual login hour = " + usualHour);
                    System.out.println("Current hour = " + currentHour);
                    System.out.println("Hour difference = " + diff);

                    if (diff <= 2) {
                        score += 3;
                    }
                    else if (diff <= 4) {
                        score -= 5;
                    }
                    else if (diff <= 8) {
                        score -= Math.min(6, score * 0.1);
                    }
                    else {
                        double hourPenalty = Math.min(10, score * 0.15);
                        score -= hourPenalty;
                    }
                }
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }

        System.out.println("Score before face fusion = " + score);

        // =========================================
        // FACE CONFIDENCE FUSION
        // =========================================
        if (faceConfidence > 0) {

            double oldScore = score;

            if (faceConfidence > 85) {
                score = score * 0.5 + faceConfidence * 0.5;
                System.out.println("Strong biometric recovery applied");
            } else {
                score = score * 0.7 + faceConfidence * 0.3;
            }

            System.out.println("Face confidence = " + faceConfidence);
            System.out.println("Fusion: (" + oldScore +
                    " + face fusion)");
        }

        // =========================================
        // NORMALISATION
        // =========================================
        score = Math.max(0, Math.min(100, score));
        score = Math.round(score * 100.0) / 100.0;

        System.out.println("FINAL TRUST SCORE = " + score);
        System.out.println("=============================================\n");

        return score;
    }





}
