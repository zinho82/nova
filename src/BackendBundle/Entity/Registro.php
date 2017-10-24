<?php

namespace BackendBundle\Entity;

/**
 * Registro
 */
class Registro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoproyecto;

    /**
     * @var integer
     */
    private $idusuario;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var integer
     */
    private $acciones;

    /**
     * @var integer
     */
    private $readed;

    /**
     * @var \DateTime
     */
    private $fecha;


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
     * Set codigoproyecto
     *
     * @param string $codigoproyecto
     *
     * @return Registro
     */
    public function setCodigoproyecto($codigoproyecto)
    {
        $this->codigoproyecto = $codigoproyecto;

        return $this;
    }

    /**
     * Get codigoproyecto
     *
     * @return string
     */
    public function getCodigoproyecto()
    {
        return $this->codigoproyecto;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     *
     * @return Registro
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Registro
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set acciones
     *
     * @param integer $acciones
     *
     * @return Registro
     */
    public function setAcciones($acciones)
    {
        $this->acciones = $acciones;

        return $this;
    }

    /**
     * Get acciones
     *
     * @return integer
     */
    public function getAcciones()
    {
        return $this->acciones;
    }

    /**
     * Set readed
     *
     * @param integer $readed
     *
     * @return Registro
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Registro
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
}

