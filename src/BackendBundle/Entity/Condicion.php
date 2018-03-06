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
    private $sunBurn;

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
    private $freezingInjury;

    /**
     * @var float
     */
    private $pithyBrownCore;

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
     * @var \DateTime
     */
    private $initInspect;

    /**
     * @var \DateTime
     */
    private $endInspect;

    /**
     * @var \BackendBundle\Entity\General
     */
    private $palletNumber;


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
     * Set sunBurn
     *
     * @param float $sunBurn
     *
     * @return Condicion
     */
    public function setSunBurn($sunBurn)
    {
        $this->sunBurn = $sunBurn;

        return $this;
    }

    /**
     * Get sunBurn
     *
     * @return float
     */
    public function getSunBurn()
    {
        return $this->sunBurn;
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
     * Set freezingInjury
     *
     * @param float $freezingInjury
     *
     * @return Condicion
     */
    public function setFreezingInjury($freezingInjury)
    {
        $this->freezingInjury = $freezingInjury;

        return $this;
    }

    /**
     * Get freezingInjury
     *
     * @return float
     */
    public function getFreezingInjury()
    {
        return $this->freezingInjury;
    }

    /**
     * Set pithyBrownCore
     *
     * @param float $pithyBrownCore
     *
     * @return Condicion
     */
    public function setPithyBrownCore($pithyBrownCore)
    {
        $this->pithyBrownCore = $pithyBrownCore;

        return $this;
    }

    /**
     * Get pithyBrownCore
     *
     * @return float
     */
    public function getPithyBrownCore()
    {
        return $this->pithyBrownCore;
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
     * Set initInspect
     *
     * @param \DateTime $initInspect
     *
     * @return Condicion
     */
    public function setInitInspect($initInspect)
    {
        $this->initInspect = $initInspect;

        return $this;
    }

    /**
     * Get initInspect
     *
     * @return \DateTime
     */
    public function getInitInspect()
    {
        return $this->initInspect;
    }

    /**
     * Set endInspect
     *
     * @param \DateTime $endInspect
     *
     * @return Condicion
     */
    public function setEndInspect($endInspect)
    {
        $this->endInspect = $endInspect;

        return $this;
    }

    /**
     * Get endInspect
     *
     * @return \DateTime
     */
    public function getEndInspect()
    {
        return $this->endInspect;
    }

    /**
     * Set palletNumber
     *
     * @param \BackendBundle\Entity\General $palletNumber
     *
     * @return Condicion
     */
    public function setPalletNumber(\BackendBundle\Entity\General $palletNumber = null)
    {
        $this->palletNumber = $palletNumber;

        return $this;
    }

    /**
     * Get palletNumber
     *
     * @return \BackendBundle\Entity\General
     */
    public function getPalletNumber()
    {
        return $this->palletNumber;
    }
}

