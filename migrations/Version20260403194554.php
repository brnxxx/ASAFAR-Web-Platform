<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260403194554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE email_verification (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, expires_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `fk_commentaire_utilisateur`');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `fk_comment_post`');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY `fk_hebergement_user`');
        $this->addSql('ALTER TABLE login_history DROP FOREIGN KEY `fk_login_user`');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY `fk_paiement_reservation`');
        $this->addSql('ALTER TABLE post_like DROP FOREIGN KEY `fk_like_post`');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY `fk_reclamation_reservation`');
        $this->addSql('ALTER TABLE signalement DROP FOREIGN KEY `fk_signalement_post`');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY `transport_ibfk_1`');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY `transport_ibfk_2`');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY `transport_ibfk_3`');
        $this->addSql('DROP TABLE aeroport');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE excursion');
        $this->addSql('DROP TABLE hebergement');
        $this->addSql('DROP TABLE login_history');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE post_like');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE signalement');
        $this->addSql('DROP TABLE transport');
        $this->addSql('DROP INDEX email ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(100) NOT NULL, CHANGE prenom prenom VARCHAR(100) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE role role VARCHAR(50) NOT NULL, CHANGE dateInscription dateInscription DATE DEFAULT NULL, CHANGE statut statut VARCHAR(20) DEFAULT NULL, CHANGE dateCreation dateCreation DATE DEFAULT NULL, CHANGE trustScore trustScore INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aeroport (id INT AUTO_INCREMENT NOT NULL, ident VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ville VARCHAR(150) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, pays VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, code_iata VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, code_icao VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, latitude DOUBLE PRECISION DEFAULT \'0\' NOT NULL, longitude DOUBLE PRECISION DEFAULT \'0\' NOT NULL, altitude INT DEFAULT 0, type VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, post_id INT UNSIGNED NOT NULL, contenu TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, gif_url VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, idUser INT DEFAULT NULL, INDEX idx_comment_post (post_id), INDEX fk_commentaire_utilisateur (idUser), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE excursion (idExcursion INT AUTO_INCREMENT NOT NULL, titre VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, lieu VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date DATE NOT NULL, duree INT NOT NULL, nombrePlacesDisponibles INT NOT NULL, image_url VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, prix_adulte DOUBLE PRECISION NOT NULL, prix_enfant DOUBLE PRECISION NOT NULL, prix_bebe DOUBLE PRECISION NOT NULL, type VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'OUTDOOR\' COLLATE `utf8mb4_general_ci`, PRIMARY KEY (idExcursion)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE hebergement (idHebergement INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type ENUM(\'HOTEL\', \'MAISON\', \'APPARTEMENT\') CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, localisation VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prixParNuit NUMERIC(10, 2) DEFAULT NULL, disponibilite ENUM(\'DISPONIBLE\', \'INDISPONIBLE\') CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, noteMoyenne NUMERIC(2, 1) DEFAULT NULL, idUser INT DEFAULT NULL, imagePath VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_hebergement_user (idUser), PRIMARY KEY (idHebergement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE login_history (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, login_time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, success TINYINT NOT NULL, trust_score DOUBLE PRECISION DEFAULT NULL, face_confidence DOUBLE PRECISION DEFAULT \'0\', auth_method ENUM(\'PASSWORD\', \'FACE\') CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, fail_reason VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, device_fingerprint VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, ip_address VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, country VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, city VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX idx_user_success (user_id, success), INDEX idx_user_time (user_id, login_time), INDEX idx_user_method (user_id, auth_method), INDEX IDX_37976E36A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE paiement (id_paiement INT AUTO_INCREMENT NOT NULL, id_reservation INT DEFAULT NULL, montant DOUBLE PRECISION DEFAULT NULL, methode VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, statut VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, date_paiement DATETIME DEFAULT CURRENT_TIMESTAMP, reduction DOUBLE PRECISION DEFAULT \'0\', INDEX fk_paiement_reservation (id_reservation), PRIMARY KEY (id_paiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post (id INT UNSIGNED AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contenu TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, image_path VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, status VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'PUBLISHED\' NOT NULL COLLATE `utf8mb4_general_ci`, scheduled_at DATETIME DEFAULT NULL, published_at DATETIME DEFAULT NULL, IdUser INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post_like (id INT UNSIGNED AUTO_INCREMENT NOT NULL, post_id INT UNSIGNED NOT NULL, user_key VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX idx_like_post (post_id), UNIQUE INDEX uq_like (post_id, user_key), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reclamation (idReclamation INT AUTO_INCREMENT NOT NULL, sujet VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, typeReclamation ENUM(\'TRANSPORT\', \'LOISIR\', \'HEBERGEMENT\') CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dateReclamation DATE DEFAULT CURRENT_DATE NOT NULL, statut ENUM(\'EN_ATTENTE\', \'TRAITEE\', \'REFUSEE\') CHARACTER SET utf8mb4 DEFAULT \'EN_ATTENTE\' NOT NULL COLLATE `utf8mb4_general_ci`, reponseAdmin TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, idUser INT NOT NULL, idReservation INT DEFAULT NULL, priorite ENUM(\'FAIBLE\', \'NORMAL\', \'URGENT\') CHARACTER SET utf8mb4 DEFAULT \'NORMAL\' COLLATE `utf8mb4_general_ci`, INDEX idx_reclamation_reservation (idReservation), INDEX idx_reclamation_user (idUser), PRIMARY KEY (idReclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation (idReservation INT AUTO_INCREMENT NOT NULL, dateReservation DATETIME NOT NULL, typeReservation ENUM(\'HEBERGEMENT\', \'EXCURSION\', \'TRANSPORT\') CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, montantTotal INT NOT NULL, statut ENUM(\'CONFIRMEE\', \'ANNULEE\', \'EN_ATTENTE\') CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idUser INT NOT NULL, idHebergement INT DEFAULT NULL, idExcursion INT DEFAULT NULL, id_transport INT DEFAULT NULL, nb_adultes INT NOT NULL, nb_enfants INT NOT NULL, nb_bebes INT NOT NULL, dateExcursion DATE DEFAULT NULL, nbPersonnes INT DEFAULT NULL, dateDepart DATE DEFAULT NULL, dateArrivee DATE DEFAULT NULL, INDEX fk_res_hebergement (idHebergement), INDEX fk_res_excursion (idExcursion), INDEX fk_reservation_transport (id_transport), INDEX fk_res_user (idUser), PRIMARY KEY (idReservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE signalement (id INT AUTO_INCREMENT NOT NULL, post_id INT UNSIGNED NOT NULL, raison VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, details VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, statut VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NOUVEAU\' COLLATE `utf8mb4_general_ci`, INDEX fk_signalement_post (post_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE transport (id_transport INT AUTO_INCREMENT NOT NULL, nom VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix NUMERIC(10, 2) NOT NULL, description TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, date_creation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, latitude DOUBLE PRECISION DEFAULT \'0\' NOT NULL, longitude DOUBLE PRECISION DEFAULT \'0\' NOT NULL, idUser VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, aeroport_depart_id INT DEFAULT NULL, aeroport_destination_id INT DEFAULT NULL, aeroport_prise_en_charge_id INT DEFAULT NULL, INDEX transport_ibfk_1 (aeroport_depart_id), INDEX transport_ibfk_2 (aeroport_destination_id), INDEX transport_ibfk_3 (aeroport_prise_en_charge_id), PRIMARY KEY (id_transport)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT `fk_commentaire_utilisateur` FOREIGN KEY (idUser) REFERENCES utilisateur (idUser) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT `fk_comment_post` FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT `fk_hebergement_user` FOREIGN KEY (idUser) REFERENCES utilisateur (idUser) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE login_history ADD CONSTRAINT `fk_login_user` FOREIGN KEY (user_id) REFERENCES utilisateur (idUser) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT `fk_paiement_reservation` FOREIGN KEY (id_reservation) REFERENCES reservation (idReservation) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT `fk_like_post` FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT `fk_reclamation_reservation` FOREIGN KEY (idReservation) REFERENCES reservation (idReservation) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE signalement ADD CONSTRAINT `fk_signalement_post` FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (aeroport_depart_id) REFERENCES aeroport (id) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT `transport_ibfk_2` FOREIGN KEY (aeroport_destination_id) REFERENCES aeroport (id) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT `transport_ibfk_3` FOREIGN KEY (aeroport_prise_en_charge_id) REFERENCES aeroport (id) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('DROP TABLE email_verification');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE email email VARCHAR(100) NOT NULL, CHANGE role role ENUM(\'client\', \'admin\', \'prestataire\') NOT NULL, CHANGE dateInscription dateInscription DATE DEFAULT CURRENT_DATE NOT NULL, CHANGE statut statut ENUM(\'actif\', \'bloqué\') DEFAULT \'actif\', CHANGE dateCreation dateCreation DATE DEFAULT CURRENT_DATE, CHANGE trustScore trustScore INT DEFAULT 50');
        $this->addSql('CREATE UNIQUE INDEX email ON utilisateur (email)');
    }
}
