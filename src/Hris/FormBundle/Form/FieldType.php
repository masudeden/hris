<?php
/*
 *
 * Copyright 2012 Human Resource Information System
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @since 2012
 * @author John Francis Mukulu <john.f.mukulu@gmail.com>
 *
 */
namespace Hris\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FieldType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('dataType')
            ->add('inputType')
            ->add('caption')
            ->add('description',null,array(
                'required'=>false,
            ))
            ->add('compulsory',null,array(
                'required'=>false,
            ))
            ->add('isUnique',null,array(
                'required'=>false,
            ))
            ->add('hashistory',null,array(
                'required'=>false,
            ))
            ->add('skipInReport',null,array(
                'required'=>false,
            ))
            ->add('isCalculated',null,array(
                'required'=>false,
            ))
            ->add('calculatedExpression',null,array(
                'required'=>false,
            ))
            ->add('childField',null,array(
                'required'=>false,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hris\FormBundle\Entity\Field'
        ));
    }

    public function getName()
    {
        return 'hris_formbundle_fieldtype';
    }
}
