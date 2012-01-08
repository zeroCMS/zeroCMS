<?php

namespace Zcms\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('auteur')
            ->add('dateCreation')
            ->add('dateModification')
        ;
    }

    public function getName()
    {
        return 'zcms_frontendbundle_articletype';
    }
}
