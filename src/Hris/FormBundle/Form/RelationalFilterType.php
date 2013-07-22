<?php

namespace Hris\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelationalFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('uid')
            ->add('name')
            ->add('excludeFieldOptions')
            ->add('datecreated')
            ->add('lastupdated')
            ->add('fieldOption')
            ->add('field')
            ->add('friendlyReport')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hris\FormBundle\Entity\RelationalFilter'
        ));
    }

    public function getName()
    {
        return 'hris_formbundle_relationalfiltertype';
    }
}
