<?php

// le namespace permet d'identifier ma classe
// pour pouvoir l'appeler dans d'autres classes
namespace App\Controller;

// je viens utiliser la classe Route donc j'ai besoin d'importer
// son namespace
use Symfony\Component\Routing\Annotation\Route;
use function mysql_xdevapi\expression;

// je créé une classe HomeController, qui correspond
// au nom du fichier, et qui me permet de regrouper des routes
class HomeController {

    /**
     * @Route("/test2", name="home")
     *
     * je créé une route dans un commentaire que PHP va
     * exécuter (c'est donc une annotation). Je sais que c'est une
     * annotation car il y une classe avec un @ devant.
     * J'associe une url à ma route, et je lui associe aussi
     * une méthode de controleur (en plaçant mon annotation au dessus
     * de la méthode). La méthode du controleur sera donc executée
     * quand l'url sera demandée dans un navigateur
     */
    public function home()
    {
        var_dump('Bienvenue sur la page d\'accueil'); die;
    }

    /*
     * @route("/article", name="article"
     *
     * Je crée une route pour les articles
     */
    public function article()
    {
        var_dump( 'Bienvnue sur la page des articles'); die;
    }

    /*
     * @route("/contact", name="contact"
     * je crée une route pour les contacts
     */
    public function contact(){
       var_dump("contact"); die;
    }
}