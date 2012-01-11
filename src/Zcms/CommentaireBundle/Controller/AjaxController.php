<?php

namespace Zcms\CommentaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zcms\CommentaireBundle\Entity\Commentaire;
use Zcms\CommentaireBundle\Form\CommentaireType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Gestion ajax commentaires
 *
 * @author benjamin
 */
class AjaxController extends Controller {

    public function approuveAction() {

        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception "Accès Interdit"
            throw new AccessDeniedHttpException('Accès limité aux admins');
        }
        if ($this->getRequest()->isXmlHttpRequest()) {

            (int) $id_commentaire = $this->getRequest()->get('id');
            $em = $this->getDoctrine()->getEntityManager();

            $commentaire = $em->getRepository('ZcmsCommentaireBundle:Commentaire')->find($id_commentaire);

            if (!$commentaire) {
                $msg = array('Message' => 'Impossible de trouver le commentaire');
            }
            $commentaire->setApprouve(true);
            $em->persist($commentaire);
            $em->flush();
            $msg = array('Message' => 'Commentaire approuvé avec succés', 'Url' => $this->generateUrl('article_show', array(
                    'id' => $commentaire->getArticle()->getId())) .
                '#comment-' . $commentaire->getId());

            $this->get('session')->setFlash('success', 'Commentaire publiè avec succés');


            $response = new Response();
            $response->setContent(json_encode($msg));
            $response->headers->set('Content-type', 'application/json; charset=utf-8');
            return $response;
        }
    }

    public function desapprouveAction() {

        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception "Accès Interdit"
            throw new AccessDeniedHttpException('Accès limité aux admins');
        }
        if ($this->getRequest()->isXmlHttpRequest()) {

            (int) $id_commentaire = $this->getRequest()->get('id');
            $em = $this->getDoctrine()->getEntityManager();

            $commentaire = $em->getRepository('ZcmsCommentaireBundle:Commentaire')->find($id_commentaire);

            if (!$commentaire) {
                $msg = array('Message' => 'Impossible de trouver le commentaire');
            }
            $commentaire->setApprouve(false);
            $em->persist($commentaire);
            $em->flush();
            $msg = array('Message' => 'Commentaire depubliè avec succés', 'Url' => $this->generateUrl('article_show', array(
                    'id' => $commentaire->getArticle()->getId())) .
                '#comment-' . $commentaire->getId());

            $this->get('session')->setFlash('info', 'Commentaire depubliè avec succés');

            $response = new Response();
            $response->setContent(json_encode($msg));
            $response->headers->set('Content-type', 'application/json; charset=utf-8');

            return $response;
        }
    }

}

?>
