<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
   
     /**
     * @Route("/", name="index", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function index(Calculator $calculator)
    {
        $tva = $calculator->calcul(100);
        dump($tva);
        dd("ca fonctionne");
    }


    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */


    // click droit sut @Route et choisir import class on propose 2, il faut choisir celle avec Annotation.
    // cela nous mettra en place le bon "use"
    public function  test(Request $request, $age)
    {  
        dump($request);
        
        //  soit on ecrit cette ligne: $age = $request->attributes->get('age'); soit on passe $age directement dans les parametres de la function
        return new Response("vous avez $age ans");
    }
}