<?php
// src/Controller/SemanaController.php
namespace App\Controller;

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
        if((isset($_COOKIE["session"]) && $_COOKIE["session"] != "yes") || !isset($_COOKIE["session"])) return $this->redirectToRoute('login');
        return $this->render('home/index.html.twig');
    }
}
?>