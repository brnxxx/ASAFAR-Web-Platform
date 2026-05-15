package tn.esprit.ai;

import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;

public class AIClient {
    public static String askAI(String question) {

        try {

            URL url = new URL("http://127.0.0.1:8000/ask");
            HttpURLConnection con = (HttpURLConnection) url.openConnection();

            con.setRequestMethod("POST");
            con.setRequestProperty("Content-Type", "application/json");
            con.setDoOutput(true);

            String jsonInput =
                    "{\"message\":\"" + question + "\"}";

            OutputStream os = con.getOutputStream();
            os.write(jsonInput.getBytes("UTF-8"));
            os.close();

            BufferedReader br = new BufferedReader(
                    new InputStreamReader(con.getInputStream(), "UTF-8"));

            StringBuilder response = new StringBuilder();
            String line;

            while ((line = br.readLine()) != null) {
                response.append(line);
            }

            br.close();

            return response.toString();

        } catch (Exception e) {
            e.printStackTrace();
            return "{\"action\":\"ERROR\"}";
        }
    }



}
