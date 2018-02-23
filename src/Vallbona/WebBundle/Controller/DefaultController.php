<?php

namespace Vallbona\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('VallbonaWebBundle:Default:index.html.twig');
    }

    public function articlesAction() {
        return $this->render('VallbonaWebBundle:Default:articles.html.twig');
    }

    public function articlesDetallAction($id) {
        //query d'$id
        if ($id == 1) {
            $nom = 'Camisa';
            $preu = '40';
        } else {
            $nom = 'Roba';
            $preu = '100';
        }
        return $this->render('VallbonaWebBundle:Default:articlesDetall.html.twig', array(
                    'nom' => $nom,
                    'preu' => $preu,
        ));
    }

}
