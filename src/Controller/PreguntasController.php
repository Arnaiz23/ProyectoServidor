<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Preguntas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class PreguntasController extends AbstractController //para renderizar
{
    /**
     * @Route("/preguntas", name="preguntas")
     */
    public function listAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $preguntas = $entityManager->getRepository(Preguntas::class)->findAll();
        return $this->render('preguntas/index.html.twig', array("indice" => $preguntas));
    }
}
?>