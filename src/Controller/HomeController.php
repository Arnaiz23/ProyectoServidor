<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Usuarios;
use App\Entity\Productos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;

class HomeController extends AbstractController //para renderizar
{
    /**
     * @Route("/home", name="home")
     */
    public function listAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $productos = $entityManager->getRepository(Productos::class)->findAll();

        $entityManager = $this->getDoctrine()->getManager();
        $usuarios = $entityManager->getRepository(Usuarios::class)->findAll();

        if((isset($_COOKIE["session"]) && $_COOKIE["session"] != "yes") || !isset($_COOKIE["session"])) return $this->redirectToRoute('login');
        return $this->render('home/index.html.twig', array("usuarios" => $usuarios, "productos" => $productos));
    }
}
?>