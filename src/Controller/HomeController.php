<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     *
     * @Route("/", methods={"GET"}, name="app_home")
     *
     * @return Response
     */
    public function homepage():Response
    {

        return new Response(
            '<html><body><h1>Welcome to Geometry calculator</h1></body></html>'
        );
    }


}
