<?php
// src/Controller/ProductController.php
namespace App\Controller;

use App\Entity\Film;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
// ...

class fetchingFilm extends AbstractController 
{
    /**
     * @Route("/", name="home")
     */
    public function show(ManagerRegistry $doctrine): Response
    {
        $product = $doctrine->getRepository(Film::class)->findAll();


        /* return new Response('Check out this great product: '.$product->getName()); */

        // or render a template
        // in the template, print things with {{ product.name }}
        return $this->render('base.html.twig', ['films' => $product]);
    }
}
