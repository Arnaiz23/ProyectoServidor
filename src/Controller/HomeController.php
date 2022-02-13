<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController //para renderizar
{
    /**
     * @Route("/home", name="home")
     */
    public function listAction()
    {
        return $this->render('home/index.html.twig');
    }
}
?>