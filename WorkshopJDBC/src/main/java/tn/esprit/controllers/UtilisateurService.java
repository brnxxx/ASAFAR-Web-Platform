package tn.esprit.controllers;
import tn.esprit.entities.Utilisateur;
import tn.esprit.utils.MyDatabase;
import java.sql.*;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class UtilisateurService implements ICRUD<Utilisateur> {

    private Connection conx;
    private Statement stm;
    private PreparedStatement pstm;

    public UtilisateurService() {
        conx = MyDatabase.getInstance().getConx();
    }

    @Override
    public void add(Utilisateur u) throws SQLException {

        String req = "INSERT INTO utilisateur "
                + "(nom, prenom, email, motDePasse, telephone, role, image) "
                + "VALUES (?, ?, ?, ?, ?, ?, ?)";

        PreparedStatement ps = conx.prepareStatement(req);

        ps.setString(1, u.getNom());
        ps.setString(2, u.getPrenom());
        ps.setString(3, u.getEmail());
        ps.setString(4, u.getMotDePasse());
        ps.setString(5, u.getTelephone());
        ps.setString(6, u.getRole());
        ps.setString(7, u.getImage()); // ✅ IMAGE AJOUTÉE

        ps.executeUpdate();

        System.out.println("Utilisateur ajouté avec image ✔");
    }


    @Override
    public void modifier(Utilisateur u) throws SQLException {
        String req = "UPDATE utilisateur SET nom=?, prenom=?, email=?, telephone=?, role=?, statut=? WHERE idUser=?";
        pstm = conx.prepareStatement(req);
        pstm.setString(1, u.getNom());
        pstm.setString(2, u.getPrenom());
        pstm.setString(3, u.getEmail());
        pstm.setString(4, u.getTelephone());
        pstm.setString(5, u.getRole());
        pstm.setString(6, u.getStatut());
        pstm.setInt(7, u.getIdUser());
        pstm.executeUpdate();
    }

    @Override
    public void delete(Utilisateur u) throws SQLException {
        String req = "DELETE FROM utilisateur WHERE idUser=?";
        pstm = conx.prepareStatement(req);
        pstm.setInt(1, u.getIdUser());
        pstm.executeUpdate();
    }

    @Override
    public List<Utilisateur> afficherList() throws SQLException {
        String req = "SELECT * FROM utilisateur";
        stm = conx.createStatement();
        ResultSet res = stm.executeQuery(req);
        List<Utilisateur> list = new ArrayList<>();
        while (res.next()) {
            list.add(new Utilisateur(
                    res.getInt("idUser"),
                    res.getString("nom"),
                    res.getString("prenom"),
                    res.getString("email"),
                    res.getString("motDePasse"),
                    res.getString("telephone"),
                    res.getString("role"),
                    res.getDate("dateInscription").toLocalDate(),
                    res.getString("statut")
            ));
        }
        return list;
    }

    public Utilisateur getById(int id) {

        String sql = "SELECT * FROM utilisateur WHERE idUser = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {

            ps.setInt(1, id);

            try (ResultSet rs = ps.executeQuery()) {

                if (rs.next()) {

                    LocalDate dateInscription = null;
                    Date sqlDate = rs.getDate("dateInscription");

                    if (sqlDate != null) {
                        dateInscription = sqlDate.toLocalDate();
                    }

                    return new Utilisateur(
                            rs.getInt("idUser"),
                            rs.getString("nom"),
                            rs.getString("prenom"),
                            rs.getString("email"),
                            rs.getString("motDePasse"), // ⚠️ correspond à ta DB
                            rs.getString("telephone"),
                            rs.getString("role"),
                            dateInscription,
                            rs.getString("statut")
                    );
                }
            }

        } catch (SQLException e) {
            System.out.println("Erreur SQL getById:");
            e.printStackTrace();
        }

        return null;
    }


}
