package tn.esprit.services;
import jakarta.mail.Session;
import jakarta.mail.Message;
import jakarta.mail.Transport;
import jakarta.mail.PasswordAuthentication;
import jakarta.mail.Authenticator;

import jakarta.mail.internet.InternetAddress;
import jakarta.mail.internet.MimeMessage;

import java.util.Properties;

import jakarta.mail.internet.InternetAddress;
import jakarta.mail.internet.MimeMessage;

import java.util.Properties;

import java.util.Properties;

public class MailService {

    public static void sendMail(String to, String code) {

        final String from = "sarrachaabene15@gmail.com";
        final String password = "wtbe pdma jowv oesa";

        Properties props = new Properties();
        props.put("mail.smtp.auth","true");
        props.put("mail.smtp.starttls.enable","true");
        props.put("mail.smtp.host","smtp.gmail.com");
        props.put("mail.smtp.port","587");

        Session session = Session.getInstance(props,
                new Authenticator() {
                    protected PasswordAuthentication getPasswordAuthentication() {
                        return new PasswordAuthentication(from,password);
                    }
                });

        try {

            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(from));
            message.setRecipients(
                    Message.RecipientType.TO,
                    InternetAddress.parse(to)
            );

            message.setSubject("Code de réinitialisation");

            message.setText("Votre code est : " + code);

            Transport.send(message);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
