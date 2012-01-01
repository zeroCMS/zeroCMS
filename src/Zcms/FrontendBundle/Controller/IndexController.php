<?php

namespace Zcms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class IndexController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ZcmsFrontendBundle:Index:index.html.twig');
    }
}
