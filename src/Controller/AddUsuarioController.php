<?php

namespace App\Controller;

use App\Entity\Usuarios;
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
        /* $usuario = new Usuarios();
        $usuario->setUsuario("as");
        $usuario->setPassword("as");
        $usuario->setTipo("usuario");
        $usuario->setNombre("as");
        $usuario->setApellidos("as");
        $usuario->setCorreo("as");

        $em = $this->getDoctrine()->getManager();

        $em->persist($usuario);
        $em->flush(); */
        
        return $this->render('add_usuario/index.html.twig', [
            'controller_name' => 'AddUsuarioController',
        ]);
    }
}
