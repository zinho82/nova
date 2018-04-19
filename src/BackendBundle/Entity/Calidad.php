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
    private $stonyPit = '0';

    /**
     * @var float
     */
    private $missingCalix = '0';

    /**
     * @var \DateTime
     */
    private $initInspect;

    /**
     * @var \DateTime
     */
    private $endInspect;

    /**
     * @var float
     */
    private $brix;

    /**
     * @var float
     */
    private $greenStem;

    /**
     * @var float
     */
    private $brownStem;

    /**
     * @var float
     */
    private $dryStem;

    /**
     * @var float
     */
    private $sunkenStemEnd;

    /**
     * @var float
     */
    private $translucent;

    /**
     * @var float
     */
    private $grapeColor;

    /**
     * @var float
     */
    private $amber;

    /**
     * @var float
     */
    private $split;

    /**
     * @var float
     */
    private $waterBerry;

    /**
     * @var float
     */
    private $shotBerry;

    /**
     * @var float
     */
    private $shalter;

    /**
     * @var float
     */
    private $softBerries;

    /**
     * @var float
     */
    private $so2Damage;

    /**
     * @var float
     */
    private $dehydratedBerries;

    /**
     * @var float
     */
    private $bruising;

    /**
     * @var float
     */
    private $stemPuncture;

    /**
     * @var float
     */
    private $crush;

    /**
     * @var float
     */
    private $shiriveling;

    /**
     * @var float
     */
    private $slipSkin;

    /**
     * @var float
     */
    private $lackOfDegreening;

    /**
     * @var float
     */
    private $colorPale;

    /**
     * @var float
     */
    private $fruitWithSeeds;

    /**
     * @var float
     */
    private $calixBrownBlack;

    /**
     * @var float
     */
    private $skinDefectSevere;

    /**
     * @var float
     */
    private $skinDefectModerate;

    /**
     * @var float
     */
    private $misshapenFruit;

    /**
     * @var float
     */
    private $wellFormed;

    /**
     * @var float
     */
    private $undersize;

    /**
     * @var float
     */
    private $brokenSkin;

    /**
     * @var float
     */
    private $wormDamage;

    /**
     * @var float
     */
    private $hailDamage;

    /**
     * @var float
     */
    private $mechanicalDamage;

    /**
     * @var float
     */
    private $stemEndDamage;

    /**
     * @var float
     */
    private $misshapen;

    /**
     * @var float
     */
    private $sprayBurn;

    /**
     * @var float
     */
    private $spots;

    /**
     * @var float
     */
    private $scald;

    /**
     * @var float
     */
    private $splitPit;

    /**
     * @var string
     */
    private $qualityScore;

    /**
     * @var float
     */
    private $bloom;

    /**
     * @var float
     */
    private $lackOfColor;

    /**
     * @var float
     */
    private $insectPresence;

    /**
     * @var float
     */
    private $flowerRemains;

    /**
     * @var float
     */
    private $contamination;

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
     * Set stonyPit
     *
     * @param float $stonyPit
     *
     * @return Calidad
     */
    public function setStonyPit($stonyPit)
    {
        $this->stonyPit = $stonyPit;

        return $this;
    }

    /**
     * Get stonyPit
     *
     * @return float
     */
    public function getStonyPit()
    {
        return $this->stonyPit;
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
     * Set initInspect
     *
     * @param \DateTime $initInspect
     *
     * @return Calidad
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
     * @return Calidad
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
     * Set brix
     *
     * @param float $brix
     *
     * @return Calidad
     */
    public function setBrix($brix)
    {
        $this->brix = $brix;

        return $this;
    }

    /**
     * Get brix
     *
     * @return float
     */
    public function getBrix()
    {
        return $this->brix;
    }

    /**
     * Set greenStem
     *
     * @param float $greenStem
     *
     * @return Calidad
     */
    public function setGreenStem($greenStem)
    {
        $this->greenStem = $greenStem;

        return $this;
    }

    /**
     * Get greenStem
     *
     * @return float
     */
    public function getGreenStem()
    {
        return $this->greenStem;
    }

    /**
     * Set brownStem
     *
     * @param float $brownStem
     *
     * @return Calidad
     */
    public function setBrownStem($brownStem)
    {
        $this->brownStem = $brownStem;

        return $this;
    }

    /**
     * Get brownStem
     *
     * @return float
     */
    public function getBrownStem()
    {
        return $this->brownStem;
    }

    /**
     * Set dryStem
     *
     * @param float $dryStem
     *
     * @return Calidad
     */
    public function setDryStem($dryStem)
    {
        $this->dryStem = $dryStem;

        return $this;
    }

    /**
     * Get dryStem
     *
     * @return float
     */
    public function getDryStem()
    {
        return $this->dryStem;
    }

    /**
     * Set sunkenStemEnd
     *
     * @param float $sunkenStemEnd
     *
     * @return Calidad
     */
    public function setSunkenStemEnd($sunkenStemEnd)
    {
        $this->sunkenStemEnd = $sunkenStemEnd;

        return $this;
    }

    /**
     * Get sunkenStemEnd
     *
     * @return float
     */
    public function getSunkenStemEnd()
    {
        return $this->sunkenStemEnd;
    }

    /**
     * Set translucent
     *
     * @param float $translucent
     *
     * @return Calidad
     */
    public function setTranslucent($translucent)
    {
        $this->translucent = $translucent;

        return $this;
    }

    /**
     * Get translucent
     *
     * @return float
     */
    public function getTranslucent()
    {
        return $this->translucent;
    }

    /**
     * Set grapeColor
     *
     * @param float $grapeColor
     *
     * @return Calidad
     */
    public function setGrapeColor($grapeColor)
    {
        $this->grapeColor = $grapeColor;

        return $this;
    }

    /**
     * Get grapeColor
     *
     * @return float
     */
    public function getGrapeColor()
    {
        return $this->grapeColor;
    }

    /**
     * Set amber
     *
     * @param float $amber
     *
     * @return Calidad
     */
    public function setAmber($amber)
    {
        $this->amber = $amber;

        return $this;
    }

    /**
     * Get amber
     *
     * @return float
     */
    public function getAmber()
    {
        return $this->amber;
    }

    /**
     * Set split
     *
     * @param float $split
     *
     * @return Calidad
     */
    public function setSplit($split)
    {
        $this->split = $split;

        return $this;
    }

    /**
     * Get split
     *
     * @return float
     */
    public function getSplit()
    {
        return $this->split;
    }

    /**
     * Set waterBerry
     *
     * @param float $waterBerry
     *
     * @return Calidad
     */
    public function setWaterBerry($waterBerry)
    {
        $this->waterBerry = $waterBerry;

        return $this;
    }

    /**
     * Get waterBerry
     *
     * @return float
     */
    public function getWaterBerry()
    {
        return $this->waterBerry;
    }

    /**
     * Set shotBerry
     *
     * @param float $shotBerry
     *
     * @return Calidad
     */
    public function setShotBerry($shotBerry)
    {
        $this->shotBerry = $shotBerry;

        return $this;
    }

    /**
     * Get shotBerry
     *
     * @return float
     */
    public function getShotBerry()
    {
        return $this->shotBerry;
    }

    /**
     * Set shalter
     *
     * @param float $shalter
     *
     * @return Calidad
     */
    public function setShalter($shalter)
    {
        $this->shalter = $shalter;

        return $this;
    }

    /**
     * Get shalter
     *
     * @return float
     */
    public function getShalter()
    {
        return $this->shalter;
    }

    /**
     * Set softBerries
     *
     * @param float $softBerries
     *
     * @return Calidad
     */
    public function setSoftBerries($softBerries)
    {
        $this->softBerries = $softBerries;

        return $this;
    }

    /**
     * Get softBerries
     *
     * @return float
     */
    public function getSoftBerries()
    {
        return $this->softBerries;
    }

    /**
     * Set so2Damage
     *
     * @param float $so2Damage
     *
     * @return Calidad
     */
    public function setSo2Damage($so2Damage)
    {
        $this->so2Damage = $so2Damage;

        return $this;
    }

    /**
     * Get so2Damage
     *
     * @return float
     */
    public function getSo2Damage()
    {
        return $this->so2Damage;
    }

    /**
     * Set dehydratedBerries
     *
     * @param float $dehydratedBerries
     *
     * @return Calidad
     */
    public function setDehydratedBerries($dehydratedBerries)
    {
        $this->dehydratedBerries = $dehydratedBerries;

        return $this;
    }

    /**
     * Get dehydratedBerries
     *
     * @return float
     */
    public function getDehydratedBerries()
    {
        return $this->dehydratedBerries;
    }

    /**
     * Set bruising
     *
     * @param float $bruising
     *
     * @return Calidad
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
     * Set stemPuncture
     *
     * @param float $stemPuncture
     *
     * @return Calidad
     */
    public function setStemPuncture($stemPuncture)
    {
        $this->stemPuncture = $stemPuncture;

        return $this;
    }

    /**
     * Get stemPuncture
     *
     * @return float
     */
    public function getStemPuncture()
    {
        return $this->stemPuncture;
    }

    /**
     * Set crush
     *
     * @param float $crush
     *
     * @return Calidad
     */
    public function setCrush($crush)
    {
        $this->crush = $crush;

        return $this;
    }

    /**
     * Get crush
     *
     * @return float
     */
    public function getCrush()
    {
        return $this->crush;
    }

    /**
     * Set shiriveling
     *
     * @param float $shiriveling
     *
     * @return Calidad
     */
    public function setShiriveling($shiriveling)
    {
        $this->shiriveling = $shiriveling;

        return $this;
    }

    /**
     * Get shiriveling
     *
     * @return float
     */
    public function getShiriveling()
    {
        return $this->shiriveling;
    }

    /**
     * Set slipSkin
     *
     * @param float $slipSkin
     *
     * @return Calidad
     */
    public function setSlipSkin($slipSkin)
    {
        $this->slipSkin = $slipSkin;

        return $this;
    }

    /**
     * Get slipSkin
     *
     * @return float
     */
    public function getSlipSkin()
    {
        return $this->slipSkin;
    }

    /**
     * Set lackOfDegreening
     *
     * @param float $lackOfDegreening
     *
     * @return Calidad
     */
    public function setLackOfDegreening($lackOfDegreening)
    {
        $this->lackOfDegreening = $lackOfDegreening;

        return $this;
    }

    /**
     * Get lackOfDegreening
     *
     * @return float
     */
    public function getLackOfDegreening()
    {
        return $this->lackOfDegreening;
    }

    /**
     * Set colorPale
     *
     * @param float $colorPale
     *
     * @return Calidad
     */
    public function setColorPale($colorPale)
    {
        $this->colorPale = $colorPale;

        return $this;
    }

    /**
     * Get colorPale
     *
     * @return float
     */
    public function getColorPale()
    {
        return $this->colorPale;
    }

    /**
     * Set fruitWithSeeds
     *
     * @param float $fruitWithSeeds
     *
     * @return Calidad
     */
    public function setFruitWithSeeds($fruitWithSeeds)
    {
        $this->fruitWithSeeds = $fruitWithSeeds;

        return $this;
    }

    /**
     * Get fruitWithSeeds
     *
     * @return float
     */
    public function getFruitWithSeeds()
    {
        return $this->fruitWithSeeds;
    }

    /**
     * Set calixBrownBlack
     *
     * @param float $calixBrownBlack
     *
     * @return Calidad
     */
    public function setCalixBrownBlack($calixBrownBlack)
    {
        $this->calixBrownBlack = $calixBrownBlack;

        return $this;
    }

    /**
     * Get calixBrownBlack
     *
     * @return float
     */
    public function getCalixBrownBlack()
    {
        return $this->calixBrownBlack;
    }

    /**
     * Set skinDefectSevere
     *
     * @param float $skinDefectSevere
     *
     * @return Calidad
     */
    public function setSkinDefectSevere($skinDefectSevere)
    {
        $this->skinDefectSevere = $skinDefectSevere;

        return $this;
    }

    /**
     * Get skinDefectSevere
     *
     * @return float
     */
    public function getSkinDefectSevere()
    {
        return $this->skinDefectSevere;
    }

    /**
     * Set skinDefectModerate
     *
     * @param float $skinDefectModerate
     *
     * @return Calidad
     */
    public function setSkinDefectModerate($skinDefectModerate)
    {
        $this->skinDefectModerate = $skinDefectModerate;

        return $this;
    }

    /**
     * Get skinDefectModerate
     *
     * @return float
     */
    public function getSkinDefectModerate()
    {
        return $this->skinDefectModerate;
    }

    /**
     * Set misshapenFruit
     *
     * @param float $misshapenFruit
     *
     * @return Calidad
     */
    public function setMisshapenFruit($misshapenFruit)
    {
        $this->misshapenFruit = $misshapenFruit;

        return $this;
    }

    /**
     * Get misshapenFruit
     *
     * @return float
     */
    public function getMisshapenFruit()
    {
        return $this->misshapenFruit;
    }

    /**
     * Set wellFormed
     *
     * @param float $wellFormed
     *
     * @return Calidad
     */
    public function setWellFormed($wellFormed)
    {
        $this->wellFormed = $wellFormed;

        return $this;
    }

    /**
     * Get wellFormed
     *
     * @return float
     */
    public function getWellFormed()
    {
        return $this->wellFormed;
    }

    /**
     * Set undersize
     *
     * @param float $undersize
     *
     * @return Calidad
     */
    public function setUndersize($undersize)
    {
        $this->undersize = $undersize;

        return $this;
    }

    /**
     * Get undersize
     *
     * @return float
     */
    public function getUndersize()
    {
        return $this->undersize;
    }

    /**
     * Set brokenSkin
     *
     * @param float $brokenSkin
     *
     * @return Calidad
     */
    public function setBrokenSkin($brokenSkin)
    {
        $this->brokenSkin = $brokenSkin;

        return $this;
    }

    /**
     * Get brokenSkin
     *
     * @return float
     */
    public function getBrokenSkin()
    {
        return $this->brokenSkin;
    }

    /**
     * Set wormDamage
     *
     * @param float $wormDamage
     *
     * @return Calidad
     */
    public function setWormDamage($wormDamage)
    {
        $this->wormDamage = $wormDamage;

        return $this;
    }

    /**
     * Get wormDamage
     *
     * @return float
     */
    public function getWormDamage()
    {
        return $this->wormDamage;
    }

    /**
     * Set hailDamage
     *
     * @param float $hailDamage
     *
     * @return Calidad
     */
    public function setHailDamage($hailDamage)
    {
        $this->hailDamage = $hailDamage;

        return $this;
    }

    /**
     * Get hailDamage
     *
     * @return float
     */
    public function getHailDamage()
    {
        return $this->hailDamage;
    }

    /**
     * Set mechanicalDamage
     *
     * @param float $mechanicalDamage
     *
     * @return Calidad
     */
    public function setMechanicalDamage($mechanicalDamage)
    {
        $this->mechanicalDamage = $mechanicalDamage;

        return $this;
    }

    /**
     * Get mechanicalDamage
     *
     * @return float
     */
    public function getMechanicalDamage()
    {
        return $this->mechanicalDamage;
    }

    /**
     * Set stemEndDamage
     *
     * @param float $stemEndDamage
     *
     * @return Calidad
     */
    public function setStemEndDamage($stemEndDamage)
    {
        $this->stemEndDamage = $stemEndDamage;

        return $this;
    }

    /**
     * Get stemEndDamage
     *
     * @return float
     */
    public function getStemEndDamage()
    {
        return $this->stemEndDamage;
    }

    /**
     * Set misshapen
     *
     * @param float $misshapen
     *
     * @return Calidad
     */
    public function setMisshapen($misshapen)
    {
        $this->misshapen = $misshapen;

        return $this;
    }

    /**
     * Get misshapen
     *
     * @return float
     */
    public function getMisshapen()
    {
        return $this->misshapen;
    }

    /**
     * Set sprayBurn
     *
     * @param float $sprayBurn
     *
     * @return Calidad
     */
    public function setSprayBurn($sprayBurn)
    {
        $this->sprayBurn = $sprayBurn;

        return $this;
    }

    /**
     * Get sprayBurn
     *
     * @return float
     */
    public function getSprayBurn()
    {
        return $this->sprayBurn;
    }

    /**
     * Set spots
     *
     * @param float $spots
     *
     * @return Calidad
     */
    public function setSpots($spots)
    {
        $this->spots = $spots;

        return $this;
    }

    /**
     * Get spots
     *
     * @return float
     */
    public function getSpots()
    {
        return $this->spots;
    }

    /**
     * Set scald
     *
     * @param float $scald
     *
     * @return Calidad
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
     * Set splitPit
     *
     * @param float $splitPit
     *
     * @return Calidad
     */
    public function setSplitPit($splitPit)
    {
        $this->splitPit = $splitPit;

        return $this;
    }

    /**
     * Get splitPit
     *
     * @return float
     */
    public function getSplitPit()
    {
        return $this->splitPit;
    }

    /**
     * Set qualityScore
     *
     * @param string $qualityScore
     *
     * @return Calidad
     */
    public function setQualityScore($qualityScore)
    {
        $this->qualityScore = $qualityScore;

        return $this;
    }

    /**
     * Get qualityScore
     *
     * @return string
     */
    public function getQualityScore()
    {
        return $this->qualityScore;
    }

    /**
     * Set bloom
     *
     * @param float $bloom
     *
     * @return Calidad
     */
    public function setBloom($bloom)
    {
        $this->bloom = $bloom;

        return $this;
    }

    /**
     * Get bloom
     *
     * @return float
     */
    public function getBloom()
    {
        return $this->bloom;
    }

    /**
     * Set lackOfColor
     *
     * @param float $lackOfColor
     *
     * @return Calidad
     */
    public function setLackOfColor($lackOfColor)
    {
        $this->lackOfColor = $lackOfColor;

        return $this;
    }

    /**
     * Get lackOfColor
     *
     * @return float
     */
    public function getLackOfColor()
    {
        return $this->lackOfColor;
    }

    /**
     * Set insectPresence
     *
     * @param float $insectPresence
     *
     * @return Calidad
     */
    public function setInsectPresence($insectPresence)
    {
        $this->insectPresence = $insectPresence;

        return $this;
    }

    /**
     * Get insectPresence
     *
     * @return float
     */
    public function getInsectPresence()
    {
        return $this->insectPresence;
    }

    /**
     * Set flowerRemains
     *
     * @param float $flowerRemains
     *
     * @return Calidad
     */
    public function setFlowerRemains($flowerRemains)
    {
        $this->flowerRemains = $flowerRemains;

        return $this;
    }

    /**
     * Get flowerRemains
     *
     * @return float
     */
    public function getFlowerRemains()
    {
        return $this->flowerRemains;
    }

    /**
     * Set contamination
     *
     * @param float $contamination
     *
     * @return Calidad
     */
    public function setContamination($contamination)
    {
        $this->contamination = $contamination;

        return $this;
    }

    /**
     * Get contamination
     *
     * @return float
     */
    public function getContamination()
    {
        return $this->contamination;
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
    /**
     * @var \DateTime
     */
    private $inspectdate;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var \BackendBundle\Entity\Lotes
     */
    private $lotes;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $ejecutivo;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Calidad
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set inspectdate
     *
     * @param \DateTime $inspectdate
     *
     * @return Calidad
     */
    public function setInspectdate($inspectdate)
    {
        $this->inspectdate = $inspectdate;

        return $this;
    }

    /**
     * Get inspectdate
     *
     * @return \DateTime
     */
    public function getInspectdate()
    {
        return $this->inspectdate;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Calidad
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set lotes
     *
     * @param \BackendBundle\Entity\Lotes $lotes
     *
     * @return Calidad
     */
    public function setLotes(\BackendBundle\Entity\Lotes $lotes = null)
    {
        $this->lotes = $lotes;

        return $this;
    }

    /**
     * Get lotes
     *
     * @return \BackendBundle\Entity\Lotes
     */
    public function getLotes()
    {
        return $this->lotes;
    }

    /**
     * Set ejecutivo
     *
     * @param \BackendBundle\Entity\Usuario $ejecutivo
     *
     * @return Calidad
     */
    public function setEjecutivo(\BackendBundle\Entity\Usuario $ejecutivo = null)
    {
        $this->ejecutivo = $ejecutivo;

        return $this;
    }

    /**
     * Get ejecutivo
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getEjecutivo()
    {
        return $this->ejecutivo;
    }
}
