<?php


namespace App\Controller;

use App\Entity\Film;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;


   class descriptionFilm extends AbstractController{
     /**
     * @Route("/details/{id}", name="description")
     */


    public function show( ManagerRegistry $doctrine, $id): Response {
        $film = $doctrine->getRepository(Film::class)->find($id);

        return $this->render('details/description.html.twig', ['film' => $film]);

    }


   }

?>
