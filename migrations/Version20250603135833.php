<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250603135833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE contact ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD phone_number VARCHAR(255) NOT NULL, ADD project_type VARCHAR(255) NOT NULL, DROP name, DROP prenom, DROP telephone
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE service ADD text VARCHAR(255) NOT NULL, DROP description
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE contact ADD name VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, DROP first_name, DROP last_name, DROP phone_number, DROP project_type
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE service ADD description TEXT NOT NULL, DROP text
        SQL);
    }
}
