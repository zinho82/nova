<?php

namespace BackendBundle\Entity;

/**
 * Lotes
 */
class Lotes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $container;

    /**
     * @var string
     */
    private $numberPallets;

    /**
     * @var string
     */
    private $templateNumber;

    /**
     * @var string
     */
    private $packingDate;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $comoditty;

    /**
     * @var string
     */
    private $variety;

    /**
     * @var string
     */
    private $pack;

    /**
     * @var string
     */
    private $plu;

    /**
     * @var string
     */
    private $quality;

    /**
     * @var string
     */
    private $score;

    /**
     * @var integer
     */
    private $numBoxes;

    /**
     * @var string
     */
    private $growerCode;

    /**
     * @var string
     */
    private $growersName;

    /**
     * @var string
     */
    private $exportador;

    /**
     * @var string
     */
    private $consignne;

    /**
     * @var string
     */
    private $vessel;

    /**
     * @var string
     */
    private $pol;

    /**
     * @var string
     */
    private $etd;

    /**
     * @var string
     */
    private $pod;

    /**
     * @var string
     */
    private $eta;

    /**
     * @var \DateTime
     */
    private $fechaCarga;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $ejecutivo;


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
     * Set container
     *
     * @param string $container
     *
     * @return Lotes
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
     * Set numberPallets
     *
     * @param string $numberPallets
     *
     * @return Lotes
     */
    public function setNumberPallets($numberPallets)
    {
        $this->numberPallets = $numberPallets;

        return $this;
    }

    /**
     * Get numberPallets
     *
     * @return string
     */
    public function getNumberPallets()
    {
        return $this->numberPallets;
    }

    /**
     * Set templateNumber
     *
     * @param string $templateNumber
     *
     * @return Lotes
     */
    public function setTemplateNumber($templateNumber)
    {
        $this->templateNumber = $templateNumber;

        return $this;
    }

    /**
     * Get templateNumber
     *
     * @return string
     */
    public function getTemplateNumber()
    {
        return $this->templateNumber;
    }

    /**
     * Set packingDate
     *
     * @param string $packingDate
     *
     * @return Lotes
     */
    public function setPackingDate($packingDate)
    {
        $this->packingDate = $packingDate;

        return $this;
    }

    /**
     * Get packingDate
     *
     * @return string
     */
    public function getPackingDate()
    {
        return $this->packingDate;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Lotes
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
     * Set comoditty
     *
     * @param string $comoditty
     *
     * @return Lotes
     */
    public function setComoditty($comoditty)
    {
        $this->comoditty = $comoditty;

        return $this;
    }

    /**
     * Get comoditty
     *
     * @return string
     */
    public function getComoditty()
    {
        return $this->comoditty;
    }

    /**
     * Set variety
     *
     * @param string $variety
     *
     * @return Lotes
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
     * Set pack
     *
     * @param string $pack
     *
     * @return Lotes
     */
    public function setPack($pack)
    {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return string
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * Set plu
     *
     * @param string $plu
     *
     * @return Lotes
     */
    public function setPlu($plu)
    {
        $this->plu = $plu;

        return $this;
    }

    /**
     * Get plu
     *
     * @return string
     */
    public function getPlu()
    {
        return $this->plu;
    }

    /**
     * Set quality
     *
     * @param string $quality
     *
     * @return Lotes
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return Lotes
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set numBoxes
     *
     * @param integer $numBoxes
     *
     * @return Lotes
     */
    public function setNumBoxes($numBoxes)
    {
        $this->numBoxes = $numBoxes;

        return $this;
    }

    /**
     * Get numBoxes
     *
     * @return integer
     */
    public function getNumBoxes()
    {
        return $this->numBoxes;
    }

    /**
     * Set growerCode
     *
     * @param string $growerCode
     *
     * @return Lotes
     */
    public function setGrowerCode($growerCode)
    {
        $this->growerCode = $growerCode;

        return $this;
    }

    /**
     * Get growerCode
     *
     * @return string
     */
    public function getGrowerCode()
    {
        return $this->growerCode;
    }

    /**
     * Set growersName
     *
     * @param string $growersName
     *
     * @return Lotes
     */
    public function setGrowersName($growersName)
    {
        $this->growersName = $growersName;

        return $this;
    }

    /**
     * Get growersName
     *
     * @return string
     */
    public function getGrowersName()
    {
        return $this->growersName;
    }

    /**
     * Set exportador
     *
     * @param string $exportador
     *
     * @return Lotes
     */
    public function setExportador($exportador)
    {
        $this->exportador = $exportador;

        return $this;
    }

    /**
     * Get exportador
     *
     * @return string
     */
    public function getExportador()
    {
        return $this->exportador;
    }

    /**
     * Set consignne
     *
     * @param string $consignne
     *
     * @return Lotes
     */
    public function setConsignne($consignne)
    {
        $this->consignne = $consignne;

        return $this;
    }

    /**
     * Get consignne
     *
     * @return string
     */
    public function getConsignne()
    {
        return $this->consignne;
    }

    /**
     * Set vessel
     *
     * @param string $vessel
     *
     * @return Lotes
     */
    public function setVessel($vessel)
    {
        $this->vessel = $vessel;

        return $this;
    }

    /**
     * Get vessel
     *
     * @return string
     */
    public function getVessel()
    {
        return $this->vessel;
    }

    /**
     * Set pol
     *
     * @param string $pol
     *
     * @return Lotes
     */
    public function setPol($pol)
    {
        $this->pol = $pol;

        return $this;
    }

    /**
     * Get pol
     *
     * @return string
     */
    public function getPol()
    {
        return $this->pol;
    }

    /**
     * Set etd
     *
     * @param string $etd
     *
     * @return Lotes
     */
    public function setEtd($etd)
    {
        $this->etd = $etd;

        return $this;
    }

    /**
     * Get etd
     *
     * @return string
     */
    public function getEtd()
    {
        return $this->etd;
    }

    /**
     * Set pod
     *
     * @param string $pod
     *
     * @return Lotes
     */
    public function setPod($pod)
    {
        $this->pod = $pod;

        return $this;
    }

    /**
     * Get pod
     *
     * @return string
     */
    public function getPod()
    {
        return $this->pod;
    }

    /**
     * Set eta
     *
     * @param string $eta
     *
     * @return Lotes
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return string
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set fechaCarga
     *
     * @param \DateTime $fechaCarga
     *
     * @return Lotes
     */
    public function setFechaCarga($fechaCarga)
    {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga()
    {
        return $this->fechaCarga;
    }

    /**
     * Set ejecutivo
     *
     * @param \BackendBundle\Entity\Usuario $ejecutivo
     *
     * @return Lotes
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

