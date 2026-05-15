package tn.esprit.controllers;

import tn.esprit.entities.Utilisateur;
import tn.esprit.utils.MyDatabase;
import tn.esprit.controllers.ICRUD;

import java.sql.*;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class UtilisateurService implements ICRUD<Utilisateur> {

    private Connection conx;
    private PreparedStatement pstm;

    public UtilisateurService() {
        conx = MyDatabase.getInstance().getConx();
    }

    @Override
    public void add(Utilisateur u) throws SQLException {
        String req = "INSERT INTO utilisateur "
                + "(nom, prenom, email, motDePasse, telephone, role, dateInscription, statut, image) "
                + "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try (PreparedStatement ps = conx.prepareStatement(req)) {
            ps.setString(1, u.getNom());
            ps.setString(2, u.getPrenom());
            ps.setString(3, u.getEmail());
            ps.setString(4, u.getMotDePasse());
            ps.setString(5, u.getTelephone());
            ps.setString(6, u.getRole());
            ps.setDate(7, Date.valueOf(LocalDate.now())); // dateInscription automatique
            ps.setString(8, u.getStatut() != null ? u.getStatut() : "actif");
            ps.setString(9, u.getImage());

            ps.executeUpdate();
            System.out.println("✅ Utilisateur ajouté avec succès");
        }
    }

    @Override
    public void modifier(Utilisateur u) throws SQLException {
        String req = "UPDATE utilisateur SET nom=?, prenom=?, email=?, telephone=?, role=?, statut=?, image=? WHERE idUser=?";

        try (PreparedStatement ps = conx.prepareStatement(req)) {
            ps.setString(1, u.getNom());
            ps.setString(2, u.getPrenom());
            ps.setString(3, u.getEmail());
            ps.setString(4, u.getTelephone());
            ps.setString(5, u.getRole());
            ps.setString(6, u.getStatut());
            ps.setString(7, u.getImage());
            ps.setInt(8, u.getIdUser());

            ps.executeUpdate();
            System.out.println("✅ Utilisateur modifié avec succès");
        }
    }

    @Override
    public void delete(Utilisateur u) throws SQLException {
        String req = "DELETE FROM utilisateur WHERE idUser=?";

        try (PreparedStatement ps = conx.prepareStatement(req)) {
            ps.setInt(1, u.getIdUser());
            ps.executeUpdate();
            System.out.println("✅ Utilisateur supprimé avec succès");
        }
    }

    @Override
    public List<Utilisateur> afficherList() throws SQLException {
        String req = "SELECT * FROM utilisateur";
        List<Utilisateur> list = new ArrayList<>();

        try (PreparedStatement ps = conx.prepareStatement(req);
             ResultSet res = ps.executeQuery()) {

            while (res.next()) {
                Utilisateur u = new Utilisateur(
                        res.getInt("idUser"),
                        res.getString("nom"),
                        res.getString("prenom"),
                        res.getString("email"),
                        res.getString("motDePasse"),
                        res.getString("telephone"),
                        res.getString("role"),
                        res.getDate("dateInscription") != null ?
                                res.getDate("dateInscription").toLocalDate() : null,
                        res.getString("statut")
                );
                u.setImage(res.getString("image"));
                list.add(u);
            }
        }

        return list;
    }

    /**
     * Récupère un utilisateur par son ID
     * @param id L'ID de l'utilisateur
     * @return L'utilisateur trouvé ou null
     */
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

                    Utilisateur u = new Utilisateur(
                            rs.getInt("idUser"),
                            rs.getString("nom"),
                            rs.getString("prenom"),
                            rs.getString("email"),
                            rs.getString("motDePasse"),
                            rs.getString("telephone"),
                            rs.getString("role"),
                            dateInscription,
                            rs.getString("statut")
                    );
                    u.setImage(rs.getString("image"));

                    return u;
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL getById:");
            e.printStackTrace();
        }
        return null;
    }

    /**
     * Récupère un utilisateur par son email
     * @param email L'email de l'utilisateur
     * @return L'utilisateur trouvé ou null
     */
    public Utilisateur getByEmail(String email) {
        String sql = "SELECT * FROM utilisateur WHERE email = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, email);

            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    LocalDate dateInscription = null;
                    Date sqlDate = rs.getDate("dateInscription");
                    if (sqlDate != null) {
                        dateInscription = sqlDate.toLocalDate();
                    }

                    Utilisateur u = new Utilisateur(
                            rs.getInt("idUser"),
                            rs.getString("nom"),
                            rs.getString("prenom"),
                            rs.getString("email"),
                            rs.getString("motDePasse"),
                            rs.getString("telephone"),
                            rs.getString("role"),
                            dateInscription,
                            rs.getString("statut")
                    );
                    u.setImage(rs.getString("image"));

                    return u;
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL getByEmail:");
            e.printStackTrace();
        }
        return null;
    }

    /**
     * Met à jour le mot de passe d'un utilisateur
     * @param idUser L'ID de l'utilisateur
     * @param newPassword Le nouveau mot de passe
     * @throws SQLException En cas d'erreur SQL
     */
    public void updatePassword(int idUser, String newPassword) throws SQLException {
        String sql = "UPDATE utilisateur SET motDePasse=? WHERE idUser=?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, newPassword);
            ps.setInt(2, idUser);
            ps.executeUpdate();
            System.out.println("✅ Mot de passe mis à jour avec succès");
        }
    }

    /**
     * Récupère l'ID d'un utilisateur par son email (méthode simplifiée)
     * @param email L'email de l'utilisateur
     * @return L'ID de l'utilisateur ou -1 si non trouvé
     */
    public int getUserIdByEmail(String email) {
        String sql = "SELECT idUser FROM utilisateur WHERE email = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, email);

            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    return rs.getInt("idUser");
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL getUserIdByEmail:");
            e.printStackTrace();
        }
        return -1;
    }

    /**
     * Vérifie si un email existe déjà
     * @param email L'email à vérifier
     * @return true si l'email existe, false sinon
     */
    public boolean emailExists(String email) {
        String sql = "SELECT COUNT(*) FROM utilisateur WHERE email = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, email);

            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    return rs.getInt(1) > 0;
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL emailExists:");
            e.printStackTrace();
        }
        return false;
    }

    /**
     * Authentifie un utilisateur
     * @param email L'email
     * @param motDePasse Le mot de passe
     * @return L'utilisateur si authentifié, null sinon
     */
    public Utilisateur authenticate(String email, String motDePasse) {
        String sql = "SELECT * FROM utilisateur WHERE email = ? AND motDePasse = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, email);
            ps.setString(2, motDePasse);

            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    LocalDate dateInscription = null;
                    Date sqlDate = rs.getDate("dateInscription");
                    if (sqlDate != null) {
                        dateInscription = sqlDate.toLocalDate();
                    }

                    Utilisateur u = new Utilisateur(
                            rs.getInt("idUser"),
                            rs.getString("nom"),
                            rs.getString("prenom"),
                            rs.getString("email"),
                            rs.getString("motDePasse"),
                            rs.getString("telephone"),
                            rs.getString("role"),
                            dateInscription,
                            rs.getString("statut")
                    );
                    u.setImage(rs.getString("image"));

                    return u;
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL authenticate:");
            e.printStackTrace();
        }
        return null;
    }

    /**
     * Compte le nombre total d'utilisateurs
     * @return Le nombre d'utilisateurs
     */
    public int countUtilisateurs() {
        String sql = "SELECT COUNT(*) FROM utilisateur";

        try (Statement st = conx.createStatement();
             ResultSet rs = st.executeQuery(sql)) {
            if (rs.next()) {
                return rs.getInt(1);
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL countUtilisateurs:");
            e.printStackTrace();
        }
        return 0;
    }

    /**
     * Récupère les utilisateurs par rôle
     * @param role Le rôle (client, admin, prestataire)
     * @return La liste des utilisateurs avec ce rôle
     */
    public List<Utilisateur> getByRole(String role) {
        List<Utilisateur> list = new ArrayList<>();
        String sql = "SELECT * FROM utilisateur WHERE role = ?";

        try (PreparedStatement ps = conx.prepareStatement(sql)) {
            ps.setString(1, role);

            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    LocalDate dateInscription = null;
                    Date sqlDate = rs.getDate("dateInscription");
                    if (sqlDate != null) {
                        dateInscription = sqlDate.toLocalDate();
                    }

                    Utilisateur u = new Utilisateur(
                            rs.getInt("idUser"),
                            rs.getString("nom"),
                            rs.getString("prenom"),
                            rs.getString("email"),
                            rs.getString("motDePasse"),
                            rs.getString("telephone"),
                            rs.getString("role"),
                            dateInscription,
                            rs.getString("statut")
                    );
                    u.setImage(rs.getString("image"));
                    list.add(u);
                }
            }
        } catch (SQLException e) {
            System.out.println("❌ Erreur SQL getByRole:");
            e.printStackTrace();
        }
        return list;
    }
}