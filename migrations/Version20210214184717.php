<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210214184717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE documents (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projets_documents (projets_id INT NOT NULL, documents_id INT NOT NULL, INDEX IDX_E23726AF597A6CB7 (projets_id), INDEX IDX_E23726AF5F0F2752 (documents_id), PRIMARY KEY(projets_id, documents_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projets_documents ADD CONSTRAINT FK_E23726AF597A6CB7 FOREIGN KEY (projets_id) REFERENCES projets (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projets_documents ADD CONSTRAINT FK_E23726AF5F0F2752 FOREIGN KEY (documents_id) REFERENCES documents (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_B454C1DB19EB6921 ON projets (client_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B454C1DBD5E86FF ON projets (etat_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projets_documents DROP FOREIGN KEY FK_E23726AF5F0F2752');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE projets_documents');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY FK_B454C1DB19EB6921');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY FK_B454C1DBD5E86FF');
        $this->addSql('DROP INDEX IDX_B454C1DB19EB6921 ON projets');
        $this->addSql('DROP INDEX UNIQ_B454C1DBD5E86FF ON projets');
    }
}
