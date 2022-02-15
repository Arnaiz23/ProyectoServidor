<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController //para renderizar
{
    /**
     * @Route("/", name="login")
     */
    public function listAction()
    {
        // return $this->redirectToRoute('home');
        // ! Descomentar cuando ya se pueda
        setcookie("session","yes");
        
        if(isset($_COOKIE["session"]) && $_COOKIE["session"] == "yes") return $this->redirectToRoute('home');
        return $this->render('login/index.html.twig');
    }
}
?>