<?php

namespace BackendBundle\Entity;

/**
 * Archivos
 */
class Archivos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $archivo;

    /**
     * @var \DateTime
     */
    private $fechaCarga;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $ejecutivo;


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
     * Set archivo
     *
     * @param string $archivo
     *
     * @return Archivos
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set fechaCarga
     *
     * @param \DateTime $fechaCarga
     *
     * @return Archivos
     */
    public function setFechaCarga($fechaCarga)
    {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga()
    {
        return $this->fechaCarga;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Archivos
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
     * Set ejecutivo
     *
     * @param \BackendBundle\Entity\Usuario $ejecutivo
     *
     * @return Archivos
     */
    public function setEjecutivo(\BackendBundle\Entity\Usuario $ejecutivo = null)
    {
        $this->ejecutivo = $ejecutivo;

        return $this;
    }

    /**
     * Get ejecutivo
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getEjecutivo()
    {
        return $this->ejecutivo;
    }
}

