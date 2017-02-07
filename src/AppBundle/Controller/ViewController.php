<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ViewController
 *
 * @author marvin
 */
class ViewController extends Controller {

    /**
     * @Route("/yellow",name="yellow")
     * @return Reponse Correspond à la couleur passée dans l'URI
     */
    public function getYellow(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render('couleur/yellow.html.twig');
        } else {
            $reponse = new Response("Blue");
            return $reponse;
        }
    }

    /**
     * La methode getRed prend en param $r qui est de type request
     * @Route ("/red",name="red")
     * @return Reponse Correspond à couleur passée dans l'URI
     */
    public function getRed(Request $r) {
        // Si $r prend la methode GET
        if ($r->getMethod() == "GET") { 
            //On retourne une page Web
            return $this->render('couleur/red.html.twig');
        } else {
            $reponse = new Response("Blue");
            return $reponse;
        }
    }

    /**
     * @Route ("/blue",name="blue")
     * @return Reponse Correspond à couleur passée dans l'URI
     */
    public function getBlue(Request $r) {

        if ($r->getMethod() == "GET") {
            return $this->render('couleur/blue.html.twig');
        } else {
            $reponse = new Response("Blue");
            return $reponse;
        }
    }

    /**
     * @Route ("/green",name="green")
     * @return Reponse Correspond à couleur passée dans l'URI
     */
    public function getGreen(Request $r) {
       
        if ($r->getMethod() == "GET") {
            return $this->render('couleur/green.html.twig');
        } else {
            $reponse = new Response("Green");
            return $reponse;
        }
    }

}
