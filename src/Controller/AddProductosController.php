<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddProductosController extends AbstractController
{
    /**
     * @Route("/add-productos", name="add_productos")
     */
    public function index(): Response
    {
        return $this->render('add_productos/index.html.twig', [
            'controller_name' => 'AddProductosController',
        ]);
    }
}
