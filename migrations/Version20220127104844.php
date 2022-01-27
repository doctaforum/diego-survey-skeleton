<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220127104844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE survey2 (id INT AUTO_INCREMENT NOT NULL, q1 INT DEFAULT NULL, q2 INT DEFAULT NULL, q3 INT DEFAULT NULL, q4 INT DEFAULT NULL, q5 INT DEFAULT NULL, q6 INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey3 (id INT AUTO_INCREMENT NOT NULL, q1 INT DEFAULT NULL, q2 INT DEFAULT NULL, q3 INT DEFAULT NULL, q4 INT DEFAULT NULL, q5 INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE generalsurvey ADD create_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE survey1 DROP q5, DROP q6, DROP q7, DROP q8, DROP q9, DROP q10');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE survey2');
        $this->addSql('DROP TABLE survey3');
        $this->addSql('ALTER TABLE generalsurvey DROP create_date');
        $this->addSql('ALTER TABLE survey1 ADD q5 INT DEFAULT NULL, ADD q6 INT DEFAULT NULL, ADD q7 INT DEFAULT NULL, ADD q8 INT DEFAULT NULL, ADD q9 INT DEFAULT NULL, ADD q10 INT DEFAULT NULL');
    }
}
