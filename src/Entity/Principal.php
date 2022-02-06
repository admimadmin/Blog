<?php

namespace App\Entity;

use App\Repository\PrincipalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrincipalRepository::class)
 */
class Principal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Blog;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Usuario;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlog()
    {
        return $this->Blog;
    }

    public function setBlog($Blog): self
    {
        $this->Blog = $Blog;

        return $this;
    }

    public function getUsuario()
    {
        return $this->Usuario;
    }

    public function setUsuario($Usuario): self
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }
}
