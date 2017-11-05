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
    private $url;

    /**
     * @var \BackendBundle\Entity\Proyectos
     */
    private $codigoproy;


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
     * Set url
     *
     * @param string $url
     *
     * @return Fotos
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set codigoproy
     *
     * @param \BackendBundle\Entity\Proyectos $codigoproy
     *
     * @return Fotos
     */
    public function setCodigoproy(\BackendBundle\Entity\Proyectos $codigoproy = null)
    {
        $this->codigoproy = $codigoproy;

        return $this;
    }

    /**
     * Get codigoproy
     *
     * @return \BackendBundle\Entity\Proyectos
     */
    public function getCodigoproy()
    {
        return $this->codigoproy;
    }
}
