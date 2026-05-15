package tn.esprit.entities;
import java.time.LocalDate;
import java.time.LocalDateTime;

public class ReservationB {

    private int idReservation;
    private LocalDateTime dateReservation;
    private TypeReservationB typeReservation;
    private double montantTotal;
    private StatutReservationB statut;

    private int idUser;
    private Integer idHebergement; // nullable
    private Integer idExcursion;   // nullable
    private Integer idTransport;   // nullable

    private int nbAdultes;
    private int nbEnfants;
    private int nbBebes;

    private LocalDate dateExcursion;
    private Excursion excursion;

    // ================= CONSTRUCTORS =================

    public ReservationB() {}

    // INSERT constructor
    public ReservationB(LocalDateTime dateReservation,
                        TypeReservationB typeReservation,
                        double montantTotal,
                        StatutReservationB statut,
                        int idUser,
                        Integer idHebergement,
                        Integer idExcursion,
                        Integer idTransport,
                        int nbAdultes,
                        int nbEnfants,
                        int nbBebes,
                        LocalDate dateExcursion) {

        this.dateReservation = dateReservation;
        this.typeReservation = typeReservation;
        this.montantTotal = montantTotal;
        this.statut = statut;

        this.idUser = idUser;
        this.idHebergement = idHebergement;
        this.idExcursion = idExcursion;
        this.idTransport = idTransport;

        this.nbAdultes = nbAdultes;
        this.nbEnfants = nbEnfants;
        this.nbBebes = nbBebes;

        this.dateExcursion = dateExcursion;
    }

    // SELECT / UPDATE constructor
    public ReservationB(int idReservation,
                        LocalDateTime dateReservation,
                        TypeReservationB typeReservation,
                        double montantTotal,
                        StatutReservationB statut,
                        int idUser,
                        Integer idHebergement,
                        Integer idExcursion,
                        Integer idTransport,
                        int nbAdultes,
                        int nbEnfants,
                        int nbBebes,
                        LocalDate dateExcursion) {

        this(dateReservation, typeReservation, montantTotal, statut,
                idUser, idHebergement, idExcursion, idTransport,
                nbAdultes, nbEnfants, nbBebes, dateExcursion);

        this.idReservation = idReservation;
    }

    // ================= GETTERS & SETTERS =================

    public int getIdReservation() { return idReservation; }
    public void setIdReservation(int idReservation) { this.idReservation = idReservation; }

    public LocalDateTime getDateReservation() { return dateReservation; }
    public void setDateReservation(LocalDateTime dateReservation) { this.dateReservation = dateReservation; }

    public TypeReservationB getTypeReservation() { return typeReservation; }
    public void setTypeReservation(TypeReservationB typeReservation) { this.typeReservation = typeReservation; }

    public double getMontantTotal() { return montantTotal; }
    public void setMontantTotal(double montantTotal) { this.montantTotal = montantTotal; }

    public StatutReservationB getStatut() { return statut; }
    public void setStatut(StatutReservationB statut) { this.statut = statut; }

    public int getIdUser() { return idUser; }
    public void setIdUser(int idUser) { this.idUser = idUser; }

    public Integer getIdHebergement() { return idHebergement; }
    public void setIdHebergement(Integer idHebergement) { this.idHebergement = idHebergement; }

    public Integer getIdExcursion() { return idExcursion; }
    public void setIdExcursion(Integer idExcursion) { this.idExcursion = idExcursion; }

    public Integer getIdTransport() { return idTransport; }
    public void setIdTransport(Integer idTransport) { this.idTransport = idTransport; }

    public int getNbAdultes() { return nbAdultes; }
    public void setNbAdultes(int nbAdultes) { this.nbAdultes = nbAdultes; }

    public int getNbEnfants() { return nbEnfants; }
    public void setNbEnfants(int nbEnfants) { this.nbEnfants = nbEnfants; }

    public int getNbBebes() { return nbBebes; }
    public void setNbBebes(int nbBebes) { this.nbBebes = nbBebes; }

    public LocalDate getDateExcursion() { return dateExcursion; }
    public void setDateExcursion(LocalDate dateExcursion) { this.dateExcursion = dateExcursion; }

    public Excursion getExcursion() { return excursion; }
    public void setExcursion(Excursion excursion) { this.excursion = excursion; }

    @Override
    public String toString() {
        return "ReservationB{" +
                "idReservation=" + idReservation +
                ", dateReservation=" + dateReservation +
                ", typeReservation=" + typeReservation +
                ", montantTotal=" + montantTotal +
                ", statut=" + statut +
                ", idUser=" + idUser +
                ", idHebergement=" + idHebergement +
                ", idExcursion=" + idExcursion +
                ", idTransport=" + idTransport +
                ", nbAdultes=" + nbAdultes +
                ", nbEnfants=" + nbEnfants +
                ", nbBebes=" + nbBebes +
                ", dateExcursion=" + dateExcursion +
                '}';
    }
}
