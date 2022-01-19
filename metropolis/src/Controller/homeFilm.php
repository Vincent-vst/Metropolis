<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeFilm extends AbstractController
{

    /**
     * @Route("/", name="home")
     */

    public function show(ManagerRegistry $doctrine): Response
    {
        // $film = $doctrine->getRepository(Film::class)->findAll();
        $film = $doctrine->getRepository(Film::class)->findBy([], ['nom' => 'ASC']);
        

        return $this->render('base.html.twig', ['films' => $film]);
    }


}
