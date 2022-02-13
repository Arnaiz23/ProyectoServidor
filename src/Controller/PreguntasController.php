<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class PreguntasController extends AbstractController //para renderizar
{
    /**
     * @Route("/preguntas", name="preguntas")
     */
    public function listAction()
    {
        return $this->render('preguntas/index.html.twig');
    }
}
?>