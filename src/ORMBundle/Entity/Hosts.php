<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hosts
 *
 * @ORM\Table(name="hosts")
 * @ORM\Entity
 */
class Hosts
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
     * @ORM\Column(name="nom_host", type="string", length=255, nullable=false)
     */
    private $nomHost;



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
     * Set nomHost
     *
     * @param string $nomHost
     *
     * @return Hosts
     */
    public function setNomHost($nomHost)
    {
        $this->nomHost = $nomHost;

        return $this;
    }

    /**
     * Get nomHost
     *
     * @return string
     */
    public function getNomHost()
    {
        return $this->nomHost;
    }
}
