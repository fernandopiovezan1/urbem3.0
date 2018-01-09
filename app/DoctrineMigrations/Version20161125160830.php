<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161125160830 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("DROP SEQUENCE IF EXISTS estagio.cod_curso_seq");
        $this->addSql("CREATE SEQUENCE estagio.cod_curso_seq START 1");
        $this->addSql("
        SELECT
        setval (
            'estagio.cod_curso_seq',
            COALESCE (
                (
                    SELECT
                        max (
                            cod_curso )
                        + 1
                    FROM
                        estagio.curso ),
                1 ),
            FALSE );
        ");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("DROP SEQUENCE IF EXISTS estagio.cod_curso_seq");
    }
}
