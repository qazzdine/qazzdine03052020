<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
  public function homepage()
  {
      return new Response(' affichage de la fonction homepage');
  }

    /**
     * @Route("questions/{mon_prenom_est_Azzeddine}")
     */
  public  function show($mon_prenom_est_Azzeddine)
  {
      $answers = [
          'Mon premier enfants il s\'appel Marwane né le 01 Mai 2003',
          'Mon  deuxième enfants  elle s\'appel Imane une fille  née le 19 Décembre 2004',
          'Mon dernier enfants elle s\'appel Ines  une fille née le née le12 Novembre 2007'
      ];

          return $this->render('question/show.html.twig',[
          'question'=>str_ireplace('_',' ',$mon_prenom_est_Azzeddine),
              'answers'=>$answers
          ]);


  }
}