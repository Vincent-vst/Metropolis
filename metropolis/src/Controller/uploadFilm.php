<?php


namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class uploadFilm extends AbstractController
{

    /**
     * @Route("/upload", name="upload")
     */

    public function upload(ManagerRegistry $doctrine, FormBuilderInterface $builder) 
    {
        $text = "hello"; 
        $builder 
            ->add('file', FileType::class, [
                'mapped' => false,
                'label' => "uplad CSV file"
            ])
        ;
        

    }


}


?>
