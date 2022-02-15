<?php

namespace App\Entity;

use App\Repository\PreguntasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PreguntasRepository::class)
 */
class Preguntas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pregunta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $respuesta;

    /**
     * @ORM\ManyToOne(targetEntity=Usuarios::class, inversedBy="preguntas")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPregunta(): ?string
    {
        return $this->pregunta;
    }

    public function setPregunta(string $pregunta): self
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getRespuesta(): ?string
    {
        return $this->respuesta;
    }

    public function setRespuesta(string $respuesta): self
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    public function getUsuario(): ?usuarios
    {
        return $this->usuario;
    }

    public function setUsuario(?usuarios $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
