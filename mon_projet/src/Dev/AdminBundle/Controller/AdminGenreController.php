<?php
namespace Dev\AdminBundle\Controller;

use Dev\FilmBundle\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Dev\AdminBundle\Form\GenreType;

/**
 * @Route("/admin/genres")
 */
class AdminGenreController extends Controller
{
    /**
     * @Route("/ajout")
     */
    public function addAction()
    {
        $genre = new Genre(); //on crée un nouveau Genre vide
        $form = $this->createForm(GenreType::class, $genre); //on le lie à un formulaire de type GenreType

        return $this->render(
            'DevAdminBundle:Genre:form.html.twig',
            ['form' => $form->createView()]
        );
    }

}
