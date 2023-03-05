<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230305185454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE board DROP FOREIGN KEY FK_58562B478FDDAB70');
        $this->addSql('DROP INDEX IDX_58562B478FDDAB70 ON board');
        $this->addSql('ALTER TABLE board DROP owner_id_id');
        $this->addSql('ALTER TABLE task ADD task_name VARCHAR(50) NOT NULL, ADD description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE board ADD owner_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE board ADD CONSTRAINT FK_58562B478FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_58562B478FDDAB70 ON board (owner_id_id)');
        $this->addSql('ALTER TABLE task DROP task_name, DROP description');
    }
}
