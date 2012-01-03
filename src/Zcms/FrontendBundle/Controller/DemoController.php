<?php

namespace Zcms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DemoController extends Controller
{
    
    public function indexAction()
    {
    	return $this->render('ZcmsFrontendBundle:Demo:index.html.twig');
    }
}
