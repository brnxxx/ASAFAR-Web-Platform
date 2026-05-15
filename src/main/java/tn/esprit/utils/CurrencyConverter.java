package tn.esprit.utils;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.HashMap;
import java.util.Map;
import org.json.JSONObject;

public class CurrencyConverter {

    // 🔑 TA CLÉ API (remplace par la tienne)
    private static final String API_KEY = "bef1043bab57b5a7b0e2780d";

    private static final String API_URL = "https://v6.exchangerate-api.com/v6/" + API_KEY + "/latest/";

    // Cache pour éviter trop d'appels API
    private static Map<String, Double> cache = new HashMap<>();
    private static long lastUpdate = 0;
    private static final long CACHE_DURATION = 6 * 60 * 60 * 1000; // 6 heures

    /**
     * Convertir un montant d'une devise à une autre
     * @param amount Montant à convertir
     * @param from Devise source (ex: "TND", "EUR", "USD")
     * @param to Devise cible
     * @return Montant converti
     */
    public static double convert(double amount, String from, String to) {
        if (from.equals(to)) return amount;

        try {
            double rate = getRate(from, to);
            return amount * rate;
        } catch (Exception e) {
            System.out.println("❌ Erreur conversion " + from + " → " + to + ": " + e.getMessage());
            return amount; // Retourne montant original en cas d'erreur
        }
    }

    /**
     * Récupérer le taux de change entre deux devises
     */
    private static double getRate(String from, String to) throws Exception {
        String key = from + "_" + to;

        // Vérifier le cache
        if (cache.containsKey(key) && !isCacheExpired()) {
            System.out.println("✅ Taux (cache) " + from + " → " + to + " = " + cache.get(key));
            return cache.get(key);
        }

        // Appel API
        URL url = new URL(API_URL + from);
        HttpURLConnection conn = (HttpURLConnection) url.openConnection();
        conn.setRequestMethod("GET");
        conn.setConnectTimeout(5000);
        conn.setReadTimeout(5000);

        if (conn.getResponseCode() != 200) {
            throw new RuntimeException("Erreur API: " + conn.getResponseCode());
        }

        BufferedReader reader = new BufferedReader(
                new InputStreamReader(conn.getInputStream())
        );
        StringBuilder response = new StringBuilder();
        String line;
        while ((line = reader.readLine()) != null) {
            response.append(line);
        }
        reader.close();
        conn.disconnect();

        // Parser la réponse
        JSONObject json = new JSONObject(response.toString());

        if (json.getString("result").equals("success")) {
            JSONObject rates = json.getJSONObject("conversion_rates");
            double rate = rates.getDouble(to);

            // Mettre en cache
            cache.put(key, rate);
            lastUpdate = System.currentTimeMillis();

            System.out.println("✅ Taux (API) " + from + " → " + to + " = " + rate);
            return rate;
        } else {
            throw new RuntimeException("Erreur API: " + json.getString("error-type"));
        }
    }

    private static boolean isCacheExpired() {
        return System.currentTimeMillis() - lastUpdate > CACHE_DURATION;
    }

    /**
     * Vider le cache (appeler manuellement si besoin)
     */
    public static void clearCache() {
        cache.clear();
        lastUpdate = 0;
        System.out.println("🧹 Cache vidé");
    }

    /**
     * Récupérer tous les taux pour une devise de base
     */
    public static JSONObject getAllRates(String baseCurrency) {
        try {
            URL url = new URL(API_URL + baseCurrency);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");

            BufferedReader reader = new BufferedReader(
                    new InputStreamReader(conn.getInputStream())
            );
            StringBuilder response = new StringBuilder();
            String line;
            while ((line = reader.readLine()) != null) {
                response.append(line);
            }
            reader.close();

            return new JSONObject(response.toString());

        } catch (Exception e) {
            e.printStackTrace();
            return null;
        }
    }

    /**
     * Liste des devises supportées
     */
    public static String[] getSupportedCurrencies() {
        return new String[] {
                "TND", "EUR", "USD", "GBP", "JPY", "CAD", "CHF", "CNY", "AUD",
                "AED", "DZD", "BHD", "LYD", "MAD", "QAR", "SAR", "EGP", "JOD",
                "KWD", "LBP", "OMR", "SYP", "TRY", "ILS"
        };
    }

    /**
     * Retourne le symbole d'une devise
     */
    public static String getSymbol(String currency) {
        switch (currency) {
            case "TND": return "TND";
            case "EUR": return "€";
            case "USD": return "$";
            case "GBP": return "£";
            case "JPY": return "¥";
            case "CAD": return "C$";
            case "CHF": return "CHF";
            case "CNY": return "¥";
            case "AUD": return "A$";
            case "AED": return "د.إ";
            case "DZD": return "دج";
            case "BHD": return ".د.ب";
            case "LYD": return "ل.د";
            case "MAD": return "د.م.";
            case "QAR": return "ر.ق";
            case "SAR": return "﷼";
            case "EGP": return "£";
            case "JOD": return "د.ا";
            case "KWD": return "د.ك";
            case "LBP": return "ل.ل";
            case "OMR": return "ر.ع";
            case "SYP": return "ل.س";
            case "TRY": return "₺";
            case "ILS": return "₪";
            default: return currency;
        }
    }
}