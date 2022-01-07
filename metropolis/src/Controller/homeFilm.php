<?php

namespace App\Controller;

use App\Entity\Film;
use Symfony\Bridge\Doctrine\ManagerRegistry;
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


    /* public function returnFilm(Film $doctrine ) : Response{ */
    /*     $filmRepository = $doctrine->getRepository(Film::class); */
    /*     $film = $filmRepository->findAll(); */

    /*     return $this->render('base.html.twig', */
    /*         ['films' => $film] */
    /*     ); */
    /* } */


    /* public function hello(){ */
    /*     /1* return new Response("hello world"); *1/ */
    /*     $film = new Film(); */ 
    /*     $film->setNom('pulp fiction'); */ 
    /*     $film->setDescription('film cool'); */
    /*     $film->setNote(3); */
    /*     /1* return new Response($film->getNom()); *1/ */
    /*     return $this->render('base.html.twig', [ */
    /*         "film" => $film */
    /*     ]); */
    /* } */

}
