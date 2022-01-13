<?php


namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class uploadFilm extends AbstractController
{

    /**
     * @Route("/upload", name="upload")
     */

    public function upload(ManagerRegistry $doctrine, FormBuilderInterface $builder, Request $request) 
    {
        $text = "hello"; 

        $form = $this->createFormBuilder()
            ->add('password', TextType::class) 
             ->add('submitForm', SubmitType::class, ['label'=>'delete film '])
             ->getForm()
        ; 


        $form ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data=$form->getData(); 
          return $this->redirectToRoute('home');
           }

        return $this->render('details/description.html.twig', ['upload' => $form->createView()]);

    }


}


?>
