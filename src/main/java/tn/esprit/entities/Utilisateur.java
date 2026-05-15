package tn.esprit.entities;

import java.time.LocalDate;

public class Utilisateur {

    private int idUser;
    private String nom;
    private String prenom;
    private String email;
    private String motDePasse;
    private String telephone;
    private String role;
    private LocalDate dateInscription;
    private String statut;
    private String image;

    //Constructeur
    public Utilisateur(int idUser, String nom, String prenom, String email,
                       String motDePasse, String telephone, String role,
                       LocalDate dateInscription, String statut) {
        this.idUser = idUser;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.motDePasse = motDePasse;
        this.telephone = telephone;
        this.role = role;
        this.dateInscription = dateInscription;
        this.statut = statut;
    }
    public Utilisateur(){}
    //Constructeur
    public Utilisateur(String nom, String prenom, String email,
                       String motDePasse, String telephone, String role) {
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.motDePasse = motDePasse;
        this.telephone = telephone;
        this.role = role;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getMotDePasse() {
        return motDePasse;
    }

    public void setMotDePasse(String motDePasse) {
        this.motDePasse = motDePasse;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public LocalDate getDateInscription() {
        return dateInscription;
    }

    public void setDateInscription(LocalDate dateInscription) {
        this.dateInscription = dateInscription;
    }

    public String getStatut() {
        return statut;
    }

    public void setStatut(String statut) {
        this.statut = statut;
    }
    public void setIduser(int idUser) {
        this.idUser = idUser;
    }


    @Override
    public String toString() {
        return "Utilisateur{"+"idUser="+ idUser +", nom='" + nom + '\'' +", prenom='" + prenom + '\'' +", email='" + email + '\'' +", role='" + role + '\'' +", dateInscription=" + dateInscription +", statut='" + statut + '\'' +'}';
    }

    public void setImage(String image) {
        this.image = image;
    }
    public String getImage() {
        return image;
    }
    public Utilisateur(int idUser,
                       String nom,
                       String prenom,
                       String email,
                       String motDePasse,
                       String telephone,
                       String role,
                       LocalDate dateInscription,
                       String statut,
                       String image) {

        this.idUser = idUser;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.motDePasse = motDePasse;
        this.telephone = telephone;
        this.role = role;
        this.dateInscription = dateInscription;
        this.statut = statut;
        this.image = image;   // ✅ IMPORTANT
    }


}
