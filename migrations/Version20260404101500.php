<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260404101500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add imagePath column to categorie_hebergement table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categorie_hebergement ADD imagePath VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categorie_hebergement DROP imagePath');
    }
}
