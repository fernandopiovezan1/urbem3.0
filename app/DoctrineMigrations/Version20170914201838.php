<?php

namespace Application\Migrations;

use Urbem\CoreBundle\Helper\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170914201838 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        $this->insertRoute('urbem_recursos_humanos_pessoal_pensionista_show', 'Detalhes', 'urbem_recursos_humanos_pessoal_pensionista_list');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        $this->insertRoute('urbem_recursos_humanos_pessoal_pensionista_show', 'Detalhes', 'urbem_recursos_humanos_pessoal_pensionista_list');
    }
}
