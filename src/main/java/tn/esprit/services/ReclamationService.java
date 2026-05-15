package tn.esprit.services;
import tn.esprit.entities.Reclamation;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
public class ReclamationService {
    private Connection conx;

    public ReclamationService() {
        conx = MyDatabase.getInstance().getConx();
    }

    // ================= AFFICHER =================
    public List<Reclamation> afficher() {

        List<Reclamation> list = new ArrayList<>();
        String sql = "SELECT * FROM reclamation";

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(sql)) {

            while (rs.next()) {

                list.add(new Reclamation(
                        rs.getInt("idReclamation"),
                        rs.getString("sujet"),
                        rs.getString("description"),
                        rs.getDate("dateReclamation").toLocalDate(),
                        rs.getString("statut"),
                        rs.getString("reponseAdmin"),
                        rs.getInt("idUser")
                ));
            }

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return list;
    }

    // ================= SUPPRIMER =================
    public void supprimer(int id) {

        String sql = "DELETE FROM reclamation WHERE idReclamation=?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setInt(1, id);
            ps.executeUpdate();
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }

    // ================= REPONDRE =================
    public void repondre(int id, String reponse) {

        String sql =
                "UPDATE reclamation " +
                        "SET reponseAdmin=?, statut='TRAITEE' " +
                        "WHERE idReclamation=?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setString(1, reponse);
            ps.setInt(2, id);
            ps.executeUpdate();

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }
    public List<Reclamation> afficherParUtilisateur(int idUser) {

        List<Reclamation> list = new ArrayList<>();

        String sql = "SELECT * FROM reclamation WHERE idUser = ?";

        try {
            Connection conn = MyDatabase.getInstance().getConx();
            PreparedStatement ps = conn.prepareStatement(sql);

            ps.setInt(1, idUser);

            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                list.add(new Reclamation(
                        rs.getInt("idReclamation"),
                        rs.getString("sujet"),
                        rs.getString("description"),
                        rs.getDate("dateReclamation").toLocalDate(),
                        rs.getString("statut"),
                        rs.getString("reponseAdmin"),
                        rs.getInt("idUser")
                ));
            }

        } catch (Exception e) {
            e.printStackTrace();
        }

        return list;
    }
    public void modifier(int id, String sujet, String description) {

        String sql =
                "UPDATE reclamation SET sujet=?, description=? WHERE idReclamation=?";

        try {
            Connection conn = MyDatabase.getInstance().getConx();

            PreparedStatement ps = conn.prepareStatement(sql);

            ps.setString(1, sujet);
            ps.setString(2, description);
            ps.setInt(3, id);

            ps.executeUpdate();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

}
