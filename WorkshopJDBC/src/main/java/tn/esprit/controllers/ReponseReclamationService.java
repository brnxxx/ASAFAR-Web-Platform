package tn.esprit.controllers;

import tn.esprit.entities.ReponseReclamation;
import tn.esprit.utils.MyDatabase;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ReponseReclamationService implements ICRUD<ReponseReclamation> {

    private Connection conx;
    private Statement stm;
    private PreparedStatement pstm;

    public ReponseReclamationService() {
        conx = MyDatabase.getInstance().getConx();
    }

    @Override
    public void add(ReponseReclamation r) throws SQLException {
        String req = "INSERT INTO reponse_reclamation (contenu, idReclamation, idUser) " +
                "VALUES ('"+r.getContenu()+"',"+r.getIdReclamation()+","+r.getIdUser()+")";
        stm = conx.createStatement();
        stm.executeUpdate(req);
        System.out.println("Réponse ajoutée");
    }

    @Override
    public void modifier(ReponseReclamation r) throws SQLException {
        String req = "UPDATE reponse_reclamation SET contenu=? WHERE idReponse=?";
        pstm = conx.prepareStatement(req);
        pstm.setString(1, r.getContenu());
        pstm.setInt(2, r.getIdReponse());
        pstm.executeUpdate();
    }

    @Override
    public void delete(ReponseReclamation r) throws SQLException {
        String req = "DELETE FROM reponse_reclamation WHERE idReponse=?";
        pstm = conx.prepareStatement(req);
        pstm.setInt(1, r.getIdReponse());
        pstm.executeUpdate();
    }

    @Override
    public List<ReponseReclamation> afficherList() throws SQLException {
        String req = "SELECT * FROM reponse_reclamation";
        stm = conx.createStatement();
        ResultSet res = stm.executeQuery(req);

        List<ReponseReclamation> list = new ArrayList<>();

        while (res.next()) {
            list.add(new ReponseReclamation(
                    res.getInt("idReponse"),
                    res.getString("contenu"),
                    res.getTimestamp("dateReponse").toLocalDateTime(),
                    res.getInt("idReclamation"),
                    res.getInt("idUser")
            ));
        }
        return list;
    }
}
