<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddPreguntasController extends AbstractController
{
    /**
     * @Route("/add-preguntas", name="add_preguntas")
     */
    public function index(): Response
    {
        return $this->render('add_preguntas/index.html.twig', [
            'controller_name' => 'AddPreguntasController',
        ]);
    }
}
