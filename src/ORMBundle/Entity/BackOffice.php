<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackOffice
 *
 * @ORM\Table(name="back_office")
 * @ORM\Entity
 */
class BackOffice
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
     * @ORM\Column(name="url_admin", type="string", length=200, nullable=false)
     */
    private $urlAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_admin", type="string", length=20, nullable=false)
     */
    private $userAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_admin", type="string", length=40, nullable=false)
     */
    private $passAdmin;



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
     * Set urlAdmin
     *
     * @param string $urlAdmin
     *
     * @return BackOffice
     */
    public function setUrlAdmin($urlAdmin)
    {
        $this->urlAdmin = $urlAdmin;

        return $this;
    }

    /**
     * Get urlAdmin
     *
     * @return string
     */
    public function getUrlAdmin()
    {
        return $this->urlAdmin;
    }

    /**
     * Set userAdmin
     *
     * @param string $userAdmin
     *
     * @return BackOffice
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return string
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set passAdmin
     *
     * @param string $passAdmin
     *
     * @return BackOffice
     */
    public function setPassAdmin($passAdmin)
    {
        $this->passAdmin = $passAdmin;

        return $this;
    }

    /**
     * Get passAdmin
     *
     * @return string
     */
    public function getPassAdmin()
    {
        return $this->passAdmin;
    }
}
