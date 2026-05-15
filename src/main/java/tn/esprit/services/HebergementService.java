package tn.esprit.services;
import tn.esprit.entities.Hebergement;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class HebergementService {
    private Connection conx;

    public HebergementService() {
        try {
            conx = MyDatabase.getInstance().getConx();
            if (conx == null) {
                System.err.println("❌ Erreur: Connexion à la base de données échouée!");
            } else {
                System.out.println("✅ Connexion établie pour HebergementService");
            }
        } catch (Exception e) {
            System.err.println("❌ Erreur création HebergementService: " + e.getMessage());
        }
    }

    public void ajouterHebergement(Hebergement h) {
        if (conx == null) {
            System.err.println("❌ Impossible d'ajouter: pas de connexion à la base");
            return;
        }
        try {
            String req = "INSERT INTO hebergement (nom, type, localisation, description, prixParNuit, disponibilite, noteMoyenne, imagePath) " +
                    "VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            PreparedStatement ps = conx.prepareStatement(req);
            ps.setString(1, h.getNom());
            ps.setString(2, h.getType());
            ps.setString(3, h.getLocalisation());
            ps.setString(4, h.getDescription());
            ps.setInt(5, h.getPrixParNuit());
            ps.setString(6, h.getDisponibilite());
            ps.setInt(7, h.getNoteMoyenne());
            ps.setString(8, h.getImagePath()); // Nouveau champ imagePath
            ps.executeUpdate();
            System.out.println("✅ Hébergement ajouté avec succès");
        } catch (SQLException e) {
            System.err.println("❌ Erreur ajout hébergement: " + e.getMessage());
        }
    }

    public List<Hebergement> afficherHebergements() {
        List<Hebergement> list = new ArrayList<>();
        if (conx == null) {
            System.err.println("❌ Pas de connexion à la base");
            return list;
        }
        try {
            String req = "SELECT * FROM hebergement";
            Statement st = conx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                Hebergement h = new Hebergement();
                h.setIdHebergement(rs.getInt("idHebergement"));
                h.setNom(rs.getString("nom"));
                h.setType(rs.getString("type"));
                h.setLocalisation(rs.getString("localisation"));
                h.setDescription(rs.getString("description"));
                h.setPrixParNuit(rs.getInt("prixParNuit"));
                h.setDisponibilite(rs.getString("disponibilite"));
                h.setNoteMoyenne(rs.getInt("noteMoyenne"));
                h.setImagePath(rs.getString("imagePath")); // Nouveau champ imagePath
                list.add(h);
            }
            System.out.println("✅ " + list.size() + " hébergement(s) trouvé(s)");
        } catch (SQLException e) {
            System.err.println("❌ Erreur affichage hébergements: " + e.getMessage());
        }
        return list;
    }

    public void modifierHebergement(Hebergement h) {
        if (conx == null) {
            System.err.println("❌ Pas de connexion à la base");
            return;
        }
        try {
            String req = "UPDATE hebergement SET nom=?, type=?, localisation=?, description=?, " +
                    "prixParNuit=?, disponibilite=?, noteMoyenne=?, imagePath=? WHERE idHebergement=?";
            PreparedStatement ps = conx.prepareStatement(req);
            ps.setString(1, h.getNom());
            ps.setString(2, h.getType());
            ps.setString(3, h.getLocalisation());
            ps.setString(4, h.getDescription());
            ps.setInt(5, h.getPrixParNuit());
            ps.setString(6, h.getDisponibilite());
            ps.setInt(7, h.getNoteMoyenne());
            ps.setString(8, h.getImagePath()); // Nouveau champ imagePath
            ps.setInt(9, h.getIdHebergement());
            ps.executeUpdate();
            System.out.println("✅ Hébergement modifié avec succès");
        } catch (SQLException e) {
            System.err.println("❌ Erreur modification hébergement: " + e.getMessage());
        }
    }

    public void supprimerHebergement(int id) {
        if (conx == null) {
            System.err.println("❌ Pas de connexion à la base");
            return;
        }
        try {
            String req = "DELETE FROM hebergement WHERE idHebergement=?";
            PreparedStatement ps = conx.prepareStatement(req);
            ps.setInt(1, id);
            int rows = ps.executeUpdate();
            if (rows > 0) {
                System.out.println("✅ Hébergement supprimé avec succès");
            } else {
                System.out.println("⚠️ Aucun hébergement trouvé avec ID: " + id);
            }
        } catch (SQLException e) {
            System.err.println("❌ Erreur suppression hébergement: " + e.getMessage());
        }
    }

    public Hebergement getHebergementById(int id) {
        if (conx == null) {
            System.err.println("❌ Pas de connexion à la base");
            return null;
        }
        try {
            String req = "SELECT * FROM hebergement WHERE idHebergement=?";
            PreparedStatement ps = conx.prepareStatement(req);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                Hebergement h = new Hebergement();
                h.setIdHebergement(rs.getInt("idHebergement"));
                h.setNom(rs.getString("nom"));
                h.setType(rs.getString("type"));
                h.setLocalisation(rs.getString("localisation"));
                h.setDescription(rs.getString("description"));
                h.setPrixParNuit(rs.getInt("prixParNuit"));
                h.setDisponibilite(rs.getString("disponibilite"));
                h.setNoteMoyenne(rs.getInt("noteMoyenne"));
                h.setImagePath(rs.getString("imagePath")); // Nouveau champ imagePath
                return h;
            }
        } catch (SQLException e) {
            System.err.println("❌ Erreur récupération hébergement: " + e.getMessage());
        }
        return null;
    }
}