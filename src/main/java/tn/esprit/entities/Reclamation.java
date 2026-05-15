package tn.esprit.entities;

import java.time.LocalDate;

public class Reclamation {

    private int idReclamation;
    private String sujet;
    private String description;
    private LocalDate dateReclamation;
    private String statut;
    private String reponseAdmin;
    private int idUser;

    // ================= CONSTRUCTEUR COMPLET =================
    public Reclamation(int idReclamation,
                       String sujet,
                       String description,
                       LocalDate dateReclamation,
                       String statut,
                       String reponseAdmin,
                       int idUser) {

        this.idReclamation = idReclamation;
        this.sujet = sujet;
        this.description = description;
        this.dateReclamation = dateReclamation;
        this.statut = statut;
        this.reponseAdmin = reponseAdmin;
        this.idUser = idUser;
    }

    // ================= CONSTRUCTEUR INSERT =================
    public Reclamation(String sujet, String description, int idUser) {
        this.sujet = sujet;
        this.description = description;
        this.idUser = idUser;
        this.dateReclamation = LocalDate.now();
        this.statut = "EN_ATTENTE";
    }

    // ================= GETTERS & SETTERS =================

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

    public String getReponseAdmin() {
        return reponseAdmin;
    }

    public void setReponseAdmin(String reponseAdmin) {
        this.reponseAdmin = reponseAdmin;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    // ================= DEBUG =================
    @Override
    public String toString() {
        return "Reclamation{" +
                "id=" + idReclamation +
                ", sujet='" + sujet + '\'' +
                ", statut='" + statut + '\'' +
                ", date=" + dateReclamation +
                ", idUser=" + idUser +
                '}';
    }
}
