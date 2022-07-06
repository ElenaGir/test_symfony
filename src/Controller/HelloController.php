<?php

namespace App\Controller;

use App\Taxes\Detector;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

// class HelloController 
// {

//      /**
//      * @Route("/hello/{prenom?World}", name="hello")
//      */ 
//    public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig, Detector $detector)
//    {

//         dump($detector->detect(101));
//         dump($detector->detect(10));

//         dump($twig);
//         dump($slugify->slugify("Helle World"));
//         $logger->error("Mon message de log !");
//         $tva = $calculator->calcul(100);
//         dump($tva);
//         dd("Hello $prenom");

//    }
// }
class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{prenom?World}", name="hello")
     */
    public function hello($prenom)
    {
        return $this->render('hello.html.twig', [
            'prenom' => $prenom,
            'ages' => [
                12,
                18,
                29,
                15
            ],
            'formateur0' => [
                'prenom' => 'Lior',
                'nom' => 'Chamla',
                'age' => 33
            ],
            'formateur1' => ['prenom' => 'Antoine', 'nom' => 'Bobo'],
            'formateur2' => ['prenom' => 'Jérome', 'nom' => 'Benoit']
        ]);
    }
    /**
     * @Route("/exemple", name="exemple")
     */
    public function exemple()
    {
        return $this->render('exemple.html.twig', [
            'age' => 33
        ]);
        
    }
}
