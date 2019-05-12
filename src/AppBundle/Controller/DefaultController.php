<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/index.html.twig', [
            'test' => 'test',
        ]);
    }


    /**
     *
     * @Route("/bundle", name="bundle")
     */
    public function bundleAction(){

        return $this-> render( '@App/pages/bundle.html.twig' , [
                'auteur' => 'Jaime Sastre',
                'titre' => 'Article parlant de Symfony',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium cum dolor earum, exercitationem expedita fugiat illo inventore ipsa itaque minima nam odio omnis perferendis porro quia, quod ullam, unde?',
            ]
        );
    }



}
