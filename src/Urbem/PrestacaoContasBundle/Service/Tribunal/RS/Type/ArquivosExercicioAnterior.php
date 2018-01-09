<?php

namespace Urbem\PrestacaoContasBundle\Service\Tribunal\RS\Type;

use Sonata\AdminBundle\Form\FormMapper;
use Urbem\PrestacaoContasBundle\Service\TribunalStrategy\ConfiguracaoAbstract;
use Urbem\PrestacaoContasBundle\Service\TribunalStrategy\ConfiguracaoInterface;
use Urbem\PrestacaoContasBundle\Service\TribunalStrategy\TceInterface;
use Urbem\PrestacaoContasBundle\Helper\ExportAdjustmentHelper;
use Urbem\PrestacaoContasBundle\Enum\FieldsAndData;
use Symfony\Bridge\Twig\TwigEngine;

class ArquivosExercicioAnterior extends ConfiguracaoAbstract implements ConfiguracaoInterface
{
    const LAST_YEAR = 1;

    /**
     * @return array
     */
    public function includeJs()
    {
        return [
            '/prestacaocontas/js/Tribunal/RS/change-periods.js'
        ];
    }

    /**
     * @return string
     */
    public function dynamicBlockJs()
    {
        return parent::dynamicBlockJs();
    }

    /**
     * @return array
     */
    public function processParameters()
    {
        try {
            $params = parent::processParametersCollection();
            $exercicioAnterior = $this->factory->getSession()->getExercicio() - self::LAST_YEAR;

            $configuracoes = $this->getConfiguracaoRepository();
            $setorGoverno = $configuracoes->findConfiguracaoByParameters(FieldsAndData::$fieldsConfiguracao, $exercicioAnterior);

            ExportAdjustmentHelper::setFinancialYear($params, $exercicioAnterior);
            ExportAdjustmentHelper::setPeriodInitialAndFinal($params, $exercicioAnterior);
            ExportAdjustmentHelper::setCnpj($params, $this->getStCnpjSetor($params));
            ExportAdjustmentHelper::setGovernmentAgency($params, $setorGoverno);
            ExportAdjustmentHelper::unsetUnusedParameters($params);

            $this->processInformationByData($params, parent::PROCESS_ST_CNPJ_SETOR);
            $this->processInformationByData($params, parent::PROCESS_ENTIDADE);
            $this->processInformationByData($params, parent::PROCESS_REPORT_TYPE);
            $this->processInformationByData($params, parent::PROCESS_FILES);

            return $params->exportDataAndValueToArray();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return bool
     */
    public function save()
    {
    }

    /**
     * @return array
     */
    public function buildServiceProvider(TwigEngine $templating = null)
    {
        return ['response' => true];
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @param \Urbem\PrestacaoContasBundle\Service\TribunalStrategy\TceInterface $objectAdmin
     */
    public function view(FormMapper $formMapper, TceInterface $objectAdmin)
    {
        parent::view($formMapper, $objectAdmin);
    }
}