<?php

namespace BackendBundle\Entity;

/**
 * Config
 */
class Config
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $txt;

    /**
     * @var integer
     */
    private $pertenece;


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
     * Set txt
     *
     * @param string $txt
     *
     * @return Config
     */
    public function setTxt($txt)
    {
        $this->txt = $txt;

        return $this;
    }

    /**
     * Get txt
     *
     * @return string
     */
    public function getTxt()
    {
        return $this->txt;
    }

    /**
     * Set pertenece
     *
     * @param integer $pertenece
     *
     * @return Config
     */
    public function setPertenece($pertenece)
    {
        $this->pertenece = $pertenece;

        return $this;
    }

    /**
     * Get pertenece
     *
     * @return integer
     */
    public function getPertenece()
    {
        return $this->pertenece;
    }
    public function __toString() {
        return $this->getTxt();
        
    }
}

