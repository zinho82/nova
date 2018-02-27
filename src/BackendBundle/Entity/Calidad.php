<?php

namespace BackendBundle\Entity;

/**
 * Calidad
 */
class Calidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $size = '0';

    /**
     * @var string
     */
    private $variety = '0';

    /**
     * @var float
     */
    private $casesnetweigth = '0';

    /**
     * @var integer
     */
    private $samplenumber = '0';

    /**
     * @var integer
     */
    private $barcodeplu = '0';

    /**
     * @var string
     */
    private $openappearance;

    /**
     * @var float
     */
    private $blankend = '0';

    /**
     * @var float
     */
    private $blistermiteinjure = '0';

    /**
     * @var float
     */
    private $discoloration = '0';

    /**
     * @var float
     */
    private $blush = '0';

    /**
     * @var float
     */
    private $lightblush = '0';

    /**
     * @var float
     */
    private $scaring = '0';

    /**
     * @var float
     */
    private $hardend = '0';

    /**
     * @var float
     */
    private $insectdamage = '0';

    /**
     * @var float
     */
    private $russet = '0';

    /**
     * @var float
     */
    private $limbrubs = '0';

    /**
     * @var float
     */
    private $overripe = '0';

    /**
     * @var float
     */
    private $mealy = '0';

    /**
     * @var float
     */
    private $scab = '0';

    /**
     * @var float
     */
    private $shape = '0';

    /**
     * @var float
     */
    private $stermpunctureskinbreaks = '0';

    /**
     * @var float
     */
    private $missingcalix = '0';

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
     * @return Calidad
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
     * @return Calidad
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
     * Set casesnetweigth
     *
     * @param float $casesnetweigth
     *
     * @return Calidad
     */
    public function setCasesnetweigth($casesnetweigth)
    {
        $this->casesnetweigth = $casesnetweigth;

        return $this;
    }

    /**
     * Get casesnetweigth
     *
     * @return float
     */
    public function getCasesnetweigth()
    {
        return $this->casesnetweigth;
    }

    /**
     * Set samplenumber
     *
     * @param integer $samplenumber
     *
     * @return Calidad
     */
    public function setSamplenumber($samplenumber)
    {
        $this->samplenumber = $samplenumber;

        return $this;
    }

    /**
     * Get samplenumber
     *
     * @return integer
     */
    public function getSamplenumber()
    {
        return $this->samplenumber;
    }

    /**
     * Set barcodeplu
     *
     * @param integer $barcodeplu
     *
     * @return Calidad
     */
    public function setBarcodeplu($barcodeplu)
    {
        $this->barcodeplu = $barcodeplu;

        return $this;
    }

    /**
     * Get barcodeplu
     *
     * @return integer
     */
    public function getBarcodeplu()
    {
        return $this->barcodeplu;
    }

    /**
     * Set openappearance
     *
     * @param string $openappearance
     *
     * @return Calidad
     */
    public function setOpenappearance($openappearance)
    {
        $this->openappearance = $openappearance;

        return $this;
    }

    /**
     * Get openappearance
     *
     * @return string
     */
    public function getOpenappearance()
    {
        return $this->openappearance;
    }

    /**
     * Set blankend
     *
     * @param float $blankend
     *
     * @return Calidad
     */
    public function setBlankend($blankend)
    {
        $this->blankend = $blankend;

        return $this;
    }

    /**
     * Get blankend
     *
     * @return float
     */
    public function getBlankend()
    {
        return $this->blankend;
    }

    /**
     * Set blistermiteinjure
     *
     * @param float $blistermiteinjure
     *
     * @return Calidad
     */
    public function setBlistermiteinjure($blistermiteinjure)
    {
        $this->blistermiteinjure = $blistermiteinjure;

        return $this;
    }

    /**
     * Get blistermiteinjure
     *
     * @return float
     */
    public function getBlistermiteinjure()
    {
        return $this->blistermiteinjure;
    }

    /**
     * Set discoloration
     *
     * @param float $discoloration
     *
     * @return Calidad
     */
    public function setDiscoloration($discoloration)
    {
        $this->discoloration = $discoloration;

        return $this;
    }

    /**
     * Get discoloration
     *
     * @return float
     */
    public function getDiscoloration()
    {
        return $this->discoloration;
    }

    /**
     * Set blush
     *
     * @param float $blush
     *
     * @return Calidad
     */
    public function setBlush($blush)
    {
        $this->blush = $blush;

        return $this;
    }

    /**
     * Get blush
     *
     * @return float
     */
    public function getBlush()
    {
        return $this->blush;
    }

    /**
     * Set lightblush
     *
     * @param float $lightblush
     *
     * @return Calidad
     */
    public function setLightblush($lightblush)
    {
        $this->lightblush = $lightblush;

        return $this;
    }

    /**
     * Get lightblush
     *
     * @return float
     */
    public function getLightblush()
    {
        return $this->lightblush;
    }

    /**
     * Set scaring
     *
     * @param float $scaring
     *
     * @return Calidad
     */
    public function setScaring($scaring)
    {
        $this->scaring = $scaring;

        return $this;
    }

    /**
     * Get scaring
     *
     * @return float
     */
    public function getScaring()
    {
        return $this->scaring;
    }

    /**
     * Set hardend
     *
     * @param float $hardend
     *
     * @return Calidad
     */
    public function setHardend($hardend)
    {
        $this->hardend = $hardend;

        return $this;
    }

    /**
     * Get hardend
     *
     * @return float
     */
    public function getHardend()
    {
        return $this->hardend;
    }

    /**
     * Set insectdamage
     *
     * @param float $insectdamage
     *
     * @return Calidad
     */
    public function setInsectdamage($insectdamage)
    {
        $this->insectdamage = $insectdamage;

        return $this;
    }

    /**
     * Get insectdamage
     *
     * @return float
     */
    public function getInsectdamage()
    {
        return $this->insectdamage;
    }

    /**
     * Set russet
     *
     * @param float $russet
     *
     * @return Calidad
     */
    public function setRusset($russet)
    {
        $this->russet = $russet;

        return $this;
    }

    /**
     * Get russet
     *
     * @return float
     */
    public function getRusset()
    {
        return $this->russet;
    }

    /**
     * Set limbrubs
     *
     * @param float $limbrubs
     *
     * @return Calidad
     */
    public function setLimbrubs($limbrubs)
    {
        $this->limbrubs = $limbrubs;

        return $this;
    }

    /**
     * Get limbrubs
     *
     * @return float
     */
    public function getLimbrubs()
    {
        return $this->limbrubs;
    }

    /**
     * Set overripe
     *
     * @param float $overripe
     *
     * @return Calidad
     */
    public function setOverripe($overripe)
    {
        $this->overripe = $overripe;

        return $this;
    }

    /**
     * Get overripe
     *
     * @return float
     */
    public function getOverripe()
    {
        return $this->overripe;
    }

    /**
     * Set mealy
     *
     * @param float $mealy
     *
     * @return Calidad
     */
    public function setMealy($mealy)
    {
        $this->mealy = $mealy;

        return $this;
    }

    /**
     * Get mealy
     *
     * @return float
     */
    public function getMealy()
    {
        return $this->mealy;
    }

    /**
     * Set scab
     *
     * @param float $scab
     *
     * @return Calidad
     */
    public function setScab($scab)
    {
        $this->scab = $scab;

        return $this;
    }

    /**
     * Get scab
     *
     * @return float
     */
    public function getScab()
    {
        return $this->scab;
    }

    /**
     * Set shape
     *
     * @param float $shape
     *
     * @return Calidad
     */
    public function setShape($shape)
    {
        $this->shape = $shape;

        return $this;
    }

    /**
     * Get shape
     *
     * @return float
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Set stermpunctureskinbreaks
     *
     * @param float $stermpunctureskinbreaks
     *
     * @return Calidad
     */
    public function setStermpunctureskinbreaks($stermpunctureskinbreaks)
    {
        $this->stermpunctureskinbreaks = $stermpunctureskinbreaks;

        return $this;
    }

    /**
     * Get stermpunctureskinbreaks
     *
     * @return float
     */
    public function getStermpunctureskinbreaks()
    {
        return $this->stermpunctureskinbreaks;
    }

    /**
     * Set missingcalix
     *
     * @param float $missingcalix
     *
     * @return Calidad
     */
    public function setMissingcalix($missingcalix)
    {
        $this->missingcalix = $missingcalix;

        return $this;
    }

    /**
     * Get missingcalix
     *
     * @return float
     */
    public function getMissingcalix()
    {
        return $this->missingcalix;
    }

    /**
     * Set idpallet
     *
     * @param \BackendBundle\Entity\General $idpallet
     *
     * @return Calidad
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

