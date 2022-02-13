<?php
// Ruta donde guardo mi controlador: src/Controller/PrimeroController.php
namespace App\Controller;
//De momento solo necesito interpretar rutas para acceder al sitio donde hago los cálculos la respuesta
//Por lo que añado las clases de symfony que me permite interpretar rutas y devolver respuestas
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PrimeroController
{
    /**
     * @Route("/uno")
     */
    public function listado()
    {
        return new Response('<html><body> Este es mi Primer Control en Symfony 5 DAW <br> curso: 21-22</body></html>');
    }
}
?>