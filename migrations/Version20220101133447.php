<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220101133447 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE theme_Perso (theme_id INT NOT NULL, Perso_id INT NOT NULL, INDEX IDX_5DB96AB959027487 (theme_id), INDEX IDX_5DB96AB91136BE75 (Perso_id), PRIMARY KEY(theme_id, Perso_id)) DEFAULT Perso SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE theme_Perso ADD CONSTRAINT FK_5DB96AB959027487 FOREIGN KEY (theme_id) REFERENCES theme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE theme_Perso ADD CONSTRAINT FK_5DB96AB91136BE75 FOREIGN KEY (Perso_id) REFERENCES `Perso` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE theme_Perso');
    }
}
