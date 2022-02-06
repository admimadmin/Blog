<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220203062204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_category (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, INDEX IDX_BCE3F79812469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_category ADD CONSTRAINT FK_BCE3F79812469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE article CHANGE user user LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE contenido contenido VARCHAR(255) DEFAULT NULL, CHANGE descripcion descripcion VARCHAR(255) DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE contacto CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE asunto asunto VARCHAR(255) DEFAULT NULL, CHANGE mensaje mensaje VARCHAR(255) DEFAULT NULL, CHANGE fecha fecha DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE principal CHANGE Blog blog LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', CHANGE Usuario usuario LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', CHANGE fecha fecha DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sub_category DROP FOREIGN KEY FK_BCE3F79812469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE sub_category');
        $this->addSql('ALTER TABLE article CHANGE user user BLOB NOT NULL, CHANGE nombre nombre VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE contenido contenido VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE descripcion descripcion VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE fecha fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE contacto CHANGE email email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE asunto asunto VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE mensaje mensaje VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE fecha fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE principal CHANGE blog Blog BLOB NOT NULL, CHANGE usuario Usuario BLOB NOT NULL, CHANGE fecha fecha DATE NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE website website VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE details details LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
