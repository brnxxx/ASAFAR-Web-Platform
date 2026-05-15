package tn.esprit.services;
import tn.esprit.services.FacePlusPlusService;
import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;

public class FacePlusPlusService {

    private static final String API_KEY = "Gno5VKnbqWOb3wRR3kql2VQVS04IeUQo";
    private static final String API_SECRET = "_2aEAutcuwTEuz37PHkHPqJXJNy5Fu0k";

    public static String compareFaces(File img1, File img2) throws Exception {

        String boundary = "----FaceBoundary";
        URL url = new URL("https://api-us.faceplusplus.com/facepp/v3/compare");

        HttpURLConnection conn =
                (HttpURLConnection) url.openConnection();

        conn.setDoOutput(true);
        conn.setRequestMethod("POST");
        conn.setRequestProperty(
                "Content-Type",
                "multipart/form-data; boundary=" + boundary
        );

        DataOutputStream request =
                new DataOutputStream(conn.getOutputStream());

        // API KEY
        writeFormField(request, boundary, "api_key", API_KEY);
        writeFormField(request, boundary, "api_secret", API_SECRET);

        // IMAGE 1
        writeFile(request, boundary, "image_file1", img1);

        // IMAGE 2
        writeFile(request, boundary, "image_file2", img2);

        request.writeBytes("--" + boundary + "--\r\n");
        request.flush();
        request.close();

        BufferedReader reader =
                new BufferedReader(
                        new InputStreamReader(conn.getInputStream())
                );

        String line;
        StringBuilder response = new StringBuilder();

        while ((line = reader.readLine()) != null) {
            response.append(line);
        }

        reader.close();
        return response.toString();
    }

    private static void writeFormField(
            DataOutputStream out,
            String boundary,
            String name,
            String value
    ) throws IOException {

        out.writeBytes("--" + boundary + "\r\n");
        out.writeBytes(
                "Content-Disposition: form-data; name=\"" + name + "\"\r\n\r\n"
        );
        out.writeBytes(value + "\r\n");
    }

    private static void writeFile(
            DataOutputStream out,
            String boundary,
            String fieldName,
            File file
    ) throws IOException {

        out.writeBytes("--" + boundary + "\r\n");
        out.writeBytes(
                "Content-Disposition: form-data; name=\"" +
                        fieldName +
                        "\"; filename=\"" +
                        file.getName() +
                        "\"\r\n"
        );
        out.writeBytes("Content-Type: image/jpeg\r\n\r\n");

        FileInputStream input = new FileInputStream(file);
        byte[] buffer = new byte[4096];
        int bytesRead;

        while ((bytesRead = input.read(buffer)) != -1) {
            out.write(buffer, 0, bytesRead);
        }

        input.close();
        out.writeBytes("\r\n");
    }
}
