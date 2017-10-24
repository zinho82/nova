<?php

namespace BackendBundle\Entity;

/**
 * Proyectos
 */
class Proyectos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $proyeccion;

    /**
     * @var integer
     */
    private $uf;

    /**
     * @var integer
     */
    private $acciones;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var integer
     */
    private $vendidas;

    /**
     * @var integer
     */
    private $cop;

    /**
     * @var \DateTime
     */
    private $fechaCompraEst;


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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Proyectos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyectos
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Proyectos
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyectos
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
     * Set proyeccion
     *
     * @param string $proyeccion
     *
     * @return Proyectos
     */
    public function setProyeccion($proyeccion)
    {
        $this->proyeccion = $proyeccion;

        return $this;
    }

    /**
     * Get proyeccion
     *
     * @return string
     */
    public function getProyeccion()
    {
        return $this->proyeccion;
    }

    /**
     * Set uf
     *
     * @param integer $uf
     *
     * @return Proyectos
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return integer
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set acciones
     *
     * @param integer $acciones
     *
     * @return Proyectos
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
     * Set valor
     *
     * @param integer $valor
     *
     * @return Proyectos
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set vendidas
     *
     * @param integer $vendidas
     *
     * @return Proyectos
     */
    public function setVendidas($vendidas)
    {
        $this->vendidas = $vendidas;

        return $this;
    }

    /**
     * Get vendidas
     *
     * @return integer
     */
    public function getVendidas()
    {
        return $this->vendidas;
    }

    /**
     * Set cop
     *
     * @param integer $cop
     *
     * @return Proyectos
     */
    public function setCop($cop)
    {
        $this->cop = $cop;

        return $this;
    }

    /**
     * Get cop
     *
     * @return integer
     */
    public function getCop()
    {
        return $this->cop;
    }

    /**
     * Set fechaCompraEst
     *
     * @param \DateTime $fechaCompraEst
     *
     * @return Proyectos
     */
    public function setFechaCompraEst($fechaCompraEst)
    {
        $this->fechaCompraEst = $fechaCompraEst;

        return $this;
    }

    /**
     * Get fechaCompraEst
     *
     * @return \DateTime
     */
    public function getFechaCompraEst()
    {
        return $this->fechaCompraEst;
    }
}

