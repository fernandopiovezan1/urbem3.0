<?php
 
namespace Urbem\CoreBundle\Entity\Tcemg;

/**
 * ConfiguracaoLeisPpa
 */
class ConfiguracaoLeisPpa
{
    const TIPO_CONFIGURACAO_CONSULTA = 'consulta';
    const TIPO_CONFIGURACAO_ALTERACAO = 'alteracao';

    /**
     * PK
     * @var string
     */
    private $exercicio;

    /**
     * PK
     * @var integer
     */
    private $codNorma;

    /**
     * PK
     * @var string
     */
    private $tipoConfiguracao;

    /**
     * @var boolean
     */
    private $status;

    /**
     * ManyToOne
     * @var \Urbem\CoreBundle\Entity\Normas\Norma
     */
    private $fkNormasNorma;


    /**
     * Set exercicio
     *
     * @param string $exercicio
     * @return ConfiguracaoLeisPpa
     */
    public function setExercicio($exercicio)
    {
        $this->exercicio = $exercicio;
        return $this;
    }

    /**
     * Get exercicio
     *
     * @return string
     */
    public function getExercicio()
    {
        return $this->exercicio;
    }

    /**
     * Set codNorma
     *
     * @param integer $codNorma
     * @return ConfiguracaoLeisPpa
     */
    public function setCodNorma($codNorma)
    {
        $this->codNorma = $codNorma;
        return $this;
    }

    /**
     * Get codNorma
     *
     * @return integer
     */
    public function getCodNorma()
    {
        return $this->codNorma;
    }

    /**
     * Set tipoConfiguracao
     *
     * @param string $tipoConfiguracao
     * @return ConfiguracaoLeisPpa
     */
    public function setTipoConfiguracao($tipoConfiguracao)
    {
        $this->tipoConfiguracao = $tipoConfiguracao;
        return $this;
    }

    /**
     * Get tipoConfiguracao
     *
     * @return string
     */
    public function getTipoConfiguracao()
    {
        return $this->tipoConfiguracao;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return ConfiguracaoLeisPpa
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * ManyToOne (inverse side)
     * Set fkNormasNorma
     *
     * @param \Urbem\CoreBundle\Entity\Normas\Norma $fkNormasNorma
     * @return ConfiguracaoLeisPpa
     */
    public function setFkNormasNorma(\Urbem\CoreBundle\Entity\Normas\Norma $fkNormasNorma)
    {
        $this->codNorma = $fkNormasNorma->getCodNorma();
        $this->fkNormasNorma = $fkNormasNorma;
        
        return $this;
    }

    /**
     * ManyToOne (inverse side)
     * Get fkNormasNorma
     *
     * @return \Urbem\CoreBundle\Entity\Normas\Norma
     */
    public function getFkNormasNorma()
    {
        return $this->fkNormasNorma;
    }
}
