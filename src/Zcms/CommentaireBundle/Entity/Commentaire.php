<?php

namespace Zcms\CommentaireBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Zcms\CommentaireBundle\Entity\CommentaireRepository")
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks()
 */
class Commentaire {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $gravatar;
    /**
     * @ORM\Column(type="string")
     */
    protected $utilisateur;

    /**
     * @ORM\Column(type="text")
     */
    protected $commentaire;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $approuve;

    /**
     * @ORM\ManyToOne(targetEntity="Zcms\FrontendBundle\Entity\Article", inversedBy="commentaires")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    protected $article;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateCreation;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateModification;

    public function __construct() {
        
        $this->setDateCreation(new \DateTime());
        $this->setDateModification(new \DateTime());
        
        $this->setGravatar("http://www.gravatar.com/avatar/b2af7d0c9989e63725e332b13c3c6507?s=50");

        $this->setApprouve(true);
    }

    /**
     * @ORM\preUpdate
     */
    public function setUpdatedValue() {
        $this->setDateModification(new \DateTime());
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('utilisateur', new NotBlank(array(
            'message' => 'Entrez un nom valide'
        )));
        $metadata->addPropertyConstraint('commentaire', new NotBlank(array(
            'message' => 'Entrer un commentaire'
        )));
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gravatar
     *
     * @param string $gravatar
     */
    public function setGravatar($gravatar)
    {
        $this->gravatar = $gravatar;
    }

    /**
     * Get gravatar
     *
     * @return string 
     */
    public function getGravatar()
    {
        return $this->gravatar;
    }
    
    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * Get utilisateur
     *
     * @return string 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set commentaire
     *
     * @param text $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * Get commentaire
     *
     * @return text 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set approuve
     *
     * @param boolean $approuve
     */
    public function setApprouve($approuve)
    {
        $this->approuve = $approuve;
    }

    /**
     * Get approuve
     *
     * @return boolean 
     */
    public function getApprouve()
    {
        return $this->approuve;
    }

    /**
     * Set dateCreation
     *
     * @param datetime $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * Get dateCreation
     *
     * @return datetime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param datetime $dateModification
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    }

    /**
     * Get dateModification
     *
     * @return datetime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set article
     *
     * @param Zcms\FrontendBundle\Entity\Article $article
     */
    public function setArticle(\Zcms\FrontendBundle\Entity\Article $article)
    {
        $this->article = $article;
    }

    /**
     * Get article
     *
     * @return Zcms\FrontendBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}