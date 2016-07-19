<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registrar
 *
 * @ORM\Table(name="registrar")
 * @ORM\Entity
 */
class Registrar
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=6000, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=6000, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="dns1", type="string", length=6000, nullable=false)
     */
    private $dns1;

    /**
     * @var string
     *
     * @ORM\Column(name="dns2", type="string", length=6000, nullable=false)
     */
    private $dns2;

    /**
     * @var string
     *
     * @ORM\Column(name="adminServeur", type="string", length=6000, nullable=false)
     */
    private $adminserveur;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=6000, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=6000, nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=6000, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=6000, nullable=false)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="next_update_domain", type="datetime", nullable=true)
     */
    private $nextUpdateDomain;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Registrar
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Registrar
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Registrar
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

    /**
     * Set dns1
     *
     * @param string $dns1
     *
     * @return Registrar
     */
    public function setDns1($dns1)
    {
        $this->dns1 = $dns1;

        return $this;
    }

    /**
     * Get dns1
     *
     * @return string
     */
    public function getDns1()
    {
        return $this->dns1;
    }

    /**
     * Set dns2
     *
     * @param string $dns2
     *
     * @return Registrar
     */
    public function setDns2($dns2)
    {
        $this->dns2 = $dns2;

        return $this;
    }

    /**
     * Get dns2
     *
     * @return string
     */
    public function getDns2()
    {
        return $this->dns2;
    }

    /**
     * Set adminserveur
     *
     * @param string $adminserveur
     *
     * @return Registrar
     */
    public function setAdminserveur($adminserveur)
    {
        $this->adminserveur = $adminserveur;

        return $this;
    }

    /**
     * Get adminserveur
     *
     * @return string
     */
    public function getAdminserveur()
    {
        return $this->adminserveur;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Registrar
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Registrar
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Registrar
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Registrar
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nextUpdateDomain
     *
     * @param \DateTime $nextUpdateDomain
     *
     * @return Registrar
     */
    public function setNextUpdateDomain($nextUpdateDomain)
    {
        $this->nextUpdateDomain = $nextUpdateDomain;

        return $this;
    }

    /**
     * Get nextUpdateDomain
     *
     * @return \DateTime
     */
    public function getNextUpdateDomain()
    {
        return $this->nextUpdateDomain;
    }
}
