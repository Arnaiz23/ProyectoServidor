<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class SemanaController extends AbstractController //para renderizar
{
    /**
     * @Route("/semana")
     */
    public function listAction()
    {
        $diasemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
        //ejemplo1.
        return $this->render('semana/index.html.twig', array("indice" => $diasemana));
    }
}
?>