<?php

namespace BackendBundle\Entity;

/**
 * Ctacte
 */
class Ctacte
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $movimiento;

    /**
     * @var integer
     */
    private $monto;

    /**
     * @var \DateTime
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     */
    private $fechavalidacion;

    /**
     * @var \BackendBundle\Entity\Config
     */
    private $estado;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $usuariousuario;


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
     * Set movimiento
     *
     * @param string $movimiento
     *
     * @return Ctacte
     */
    public function setMovimiento($movimiento)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return string
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }

    /**
     * Set monto
     *
     * @param integer $monto
     *
     * @return Ctacte
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return integer
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     *
     * @return Ctacte
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set fechavalidacion
     *
     * @param \DateTime $fechavalidacion
     *
     * @return Ctacte
     */
    public function setFechavalidacion($fechavalidacion)
    {
        $this->fechavalidacion = $fechavalidacion;

        return $this;
    }

    /**
     * Get fechavalidacion
     *
     * @return \DateTime
     */
    public function getFechavalidacion()
    {
        return $this->fechavalidacion;
    }

    /**
     * Set estado
     *
     * @param \BackendBundle\Entity\Config $estado
     *
     * @return Ctacte
     */
    public function setEstado(\BackendBundle\Entity\Config $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \BackendBundle\Entity\Config
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set usuariousuario
     *
     * @param \BackendBundle\Entity\Usuario $usuariousuario
     *
     * @return Ctacte
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
     * @var string
     */
    private $codigocomprobante;


    /**
     * Set codigocomprobante
     *
     * @param string $codigocomprobante
     *
     * @return Ctacte
     */
    public function setCodigocomprobante($codigocomprobante)
    {
        $this->codigocomprobante = $codigocomprobante;

        return $this;
    }

    /**
     * Get codigocomprobante
     *
     * @return string
     */
    public function getCodigocomprobante()
    {
        return $this->codigocomprobante;
    }
}