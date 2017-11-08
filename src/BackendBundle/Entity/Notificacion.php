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
     * @var integer
     */
    private $usuarioorigen;

    /**
     * @var integer
     */
    private $usuariodestino;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var integer
     */
    private $readed;


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
     * Set usuarioorigen
     *
     * @param integer $usuarioorigen
     *
     * @return Notificacion
     */
    public function setUsuarioorigen($usuarioorigen)
    {
        $this->usuarioorigen = $usuarioorigen;

        return $this;
    }

    /**
     * Get usuarioorigen
     *
     * @return integer
     */
    public function getUsuarioorigen()
    {
        return $this->usuarioorigen;
    }

    /**
     * Set usuariodestino
     *
     * @param integer $usuariodestino
     *
     * @return Notificacion
     */
    public function setUsuariodestino($usuariodestino)
    {
        $this->usuariodestino = $usuariodestino;

        return $this;
    }

    /**
     * Get usuariodestino
     *
     * @return integer
     */
    public function getUsuariodestino()
    {
        return $this->usuariodestino;
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
}
