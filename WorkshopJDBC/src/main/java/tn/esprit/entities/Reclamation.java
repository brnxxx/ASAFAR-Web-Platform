package tn.esprit.entities;

import java.time.LocalDate;

public class Reclamation {

    private int idReclamation;
    private String sujet;
    private String description;
    private LocalDate dateReclamation;
    private String statut;      // en attente / traitée / rejetée
    private int idUser;         // utilisateur qui a envoyé la réclamation

    // 🔹 Constructeur complet
    public Reclamation(int idReclamation, String sujet, String description,
                       LocalDate dateReclamation, String statut, int idUser) {
        this.idReclamation = idReclamation;
        this.sujet = sujet;
        this.description = description;
        this.dateReclamation = dateReclamation;
        this.statut = statut;
        this.idUser = idUser;
    }

    // 🔹 Constructeur sans id (pour insertion)
    public Reclamation(String sujet, String description, int idUser) {
        this.sujet = sujet;
        this.description = description;
        this.idUser = idUser;
    }

    // 🔹 Getters & Setters
    public int getIdReclamation() {
        return idReclamation;
    }

    public void setIdReclamation(int idReclamation) {
        this.idReclamation = idReclamation;
    }

    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public LocalDate getDateReclamation() {
        return dateReclamation;
    }

    public void setDateReclamation(LocalDate dateReclamation) {
        this.dateReclamation = dateReclamation;
    }

    public String getStatut() {
        return statut;
    }

    public void setStatut(String statut) {
        this.statut = statut;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    @Override
    public String toString() {
        return "Reclamation{" +
                "idReclamation=" + idReclamation +
                ", sujet='" + sujet + '\'' +
                ", statut='" + statut + '\'' +
                ", dateReclamation=" + dateReclamation +
                ", idUser=" + idUser +
                '}';
    }
}
