<?php

namespace ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="ClienteBundle\Repository\ServicioRepository")
 */
class Servicio
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
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="servicios")
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="costo", type="integer")
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="costo_tiempo", type="string", length=50)
     */
    private $costoTiempo;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Servicio
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
     * Set cliente
     *
     * @param string $cliente
     *
     * @return Servicio
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Servicio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return Servicio
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return int
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set costoTiempo
     *
     * @param string $costoTiempo
     *
     * @return Servicio
     */
    public function setCostoTiempo($costoTiempo)
    {
        $this->costoTiempo = $costoTiempo;

        return $this;
    }

    /**
     * Get costoTiempo
     *
     * @return string
     */
    public function getCostoTiempo()
    {
        return $this->costoTiempo;
    }
}
