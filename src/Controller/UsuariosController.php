<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class UsuariosController extends AbstractController //para renderizar
{
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function listAction()
    {
        return $this->render('usuarios/index.html.twig');
    }
}
?>