<?php

namespace BackendBundle\Entity;

/**
 * Movimientos
 */
class Movimientos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $readed;

    /**
     * @var string
     */
    private $acciones;

    /**
     * @var \BackendBundle\Entity\Proyectos
     */
    private $proyectos;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $usuariousuario;

    /**
     * @var \BackendBundle\Entity\Config
     */
    private $tipoaccion;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $usrdestino;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Movimientos
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set readed
     *
     * @param string $readed
     *
     * @return Movimientos
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return string
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set acciones
     *
     * @param string $acciones
     *
     * @return Movimientos
     */
    public function setAcciones($acciones)
    {
        $this->acciones = $acciones;

        return $this;
    }

    /**
     * Get acciones
     *
     * @return string
     */
    public function getAcciones()
    {
        return $this->acciones;
    }

    /**
     * Set proyectos
     *
     * @param \BackendBundle\Entity\Proyectos $proyectos
     *
     * @return Movimientos
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

    /**
     * Set usuariousuario
     *
     * @param \BackendBundle\Entity\Usuario $usuariousuario
     *
     * @return Movimientos
     */
    public function setUsuariousuario(\BackendBundle\Entity\Usuario $usuariousuario = null)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }

    /**
     * Set tipoaccion
     *
     * @param \BackendBundle\Entity\Config $tipoaccion
     *
     * @return Movimientos
     */
    public function setTipoaccion(\BackendBundle\Entity\Config $tipoaccion = null)
    {
        $this->tipoaccion = $tipoaccion;

        return $this;
    }

    /**
     * Get tipoaccion
     *
     * @return \BackendBundle\Entity\Config
     */
    public function getTipoaccion()
    {
        return $this->tipoaccion;
    }

    /**
     * Set usrdestino
     *
     * @param \BackendBundle\Entity\Usuario $usrdestino
     *
     * @return Movimientos
     */
    public function setUsrdestino(\BackendBundle\Entity\Usuario $usrdestino = null)
    {
        $this->usrdestino = $usrdestino;

        return $this;
    }

    /**
     * Get usrdestino
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getUsrdestino()
    {
        return $this->usrdestino;
    }
    /**
     * @var string
     */
    private $estado = '0';


    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Movimientos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
