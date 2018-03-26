<?php

namespace BackendBundle\Entity;

/**
 * General
 */
class General
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $inspectorName;

    /**
     * @var string
     */
    private $numberPallet;

    /**
     * @var \DateTime
     */
    private $dateInspection;

    /**
     * @var string
     */
    private $inspectorPlanName;

    /**
     * @var string
     */
    private $countryOrigin;

    /**
     * @var string
     */
    private $commodityName;

    /**
     * @var string
     */
    private $variety;

    /**
     * @var string
     */
    private $productPackStyle;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $casesType;

    /**
     * @var string
     */
    private $casesPerPallet;

    /**
     * @var string
     */
    private $grower;

    /**
     * @var string
     */
    private $size;

    /**
     * @var \DateTime
     */
    private $packingDate;

    /**
     * @var string
     */
    private $casesNetWeight;

    /**
     * @var string
     */
    private $barCodePlu;

    /**
     * @var string
     */
    private $costumer;

    /**
     * @var string
     */
    private $shipper;

    /**
     * @var string
     */
    private $lot;

    /**
     * @var string
     */
    private $vasset;

    /**
     * @var string
     */
    private $container;

    /**
     * @var string
     */
    private $thier;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $recommendation;

    /**
     * @var string
     */
    private $fumigation;

    /**
     * @var string
     */
    private $fumigationSo2;

    /**
     * @var string
     */
    private $organic;

    /**
     * @var string
     */
    private $palletType;

    /**
     * @var string
     */
    private $clamshellPerCases;

    /**
     * @var string
     */
    private $grade;

    /**
     * @var float
     */
    private $temperature;


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
     * Set inspectorName
     *
     * @param string $inspectorName
     *
     * @return General
     */
    public function setInspectorName($inspectorName)
    {
        $this->inspectorName = $inspectorName;

        return $this;
    }

    /**
     * Get inspectorName
     *
     * @return string
     */
    public function getInspectorName()
    {
        return $this->inspectorName;
    }

    /**
     * Set numberPallet
     *
     * @param string $numberPallet
     *
     * @return General
     */
    public function setNumberPallet($numberPallet)
    {
        $this->numberPallet = $numberPallet;

        return $this;
    }

    /**
     * Get numberPallet
     *
     * @return string
     */
    public function getNumberPallet()
    {
        return $this->numberPallet;
    }

    /**
     * Set dateInspection
     *
     * @param \DateTime $dateInspection
     *
     * @return General
     */
    public function setDateInspection($dateInspection)
    {
        $this->dateInspection = $dateInspection;

        return $this;
    }

    /**
     * Get dateInspection
     *
     * @return \DateTime
     */
    public function getDateInspection()
    {
        return $this->dateInspection;
    }

    /**
     * Set inspectorPlanName
     *
     * @param string $inspectorPlanName
     *
     * @return General
     */
    public function setInspectorPlanName($inspectorPlanName)
    {
        $this->inspectorPlanName = $inspectorPlanName;

        return $this;
    }

    /**
     * Get inspectorPlanName
     *
     * @return string
     */
    public function getInspectorPlanName()
    {
        return $this->inspectorPlanName;
    }

    /**
     * Set countryOrigin
     *
     * @param string $countryOrigin
     *
     * @return General
     */
    public function setCountryOrigin($countryOrigin)
    {
        $this->countryOrigin = $countryOrigin;

        return $this;
    }

    /**
     * Get countryOrigin
     *
     * @return string
     */
    public function getCountryOrigin()
    {
        return $this->countryOrigin;
    }

    /**
     * Set commodityName
     *
     * @param string $commodityName
     *
     * @return General
     */
    public function setCommodityName($commodityName)
    {
        $this->commodityName = $commodityName;

        return $this;
    }

    /**
     * Get commodityName
     *
     * @return string
     */
    public function getCommodityName()
    {
        return $this->commodityName;
    }

    /**
     * Set variety
     *
     * @param string $variety
     *
     * @return General
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
     * Set productPackStyle
     *
     * @param string $productPackStyle
     *
     * @return General
     */
    public function setProductPackStyle($productPackStyle)
    {
        $this->productPackStyle = $productPackStyle;

        return $this;
    }

    /**
     * Get productPackStyle
     *
     * @return string
     */
    public function getProductPackStyle()
    {
        return $this->productPackStyle;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return General
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set casesType
     *
     * @param string $casesType
     *
     * @return General
     */
    public function setCasesType($casesType)
    {
        $this->casesType = $casesType;

        return $this;
    }

    /**
     * Get casesType
     *
     * @return string
     */
    public function getCasesType()
    {
        return $this->casesType;
    }

    /**
     * Set casesPerPallet
     *
     * @param string $casesPerPallet
     *
     * @return General
     */
    public function setCasesPerPallet($casesPerPallet)
    {
        $this->casesPerPallet = $casesPerPallet;

        return $this;
    }

    /**
     * Get casesPerPallet
     *
     * @return string
     */
    public function getCasesPerPallet()
    {
        return $this->casesPerPallet;
    }

    /**
     * Set grower
     *
     * @param string $grower
     *
     * @return General
     */
    public function setGrower($grower)
    {
        $this->grower = $grower;

        return $this;
    }

    /**
     * Get grower
     *
     * @return string
     */
    public function getGrower()
    {
        return $this->grower;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return General
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set packingDate
     *
     * @param \DateTime $packingDate
     *
     * @return General
     */
    public function setPackingDate($packingDate)
    {
        $this->packingDate = $packingDate;

        return $this;
    }

    /**
     * Get packingDate
     *
     * @return \DateTime
     */
    public function getPackingDate()
    {
        return $this->packingDate;
    }

    /**
     * Set casesNetWeight
     *
     * @param string $casesNetWeight
     *
     * @return General
     */
    public function setCasesNetWeight($casesNetWeight)
    {
        $this->casesNetWeight = $casesNetWeight;

        return $this;
    }

    /**
     * Get casesNetWeight
     *
     * @return string
     */
    public function getCasesNetWeight()
    {
        return $this->casesNetWeight;
    }

    /**
     * Set barCodePlu
     *
     * @param string $barCodePlu
     *
     * @return General
     */
    public function setBarCodePlu($barCodePlu)
    {
        $this->barCodePlu = $barCodePlu;

        return $this;
    }

    /**
     * Get barCodePlu
     *
     * @return string
     */
    public function getBarCodePlu()
    {
        return $this->barCodePlu;
    }

    /**
     * Set costumer
     *
     * @param string $costumer
     *
     * @return General
     */
    public function setCostumer($costumer)
    {
        $this->costumer = $costumer;

        return $this;
    }

    /**
     * Get costumer
     *
     * @return string
     */
    public function getCostumer()
    {
        return $this->costumer;
    }

    /**
     * Set shipper
     *
     * @param string $shipper
     *
     * @return General
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;

        return $this;
    }

    /**
     * Get shipper
     *
     * @return string
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Set lot
     *
     * @param string $lot
     *
     * @return General
     */
    public function setLot($lot)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return string
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     * Set vasset
     *
     * @param string $vasset
     *
     * @return General
     */
    public function setVasset($vasset)
    {
        $this->vasset = $vasset;

        return $this;
    }

    /**
     * Get vasset
     *
     * @return string
     */
    public function getVasset()
    {
        return $this->vasset;
    }

    /**
     * Set container
     *
     * @param string $container
     *
     * @return General
     */
    public function setContainer($container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Get container
     *
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set thier
     *
     * @param string $thier
     *
     * @return General
     */
    public function setThier($thier)
    {
        $this->thier = $thier;

        return $this;
    }

    /**
     * Get thier
     *
     * @return string
     */
    public function getThier()
    {
        return $this->thier;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return General
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
     * Set recommendation
     *
     * @param string $recommendation
     *
     * @return General
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    /**
     * Get recommendation
     *
     * @return string
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Set fumigation
     *
     * @param string $fumigation
     *
     * @return General
     */
    public function setFumigation($fumigation)
    {
        $this->fumigation = $fumigation;

        return $this;
    }

    /**
     * Get fumigation
     *
     * @return string
     */
    public function getFumigation()
    {
        return $this->fumigation;
    }

    /**
     * Set fumigationSo2
     *
     * @param string $fumigationSo2
     *
     * @return General
     */
    public function setFumigationSo2($fumigationSo2)
    {
        $this->fumigationSo2 = $fumigationSo2;

        return $this;
    }

    /**
     * Get fumigationSo2
     *
     * @return string
     */
    public function getFumigationSo2()
    {
        return $this->fumigationSo2;
    }

    /**
     * Set organic
     *
     * @param string $organic
     *
     * @return General
     */
    public function setOrganic($organic)
    {
        $this->organic = $organic;

        return $this;
    }

    /**
     * Get organic
     *
     * @return string
     */
    public function getOrganic()
    {
        return $this->organic;
    }

    /**
     * Set palletType
     *
     * @param string $palletType
     *
     * @return General
     */
    public function setPalletType($palletType)
    {
        $this->palletType = $palletType;

        return $this;
    }

    /**
     * Get palletType
     *
     * @return string
     */
    public function getPalletType()
    {
        return $this->palletType;
    }

    /**
     * Set clamshellPerCases
     *
     * @param string $clamshellPerCases
     *
     * @return General
     */
    public function setClamshellPerCases($clamshellPerCases)
    {
        $this->clamshellPerCases = $clamshellPerCases;

        return $this;
    }

    /**
     * Get clamshellPerCases
     *
     * @return string
     */
    public function getClamshellPerCases()
    {
        return $this->clamshellPerCases;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return General
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return General
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
}
