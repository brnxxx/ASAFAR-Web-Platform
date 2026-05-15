package tn.esprit.services;

import tn.esprit.entities.Transport;
import tn.esprit.utils.MyDatabase;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class TransportService {
    private static Connection conx;

    public TransportService() {
        conx = MyDatabase.getInstance().getConx();
    }

    public void ajouter(Transport transport) {
        String query = "INSERT INTO transport (nom, type, prix, description) VALUES (?, ?, ?, ?)";
        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setString(1, transport.getNom());
            ps.setString(2, transport.getType());
            ps.setBigDecimal(3, transport.getPrix());
            ps.setString(4, transport.getDescription());
            ps.executeUpdate();System.out.println("Transport ajouté avec succès!");
        } catch (SQLException e) {
            System.out.println("Erreur lors de l'ajout: " + e.getMessage());
        }
    }

    public List<Transport> afficher() {
        List<Transport> transports = new ArrayList<>();
        String query = "SELECT * FROM transport ORDER BY id_transport ASC";

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                Timestamp ts = rs.getTimestamp("date_creation");
                transports.add(new Transport(
                        rs.getInt("id_transport"),
                        rs.getString("nom"),
                        rs.getString("type"),
                        rs.getBigDecimal("prix"),
                        rs.getString("description"),
                        ts != null ? ts.toLocalDateTime() : null
                ));
            }

        } catch (SQLException e) {
            System.out.println("Erreur lors de l'affichage: " + e.getMessage());
        }

        return transports;
    }


    public static Transport trouverParId(int id) {
        String query = "SELECT * FROM transport WHERE id_transport = ?";
        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                return new Transport(
                        rs.getInt("id_transport"),
                        rs.getString("nom"),
                        rs.getString("type"),
                        rs.getBigDecimal("prix"),
                        rs.getString("description"),
                        rs.getTimestamp("date_creation").toLocalDateTime()
                );
            }
        } catch (SQLException e) {
            System.out.println("Erreur lors de la recherche: " + e.getMessage());
        }
        return null;
    }

    public void modifier(Transport transport) {
        String query = "UPDATE transport SET nom = ?, type = ?, prix = ?, description = ? WHERE id_transport = ?";
        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setString(1, transport.getNom());
            ps.setString(2, transport.getType());
            ps.setBigDecimal(3, transport.getPrix());
            ps.setString(4, transport.getDescription());
            ps.setInt(5, transport.getIdTransport());
            ps.executeUpdate();
            System.out.println("Transport modifié avec succès!");
        } catch (SQLException e) {
            System.out.println("Erreur lors de la modification: " + e.getMessage());
        }
    }

    public void supprimer(int id) {
        String query = "DELETE FROM transport WHERE id_transport = ?";
        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("Transport supprimé avec succès!");
        } catch (SQLException e) {
            System.out.println("Erreur lors de la suppression: " + e.getMessage());
        }
    }

    public static Transport trouverParNom(String nomTransport) {
        String query = "SELECT * FROM transport WHERE nom = ? LIMIT 1";

        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setString(1, nomTransport); // on bind le nom du transport
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    // On mappe les colonnes de la base sur l'objet Transport
                    return new Transport(
                            rs.getInt("idTransport"),
                            rs.getString("nom"),
                            rs.getString("type"),
                            rs.getBigDecimal("prix"),
                            rs.getString("description"),
                            rs.getTimestamp("dateCreation") != null ? rs.getTimestamp("dateCreation").toLocalDateTime() : null
                    );
                }
            }
        } catch (SQLException e) {
            System.err.println(" Erreur lors de la recherche du transport par nom : " + e.getMessage());
        }

        return null; // si aucun transport trouvé
    }

}
