<?php

namespace Zcms\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('utilisateur')
            ->add('commentaire')
            
        ;
    }

    public function getName()
    {
        return 'commentaire';
    }
}
