<?php

namespace Urbem\RecursosHumanosBundle\Form\Informacoes;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfiguracaoCaixaEconomicaFederalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codConvenioBanco')
            ->add('codBanco')
            ->add('codAgencia')
            ->add('codContaCorrente')
            ->add('codTipo')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Urbem\CoreBundle\Entity\Ima\ConfiguracaoConvenioCaixaEconomicaFederal'
        ));
    }
}
