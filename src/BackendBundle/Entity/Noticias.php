<?php

namespace BackendBundle\Entity;

/**
 * Noticias
 */
class Noticias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $resumen;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var \DateTime
     */
    private $fecha;

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
     * Set resumen
     *
     * @param string $resumen
     *
     * @return Noticias
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Noticias
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Noticias
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
     * Set usuariousuario
     *
     * @param \BackendBundle\Entity\Usuario $usuariousuario
     *
     * @return Noticias
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
}

