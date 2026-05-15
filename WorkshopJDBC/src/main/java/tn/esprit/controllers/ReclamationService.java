package tn.esprit.controllers;

import tn.esprit.entities.Reclamation;
import tn.esprit.utils.MyDatabase;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ReclamationService implements ICRUD<Reclamation> {

    private Connection conx;
    private Statement stm;
    private PreparedStatement pstm;

    public ReclamationService() {
        conx = MyDatabase.getInstance().getConx();
    }

    @Override
    public void add(Reclamation r) throws SQLException {
        String req = "INSERT INTO reclamation (sujet, description, idUser) " +
                "VALUES ('"+r.getSujet()+"','"+r.getDescription()+"',"+r.getIdUser()+")";
        stm = conx.createStatement();
        stm.executeUpdate(req);
        System.out.println("Réclamation ajoutée");
    }

    @Override
    public void modifier(Reclamation r) throws SQLException {
        String req = "UPDATE reclamation SET statut=? WHERE idReclamation=?";
        pstm = conx.prepareStatement(req);
        pstm.setString(1, r.getStatut());
        pstm.setInt(2, r.getIdReclamation());
        pstm.executeUpdate();
    }

    @Override
    public void delete(Reclamation r) throws SQLException {
        String req = "DELETE FROM reclamation WHERE idReclamation=?";
        pstm = conx.prepareStatement(req);
        pstm.setInt(1, r.getIdReclamation());
        pstm.executeUpdate();
    }

    @Override
    public List<Reclamation> afficherList() throws SQLException {
        String req = "SELECT * FROM reclamation";
        stm = conx.createStatement();
        ResultSet res = stm.executeQuery(req);

        List<Reclamation> list = new ArrayList<>();

        while (res.next()) {
            list.add(new Reclamation(
                    res.getInt("idReclamation"),
                    res.getString("sujet"),
                    res.getString("description"),
                    res.getDate("dateReclamation").toLocalDate(),
                    res.getString("statut"),
                    res.getInt("idUser")
            ));
        }
        return list;
    }
}
