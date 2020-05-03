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
     * @Route("questions/{on_est_en_plein_Ramadan}")
     */
  public  function show($on_est_en_plein_Ramadan)
  {

   return new Response(sprintf(

       'Bonjour : %s ', str_ireplace('_',' ',$on_est_en_plein_Ramadan)));
  }
}