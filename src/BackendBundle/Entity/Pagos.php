<?php

namespace BackendBundle\Entity;

/**
 * Pagos
 */
class Pagos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var float
     */
    private $monto;

    /**
     * @var \BackendBundle\Entity\Proyectos
     */
    private $proyectos;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pagos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set monto
     *
     * @param float $monto
     *
     * @return Pagos
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set proyectos
     *
     * @param \BackendBundle\Entity\Proyectos $proyectos
     *
     * @return Pagos
     */
    public function setProyectos(\BackendBundle\Entity\Proyectos $proyectos = null)
    {
        $this->proyectos = $proyectos;

        return $this;
    }

    /**
     * Get proyectos
     *
     * @return \BackendBundle\Entity\Proyectos
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }
}
