<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
/**
 * @Route("/")
 */
class DefaultController extends AbstractController //para renderizar
{

    /**
     * @Route("/", name="login", methods={"GET"})
     */
    
    public function listAction()
    {
        // return $this->redirectToRoute('home');
        // ! Descomentar cuando ya se pueda
        // setcookie("session","yes");
        
        if(isset($_COOKIE["session"]) && $_COOKIE["session"] == "yes") return $this->redirectToRoute('home');
        return $this->render('login/index.html.twig');
    }

    /**
     * @Route("/comprobar", name="comprobar", methods={"POST"})
     */
    
    public function comprobar()
    {
        
        return $this->render('login/index.html.twig');
    }

    /**
     * @Route("/registro", name="registro", methods={"GET", "POST"})
     */
    
    public function registro()
    {
        
        return $this->render('register/index.html.twig');
    }
}
?>