<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220127095616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE generalsurvey DROP arguments, DROP discussion, DROP meeting_expectation, DROP direction, DROP technical_secretary, DROP attention_received, DROP campus');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE generalsurvey ADD arguments INT NOT NULL, ADD discussion INT NOT NULL, ADD meeting_expectation INT NOT NULL, ADD direction INT NOT NULL, ADD technical_secretary INT NOT NULL, ADD attention_received INT NOT NULL, ADD campus INT NOT NULL');
    }
}
