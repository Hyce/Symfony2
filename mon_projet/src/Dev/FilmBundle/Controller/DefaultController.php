<?php

namespace Dev\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DevFilmBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('DevFilmBundle:Film')->findAll();

        $titre_de_la_page = 'Films de la bibliothèques';


        return $this->render(
            'DevFilmBundle:Film:list.html.twig',
            ['films' => $films, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        $film = $this->getDoctrine()->getRepository('DevFilmBundle:Film')->find($id);

        return $this->render(
            'DevFilmBundle:Film:show.html.twig',
            ['film' => $film]
        );
    }
}
