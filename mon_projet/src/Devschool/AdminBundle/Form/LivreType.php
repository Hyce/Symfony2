<?php
// src/Devschool/AdminBundle/Form/LivreType.php
namespace Devschool\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description', TextareaType::class, array('attr' => array('cols' => 70, 'rows' => 8)))
            ->add('auteur')
            ->add('nombrePages')
            ->add('genre')
            ->add('dateParution', DateType::class, array('years' => range('1900','2017')))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}