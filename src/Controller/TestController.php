<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dd("ca fonctionne");
    }
// une autre façon de configurer une route sans passer par le ficher .yaml est ecrire dans le commentaire commz ci-dessus
// avec @Route (avec majusqule). 
// pour que symfony puisse gerer le données en commentaires il faut installer des packedges supplementaires symfony flex


    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */


    // click droit sut @Route et choisir import class on propose 2, il faut choisir celle avec Annotation.
    // cela nous mettra en olace le bon "use"
    public function  test(Request $request, $age)
    {  
        dump($request);
        
        //  soit on ecrit cette ligne: $age = $request->attributes->get('age'); soit on passe $age directement dans les parametres de la function
        dd("vous avez $age ans");
    }
}