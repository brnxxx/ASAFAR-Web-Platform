package tn.esprit.entities;
public class Hebergement {
    private int idHebergement;
    private String nom;
    private String type;
    private String localisation;
    private String description;
    private int prixParNuit;
    private String disponibilite;
    private int noteMoyenne;
    private String imagePath; // NOUVEAU CHAMP POUR L'IMAGE

    // Constructeurs
    public Hebergement() {}

    public Hebergement(String nom, String type, String localisation,
                       String description, int prixParNuit, String disponibilite,
                       int noteMoyenne) {
        this.nom = nom;
        this.type = type;
        this.localisation = localisation;
        this.description = description;
        this.prixParNuit = prixParNuit;
        this.disponibilite = disponibilite;
        this.noteMoyenne = noteMoyenne;
        this.imagePath = null; // Initialisation à null
    }

    // Nouveau constructeur avec imagePath
    public Hebergement(String nom, String type, String localisation,
                       String description, int prixParNuit, String disponibilite,
                       int noteMoyenne, String imagePath) {
        this.nom = nom;
        this.type = type;
        this.localisation = localisation;
        this.description = description;
        this.prixParNuit = prixParNuit;
        this.disponibilite = disponibilite;
        this.noteMoyenne = noteMoyenne;
        this.imagePath = imagePath;
    }

    // Getters et Setters
    public int getIdHebergement() { return idHebergement; }
    public void setIdHebergement(int idHebergement) { this.idHebergement = idHebergement; }

    public String getNom() { return nom; }
    public void setNom(String nom) { this.nom = nom; }

    public String getType() { return type; }
    public void setType(String type) { this.type = type; }

    public String getLocalisation() { return localisation; }
    public void setLocalisation(String localisation) { this.localisation = localisation; }

    public String getDescription() { return description; }
    public void setDescription(String description) { this.description = description; }

    public int getPrixParNuit() { return prixParNuit; }
    public void setPrixParNuit(int prixParNuit) { this.prixParNuit = prixParNuit; }

    public String getDisponibilite() { return disponibilite; }
    public void setDisponibilite(String disponibilite) { this.disponibilite = disponibilite; }

    public int getNoteMoyenne() { return noteMoyenne; }
    public void setNoteMoyenne(int noteMoyenne) { this.noteMoyenne = noteMoyenne; }

    // NOUVEAUX GETTERS ET SETTERS POUR IMAGEPATH
    public String getImagePath() { return imagePath; }
    public void setImagePath(String imagePath) { this.imagePath = imagePath; }

    @Override
    public String toString() {
        return nom + " - " + type + " (" + localisation + ")";
    }
}