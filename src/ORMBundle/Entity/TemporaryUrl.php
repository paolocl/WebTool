<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemporaryUrl
 *
 * @ORM\Table(name="temporary_url")
 * @ORM\Entity
 */
class TemporaryUrl
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var float
     *
     * @ORM\Column(name="mobile", type="float", precision=10, scale=0, nullable=true)
     */
    private $mobile;

    /**
     * @var float
     *
     * @ORM\Column(name="desktop", type="float", precision=10, scale=0, nullable=true)
     */
    private $desktop;



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
     * Set url
     *
     * @param string $url
     *
     * @return TemporaryUrl
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set mobile
     *
     * @param float $mobile
     *
     * @return TemporaryUrl
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
     * Set desktop
     *
     * @param float $desktop
     *
     * @return TemporaryUrl
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
}
