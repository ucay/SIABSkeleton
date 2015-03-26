<?php
namespace AppBundle\Form;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdNameType extends AbstractType
{
    const FORM_NAME = 'id_name';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'name',
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Nama',
                ),
            ))
            ->add('save', 'submit', array(
                'label' => 'Simpan',
                'attr' => array(
                    'class' => 'btn btn-primary',
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\IdName',
        ));
    }

    public function getName()
    {
        return self::FORM_NAME;
    }
}
