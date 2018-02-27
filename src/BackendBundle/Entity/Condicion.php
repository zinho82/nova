<?php

namespace BackendBundle\Entity;

/**
 * Condicion
 */
class Condicion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var string
     */
    private $variety;

    /**
     * @var float
     */
    private $firmness;

    /**
     * @var float
     */
    private $sunburn;

    /**
     * @var float
     */
    private $decay;

    /**
     * @var float
     */
    private $mold;

    /**
     * @var float
     */
    private $freezinginjury;

    /**
     * @var float
     */
    private $pithybrowncore;

    /**
     * @var float
     */
    private $scald;

    /**
     * @var float
     */
    private $shriveling;

    /**
     * @var float
     */
    private $bruising;

    /**
     * @var \BackendBundle\Entity\General
     */
    private $idpallet;


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
     * Set size
     *
     * @param integer $size
     *
     * @return Condicion
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set variety
     *
     * @param string $variety
     *
     * @return Condicion
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;

        return $this;
    }

    /**
     * Get variety
     *
     * @return string
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set firmness
     *
     * @param float $firmness
     *
     * @return Condicion
     */
    public function setFirmness($firmness)
    {
        $this->firmness = $firmness;

        return $this;
    }

    /**
     * Get firmness
     *
     * @return float
     */
    public function getFirmness()
    {
        return $this->firmness;
    }

    /**
     * Set sunburn
     *
     * @param float $sunburn
     *
     * @return Condicion
     */
    public function setSunburn($sunburn)
    {
        $this->sunburn = $sunburn;

        return $this;
    }

    /**
     * Get sunburn
     *
     * @return float
     */
    public function getSunburn()
    {
        return $this->sunburn;
    }

    /**
     * Set decay
     *
     * @param float $decay
     *
     * @return Condicion
     */
    public function setDecay($decay)
    {
        $this->decay = $decay;

        return $this;
    }

    /**
     * Get decay
     *
     * @return float
     */
    public function getDecay()
    {
        return $this->decay;
    }

    /**
     * Set mold
     *
     * @param float $mold
     *
     * @return Condicion
     */
    public function setMold($mold)
    {
        $this->mold = $mold;

        return $this;
    }

    /**
     * Get mold
     *
     * @return float
     */
    public function getMold()
    {
        return $this->mold;
    }

    /**
     * Set freezinginjury
     *
     * @param float $freezinginjury
     *
     * @return Condicion
     */
    public function setFreezinginjury($freezinginjury)
    {
        $this->freezinginjury = $freezinginjury;

        return $this;
    }

    /**
     * Get freezinginjury
     *
     * @return float
     */
    public function getFreezinginjury()
    {
        return $this->freezinginjury;
    }

    /**
     * Set pithybrowncore
     *
     * @param float $pithybrowncore
     *
     * @return Condicion
     */
    public function setPithybrowncore($pithybrowncore)
    {
        $this->pithybrowncore = $pithybrowncore;

        return $this;
    }

    /**
     * Get pithybrowncore
     *
     * @return float
     */
    public function getPithybrowncore()
    {
        return $this->pithybrowncore;
    }

    /**
     * Set scald
     *
     * @param float $scald
     *
     * @return Condicion
     */
    public function setScald($scald)
    {
        $this->scald = $scald;

        return $this;
    }

    /**
     * Get scald
     *
     * @return float
     */
    public function getScald()
    {
        return $this->scald;
    }

    /**
     * Set shriveling
     *
     * @param float $shriveling
     *
     * @return Condicion
     */
    public function setShriveling($shriveling)
    {
        $this->shriveling = $shriveling;

        return $this;
    }

    /**
     * Get shriveling
     *
     * @return float
     */
    public function getShriveling()
    {
        return $this->shriveling;
    }

    /**
     * Set bruising
     *
     * @param float $bruising
     *
     * @return Condicion
     */
    public function setBruising($bruising)
    {
        $this->bruising = $bruising;

        return $this;
    }

    /**
     * Get bruising
     *
     * @return float
     */
    public function getBruising()
    {
        return $this->bruising;
    }

    /**
     * Set idpallet
     *
     * @param \BackendBundle\Entity\General $idpallet
     *
     * @return Condicion
     */
    public function setIdpallet(\BackendBundle\Entity\General $idpallet = null)
    {
        $this->idpallet = $idpallet;

        return $this;
    }

    /**
     * Get idpallet
     *
     * @return \BackendBundle\Entity\General
     */
    public function getIdpallet()
    {
        return $this->idpallet;
    }
}

