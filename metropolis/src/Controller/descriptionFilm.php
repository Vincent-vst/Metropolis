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


    public function show( ManagerRegistry $doctrine, $id, Request $request): Response {
        $film = $doctrine->getRepository(Film::class)->find($id);

        $form = $this->createFormBuilder()
             ->add('submitForm', SubmitType::class, ['label'=>'delete film'])
             ->getForm()
        ; 

        if($form->isSubmitted() && $form->isValid()){

            return $this->redirectToRoute('home');
        }

        $form ->handleRequest($request);

   

        return $this->render('details/description.html.twig', ['film' => $film, 'deleteFilm' => $form->createView()]);
        /* return $this->render('form/form.html.twig', [ */
        /*     'formFilm' => $form->createView() */
        /* ]); */

    }


   }

?>
