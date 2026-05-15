package tn.esprit.entities;

public class ReservationY {
    private int id;
    private int userId;
    private int hebergementId;
    private String hebergementNom;
    private String clientNom;
    private String clientEmail;
    private String clientTel;
    private String dateArrivee;
    private String dateDepart;
    private int nbPersonnes;
    private double prixTotal;
    private String statut;
    private String dateReservation;

    // Constructeurs
    public ReservationY() {}

    // Getters et Setters
    public int getId() { return id; }
    public void setId(int id) { this.id = id; }

    public int getUserId() { return userId; }
    public void setUserId(int userId) { this.userId = userId; }

    public int getHebergementId() { return hebergementId; }
    public void setHebergementId(int hebergementId) { this.hebergementId = hebergementId; }

    public String getHebergementNom() { return hebergementNom; }
    public void setHebergementNom(String hebergementNom) { this.hebergementNom = hebergementNom; }

    public String getClientNom() { return clientNom; }
    public void setClientNom(String clientNom) { this.clientNom = clientNom; }

    public String getClientEmail() { return clientEmail; }
    public void setClientEmail(String clientEmail) { this.clientEmail = clientEmail; }

    public String getClientTel() { return clientTel; }
    public void setClientTel(String clientTel) { this.clientTel = clientTel; }

    public String getDateArrivee() { return dateArrivee; }
    public void setDateArrivee(String dateArrivee) { this.dateArrivee = dateArrivee; }

    public String getDateDepart() { return dateDepart; }
    public void setDateDepart(String dateDepart) { this.dateDepart = dateDepart; }

    public int getNbPersonnes() { return nbPersonnes; }
    public void setNbPersonnes(int nbPersonnes) { this.nbPersonnes = nbPersonnes; }

    public double getPrixTotal() { return prixTotal; }
    public void setPrixTotal(double prixTotal) { this.prixTotal = prixTotal; }

    public String getStatut() { return statut; }
    public void setStatut(String statut) { this.statut = statut; }

    public String getDateReservation() { return dateReservation; }
    public void setDateReservation(String dateReservation) { this.dateReservation = dateReservation; }
}