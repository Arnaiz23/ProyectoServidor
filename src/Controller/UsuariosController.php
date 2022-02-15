<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class UsuariosController extends AbstractController //para renderizar
{
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function listAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usuarios = $entityManager->getRepository(Usuarios::class)->findAll();
        return $this->render('usuarios/index.html.twig', array('indice' => $usuarios));
    }
}
?>