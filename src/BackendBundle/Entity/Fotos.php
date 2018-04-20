<?php

namespace BackendBundle\Entity;

/**
 * Fotos
 */
class Fotos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idpallet;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $tipo;


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
     * Set idpallet
     *
     * @param integer $idpallet
     *
     * @return Fotos
     */
    public function setIdpallet($idpallet)
    {
        $this->idpallet = $idpallet;

        return $this;
    }

    /**
     * Get idpallet
     *
     * @return integer
     */
    public function getIdpallet()
    {
        return $this->idpallet;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Fotos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Fotos
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
     * @var \BackendBundle\Entity\Calidad
     */
    private $calidad;


    /**
     * Set calidad
     *
     * @param \BackendBundle\Entity\Calidad $calidad
     *
     * @return Fotos
     */
    public function setCalidad(\BackendBundle\Entity\Calidad $calidad = null)
    {
        $this->calidad = $calidad;

        return $this;
    }

    /**
     * Get calidad
     *
     * @return \BackendBundle\Entity\Calidad
     */
    public function getCalidad()
    {
        return $this->calidad;
    }
}
