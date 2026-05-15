package tn.esprit.utils;

import org.mindrot.jbcrypt.BCrypt;

public class PasswordUtils {

    //crypter mdp
    public static String hashPassword(String password) {
        return BCrypt.hashpw(password, BCrypt.gensalt(12));
    }

    //verif mdp
    public static boolean checkPassword(String password, String hashedPassword) {
        return BCrypt.checkpw(password, hashedPassword);
    }
}
