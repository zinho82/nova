<?php

namespace BackendBundle\Entity;

/**
 * Documentos
 */
class Documentos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo = '0';

    /**
     * @var string
     */
    private $archivo = '0';

    /**
     * @var \BackendBundle\Entity\Proyectos
     */
    private $proyectoid;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Documentos
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
     * Set archivo
     *
     * @param string $archivo
     *
     * @return Documentos
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
     * Set proyectoid
     *
     * @param \BackendBundle\Entity\Proyectos $proyectoid
     *
     * @return Documentos
     */
    public function setProyectoid(\BackendBundle\Entity\Proyectos $proyectoid = null)
    {
        $this->proyectoid = $proyectoid;

        return $this;
    }

    /**
     * Get proyectoid
     *
     * @return \BackendBundle\Entity\Proyectos
     */
    public function getProyectoid()
    {
        return $this->proyectoid;
    }
}
