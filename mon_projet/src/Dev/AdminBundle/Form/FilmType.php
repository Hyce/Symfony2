<?php
namespace Dev\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FilmType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('titre')
->add('synopsis')
->add('realisateur')
->add('date_parution')
->add('genre')
->add('save', SubmitType::class, array('label' => 'Enregistrer'))
;
}
}