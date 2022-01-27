<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220127095412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE generalsurvey (id INT AUTO_INCREMENT NOT NULL, arguments INT NOT NULL, discussion INT NOT NULL, meeting_expectation INT NOT NULL, direction INT NOT NULL, technical_secretary INT NOT NULL, attention_received INT NOT NULL, campus INT NOT NULL, q1 INT NOT NULL, q2 INT NOT NULL, q3 INT NOT NULL, q4 INT NOT NULL, q5 INT NOT NULL, q6 INT NOT NULL, q7 INT NOT NULL, suggestion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE generalsurvey');
    }
}
