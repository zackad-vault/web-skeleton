<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     * @Route("/{route}", name="react_router", methods={"GET"}, requirements={"route"="^(?!api).+"})
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomepageController.php',
        ]);
    }
}
