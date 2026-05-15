package tn.esprit.services;
import tn.esprit.entities.Reservation;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ReservationService {

    private final Connection conx;

    public ReservationService() {
        this.conx = MyDatabase.getInstance().getConx();
    }

    /**
     * Ajoute une réservation
     */
    public void ajouter(Reservation reservation) {

        String query = "INSERT INTO reservation " +
                "(dateReservation, typeReservation, montantTotal, statut, idUser, idTransport) " +
                "VALUES (?, ?, ?, ?, ?, ?)";

        try (PreparedStatement ps = conx.prepareStatement(query)) {

            ps.setDate(1, Date.valueOf(reservation.getDateReservation()));
            ps.setString(2, reservation.getTypeReservation());
            ps.setBigDecimal(3, reservation.getMontantTotal());
            ps.setString(4, reservation.getStatut());
            ps.setInt(5, reservation.getIdUser());
            ps.setInt(6, reservation.getIdTransport());

            int rows = ps.executeUpdate();

            if (rows > 0) {
                System.out.println("✅ Réservation ajoutée avec succès !");
            }

        } catch (SQLException e) {
            System.err.println("❌ Erreur lors de l'ajout : " + e.getMessage());
        }
    }

    /**
     * Afficher toutes les réservations
     */
    public List<Reservation> afficher() {
        List<Reservation> reservations = new ArrayList<>();

        String query = "SELECT r.*, u.nom AS nomClient " +
                "FROM reservation r " +
                "LEFT JOIN utilisateur u ON r.idUser = u.idUser"; // récupère le nom du client

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                Reservation res = new Reservation(
                        rs.getInt("idReservation"),
                        rs.getDate("dateReservation").toLocalDate(),
                        rs.getString("typeReservation"),
                        rs.getBigDecimal("montantTotal"),
                        rs.getString("statut"),
                        rs.getInt("idUser"),
                        rs.getInt("idTransport")
                );

                // Setter dynamique pour le nom du client
                res.setNomClient(rs.getString("nomClient"));
                reservations.add(res);
            }

        } catch (SQLException e) {
            System.err.println("❌ Erreur lors de l'affichage : " + e.getMessage());
        }

        return reservations;
    }


    /**
     * Trouver par ID
     */
    public Reservation trouverParId(int id) {

        String query = "SELECT * FROM reservation WHERE idReservation = ?";

        try (PreparedStatement ps = conx.prepareStatement(query)) {

            ps.setInt(1, id);

            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    return mapResultSetToReservation(rs);
                }
            }

        } catch (SQLException e) {
            System.err.println("❌ Erreur lors de la recherche : " + e.getMessage());
        }

        return null;
    }

    /**
     * Modifier réservation
     */
    public void modifier(Reservation reservation) {

        String query = "UPDATE reservation SET " +
                "dateReservation = ?, typeReservation = ?, montantTotal = ?, statut = ?, " +
                "idUser = ?, idTransport = ? " +
                "WHERE idReservation = ?";

        try (PreparedStatement ps = conx.prepareStatement(query)) {

            ps.setDate(1, Date.valueOf(reservation.getDateReservation()));
            ps.setString(2, reservation.getTypeReservation());
            ps.setBigDecimal(3, reservation.getMontantTotal());
            ps.setString(4, reservation.getStatut());
            ps.setInt(5, reservation.getIdUser());
            ps.setInt(6, reservation.getIdTransport());
            ps.setInt(7, reservation.getIdReservation());

            int rows = ps.executeUpdate();

            if (rows > 0) {
                System.out.println("✅ Réservation modifiée avec succès !");
            }

        } catch (SQLException e) {
            System.err.println("❌ Erreur lors de la modification : " + e.getMessage());
        }
    }

    /**
     * Supprimer réservation
     */
    public void supprimer(int id) {

        String query = "DELETE FROM reservation WHERE idReservation = ?";

        try (PreparedStatement ps = conx.prepareStatement(query)) {

            ps.setInt(1, id);

            int rows = ps.executeUpdate();

            if (rows > 0) {
                System.out.println("✅ Réservation supprimée avec succès !");
            }

        } catch (SQLException e) {
            System.err.println("❌ Erreur lors de la suppression : " + e.getMessage());
        }
    }

    /**
     * Mapping ResultSet -> Reservation
     */
    private Reservation mapResultSetToReservation(ResultSet rs) throws SQLException {

        return new Reservation(
                rs.getInt("idReservation"),
                rs.getDate("dateReservation").toLocalDate(),
                rs.getString("typeReservation"),
                rs.getBigDecimal("montantTotal"),
                rs.getString("statut"),
                rs.getInt("idUser"),
                rs.getInt("idTransport")
        );
    }
}
