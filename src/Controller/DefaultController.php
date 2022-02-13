<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController //para renderizar
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        return $this->redirectToRoute('home');
    }
}
?>