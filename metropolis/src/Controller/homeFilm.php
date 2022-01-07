<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Film;
/* use Symfony\Bridge\Doctrine\ManagerRegistry; */
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
        $film = $doctrine->getRepository(Film::class)->findAll();


        return $this->render('base.html.twig', ['films' => $film]);
    }


}
