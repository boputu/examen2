<?php

namespace EsqueletoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartas
 *
 * @ORM\Table(name="cartas")
 * @ORM\Entity(repositoryClass="EsqueletoBundle\Repository\CartasRepository")
 */
class Cartas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\OneToMany(targetEntity="Usuario", mappedBy="cartas")
    */
    private $cartafav;


    /**
    * @var string
    *
    * @ORM\Column(name="nombre", type="string", length=255)
    */
    private $nombre;

    /**
    * @var string
    *
    * @ORM\Column(name="tipo", type="string", length=255)
    */
    private $tipo;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cartas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Cartas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set usuario
     *
     * @param \EsqueletoBundle\Entity\Usuario $usuario
     *
     * @return Cartas
     */
    public function setUsuario(\EsqueletoBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \EsqueletoBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartafav = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cartafav
     *
     * @param \EsqueletoBundle\Entity\Usuario $cartafav
     *
     * @return Cartas
     */
    public function addCartafav(\EsqueletoBundle\Entity\Usuario $cartafav)
    {
        $this->cartafav[] = $cartafav;

        return $this;
    }

    /**
     * Remove cartafav
     *
     * @param \EsqueletoBundle\Entity\Usuario $cartafav
     */
    public function removeCartafav(\EsqueletoBundle\Entity\Usuario $cartafav)
    {
        $this->cartafav->removeElement($cartafav);
    }

    /**
     * Get cartafav
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartafav()
    {
        return $this->cartafav;
    }
}
