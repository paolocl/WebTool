<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analytics
 *
 * @ORM\Table(name="analytics", indexes={@ORM\Index(name="id_site", columns={"id_site"})})
 * @ORM\Entity
 */
class Analytics
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=50, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=20, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;



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
     * @return Analytics
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
     * Set url
     *
     * @param string $url
     *
     * @return Analytics
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
     * Set user
     *
     * @param string $user
     *
     * @return Analytics
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Analytics
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
