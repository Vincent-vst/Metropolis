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
use App\Controller\searchFilm;



class formFilm extends AbstractController
{

    /**
     * @Route("/form", name="form")
     */


    public function create (Request $request, EntityManagerInterface $em): Response
    {


        $form = $this->createFormBuilder()
             ->add('nom', TextType::class)
             ->add('note', IntegerType::class, [
                 'attr' => [
                'min' => 0,
                'max' => 10
                ],               
             ])
             ->add('submitForm', SubmitType::class, ['label'=>'Add film'])
             ->getForm()
        ; 

        $form ->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {

            
            $data=$form->getData();
           
            $description = searchFilm::search($data['nom']);

            if (is_null($description))
            {
                throw $this->createNotFoundException("Sorry, we couldn't retrieve the desription for this movie"); 
                /* return $this->redirectToRoute('../../templates/error/filmNotFound.html.twig'); */
                /* echo "error, film not found"; */
                // $description = "error, film not found";
            }

            $film = new Film; 
            $film->setNom($data['nom']);
            $film->setNote($data['note']);
            $film->setDescription($description);
            $em->persist($film);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('form/form.html.twig', [
            'formFilm' => $form->createView()
        ]);
    }

}



?>
