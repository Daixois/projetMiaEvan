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
        $this->addSql('CREATE TABLE theme_character (theme_id INT NOT NULL, character_id INT NOT NULL, INDEX IDX_5DB96AB959027487 (theme_id), INDEX IDX_5DB96AB91136BE75 (character_id), PRIMARY KEY(theme_id, character_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE theme_character ADD CONSTRAINT FK_5DB96AB959027487 FOREIGN KEY (theme_id) REFERENCES theme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE theme_character ADD CONSTRAINT FK_5DB96AB91136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE theme_character');
    }
}
