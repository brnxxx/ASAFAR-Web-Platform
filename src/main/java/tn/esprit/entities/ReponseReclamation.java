package tn.esprit.entities;

import java.time.LocalDateTime;

public class ReponseReclamation {

    private int idReponse;
    private String contenu;
    private LocalDateTime dateReponse;
    private int idReclamation;   // réclamation concernée
    private int idUser;          // admin ou prestataire qui répond

    // Constructeur complet
    public ReponseReclamation(int idReponse, String contenu,
                              LocalDateTime dateReponse,
                              int idReclamation, int idUser) {
        this.idReponse = idReponse;
        this.contenu = contenu;
        this.dateReponse = dateReponse;
        this.idReclamation = idReclamation;
        this.idUser = idUser;
    }

    // 🔹 Constructeur sans id (pour insertion)
    public ReponseReclamation(String contenu, int idReclamation, int idUser) {
        this.contenu = contenu;
        this.idReclamation = idReclamation;
        this.idUser = idUser;
    }

    // 🔹 Getters & Setters
    public int getIdReponse() {
        return idReponse;
    }

    public void setIdReponse(int idReponse) {
        this.idReponse = idReponse;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public LocalDateTime getDateReponse() {
        return dateReponse;
    }

    public void setDateReponse(LocalDateTime dateReponse) {
        this.dateReponse = dateReponse;
    }

    public int getIdReclamation() {
        return idReclamation;
    }

    public void setIdReclamation(int idReclamation) {
        this.idReclamation = idReclamation;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    @Override
    public String toString() {
        return "ReponseReclamation{" +
                "idReponse=" + idReponse +
                ", dateReponse=" + dateReponse +
                ", idReclamation=" + idReclamation +
                ", idUser=" + idUser +
                '}';
    }
}
