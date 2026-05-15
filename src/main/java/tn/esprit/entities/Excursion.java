package tn.esprit.entities;
import java.time.LocalDate;

public class Excursion {
    private int idExcursion;
    private String titre;
    private String description;
    private String lieu;
    private LocalDate date;
    private int duree ; // en heures
    private double prix;
    private int nombrePlacesDisponibles;
    private String imageUrl;
    private double prixAdulte;
    private double prixEnfant;
    private double prixBebe;



    public Excursion(){}
    public Excursion(int idExcursion,
                     String titre,
                     LocalDate date,
                     String description,
                     String lieu,
                     double prixAdulte,
                     double prixEnfant,
                     double prixBebe,
                     int duree,
                     int nombrePlacesDisponibles,
                     String imageUrl) {

        this.idExcursion = idExcursion;
        this.titre = titre;
        this.date = date;
        this.description = description;
        this.lieu = lieu;

        this.prixAdulte = prixAdulte;
        this.prixEnfant = prixEnfant;
        this.prixBebe = prixBebe;

        this.duree = duree;
        this.nombrePlacesDisponibles = nombrePlacesDisponibles;
        this.imageUrl = imageUrl;
    }


    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public int getIdExcursion() {
        return idExcursion;
    }

    public void setIdExcursion(int idExcursion) {
        this.idExcursion = idExcursion;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getLieu() {
        return lieu;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public LocalDate getDate() {
        return date;
    }

    public void setDate(LocalDate date) {
        this.date = date;
    }

    public int getDuree() {
        return duree;
    }

    public void setDuree(int duree) {
        this.duree = duree;
    }

    public int getNombrePlacesDisponibles() {
        return nombrePlacesDisponibles;
    }

    public void setNombrePlacesDisponibles(int nombrePlacesDisponibles) {
        this.nombrePlacesDisponibles = nombrePlacesDisponibles;
    }

    public String getImageUrl() {
        return imageUrl;
    }

    public void setImageUrl(String imageUrl) {
        this.imageUrl = imageUrl;
    }

    public double getPrixAdulte() {
        return prixAdulte;

    }
    public void setPrixAdulte(double prixAdulte) {
        this.prixAdulte = prixAdulte;
    }
    public double getPrixEnfant() {
        return prixEnfant;
    }
    public void setPrixEnfant(double prixEnfant) {
        this.prixEnfant = prixEnfant;
    }
    public double getPrixBebe() {
        return prixBebe;
    }
    public void setPrixBebe(double prixBebe) {
        this.prixBebe = prixBebe;

    }


    @Override
    public String toString() {
        return "Excursion{" +
                "idExcursion=" + idExcursion +
                ", titre='" + titre + '\'' +
                ", description='" + description + '\'' +
                ", lieu='" + lieu + '\'' +
                ", date=" + date +
                ", duree=" + duree +
                ", prix=" + prix +
                ", nombrePlacesDisponibles=" + nombrePlacesDisponibles +
                ", imageUrl='" + imageUrl + '\'' +
                ", prixAdulte=" + prixAdulte +
                ", prixEnfant=" + prixEnfant +
                ", prixBebe=" + prixBebe +
                '}';
    }


}
