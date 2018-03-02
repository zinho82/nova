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
    private $casesNetWeigth = '0';

    /**
     * @var integer
     */
    private $sampleNumber = '0';

    /**
     * @var integer
     */
    private $barCodePlu = '0';

    /**
     * @var string
     */
    private $openAppearance;

    /**
     * @var float
     */
    private $blankEnd = '0';

    /**
     * @var float
     */
    private $blisterMiteInjure = '0';

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
    private $lightBlush = '0';

    /**
     * @var float
     */
    private $scaring = '0';

    /**
     * @var float
     */
    private $hardEnd = '0';

    /**
     * @var float
     */
    private $insectDamage = '0';

    /**
     * @var float
     */
    private $russet = '0';

    /**
     * @var float
     */
    private $limbRubs = '0';

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
    private $stermPunctureSkinBreaks = '0';

    /**
     * @var float
     */
    private $missingCalix = '0';

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
     * Set casesNetWeigth
     *
     * @param float $casesNetWeigth
     *
     * @return Calidad
     */
    public function setCasesNetWeigth($casesNetWeigth)
    {
        $this->casesNetWeigth = $casesNetWeigth;

        return $this;
    }

    /**
     * Get casesNetWeigth
     *
     * @return float
     */
    public function getCasesNetWeigth()
    {
        return $this->casesNetWeigth;
    }

    /**
     * Set sampleNumber
     *
     * @param integer $sampleNumber
     *
     * @return Calidad
     */
    public function setSampleNumber($sampleNumber)
    {
        $this->sampleNumber = $sampleNumber;

        return $this;
    }

    /**
     * Get sampleNumber
     *
     * @return integer
     */
    public function getSampleNumber()
    {
        return $this->sampleNumber;
    }

    /**
     * Set barCodePlu
     *
     * @param integer $barCodePlu
     *
     * @return Calidad
     */
    public function setBarCodePlu($barCodePlu)
    {
        $this->barCodePlu = $barCodePlu;

        return $this;
    }

    /**
     * Get barCodePlu
     *
     * @return integer
     */
    public function getBarCodePlu()
    {
        return $this->barCodePlu;
    }

    /**
     * Set openAppearance
     *
     * @param string $openAppearance
     *
     * @return Calidad
     */
    public function setOpenAppearance($openAppearance)
    {
        $this->openAppearance = $openAppearance;

        return $this;
    }

    /**
     * Get openAppearance
     *
     * @return string
     */
    public function getOpenAppearance()
    {
        return $this->openAppearance;
    }

    /**
     * Set blankEnd
     *
     * @param float $blankEnd
     *
     * @return Calidad
     */
    public function setBlankEnd($blankEnd)
    {
        $this->blankEnd = $blankEnd;

        return $this;
    }

    /**
     * Get blankEnd
     *
     * @return float
     */
    public function getBlankEnd()
    {
        return $this->blankEnd;
    }

    /**
     * Set blisterMiteInjure
     *
     * @param float $blisterMiteInjure
     *
     * @return Calidad
     */
    public function setBlisterMiteInjure($blisterMiteInjure)
    {
        $this->blisterMiteInjure = $blisterMiteInjure;

        return $this;
    }

    /**
     * Get blisterMiteInjure
     *
     * @return float
     */
    public function getBlisterMiteInjure()
    {
        return $this->blisterMiteInjure;
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
     * Set lightBlush
     *
     * @param float $lightBlush
     *
     * @return Calidad
     */
    public function setLightBlush($lightBlush)
    {
        $this->lightBlush = $lightBlush;

        return $this;
    }

    /**
     * Get lightBlush
     *
     * @return float
     */
    public function getLightBlush()
    {
        return $this->lightBlush;
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
     * Set hardEnd
     *
     * @param float $hardEnd
     *
     * @return Calidad
     */
    public function setHardEnd($hardEnd)
    {
        $this->hardEnd = $hardEnd;

        return $this;
    }

    /**
     * Get hardEnd
     *
     * @return float
     */
    public function getHardEnd()
    {
        return $this->hardEnd;
    }

    /**
     * Set insectDamage
     *
     * @param float $insectDamage
     *
     * @return Calidad
     */
    public function setInsectDamage($insectDamage)
    {
        $this->insectDamage = $insectDamage;

        return $this;
    }

    /**
     * Get insectDamage
     *
     * @return float
     */
    public function getInsectDamage()
    {
        return $this->insectDamage;
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
     * Set limbRubs
     *
     * @param float $limbRubs
     *
     * @return Calidad
     */
    public function setLimbRubs($limbRubs)
    {
        $this->limbRubs = $limbRubs;

        return $this;
    }

    /**
     * Get limbRubs
     *
     * @return float
     */
    public function getLimbRubs()
    {
        return $this->limbRubs;
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
     * Set stermPunctureSkinBreaks
     *
     * @param float $stermPunctureSkinBreaks
     *
     * @return Calidad
     */
    public function setStermPunctureSkinBreaks($stermPunctureSkinBreaks)
    {
        $this->stermPunctureSkinBreaks = $stermPunctureSkinBreaks;

        return $this;
    }

    /**
     * Get stermPunctureSkinBreaks
     *
     * @return float
     */
    public function getStermPunctureSkinBreaks()
    {
        return $this->stermPunctureSkinBreaks;
    }

    /**
     * Set missingCalix
     *
     * @param float $missingCalix
     *
     * @return Calidad
     */
    public function setMissingCalix($missingCalix)
    {
        $this->missingCalix = $missingCalix;

        return $this;
    }

    /**
     * Get missingCalix
     *
     * @return float
     */
    public function getMissingCalix()
    {
        return $this->missingCalix;
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
