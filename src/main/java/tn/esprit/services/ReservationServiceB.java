package tn.esprit.services;
import tn.esprit.controllers.ICRUD;
import tn.esprit.entities.Excursion;
import tn.esprit.entities.ReservationB;
import tn.esprit.entities.StatutReservationB;
import tn.esprit.entities.TypeReservationB;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

public class ReservationServiceB implements ICRUD<ReservationB> {

    private Connection conx;

    public ReservationServiceB() {
        conx = MyDatabase.getInstance().getConx();

    }

    // =========================================
    // ADD
    // =========================================
    @Override
    public void add(ReservationB r) throws SQLException {

        String sql = """
        INSERT INTO reservation
        (dateReservation, typeReservation, montantTotal, statut,
         idUser, idHebergement, idExcursion, idTransport,
         nb_adultes, nb_enfants, nb_bebes, dateExcursion)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        """;

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setTimestamp(1, Timestamp.valueOf(LocalDateTime.now()));
            ps.setString(2, TypeReservationB.EXCURSION.name());
            ps.setDouble(3, r.getMontantTotal());
            ps.setString(4, StatutReservationB.EN_ATTENTE.name());

            ps.setInt(5, 1); // idUser fixe pour le moment
            ps.setNull(6, Types.INTEGER); // idHebergement
            ps.setInt(7, r.getIdExcursion());
            ps.setNull(8, Types.INTEGER); // idTransport

            // 🔥 LES CHAMPS MANQUANTS
            ps.setInt(9, r.getNbAdultes());
            ps.setInt(10, r.getNbEnfants());
            ps.setInt(11, r.getNbBebes());

            if (r.getDateExcursion() != null)
                ps.setDate(12, Date.valueOf(r.getDateExcursion()));
            else
                ps.setNull(12, Types.DATE);

            ps.executeUpdate();
        }

        System.out.println("Reservation ajoutée correctement.");
    }




    public void addMeth2(ReservationB r) throws SQLException {
        add(r);
    }

    // =========================================
    // UPDATE
    // =========================================
    @Override
    public void modifier(ReservationB r) throws SQLException {

        String sql = """
        UPDATE reservation
        SET typeReservation = ?,
            montantTotal = ?,
            statut = ?,
            idExcursion = ?,
            nb_adultes = ?,
            nb_enfants = ?,
            nb_bebes = ?,
            dateExcursion = ?
        WHERE idReservation = ?
        """;

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setString(1, r.getTypeReservation().name());
            ps.setDouble(2, r.getMontantTotal());
            ps.setString(3, r.getStatut().name());
            ps.setInt(4, r.getIdExcursion());

            ps.setInt(5, r.getNbAdultes());
            ps.setInt(6, r.getNbEnfants());
            ps.setInt(7, r.getNbBebes());

            if (r.getDateExcursion() != null)
                ps.setDate(8, Date.valueOf(r.getDateExcursion()));
            else
                ps.setNull(8, Types.DATE);

            ps.setInt(9, r.getIdReservation());

            ps.executeUpdate();
        }

        System.out.println("✅ Reservation modifiée correctement");
    }


    // =========================================
    // DELETE
    // =========================================
    @Override
    public void delete(ReservationB r) throws SQLException {

        String sql = "DELETE FROM reservation WHERE idReservation = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setInt(1, r.getIdReservation());
            ps.executeUpdate();
        }

        System.out.println("✅ Reservation supprimée");
    }

    // =========================================
    // SELECT ALL
    // =========================================
    @Override
    public List<ReservationB> afficherList() throws SQLException {

        List<ReservationB> list = new ArrayList<>();

        String sql = "SELECT * FROM reservation";

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(sql)) {

            while (rs.next()) {

                ReservationB r = new ReservationB();

                r.setIdReservation(rs.getInt("idReservation"));

                r.setDateReservation(
                        rs.getTimestamp("dateReservation").toLocalDateTime()
                );

                r.setTypeReservation(
                        TypeReservationB.valueOf(rs.getString("typeReservation"))
                );

                r.setMontantTotal((int) rs.getDouble("montantTotal"));

                r.setStatut(
                        StatutReservationB.valueOf(rs.getString("statut"))
                );

                r.setIdUser(rs.getInt("idUser"));

                // Foreign keys
                int idH = rs.getInt("idHebergement");
                if (!rs.wasNull()) r.setIdHebergement(idH);

                int idE = rs.getInt("idExcursion");
                if (!rs.wasNull()) r.setIdExcursion(idE);

                int idT = rs.getInt("idTransport");
                if (!rs.wasNull()) r.setIdTransport(idT);

                // 🔥 NOUVEAUX CHAMPS
                r.setNbAdultes(rs.getInt("nb_adultes"));
                r.setNbEnfants(rs.getInt("nb_enfants"));
                r.setNbBebes(rs.getInt("nb_bebes"));

                Date sqlDate = rs.getDate("dateExcursion");
                if (sqlDate != null)
                    r.setDateExcursion(sqlDate.toLocalDate());

                list.add(r);
            }
        }

        return list;
    }



    public List<ReservationB> getByUser(int idUser) throws SQLException {

        List<ReservationB> list = new ArrayList<>();

        String sql = "SELECT * FROM reservation WHERE idUser = ?";

        PreparedStatement ps = conx.prepareStatement(sql);
        ps.setInt(1, idUser);

        ResultSet rs = ps.executeQuery();

        while (rs.next()) {

            ReservationB r = new ReservationB();

            r.setIdReservation(rs.getInt("idReservation"));

            r.setDateReservation(
                    rs.getTimestamp("dateReservation").toLocalDateTime()
            );

            r.setTypeReservation(
                    TypeReservationB.valueOf(rs.getString("typeReservation"))
            );

            r.setMontantTotal(rs.getDouble("montantTotal"));

            r.setStatut(
                    StatutReservationB.valueOf(rs.getString("statut"))
            );

            r.setIdExcursion(rs.getInt("idExcursion"));


            r.setNbAdultes(rs.getInt("nb_adultes"));
            r.setNbEnfants(rs.getInt("nb_enfants"));
            r.setNbBebes(rs.getInt("nb_bebes"));

            Date sqlDate = rs.getDate("dateExcursion");
            if (sqlDate != null)
                r.setDateExcursion(sqlDate.toLocalDate());

            list.add(r);
        }

        return list;
    }


    public List<ReservationB> getByExcursion(int idExcursion) {

        List<ReservationB> list = new ArrayList<>();

        String req = "SELECT * FROM reservation WHERE idExcursion = ?";

        try (PreparedStatement ps = conx.prepareStatement(req)) {

            ps.setInt(1, idExcursion);

            ResultSet rs = ps.executeQuery();

            while (rs.next()) {

                ReservationB r = new ReservationB();

                r.setIdReservation(rs.getInt("idReservation"));
                r.setIdExcursion(rs.getInt("idExcursion"));

                r.setNbAdultes(rs.getInt("nb_adultes"));
                r.setNbEnfants(rs.getInt("nb_enfants"));
                r.setNbBebes(rs.getInt("nb_bebes"));

                r.setMontantTotal(rs.getDouble("montantTotal"));

                Timestamp ts = rs.getTimestamp("dateReservation");
                if (ts != null)
                    r.setDateReservation(ts.toLocalDateTime());

                Date d = rs.getDate("dateExcursion");
                if (d != null)
                    r.setDateExcursion(d.toLocalDate());

                r.setStatut(
                        StatutReservationB.valueOf(rs.getString("statut"))
                );

                list.add(r);
            }

        } catch (Exception e) {
            e.printStackTrace();
        }

        return list;
    }


}
