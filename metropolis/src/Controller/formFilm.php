<?php


namespace App\Controller;

use App\Entity\Film;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;


/* $omdb = new OMDbAPI($api_key, $image_host, $assoc); */


class formFilm extends AbstractController{

    /**
     * @Route("/form", name="form")
     */


    /* public function search () { */
    /*     /1* $omdb = new OMDbAPI($api_key, $image_host, $assoc); *1/ */
    /*     /1* $omdb = new OMDbAPI(); *1/ */

/* /1* $omdb->search($keyword, $type, $year); *1/ */
    /* } */


    public function create (Request $request, EntityManagerInterface $em): Response{
        $form = $this->createFormBuilder()
             ->add('nom', TextType::class)
             ->add('note', IntegerType::class, [
                 'attr' => [
                'min' => 0,
                'max' => 10
                ],               
             ])
             /* ->add('description', TextareaType::class ) */
             ->add('submitDescription', SubmitType::class, ['label'=>'Rechercher une description'])
             ->add('submitForm', SubmitType::class, ['label'=>'Ajouter un film'])
             ->getForm()
        ; 

        $form ->handleRequest($request);

        /* if($form->isSubmitted() && $form->isValid()){ */

        /*     $data=$form->getData(); */

        /*     $film = new Film; */ 
        /*     $film->setNom($data['nom']); */
        /*     $film->setNote($data['note']); */
        /*     $film->setDescription($data['description']); */
        /*     $em->persist($film); */
        /*     $em->flush(); */


        /*     return $this->redirectToRoute('home'); */
        /* } */

        return $this->render('form/form.html.twig', [
            'formFilm' => $form->createView()
        ]);
    }

}



?>
