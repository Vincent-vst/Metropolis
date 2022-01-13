<?php


namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class uploadFilm extends AbstractController
{

    /**
     * @Route("/upload", name="upload")
     */

    public function upload(ManagerRegistry $doctrine) 
    {
        $text = "hello"; 


    }


}


?>
