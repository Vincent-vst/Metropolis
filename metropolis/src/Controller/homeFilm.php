<?php

namespace App\Controller;

use App\Entity\Film;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/* use Symfony\Component\BrowserKit\Response; */

class homeFilm 
{

    /**
     * @Route("/", name="home")
     */


    public function hello(){
        /* return new Response("hello world"); */
        $film = new Film(); 
        $film->setNom('pulp fiction'); 
        $film->setDescription('film cool');
        $film->setNote(3);
        return new Response($film->getNom());
    }

}
