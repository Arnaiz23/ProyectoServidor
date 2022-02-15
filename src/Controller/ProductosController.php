<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Productos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController //para renderizar
{
    /**
     * @Route("/productos", name="productos")
     */
    public function listAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $productos = $entityManager->getRepository(Productos::class)->findAll();
        return $this->render('productos/index.html.twig', array("indice" => $productos));
    }
}
?>