<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affiliation
 *
 * @ORM\Table(name="affiliation")
 * @ORM\Entity
 */
class Affiliation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_site", type="integer", nullable=false)
     */
    private $idSite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lien", type="integer", nullable=false)
     */
    private $idLien;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=250, nullable=false)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="name_link", type="string", length=100, nullable=true)
     */
    private $nameLink;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="date_last", type="string", length=20, nullable=false)
     */
    private $dateLast = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="many_to_one", type="string")
     */
    private $manyToOne;



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
     * Set idSite
     *
     * @param integer $idSite
     *
     * @return Affiliation
     */
    public function setIdSite($idSite)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return integer
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * Set idLien
     *
     * @param integer $idLien
     *
     * @return Affiliation
     */
    public function setIdLien($idLien)
    {
        $this->idLien = $idLien;

        return $this;
    }

    /**
     * Get idLien
     *
     * @return integer
     */
    public function getIdLien()
    {
        return $this->idLien;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Affiliation
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set nameLink
     *
     * @param string $nameLink
     *
     * @return Affiliation
     */
    public function setNameLink($nameLink)
    {
        $this->nameLink = $nameLink;

        return $this;
    }

    /**
     * Get nameLink
     *
     * @return string
     */
    public function getNameLink()
    {
        return $this->nameLink;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Affiliation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateLast
     *
     * @param string $dateLast
     *
     * @return Affiliation
     */
    public function setDateLast($dateLast)
    {
        $this->dateLast = $dateLast;

        return $this;
    }

    /**
     * Get dateLast
     *
     * @return string
     */
    public function getDateLast()
    {
        return $this->dateLast;
    }

    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     *
     * @return Affiliation
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
}
