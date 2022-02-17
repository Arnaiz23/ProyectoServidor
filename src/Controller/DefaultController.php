<?php
// src/Controller/SemanaController.php
namespace App\Controller;

use App\Entity\Usuarios;
use userBundle\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //para renderizar
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/comprobar", name="comprobar", methods={"GET", "POST"})
     */
    
    public function comprobar(Request $request){
        $user = new Usuarios();
        
        // Crear un formulario usando el tipo UserType
        $form = $this->createForm(RegisterType::class, $user);
        

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // Resto de la lógica
            $data = $form->getData();

            // Donde $data  contiene un array como:
            // array(
            //    "name" => "El nombre enviado",
            //    "username" => "El username enviado",
            //    "description" => "La descripcion enviada",
            //    "password" => "La clave enviada"
            // );
            /* if($data == "admin" && $data["password"] == "admin"){
                return $this->render('home/index.html.twig');
            } */
            
        }

        return $this->render('login/index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/registro", name="registro", methods={"GET"})
     */
    public function newuserAction(Request $request){
        $user = new Usuarios();
        
        // Crear un formulario usando el tipo UserType
        $form = $this->createForm(RegisterType::class, $user);
        

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // Resto de la lógica
            $data = $form->getData();

            // Donde $data  contiene un array como:
            // array(
            //    "name" => "El nombre enviado",
            //    "username" => "El username enviado",
            //    "description" => "La descripcion enviada",
            //    "password" => "La clave enviada"
            // );
            if($data["usuario"] == "admin" && $data["password"] == "admin"){
                return $this->render('home/index.html.twig');
            }
        }

        return $this->render('register/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
?>