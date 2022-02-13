<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController //para renderizar
{
    /**
     * @Route("/productos", name="productos")
     */
    public function listAction()
    {
        return $this->render('productos/index.html.twig');
    }
}
?>