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
    private $inspector;

    /**
     * @var \DateTime
     */
    private $dateinspect;

    /**
     * @var string
     */
    private $inspectplan;

    /**
     * @var string
     */
    private $countryorigin;

    /**
     * @var string
     */
    private $commodityname;

    /**
     * @var string
     */
    private $variety;

    /**
     * @var string
     */
    private $productpackstyle;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $casestype;

    /**
     * @var string
     */
    private $caseperpallet;

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
    private $packingdate;

    /**
     * @var string
     */
    private $casesnetweight;

    /**
     * @var string
     */
    private $barcodeplu;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set inspector
     *
     * @param string $inspector
     *
     * @return General
     */
    public function setInspector($inspector)
    {
        $this->inspector = $inspector;

        return $this;
    }

    /**
     * Get inspector
     *
     * @return string
     */
    public function getInspector()
    {
        return $this->inspector;
    }

    /**
     * Set dateinspect
     *
     * @param \DateTime $dateinspect
     *
     * @return General
     */
    public function setDateinspect($dateinspect)
    {
        $this->dateinspect = $dateinspect;

        return $this;
    }

    /**
     * Get dateinspect
     *
     * @return \DateTime
     */
    public function getDateinspect()
    {
        return $this->dateinspect;
    }

    /**
     * Set inspectplan
     *
     * @param string $inspectplan
     *
     * @return General
     */
    public function setInspectplan($inspectplan)
    {
        $this->inspectplan = $inspectplan;

        return $this;
    }

    /**
     * Get inspectplan
     *
     * @return string
     */
    public function getInspectplan()
    {
        return $this->inspectplan;
    }

    /**
     * Set countryorigin
     *
     * @param string $countryorigin
     *
     * @return General
     */
    public function setCountryorigin($countryorigin)
    {
        $this->countryorigin = $countryorigin;

        return $this;
    }

    /**
     * Get countryorigin
     *
     * @return string
     */
    public function getCountryorigin()
    {
        return $this->countryorigin;
    }

    /**
     * Set commodityname
     *
     * @param string $commodityname
     *
     * @return General
     */
    public function setCommodityname($commodityname)
    {
        $this->commodityname = $commodityname;

        return $this;
    }

    /**
     * Get commodityname
     *
     * @return string
     */
    public function getCommodityname()
    {
        return $this->commodityname;
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
     * Set productpackstyle
     *
     * @param string $productpackstyle
     *
     * @return General
     */
    public function setProductpackstyle($productpackstyle)
    {
        $this->productpackstyle = $productpackstyle;

        return $this;
    }

    /**
     * Get productpackstyle
     *
     * @return string
     */
    public function getProductpackstyle()
    {
        return $this->productpackstyle;
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
     * Set casestype
     *
     * @param string $casestype
     *
     * @return General
     */
    public function setCasestype($casestype)
    {
        $this->casestype = $casestype;

        return $this;
    }

    /**
     * Get casestype
     *
     * @return string
     */
    public function getCasestype()
    {
        return $this->casestype;
    }

    /**
     * Set caseperpallet
     *
     * @param string $caseperpallet
     *
     * @return General
     */
    public function setCaseperpallet($caseperpallet)
    {
        $this->caseperpallet = $caseperpallet;

        return $this;
    }

    /**
     * Get caseperpallet
     *
     * @return string
     */
    public function getCaseperpallet()
    {
        return $this->caseperpallet;
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
     * Set packingdate
     *
     * @param \DateTime $packingdate
     *
     * @return General
     */
    public function setPackingdate($packingdate)
    {
        $this->packingdate = $packingdate;

        return $this;
    }

    /**
     * Get packingdate
     *
     * @return \DateTime
     */
    public function getPackingdate()
    {
        return $this->packingdate;
    }

    /**
     * Set casesnetweight
     *
     * @param string $casesnetweight
     *
     * @return General
     */
    public function setCasesnetweight($casesnetweight)
    {
        $this->casesnetweight = $casesnetweight;

        return $this;
    }

    /**
     * Get casesnetweight
     *
     * @return string
     */
    public function getCasesnetweight()
    {
        return $this->casesnetweight;
    }

    /**
     * Set barcodeplu
     *
     * @param string $barcodeplu
     *
     * @return General
     */
    public function setBarcodeplu($barcodeplu)
    {
        $this->barcodeplu = $barcodeplu;

        return $this;
    }

    /**
     * Get barcodeplu
     *
     * @return string
     */
    public function getBarcodeplu()
    {
        return $this->barcodeplu;
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
}

