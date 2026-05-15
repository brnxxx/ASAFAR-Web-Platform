package tn.esprit.services;

import tn.esprit.entities.ReservationY;
import tn.esprit.utils.MyDatabase;

import java.sql.*;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

public class ReservationHebergementService {

    private final Connection conx;

    public ReservationHebergementService() {
        conx = MyDatabase.getInstance().getConx();
    }

    // ================= AJOUTER UNE RÉSERVATION =================
    public void ajouter(ReservationY r) throws SQLException {
        String query = "INSERT INTO reservation (" +
                "dateReservation, typeReservation, montantTotal, statut, " +
                "idUser, idHebergement, nbPersonnes, dateArrivee, dateDepart, " +
                "nb_adultes, nb_enfants, nb_bebes) " +
                "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setTimestamp(1, Timestamp.valueOf(LocalDateTime.now()));
            ps.setString(2, "HEBERGEMENT");
            ps.setInt(3, (int) r.getPrixTotal());
            ps.setString(4, r.getStatut() != null ? r.getStatut() : "EN_ATTENTE");
            ps.setInt(5, r.getUserId());
            ps.setInt(6, r.getHebergementId());
            ps.setInt(7, r.getNbPersonnes());

            LocalDate arrivee = LocalDate.parse(r.getDateArrivee());
            LocalDate depart = LocalDate.parse(r.getDateDepart());
            ps.setDate(8, Date.valueOf(arrivee));
            ps.setDate(9, Date.valueOf(depart));

            // Champs obligatoires pour les excursions mais mis à 0 pour l'hébergement
            ps.setInt(10, 0);
            ps.setInt(11, 0);
            ps.setInt(12, 0);

            ps.executeUpdate();
            System.out.println("✅ Réservation hébergement ajoutée");
        }
    }

    // ================= RÉSERVATIONS PAR UTILISATEUR =================
    public List<ReservationY> getByUserId(int userId) throws SQLException {
        List<ReservationY> list = new ArrayList<>();
        String query = "SELECT r.*, " +
                "h.nom as hebergement_nom, " +
                "u.nom as user_nom, " +
                "u.prenom as user_prenom, " +
                "u.email as user_email, " +
                "u.telephone as user_tel " +
                "FROM reservation r " +
                "LEFT JOIN hebergement h ON r.idHebergement = h.idHebergement " +
                "LEFT JOIN utilisateur u ON r.idUser = u.idUser " +
                "WHERE r.idUser = ? AND r.typeReservation = 'HEBERGEMENT' " +
                "ORDER BY r.dateReservation DESC";

        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setInt(1, userId);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                list.add(mapResultSetToReservationWithUser(rs));
            }
        }
        return list;
    }

    // ================= TOUTES LES RÉSERVATIONS (admin) =================
    public List<ReservationY> getAllReservations() throws SQLException {
        List<ReservationY> list = new ArrayList<>();
        String query = "SELECT r.*, " +
                "h.nom as hebergement_nom, " +
                "u.nom as user_nom, " +
                "u.prenom as user_prenom, " +
                "u.email as user_email, " +
                "u.telephone as user_tel " +
                "FROM reservation r " +
                "LEFT JOIN hebergement h ON r.idHebergement = h.idHebergement " +
                "LEFT JOIN utilisateur u ON r.idUser = u.idUser " +
                "WHERE r.typeReservation = 'HEBERGEMENT' " +
                "ORDER BY r.dateReservation DESC";

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                list.add(mapResultSetToReservationWithUser(rs));
            }
        }
        return list;
    }

    // ================= MODIFIER UNE RÉSERVATION =================
    public void modifier(ReservationY r) throws SQLException {
        String query = "UPDATE reservation SET " +
                "dateArrivee = ?, dateDepart = ?, nbPersonnes = ?, montantTotal = ? " +
                "WHERE idReservation = ? AND typeReservation = 'HEBERGEMENT'";

        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setDate(1, Date.valueOf(LocalDate.parse(r.getDateArrivee())));
            ps.setDate(2, Date.valueOf(LocalDate.parse(r.getDateDepart())));
            ps.setInt(3, r.getNbPersonnes());
            ps.setInt(4, (int) r.getPrixTotal());
            ps.setInt(5, r.getId());

            ps.executeUpdate();
            System.out.println("✅ Réservation modifiée");
        }
    }

    // ================= SUPPRIMER UNE RÉSERVATION =================
    public void supprimer(int id) throws SQLException {
        String query = "DELETE FROM reservation WHERE idReservation = ? AND typeReservation = 'HEBERGEMENT'";

        try (PreparedStatement ps = conx.prepareStatement(query)) {
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("✅ Réservation supprimée");
        }
    }

    // ================= MAPPER AVEC UTILISATEUR =================
    private ReservationY mapResultSetToReservationWithUser(ResultSet rs) throws SQLException {
        ReservationY r = new ReservationY();

        r.setId(rs.getInt("idReservation"));
        r.setUserId(rs.getInt("idUser"));
        r.setHebergementId(rs.getInt("idHebergement"));
        r.setHebergementNom(rs.getString("hebergement_nom"));

        // Informations client depuis la table utilisateur
        String nom = rs.getString("user_nom");
        String prenom = rs.getString("user_prenom");
        r.setClientNom((prenom != null ? prenom + " " : "") + (nom != null ? nom : ""));
        r.setClientEmail(rs.getString("user_email"));
        r.setClientTel(rs.getString("user_tel"));

        r.setNbPersonnes(rs.getInt("nbPersonnes"));
        r.setPrixTotal(rs.getDouble("montantTotal"));
        r.setStatut(rs.getString("statut"));

        Date dateArrivee = rs.getDate("dateArrivee");
        if (dateArrivee != null) {
            r.setDateArrivee(dateArrivee.toString());
        }

        Date dateDepart = rs.getDate("dateDepart");
        if (dateDepart != null) {
            r.setDateDepart(dateDepart.toString());
        }

        Timestamp ts = rs.getTimestamp("dateReservation");
        if (ts != null) {
            r.setDateReservation(ts.toLocalDateTime().toLocalDate().toString());
        }

        return r;
    }

    // ================= MAPPER SIMPLE (sans utilisateur) =================
    private ReservationY mapResultSetToReservation(ResultSet rs) throws SQLException {
        ReservationY r = new ReservationY();

        r.setId(rs.getInt("idReservation"));
        r.setUserId(rs.getInt("idUser"));
        r.setHebergementId(rs.getInt("idHebergement"));
        r.setHebergementNom(rs.getString("hebergement_nom"));

        // Ces champs seront vides car pas de jointure
        r.setClientNom("");
        r.setClientEmail("");
        r.setClientTel("");

        r.setNbPersonnes(rs.getInt("nbPersonnes"));
        r.setPrixTotal(rs.getDouble("montantTotal"));
        r.setStatut(rs.getString("statut"));

        Date dateArrivee = rs.getDate("dateArrivee");
        if (dateArrivee != null) {
            r.setDateArrivee(dateArrivee.toString());
        }

        Date dateDepart = rs.getDate("dateDepart");
        if (dateDepart != null) {
            r.setDateDepart(dateDepart.toString());
        }

        Timestamp ts = rs.getTimestamp("dateReservation");
        if (ts != null) {
            r.setDateReservation(ts.toLocalDateTime().toLocalDate().toString());
        }

        return r;
    }
}