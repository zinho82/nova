<?php

namespace BackendBundle\Entity;

/**
 * Notificacion
 */
class Notificacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var integer
     */
    private $readed;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $usuariodestino;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $usuarioorigen;


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
     * Set texto
     *
     * @param string $texto
     *
     * @return Notificacion
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set readed
     *
     * @param integer $readed
     *
     * @return Notificacion
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return integer
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set usuariodestino
     *
     * @param \BackendBundle\Entity\Usuario $usuariodestino
     *
     * @return Notificacion
     */
    public function setUsuariodestino(\BackendBundle\Entity\Usuario $usuariodestino = null)
    {
        $this->usuariodestino = $usuariodestino;

        return $this;
    }

    /**
     * Get usuariodestino
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getUsuariodestino()
    {
        return $this->usuariodestino;
    }

    /**
     * Set usuarioorigen
     *
     * @param \BackendBundle\Entity\Usuario $usuarioorigen
     *
     * @return Notificacion
     */
    public function setUsuarioorigen(\BackendBundle\Entity\Usuario $usuarioorigen = null)
    {
        $this->usuarioorigen = $usuarioorigen;

        return $this;
    }

    /**
     * Get usuarioorigen
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getUsuarioorigen()
    {
        return $this->usuarioorigen;
    }
}
