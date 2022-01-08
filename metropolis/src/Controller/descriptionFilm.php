<?php


namespace App\Controller;

use App\Entity\Film;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
/* echo "uwu" */


   class descriptionFilm extends AbstractController{
     /**
     * @Route("/details/{id}", name="description")
     */

/*       public function description($id) : Response { */
/*          /1* $nom = film.getNom(); *1/ */ 
/*          return new Response( */
/*             $id */ 
/*             /1* 'hello' *1/ */
/*         ); */
/*       } */

    public function show(ManagerRegistry $doctrine, $id): Response {
        $film = $doctrine->getRepository(Film::class)->find($id);
        /* return new Response( */
        /*    $film */
        /* ); */ 

        return $this->render('details/description.html.twig', ['film' => $film]);
    }



   }

?>
