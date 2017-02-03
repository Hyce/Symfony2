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
     * @Route("/ajout", name="admin_genre_ajout")
     */
    public function addAction(Request $request)
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            $genre = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($genre);
            $em->flush();

            return $this->redirectToRoute('admin_genre_liste');
        }

        return $this->render(
            'DevAdminBundle:Genre:form.html.twig',
            ['form' => $form->createView()]
        );
    }
    /**
     * @Route("/liste", name="admin_genre_liste")
     */
    public function listAction()
    {
        $genres = $this->getDoctrine()->getRepository('DevFilmBundle:Genre')->findAll();

        return $this->render(
            'DevAdminBundle:Genre:list.html.twig',
            ['genres' => $genres]
        );
    }
    /**
     * @Route("/modif/{id}", name="admin_genre_modif", requirements={"id": "\d+"})
     */
    public function editAction(Request $request, $id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $genre = $this->getDoctrine()->getRepository('DevFilmBundle:Genre')->find($id);

        $form = $this->createForm(GenreType::class, $genre); //on le lie à un formulaire de type GenreType
        //Le formulaire sera donc prérempli avec les données de l'objet Genre récupéré en base de données.

        //puis on exécute le même traitement que pour l'ajout
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $genre = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($genre);
            $em->flush();

            return $this->redirectToRoute('admin_genre_liste');
        }

        return $this->render(
            'DevAdminBundle:Genre:form.html.twig',
            ['form' => $form->createView()]
        );
    }
    /**
     * @Route("/supprimer/{id}", name="admin_genre_supprimer", requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $genre = $this->getDoctrine()->getRepository('DevFilmBundle:Genre')->find($id);

        $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire
        $em->remove($genre); //on supprime cette entité
        $em->flush(); //exécution en base

        return $this->redirectToRoute('admin_genre_liste'); //redirection vers la liste
    }
}
