<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161027164224 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE OR REPLACE FUNCTION empenho.fn_consultar_valor_apagar_anulado_nota(character varying, integer, integer)
             RETURNS numeric
             LANGUAGE plpgsql
            AS $function$
            
            DECLARE
                stExercicio                ALIAS FOR $1;
                inCodNota                  ALIAS FOR $2;
                inCodEntidade              ALIAS FOR $3;
                nuValor                    NUMERIC := 0.00;
            BEGIN
            
                SELECT
                    coalesce(sum(opa.vl_anulado), 0.00)
                    INTO nuValor
                FROM     (
                            select  opla.cod_ordem
                                   ,opla.exercicio
                                   ,opla.cod_entidade
                                   ,coalesce(sum(vl_anulado),0.00) as vl_anulado
                            from empenho.ordem_pagamento_liquidacao_anulada as opla
            
                            where     opla.cod_nota             = inCodNota
                                  and opla.cod_entidade         = inCodEntidade
                                  and opla.exercicio_liquidacao = stExercicio
            
                            group by  opla.cod_ordem
                                     ,opla.exercicio
                                     ,opla.cod_entidade
                         ) as opa
            
                        ,empenho.ordem_pagamento         AS OP
                        ,empenho.pagamento_liquidacao    AS PL
                        ,empenho.nota_liquidacao         AS NL
                WHERE   OPA.cod_ordem           = OP.cod_ordem
                AND     OPA.exercicio           = OP.exercicio
                AND     OPA.cod_entidade        = OP.cod_entidade
            
                AND     OP.cod_ordem            = PL.cod_ordem
                AND     OP.exercicio            = PL.exercicio
                AND     OP.cod_entidade         = PL.cod_entidade
            
                AND     PL.cod_nota             = NL.cod_nota
                AND     Pl.exercicio_liquidacao = NL.exercicio
                AND     PL.cod_entidade         = NL.cod_entidade
            
                AND     NL.cod_entidade         = inCodEntidade
                AND     NL.cod_nota             = inCodNota
                AND     NL.exercicio            = stExercicio
                ;
            
                IF nuValor IS NULL THEN
                    nuValor := 0.00;
                END IF;
            
                RETURN nuValor;
            
            END;
            $function$
        ');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP FUNCTION empenho.fn_consultar_valor_apagar_anulado_nota(character varying, integer, integer)');
    }
}
