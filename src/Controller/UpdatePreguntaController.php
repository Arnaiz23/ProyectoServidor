<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdatePreguntaController extends AbstractController
{
    /**
     * @Route("/update-pregunta", name="update_pregunta")
     */
    public function index(): Response
    {
        return $this->render('update_pregunta/index.html.twig', [
            'controller_name' => 'UpdatePreguntaController',
        ]);
    }
}
