<?php
 
namespace Urbem\CoreBundle\Entity\Folhapagamento;

/**
 * RegistroEventoFeriasOrdenado
 */
class RegistroEventoFeriasOrdenado
{
    /**
     * PK
     * @var integer
     */
    private $codEvento;

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var integer
     */
    private $codRegistro;

    /**
     * @var integer
     */
    private $codContrato;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var integer
     */
    private $quantidade;

    /**
     * @var string
     */
    private $desdobramento;

    /**
     * @var integer
     */
    private $parcela;

    /**
     * @var integer
     */
    private $codPeriodoMovimentacao;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var string
     */
    private $natureza;

    /**
     * @var string
     */
    private $eventoSistema;

    /**
     * @var integer
     */
    private $sequencia;


    /**
     * Set codEvento
     *
     * @param integer $codEvento
     * @return RegistroEventoFeriasOrdenado
     */
    public function setCodEvento($codEvento)
    {
        $this->codEvento = $codEvento;
        return $this;
    }

    /**
     * Get codEvento
     *
     * @return integer
     */
    public function getCodEvento()
    {
        return $this->codEvento;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return RegistroEventoFeriasOrdenado
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codRegistro
     *
     * @param integer $codRegistro
     * @return RegistroEventoFeriasOrdenado
     */
    public function setCodRegistro($codRegistro)
    {
        $this->codRegistro = $codRegistro;
        return $this;
    }

    /**
     * Get codRegistro
     *
     * @return integer
     */
    public function getCodRegistro()
    {
        return $this->codRegistro;
    }

    /**
     * Set codContrato
     *
     * @param integer $codContrato
     * @return RegistroEventoFeriasOrdenado
     */
    public function setCodContrato($codContrato)
    {
        $this->codContrato = $codContrato;
        return $this;
    }

    /**
     * Get codContrato
     *
     * @return integer
     */
    public function getCodContrato()
    {
        return $this->codContrato;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return RegistroEventoFeriasOrdenado
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     * @return RegistroEventoFeriasOrdenado
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set desdobramento
     *
     * @param string $desdobramento
     * @return RegistroEventoFeriasOrdenado
     */
    public function setDesdobramento($desdobramento)
    {
        $this->desdobramento = $desdobramento;
        return $this;
    }

    /**
     * Get desdobramento
     *
     * @return string
     */
    public function getDesdobramento()
    {
        return $this->desdobramento;
    }

    /**
     * Set parcela
     *
     * @param integer $parcela
     * @return RegistroEventoFeriasOrdenado
     */
    public function setParcela($parcela = null)
    {
        $this->parcela = $parcela;
        return $this;
    }

    /**
     * Get parcela
     *
     * @return integer
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set codPeriodoMovimentacao
     *
     * @param integer $codPeriodoMovimentacao
     * @return RegistroEventoFeriasOrdenado
     */
    public function setCodPeriodoMovimentacao($codPeriodoMovimentacao)
    {
        $this->codPeriodoMovimentacao = $codPeriodoMovimentacao;
        return $this;
    }

    /**
     * Get codPeriodoMovimentacao
     *
     * @return integer
     */
    public function getCodPeriodoMovimentacao()
    {
        return $this->codPeriodoMovimentacao;
    }

    /**
     * Set timestamp
     *
     * @param \Urbem\CoreBundle\Helper\DateTimeMicrosecondPK $timestamp
     * @return RegistroEventoFeriasOrdenado
     */
    public function setTimestamp(\Urbem\CoreBundle\Helper\DateTimeMicrosecondPK $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \Urbem\CoreBundle\Helper\DateTimeMicrosecondPK
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set natureza
     *
     * @param string $natureza
     * @return RegistroEventoFeriasOrdenado
     */
    public function setNatureza($natureza)
    {
        $this->natureza = $natureza;
        return $this;
    }

    /**
     * Get natureza
     *
     * @return string
     */
    public function getNatureza()
    {
        return $this->natureza;
    }

    /**
     * Set eventoSistema
     *
     * @param string $eventoSistema
     * @return RegistroEventoFeriasOrdenado
     */
    public function setEventoSistema($eventoSistema = null)
    {
        $this->eventoSistema = $eventoSistema;
        return $this;
    }

    /**
     * Get eventoSistema
     *
     * @return string
     */
    public function getEventoSistema()
    {
        return $this->eventoSistema;
    }

    /**
     * Set sequencia
     *
     * @param integer $sequencia
     * @return RegistroEventoFeriasOrdenado
     */
    public function setSequencia($sequencia)
    {
        $this->sequencia = $sequencia;
        return $this;
    }

    /**
     * Get sequencia
     *
     * @return integer
     */
    public function getSequencia()
    {
        return $this->sequencia;
    }
}
