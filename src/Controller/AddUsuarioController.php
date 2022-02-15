<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddUsuarioController extends AbstractController
{
    /**
     * @Route("/add-usuario", name="add_usuario")
     */
    public function index(): Response
    {
        return $this->render('add_usuario/index.html.twig', [
            'controller_name' => 'AddUsuarioController',
        ]);
    }
}
