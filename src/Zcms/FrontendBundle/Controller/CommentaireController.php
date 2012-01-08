<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Zcms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zcms\FrontendBundle\Entity\Commentaire;
use Zcms\FrontendBundle\Form\CommentaireType;

/**
 * Comment controller.
 */
class CommentaireController extends Controller
{
    public function newAction($article_id)
    {
        $article = $this->getArticle($article_id);

        $commentaire = new Commentaire();
        $commentaire->setArticle($article);
        $form   = $this->createForm(new CommentaireType(), $commentaire);

        return $this->render('ZcmsFrontendBundle:Commentaire:form.html.twig', array(
            'commentaire' => $commentaire,
            'form'   => $form->createView()
        ));
    }

    public function creationAction($article_id)
    {
        $article = $this->getArticle($article_id);

        $commentaire  = new Commentaire();
        $commentaire->setArticle($article);
        $request = $this->getRequest();
        $form    = $this->createForm(new CommentaireType(), $commentaire);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                       ->getEntityManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirect($this->generateUrl('article_show', array(
                'id' => $commentaire->getArticle()->getId())) .
                '#comment-' . $commentaire->getId()
            );
        }

        return $this->render('ZcmsFrontendBundle:Commentaire:creation.html.twig', array(
            'commentaire' => $commentaire,
            'form'    => $form->createView()
        ));
    }

    protected function getArticle($article_id)
    {
        $em = $this->getDoctrine()
                    ->getEntityManager();

        $article = $em->getRepository('ZcmsFrontendBundle:Article')->find($article_id);

        if (!$article) {
            throw $this->createNotFoundException('Impossible de trouver l\'article correspondant.');
        }

        return $article;
    }

}