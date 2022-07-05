<?php

namespace App\Controller;


use Twig\Environment;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController 
{

     /**
     * @Route("/hello/{prenom?World}", name="hello")
     */ 
   public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig)
   {
        dump($twig);
        dump($slugify->slugify("Helle World"));
        $logger->error("Mon message de log !");
        $tva = $calculator->calcul(100);
        dump($tva);
        dd("Hello $prenom");
       
   }
}