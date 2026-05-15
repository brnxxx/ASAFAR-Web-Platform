package tn.esprit.entities;

import java.math.BigDecimal;
import java.time.LocalDateTime;

public class Transport {
    private int idTransport;
    private String nom;
    private String type;
    private BigDecimal prix;
    private String description;
    private LocalDateTime dateCreation;
    private double latitude;
    private double longitude;
    private String idUser;


    public Transport() {
    }

    public Transport(String nom, String type, BigDecimal prix, String description, double latitude, double longitude) {
        this.nom = nom;
        this.type = type;
        this.prix = prix;
        this.description = description;
        this.latitude = latitude;
        this.longitude = longitude;
        this.dateCreation = LocalDateTime.now(); // tu peux garder la date courante
    }


    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getIdTransport() {
        return idTransport;
    }

    public void setIdTransport(int idTransport) {
        this.idTransport = idTransport;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public BigDecimal getPrix() {
        return prix;
    }

    public void setPrix(BigDecimal prix) {
        this.prix = prix;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public LocalDateTime getDateCreation() {
        return dateCreation;
    }

    public void setDateCreation(LocalDateTime dateCreation) {
        this.dateCreation = dateCreation;
    }

    public Transport(int idTransport, String nom, String type, BigDecimal prix, String description, LocalDateTime dateCreation) {
        this.idTransport = idTransport;
        this.nom = nom;
        this.type = type;
        this.prix= prix;
        this.description = description;
        this.dateCreation = dateCreation;
    }

    public double getLatitude() {
        return latitude;
    }

    public void setLatitude(double latitude) {
        this.latitude = latitude;
    }

    public double getLongitude() {
        return longitude;
    }

    public void setLongitude(double longitude) {
        this.longitude = longitude;
    }


    public String getIdUser() {
        return idUser ;
    }
}


