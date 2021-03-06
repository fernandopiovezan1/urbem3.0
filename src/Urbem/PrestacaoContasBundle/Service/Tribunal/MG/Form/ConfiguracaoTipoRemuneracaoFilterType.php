<?php

namespace Urbem\PrestacaoContasBundle\Service\Tribunal\MG\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotNull;
use Urbem\CoreBundle\Form\Type\DynamicCollectionType;
use Urbem\PrestacaoContasBundle\Form\Type\EntidadeType;

/**
 * Class ConfiguracaoTipoRemuneracaoFilterType
 * @package Urbem\PrestacaoContasBundle\Service\Tribunal\MG\Form
 */
class ConfiguracaoTipoRemuneracaoFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('entidade', EntidadeType::class, [
            'placeholder' => 'Selecione',
            'label' => 'Entidade',
            'fix_option_value' => true,
            'attr' => ['class' => 'select2-parameters '],
            'required' => true,
            'constraints' => [new NotNull()]
        ]);

        $builder->add('registros', DynamicCollectionType::class, [
            'dynamic_type' => ConfiguracaoTipoRemuneracaoType::class,
            'label' => 'Informações de Tipos de Remuneração'
        ]);
    }
}