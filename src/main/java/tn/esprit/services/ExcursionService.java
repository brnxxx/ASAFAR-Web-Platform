package tn.esprit.services;

import tn.esprit.controllers.ICRUD;
import tn.esprit.entities.Excursion;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class ExcursionService implements ICRUD<Excursion> {

    private final Connection conx;

    public ExcursionService() {
        conx = MyDatabase.getInstance().getConx();

    }

    // =====================================================
    // ADD
    // =====================================================

    @Override
    public void add(Excursion e) throws SQLException {

        String sql = """
        INSERT INTO excursion
        (titre, description, lieu, date, duree,
         prix_adulte, prix_enfant, prix_bebe,
         nombrePlacesDisponibles, image_url)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        """;

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, e.getTitre());
            ps.setString(2, e.getDescription());
            ps.setString(3, e.getLieu());
            if (e.getDate() != null)
                ps.setDate(4, Date.valueOf(e.getDate()));
            else
                ps.setNull(4, Types.DATE);
            ps.setInt(5, e.getDuree());
            ps.setDouble(6, e.getPrixAdulte());
            ps.setDouble(7, e.getPrixEnfant());
            ps.setDouble(8, e.getPrixBebe());
            ps.setInt(9, e.getNombrePlacesDisponibles());
            ps.setString(10, e.getImageUrl());
            ps.executeUpdate();
        }
        System.out.println(" Excursion ajoutée avec succès.");
    }




    public void addMeth2(Excursion e) throws SQLException {
        add(e);
    }

    // =====================================================
    // UPDATE
    // =====================================================

    @Override
    public void modifier(Excursion e) throws SQLException {

        String sql = """
        UPDATE excursion SET
            titre = ?,
            description = ?,
            lieu = ?,
            date = ?,
            duree = ?,
            prix_adulte = ?,
            prix_enfant = ?,
            prix_bebe = ?,
            nombrePlacesDisponibles = ?,
            image_url = ?
        WHERE idExcursion = ?
        """;

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            // ===== TEXT =====
            ps.setString(1, e.getTitre());
            ps.setString(2, e.getDescription());
            ps.setString(3, e.getLieu());

            // ===== DATE =====
            if (e.getDate() != null)
                ps.setDate(4, Date.valueOf(e.getDate()));
            else
                ps.setNull(4, Types.DATE);

            // ===== NUMERIC =====
            ps.setInt(5, e.getDuree());

            ps.setDouble(6, e.getPrixAdulte());
            ps.setDouble(7, e.getPrixEnfant());
            ps.setDouble(8, e.getPrixBebe());

            ps.setInt(9, e.getNombrePlacesDisponibles());

            // ===== IMAGE =====
            ps.setString(10, e.getImageUrl());

            // ===== WHERE =====
            ps.setInt(11, e.getIdExcursion());

            ps.executeUpdate();
        }

        System.out.println(" Excursion modifiée avec succès.");
    }


    // =====================================================
    // DELETE
    // =====================================================

    @Override
    public void delete(Excursion e) throws SQLException {

        String sql = "DELETE FROM excursion WHERE idExcursion = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setInt(1, e.getIdExcursion());
            ps.executeUpdate();
        }

        System.out.println("Excursion supprimée.");
    }

    // =====================================================
    // SELECT ALL
    // =====================================================

    @Override
    public List<Excursion> afficherList() throws SQLException {

        String sql = "SELECT * FROM excursion";
        List<Excursion> list = new ArrayList<>();

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(sql)) {

            while (rs.next()) {
                list.add(mapResultSetToExcursion(rs));
            }
        }

        return list;
    }

    // =====================================================
    // RECHERCHE PAR LIEU
    // =====================================================

    public List<Excursion> rechercherParLieu(String lieu) {

        List<Excursion> list = new ArrayList<>();

        String sql = """
        SELECT * FROM excursion
        WHERE LOWER(lieu) LIKE LOWER(?)
    """;

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setString(1, "%" + lieu.trim() + "%");

            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                list.add(mapResultSetToExcursion(rs));
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }

        return list;
    }



    // =====================================================
    // MAPPING RESULTSET → EXCURSION
    // =====================================================

    private Excursion mapResultSetToExcursion(ResultSet rs) throws SQLException {

        Excursion e = new Excursion();

        e.setIdExcursion(rs.getInt("idExcursion"));
        e.setTitre(rs.getString("titre"));
        e.setDescription(rs.getString("description"));
        e.setLieu(rs.getString("lieu"));

        Date sqlDate = rs.getDate("date");
        if (sqlDate != null)
            e.setDate(sqlDate.toLocalDate());

        e.setDuree(rs.getInt("duree"));

        e.setNombrePlacesDisponibles(
                rs.getInt("nombrePlacesDisponibles")
        );

        e.setImageUrl(rs.getString("image_url"));

        // ✅ correct prices
        e.setPrixAdulte(rs.getDouble("prix_adulte"));
        e.setPrixEnfant(rs.getDouble("prix_enfant"));
        e.setPrixBebe(rs.getDouble("prix_bebe"));

        return e;
    }




    public Excursion getById(int idExcursion) throws SQLException {

        String sql = "SELECT * FROM excursion WHERE idExcursion = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setInt(1, idExcursion);

            try (ResultSet rs = ps.executeQuery()) {

                if (rs.next()) {
                    return mapResultSetToExcursion(rs);
                }
            }
        }

        return null;
    }


    public List<Excursion> getRecommendedExcursions() throws SQLException {

        String req =
                "SELECT * FROM excursion " +
                        "WHERE COALESCE(nombrePlacesDisponibles,0) > 0 " +
                        "ORDER BY date DESC LIMIT 6";

        List<Excursion> list = new ArrayList<>();

        try (Statement stm = conx.createStatement();
             ResultSet rs = stm.executeQuery(req)) {

            while (rs.next()) {

                Excursion e = new Excursion();

                // ✅ BON ID
                e.setIdExcursion(rs.getInt("idExcursion"));

                e.setTitre(rs.getString("titre"));
                e.setLieu(rs.getString("lieu"));

                Date sqlDate = rs.getDate("date");
                if (sqlDate != null)
                    e.setDate(sqlDate.toLocalDate());

                e.setDuree(rs.getInt("duree"));

                // ✅ NOMS CORRECTS
                e.setPrixAdulte(rs.getDouble("prix_adulte"));
                e.setPrixEnfant(rs.getDouble("prix_enfant"));
                e.setPrixBebe(rs.getDouble("prix_bebe"));

                e.setNombrePlacesDisponibles(
                        rs.getInt("nombrePlacesDisponibles")
                );

                e.setImageUrl(rs.getString("image_url"));

                list.add(e);
            }
        }

        return list;
    }


}
