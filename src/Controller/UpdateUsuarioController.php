<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateUsuarioController extends AbstractController
{
    /**
     * @Route("/update-usuario", name="update_usuario")
     */
    public function index(): Response
    {
        return $this->render('update_usuario/index.html.twig', [
            'controller_name' => 'UpdateUsuarioController',
        ]);
    }
}
