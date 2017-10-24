<?php

namespace BackendBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Usuario
 */  
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $idusuario;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $app;

    /**
     * @var string
     */
    private $apm;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $comuna;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $image;
    private $ctacte;
    private $tc;
    private $bio;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    
    public function getCtacte()
    {
        return $this->ctacte;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setCtacte($ctacte)
    {
        $this->ctacte = $ctacte;

        return $this;
    }
    public function getTc()
    {
        return $this->tc;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setTc($tc)
    {
        $this->tc = $tc;

        return $this;
    }
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

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
     * Set app
     *
     * @param string $app
     *
     * @return Usuario
     */
    public function setApp($app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Get app
     *
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set apm
     *
     * @param string $apm
     *
     * @return Usuario
     */
    public function setApm($apm)
    {
        $this->apm = $apm;

        return $this;
    }

    /**
     * Get apm
     *
     * @return string
     */
    public function getApm()
    {
        return $this->apm;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
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
     * Set comuna
     *
     * @param string $comuna
     *
     * @return Usuario
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;

        return $this;
    }

    /**
     * Get comuna
     *
     * @return string
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Usuario
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Usuario
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Usuario
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
     public function __toString() {
        return $this->nombre;
    }
    public function serialize() {
        return serialize(array(
        $this->idusuario,
        $this->email,
        $this->password
        ));
    }
    public function unserialize($serialized) {
        list(
        $this->idusuario,
        $this->email,
        $this->password
                )= unserialize($serialized);
        
    }

    public function eraseCredentials() {
        
    }

 public function getRoles() {
        return array('ROLE_USER','ROLE_ADMIN');
    }
    public function getSalt() {
        return null;
    }

    public function getUsername() {
        $this->email;
        
    }
}

