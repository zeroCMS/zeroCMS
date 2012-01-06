<?php

namespace Zcms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Util\Debug;


class IndexController extends Controller
{
    
    public function indexAction()
    {
    	return $this->render('ZcmsFrontendBundle:Index:index.html.twig');
    }
    public function breadAction()
    {
        $request = $this->getRequest()->getRequestUri();
        if($request == "/"){
            
            $request = "Home";
        }
        //$this->get('session')->setFlash('success', 'Your changes were saved!');
        return $this->render('ZcmsFrontendBundle::breadcrumb.html.twig',array('request'=>$request));
    }
}
