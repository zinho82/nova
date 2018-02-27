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
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \BackendBundle\Entity\General
     */
    private $idpallet;


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
     * Set idpallet
     *
     * @param \BackendBundle\Entity\General $idpallet
     *
     * @return Fotos
     */
    public function setIdpallet(\BackendBundle\Entity\General $idpallet = null)
    {
        $this->idpallet = $idpallet;

        return $this;
    }

    /**
     * Get idpallet
     *
     * @return \BackendBundle\Entity\General
     */
    public function getIdpallet()
    {
        return $this->idpallet;
    }
}

