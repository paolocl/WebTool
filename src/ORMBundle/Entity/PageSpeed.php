<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageSpeed
 *
 * @ORM\Table(name="page_speed")
 * @ORM\Entity
 */
class PageSpeed
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
     * @var float
     *
     * @ORM\Column(name="desktop", type="float", precision=10, scale=0, nullable=true)
     */
    private $desktop;

    /**
     * @var float
     *
     * @ORM\Column(name="mobile", type="float", precision=10, scale=0, nullable=true)
     */
    private $mobile;

    /**
     * @var float
     *
     * @ORM\Column(name="old_mobile", type="float", precision=10, scale=0, nullable=true)
     */
    private $oldMobile;

    /**
     * @var float
     *
     * @ORM\Column(name="old_desktop", type="float", precision=10, scale=0, nullable=true)
     */
    private $oldDesktop;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_update", type="integer", nullable=true)
     */
    private $lastUpdate;



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
     * Set desktop
     *
     * @param float $desktop
     *
     * @return PageSpeed
     */
    public function setDesktop($desktop)
    {
        $this->desktop = $desktop;

        return $this;
    }

    /**
     * Get desktop
     *
     * @return float
     */
    public function getDesktop()
    {
        return $this->desktop;
    }

    /**
     * Set mobile
     *
     * @param float $mobile
     *
     * @return PageSpeed
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return float
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set oldMobile
     *
     * @param float $oldMobile
     *
     * @return PageSpeed
     */
    public function setOldMobile($oldMobile)
    {
        $this->oldMobile = $oldMobile;

        return $this;
    }

    /**
     * Get oldMobile
     *
     * @return float
     */
    public function getOldMobile()
    {
        return $this->oldMobile;
    }

    /**
     * Set oldDesktop
     *
     * @param float $oldDesktop
     *
     * @return PageSpeed
     */
    public function setOldDesktop($oldDesktop)
    {
        $this->oldDesktop = $oldDesktop;

        return $this;
    }

    /**
     * Get oldDesktop
     *
     * @return float
     */
    public function getOldDesktop()
    {
        return $this->oldDesktop;
    }

    /**
     * Set lastUpdate
     *
     * @param integer $lastUpdate
     *
     * @return PageSpeed
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return integer
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}
