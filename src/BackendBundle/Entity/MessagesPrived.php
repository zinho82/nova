<?php

namespace BackendBundle\Entity;

/**
 * MessagesPrived
 */
class MessagesPrived
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mensaje;

    /**
     * @var string
     */
    private $usrdestino;

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
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return MessagesPrived
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set usrdestino
     *
     * @param string $usrdestino
     *
     * @return MessagesPrived
     */
    public function setUsrdestino($usrdestino)
    {
        $this->usrdestino = $usrdestino;

        return $this;
    }

    /**
     * Get usrdestino
     *
     * @return string
     */
    public function getUsrdestino()
    {
        return $this->usrdestino;
    }

    /**
     * Set usuariousuario
     *
     * @param \BackendBundle\Entity\Usuario $usuariousuario
     *
     * @return MessagesPrived
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

