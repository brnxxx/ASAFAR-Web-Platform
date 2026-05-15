package tn.esprit.entities;
import tn.esprit.services.TransportService;
import java.math.BigDecimal;
import java.time.LocalDate;

public class Reservation {

    private int idReservation;
    private LocalDate dateReservation;
    private String typeReservation;
    private BigDecimal montantTotal;
    private String statut;
    private int idUser;
    //private int idHebergement;
    //private int idExcursion;
    private int idTransport;
    private String nomClient;

    /* ===================== CONSTRUCTEURS ===================== */

    // 🔹 Constructeur vide
    public Reservation() {
    }

    // 🔹 Constructeur sans ID (pour insertion)
    public Reservation(LocalDate dateReservation,
                       String typeReservation,
                       BigDecimal montantTotal,
                       String statut,
                       int idUser,
                       int idTransport) {

        this.dateReservation = dateReservation;
        this.typeReservation = typeReservation;
        this.montantTotal = montantTotal;
        this.statut = statut;
        this.idUser = idUser;
        this.idTransport = idTransport;
    }

    // 🔹 Constructeur complet
    public Reservation(int idReservation,
                       LocalDate dateReservation,
                       String typeReservation,
                       BigDecimal montantTotal,
                       String statut,
                       int idUser,
                       int idTransport) {

        this.idReservation = idReservation;
        this.dateReservation = dateReservation;
        this.typeReservation = typeReservation;
        this.montantTotal = montantTotal;
        this.statut = statut;
        this.idUser = idUser;
        this.idTransport = idTransport;
    }

    /* ===================== GETTERS ===================== */

    public int getIdReservation() {
        return idReservation;
    }

    public LocalDate getDateReservation() {
        return dateReservation;
    }

    public String getTypeReservation() {
        return typeReservation;
    }

    public BigDecimal getMontantTotal() {
        return montantTotal;
    }

    public String getStatut() {
        return statut;
    }

    public int getIdUser() {
        return idUser;
    }


    public int getIdTransport() {
        return idTransport;
    }

    /* ===================== SETTERS ===================== */

    public void setIdReservation(int idReservation) {
        this.idReservation = idReservation;
    }

    public void setDateReservation(LocalDate dateReservation) {
        this.dateReservation = dateReservation;
    }

    public void setTypeReservation(String typeReservation) {
        this.typeReservation = typeReservation;
    }

    public void setMontantTotal(BigDecimal montantTotal) {
        this.montantTotal = montantTotal;
    }

    public void setStatut(String statut) {
        this.statut = statut;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }


    public void setIdTransport(int idTransport) {
        this.idTransport = idTransport;
    }

    public String getNomClient() {
        return nomClient;
    }

    public void setNomClient(String nomClient) {
        this.nomClient = nomClient;
    }

    // 🔹 Getter dynamique du nom du transport
    public String getTransportNom() {
        try {
            // récupère le transport correspondant à l'ID depuis la base
            return TransportService.trouverParId(idTransport).getNom();
        } catch (Exception e) {
            return "Transport inconnu";
        }
    }

    // 🔹 Setter dynamique du transport via son nom
    public void setTransportNom(String nomTransport) {
        try {
            // Cherche le transport correspondant au nom dans la base
            Transport t = TransportService.trouverParNom(nomTransport); // méthode à créer dans tn.esprit.services.TransportService
            if (t != null) {
                this.idTransport = t.getIdTransport(); // met à jour l'idTransport
            } else {
                throw new IllegalArgumentException("Transport introuvable : " + nomTransport);
            }
        } catch (Exception e) {
            System.err.println("Erreur lors de la mise à jour du transport : " + e.getMessage());
        }
    }


    /* ===================== toString ===================== */

    @Override
    public String toString() {
        return "Reservation{" +
                "idReservation=" + idReservation +
                ", dateReservation=" + dateReservation +
                ", typeReservation='" + typeReservation + '\'' +
                ", montantTotal=" + montantTotal +
                ", statut='" + statut + '\'' +
                ", idUser=" + idUser +
                ", idTransport=" + idTransport +
                '}';
    }
}
