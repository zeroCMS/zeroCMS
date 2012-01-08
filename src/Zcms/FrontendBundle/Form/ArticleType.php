<?php

namespace Zcms\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('titre')
                ->add('contenu','textarea',array('required'=>false))
                ->add('auteur')
                ->add('dateCreation', 'date', array('widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'd/M/y',
                    'data_timezone' => "Europe/Paris",
                    'user_timezone' => "Europe/Paris"
                ))
                ->add('dateModification', 'date', array('widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'd/M/y',
                    'data_timezone' => "Europe/Paris",
                    'user_timezone' => "Europe/Paris"
                ))
        ;
    }

    public function getName() {
        return 'article';
    }

}
