<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160705190003 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE block_content (id INT AUTO_INCREMENT NOT NULL, block_title VARCHAR(255) DEFAULT NULL, block_subhead VARCHAR(255) DEFAULT NULL, block_abstract LONGTEXT DEFAULT NULL, block_misc VARCHAR(255) DEFAULT NULL, block_body LONGTEXT DEFAULT NULL, block_footmessage LONGTEXT DEFAULT NULL, block_price NUMERIC(10, 2) DEFAULT NULL, block_2price NUMERIC(10, 2) DEFAULT NULL, block_postage NUMERIC(10, 2) DEFAULT NULL, block_packaging NUMERIC(10, 2) DEFAULT NULL, block_pagetype ENUM(\'visible\', \'invisible\'), block_size VARCHAR(20) DEFAULT NULL, block_varient VARCHAR(255) DEFAULT NULL, block_2varient VARCHAR(255) DEFAULT NULL, block_quantity INT DEFAULT NULL, block_show TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_entity (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, block_id_fk INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE products');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, sub_1 VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, body LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, sub_body LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, price NUMERIC(10, 2) DEFAULT NULL, price_2 NUMERIC(10, 2) DEFAULT NULL, aux_url VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, aux_email VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, aux_url2 VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, aux_email2 VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, main_image VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE block_content');
        $this->addSql('DROP TABLE image_entity');
    }
}
