<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220203023155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE principal (id INT AUTO_INCREMENT NOT NULL, blog LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', usuario LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', fecha DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article CHANGE user user LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE contenido contenido VARCHAR(255) DEFAULT NULL, CHANGE descripcion descripcion VARCHAR(255) DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE contacto CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE asunto asunto VARCHAR(255) DEFAULT NULL, CHANGE mensaje mensaje VARCHAR(255) DEFAULT NULL, CHANGE fecha fecha DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE principal');
        $this->addSql('ALTER TABLE article CHANGE user user BLOB NOT NULL, CHANGE nombre nombre VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE contenido contenido VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE descripcion descripcion VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE fecha fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE contacto CHANGE email email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE asunto asunto VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE mensaje mensaje VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE fecha fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE website website VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE details details LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
