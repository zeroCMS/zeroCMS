<?php

namespace Zcms\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Zcms\FrontendBundle\Entity\Article;

/**
 * Description of ZcmsFixtures
 *
 * @author benjamin
 */
class ArticleFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load($manager) {

        $article1 = new Article();
        $article1->setTitre("Mark & Share Any Part Of Web Contents: MASHA");
        $article1->setAuteur("Benjamin");
        $article1->setDateCreation(new \DateTime());
        $article1->setDateModification($article1->getDateCreation());
        $article1->setActive(true);
        $article1->setContenu("MASHA is a JavaScript utility that allows readers to highlight any parts of a web content and share it with others. The feature is triggered when readers select any desired text and an icon appears to inform them about the feature + create a unique link when clicked. Masha Readers can simply click the icon, copy the unique URL generated and share it with others. When a MASHA-generated URL is loaded, the selected text is highlighted so that it is seen easily. There are callbacks for onMark, onUnmark and onHashRead (when a MASHA URL is loaded) that makes custom events possible and a WordPress plugin exists for quickly adding this utility.");

        $manager->persist($article1);
        $manager->flush();
        //////////////////////////////////////////////////////////////////////////////////////////
        $article2 = new Article();
        $article2->setTitre("Accessible & Customizable HTML5 Player – Acorn Media Player");
        $article2->setAuteur("Benjamin");
        $article2->setDateCreation(new \DateTime());
        $article2->setDateModification($article2->getDateCreation());
        $article2->setActive(false);
        $article2->setContenu("Info: The demos of the resource don't work as the source video files are unavailable. Acorn Media Player is a jQuery plugin for creating a customizable HTML5 media player with support for accessibility. The player can be completely controlled with keyboard (with standard tab-based navigation), has screen-reader support + accessible themes and various other accessibility tweaks. There is also support for closed captions and a dynamic transcript generated from the selected captions is provided. Acorn jQuery Media Player Acorn Media Player can be themed with ease, can display videos in fullscreen, informs users on loading processes with loading + buffering indicators and can even remember the volume level used with HTML5 localStorage. The sliders (seek and volume) can either use jQuery UI's widgets or a custom one is provided as well and few other options exist (like the direction of the volume slider) for further customization.");

        $manager->persist($article2);
        $manager->flush();
        //////////////////////////////////////////////////////////////////////////////////////////
        $article3 = new Article();
        $article3->setTitre("Create A Q&A Section For Any Website Easily With Qhub");
        $article3->setAuteur("Benjamin");
        $article3->setDateCreation(new \DateTime());
        $article3->setDateModification($article3->getDateCreation());
        $article3->setActive(true);
        $article3->setContenu("Q&A websites are a great way of sharing information with other users. Simple, focused and easy to use for everyone. Qhub, a web application for quickly creating Q&A websites, is giving away 4 annual licenses (1*Deluxe and 3*Pro licenses) to WRD readers. Joining the giveaway is pretty easy and details can be found at the bottom of this post. What is Qhub? Qhub is a hosted web application for having a question and answer website within minutes. It is either a new community you are trying to create or a place to engage with your users and answer their questions, the application handles the requirements well. Qhub Sample Website Users can simply ask questions with adding tags to them and others can choose to answer and/or rate other answers. There is also a point system for motivating users to be more active. The look and feel of the website can be completely customized (logo, background, colors, custom CSS, etc.) to match the main website. Admin panel provided is feature-rich enough to control users, entries and any other system settings. Various widgets (like Side Tab widget or Ask a Question widget) are offered for spreading the content into other websites. And, an API exists for integrating the data with 3rd party apps. How to join the giveaway? Qhub is giving away 1*Deluxe and 3*Pro licenses (all of them are annual) and in order to join the giveaway, you can choose one or both of the options below to increase chances of winning by: commenting to this post tweeting this giveaway (click to tweet easily) The winners will be announced as an update to this post a week later (12 Jan 2012). Good luck everyone.");

        $manager->persist($article3);
        $manager->flush();

        //////////////////////////////////////////////////////////////////////////////////////////
        $article4 = new Article();
        $article4->setTitre("Les données factices revisitées");
        $article4->setAuteur("Benjamin");
        $article4->setDateCreation(new \DateTime());
        $article4->setDateModification($article4->getDateCreation());
        $article4->setActive(true);
        $article4->setContenu("Maintenant que nous avons créé l’entité Comment, ajoutons lui quelques données factices. C’est toujours une bonne idée de créer des données factices lorsque l’on crée une nouvelle entité. On sait qu’un commentaire doit avoir une entité Blog associée comme nous l’avons précisé dans les métadonnées, de ce fait lorsque l’on crée une entité Comment il faut lui spécifier une entité Blog entity. Nous avons déjà créé les données factices pour l’entité Blog, donc nous pourrions simplement mettre à jour le fichier qui contient ces définitions et ajouter la création des entités Comment. C’est peut être OK pour le moment, mais que va-t-il se passer quand nous allons ensuite ajouter des utilisateurs, des catégories d’articles et d’autres entités à notre bundle ? Une meilleure manière de fonctionner, c’est de créer séparer nos données factices pour l’entité Comment dans un nouveau fichier. Le problème avec cette approche, c’est d’accéder aux entités factices de la classe Blog.Heureusement, ce problème peut aisément être résolu en créant dans références aux objets dans un des fichiers de données, référence à laquelle les autres données factices auront accès. Mettez à jour les données factices de l’entité Blog dans src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php avec ce qui suit. Les changements à noter ici sont l’extension de la classe AbstractFixture et l’implémentation de OrderedFixtureInterface. Notez également les deux use pour importer ces classes.");

        $manager->persist($article4);
        $manager->flush();

        //////////////////////////////////////////////////////////////////////////////////////////
        $article5 = new Article();
        $article5->setTitre("Les migrations Doctrine 2");
        $article5->setAuteur("Benjamin");
        $article5->setDateCreation(new \DateTime());
        $article5->setDateModification($article5->getDateCreation());
        $article5->setActive(true);
        $article5->setContenu("L’extension et le bundle de migration Doctrine 2 n’est pas disponible de base avec la distribution standard de Symfony2, nous devons l’installer nous même comme nous l’avons fait pour les données factices. Ouvrez le fichier deps à la racine du projet et ajoutez l’extension comme suit :");

        $manager->persist($article5);
        $manager->flush();


        $this->addReference('article-1', $article1);
        $this->addReference('article-2', $article2);
        $this->addReference('article-3', $article3);
        $this->addReference('article-4', $article4);
        $this->addReference('article-5', $article5);
    }

    public function getOrder() {
        return 1;
    }

}

?>
