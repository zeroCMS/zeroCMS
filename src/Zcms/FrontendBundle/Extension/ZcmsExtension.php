<?php

// HelloBundle/Extension/MyTwigExtension.php
namespace Zcms\FrontendBundle\Extension;

class ZcmsExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            'var_dump'   => new \Twig_Filter_Function('var_dump'),
            'ucfirst'  => new \Twig_Filter_Method($this, 'ucfirst'),
        );
    }

    public function ucfirst($text) {
        return ucfirst($text);
    }

    public function getName()
    {
        return 'ucfisrt';
    }

}
?>
