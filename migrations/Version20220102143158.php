<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220102143158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theme_perso RENAME INDEX idx_5db96ab959027487 TO IDX_E54071C459027487');
        $this->addSql('ALTER TABLE theme_perso RENAME INDEX idx_5db96ab91136be75 TO IDX_E54071C41221E019');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE theme_perso RENAME INDEX idx_e54071c41221e019 TO IDX_5DB96AB91136BE75');
        $this->addSql('ALTER TABLE theme_perso RENAME INDEX idx_e54071c459027487 TO IDX_5DB96AB959027487');
    }
}
