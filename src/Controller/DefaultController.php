<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Usuarios;
use userBundle\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
class DefaultController extends AbstractController //para renderizar
{

    /**
     * @Route("/", name="login", methods={"GET"})
     */
    
    public function listAction()
    {
        return $this->redirectToRoute('app_login');
    }
}
?>