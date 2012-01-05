<?php

// HelloBundle/Extension/MyTwigExtension.php

namespace Zcms\FrontendBundle\Extension;

use Doctrine\Common\Util\Debug;

class UcfirstExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            'debug' => new \Twig_Filter_Method($this,'debug'),
            'ucfirst' => new \Twig_Filter_Method($this, 'ucfirst'),
            'strip' => new \Twig_Filter_Method($this, 'strip'),
        );
    }

    public function strip($text) {

        $final = str_replace("/", "", $text);
        return $this->ucfirst($final);
    }

    public function ucfirst($text) {
        return ucfirst($text);
    }

    public function debug($var) {

        echo '<pre>';
        Debug::dump($var);
        echo '</pre>';
    }

    public function getName() {
        return 'ucfisrt';
    }

}

?>
