<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductosRepository::class)
 */
class Productos
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marca;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcionCorta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcionLarga;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deporte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibilidad;

    /**
     * @ORM\ManyToOne(targetEntity=usuarios::class, inversedBy="productos")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDescripcionCorta(): ?string
    {
        return $this->descripcionCorta;
    }

    public function setDescripcionCorta(string $descripcionCorta): self
    {
        $this->descripcionCorta = $descripcionCorta;

        return $this;
    }

    public function getDescripcionLarga(): ?string
    {
        return $this->descripcionLarga;
    }

    public function setDescripcionLarga(string $descripcionLarga): self
    {
        $this->descripcionLarga = $descripcionLarga;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDeporte(): ?string
    {
        return $this->deporte;
    }

    public function setDeporte(string $deporte): self
    {
        $this->deporte = $deporte;

        return $this;
    }

    public function getDisponibilidad(): ?string
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(string $disponibilidad): self
    {
        $this->disponibilidad = $disponibilidad;

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
