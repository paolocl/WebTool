<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ftps
 *
 * @ORM\Table(name="ftps", indexes={@ORM\Index(name="id_ips_fk", columns={"id_hosts"}), @ORM\Index(name="id_hosts", columns={"id_hosts"}), @ORM\Index(name="id_ips", columns={"id_ips"})})
 * @ORM\Entity
 */
class Ftps
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
     * @ORM\Column(name="id_hosts", type="integer", nullable=false)
     */
    private $idHosts;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ips", type="integer", nullable=false)
     */
    private $idIps;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=30, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
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
     * Set idHosts
     *
     * @param integer $idHosts
     *
     * @return Ftps
     */
    public function setIdHosts($idHosts)
    {
        $this->idHosts = $idHosts;

        return $this;
    }

    /**
     * Get idHosts
     *
     * @return integer
     */
    public function getIdHosts()
    {
        return $this->idHosts;
    }

    /**
     * Set idIps
     *
     * @param integer $idIps
     *
     * @return Ftps
     */
    public function setIdIps($idIps)
    {
        $this->idIps = $idIps;

        return $this;
    }

    /**
     * Get idIps
     *
     * @return integer
     */
    public function getIdIps()
    {
        return $this->idIps;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Ftps
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
     * @return Ftps
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
