<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateProductoController extends AbstractController
{
    /**
     * @Route("/update-producto", name="update_producto")
     */
    public function index(): Response
    {
        return $this->render('update_producto/index.html.twig', [
            'controller_name' => 'UpdateProductoController',
        ]);
    }
}
