<?php

namespace Zcms\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Zcms\FrontendBundle\Entity\Commentaire;
use Doctrine\Common\DataFixtures\AbstractFixture;

/**
 * Description of CommentaireFixtures
 *
 * @author benjamin
 */
class CommentaireFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load($manager) {

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('benjamin');
        $commentaire->setCommentaire('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $commentaire->setArticle($manager->merge($this->getReference('article-1')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($commentaire);
        
        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('David');
        $commentaire->setCommentaire('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $commentaire->setArticle($manager->merge($this->getReference('article-1')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Dade');
        $commentaire->setCommentaire('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Kate');
        $commentaire->setCommentaire('Are you challenging me? ');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Dade');
        $commentaire->setCommentaire('Name your stakes.');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:18:35"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Kate');
        $commentaire->setCommentaire('If I win, you become my slave.');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:22:53"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Dade');
        $commentaire->setCommentaire('Your SLAVE?');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:25:15"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Kate');
        $commentaire->setCommentaire('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 06:46:08"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Dade');
        $commentaire->setCommentaire('And if I win?');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 10:22:46"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Kate');
        $commentaire->setCommentaire('Make it my first-born!');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-23 11:08:08"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Dade');
        $commentaire->setCommentaire('Make it our first-date!');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-24 18:56:01"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Kate');
        $commentaire->setCommentaire('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $commentaire->setArticle($manager->merge($this->getReference('article-2')));
        $commentaire->setDateCreation(new \DateTime("2011-07-25 22:28:42"));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Stanley');
        $commentaire->setCommentaire('It\'s not gonna end like this.');
        $commentaire->setArticle($manager->merge($this->getReference('article-3')));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Gabriel');
        $commentaire->setCommentaire('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $commentaire->setArticle($manager->merge($this->getReference('article-3')));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Mile');
        $commentaire->setCommentaire('Doesn\'t Bill Gates have something like that?');
        $commentaire->setArticle($manager->merge($this->getReference('article-5')));
        $manager->persist($commentaire);

        $commentaire = new Commentaire();
        $commentaire->setUtilisateur('Gary');
        $commentaire->setCommentaire('Bill Who?');
        $commentaire->setArticle($manager->merge($this->getReference('article-5')));
        $manager->persist($commentaire);

        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

}

?>
