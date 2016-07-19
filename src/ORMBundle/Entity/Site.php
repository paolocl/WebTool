<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_694309E4E26315E6", columns={"id_site"})}, indexes={@ORM\Index(name="id_site", columns={"id_site"}), @ORM\Index(name="id_ftps", columns={"id_ftps", "id_registrar", "id_ips", "id_hosts", "id_type_projet"}), @ORM\Index(name="IDX_694309E41E2F23D", columns={"id_ftps"}), @ORM\Index(name="IDX_694309E46AF75AAF", columns={"id_analytics"}), @ORM\Index(name="id_sqls", columns={"id_sqls"}), @ORM\Index(name="id_back_office", columns={"id_back_office"}), @ORM\Index(name="id_page_speed", columns={"id_page_speed"})})
 * @ORM\Entity
 */
class Site
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
    private $idSite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=100, nullable=false)
     */
    private $md5 = '25f22f8dzz';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ftps", type="integer", nullable=false)
     */
    private $idFtps;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_registrar", type="integer", nullable=false)
     */
    private $idRegistrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sqls", type="integer", nullable=true)
     */
    private $idSqls;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ips", type="integer", nullable=false)
     */
    private $idIps;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_hosts", type="integer", nullable=false)
     */
    private $idHosts;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_projet", type="integer", nullable=false)
     */
    private $idTypeProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_analytics", type="integer", nullable=true)
     */
    private $idAnalytics;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_back_office", type="integer", nullable=true)
     */
    private $idBackOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_page_speed", type="integer", nullable=true)
     */
    private $idPageSpeed;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="ORMBundle\Entity\Affiliation", mappedBy="site")
     */
    private $affiliation;

    /**
     * @var \ORMBundle\Entity\Urls
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Urls")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site", referencedColumnName="id")
     * })
     */
    private $urls;

    /**
     * @var \ORMBundle\Entity\Ftps
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Ftps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ftps", referencedColumnName="id")
     * })
     */
    private $ftps;

    /**
     * @var \ORMBundle\Entity\Analytics
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Analytics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_analytics", referencedColumnName="id")
     * })
     */
    private $analytics;

    /**
     * @var \ORMBundle\Entity\Registrar
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Registrar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registrar", referencedColumnName="id")
     * })
     */
    private $registrar;

    /**
     * @var \ORMBundle\Entity\Sqls
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Sqls")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sqls", referencedColumnName="id")
     * })
     */
    private $sqls;

    /**
     * @var \ORMBundle\Entity\Ips
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Ips")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ips", referencedColumnName="id")
     * })
     */
    private $ips;

    /**
     * @var \ORMBundle\Entity\Hosts
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\Hosts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hosts", referencedColumnName="id")
     * })
     */
    private $hosts;

    /**
     * @var \ORMBundle\Entity\TypeProjet
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\TypeProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_projet", referencedColumnName="id")
     * })
     */
    private $type_projet;

    /**
     * @var \ORMBundle\Entity\PageSpeed
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\PageSpeed")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site", referencedColumnName="id")
     * })
     */
    private $page_speed;

    /**
     * @var \ORMBundle\Entity\BackOffice
     *
     * @ORM\ManyToOne(targetEntity="ORMBundle\Entity\BackOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_back_office", referencedColumnName="id")
     * })
     */
    private $back_office;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affiliation = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Site
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
     * Set md5
     *
     * @param string $md5
     *
     * @return Site
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;

        return $this;
    }

    /**
     * Get md5
     *
     * @return string
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Site
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
     * Set idFtps
     *
     * @param integer $idFtps
     *
     * @return Site
     */
    public function setIdFtps($idFtps)
    {
        $this->idFtps = $idFtps;

        return $this;
    }

    /**
     * Get idFtps
     *
     * @return integer
     */
    public function getIdFtps()
    {
        return $this->idFtps;
    }

    /**
     * Set idRegistrar
     *
     * @param integer $idRegistrar
     *
     * @return Site
     */
    public function setIdRegistrar($idRegistrar)
    {
        $this->idRegistrar = $idRegistrar;

        return $this;
    }

    /**
     * Get idRegistrar
     *
     * @return integer
     */
    public function getIdRegistrar()
    {
        return $this->idRegistrar;
    }

    /**
     * Set idSqls
     *
     * @param integer $idSqls
     *
     * @return Site
     */
    public function setIdSqls($idSqls)
    {
        $this->idSqls = $idSqls;

        return $this;
    }

    /**
     * Get idSqls
     *
     * @return integer
     */
    public function getIdSqls()
    {
        return $this->idSqls;
    }

    /**
     * Set idIps
     *
     * @param integer $idIps
     *
     * @return Site
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
     * Set idHosts
     *
     * @param integer $idHosts
     *
     * @return Site
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
     * Set idTypeProjet
     *
     * @param integer $idTypeProjet
     *
     * @return Site
     */
    public function setIdTypeProjet($idTypeProjet)
    {
        $this->idTypeProjet = $idTypeProjet;

        return $this;
    }

    /**
     * Get idTypeProjet
     *
     * @return integer
     */
    public function getIdTypeProjet()
    {
        return $this->idTypeProjet;
    }

    /**
     * Set idAnalytics
     *
     * @param integer $idAnalytics
     *
     * @return Site
     */
    public function setIdAnalytics($idAnalytics)
    {
        $this->idAnalytics = $idAnalytics;

        return $this;
    }

    /**
     * Get idAnalytics
     *
     * @return integer
     */
    public function getIdAnalytics()
    {
        return $this->idAnalytics;
    }

    /**
     * Set idBackOffice
     *
     * @param integer $idBackOffice
     *
     * @return Site
     */
    public function setIdBackOffice($idBackOffice)
    {
        $this->idBackOffice = $idBackOffice;

        return $this;
    }

    /**
     * Get idBackOffice
     *
     * @return integer
     */
    public function getIdBackOffice()
    {
        return $this->idBackOffice;
    }

    /**
     * Set idPageSpeed
     *
     * @param integer $idPageSpeed
     *
     * @return Site
     */
    public function setIdPageSpeed($idPageSpeed)
    {
        $this->idPageSpeed = $idPageSpeed;

        return $this;
    }

    /**
     * Get idPageSpeed
     *
     * @return integer
     */
    public function getIdPageSpeed()
    {
        return $this->idPageSpeed;
    }

    /**
     * Add affiliation
     *
     * @param \ORMBundle\Entity\Affiliation $affiliation
     *
     * @return Site
     */
    public function addAffiliation(\ORMBundle\Entity\Affiliation $affiliation)
    {
        $this->affiliation[] = $affiliation;

        return $this;
    }

    /**
     * Remove affiliation
     *
     * @param \ORMBundle\Entity\Affiliation $affiliation
     */
    public function removeAffiliation(\ORMBundle\Entity\Affiliation $affiliation)
    {
        $this->affiliation->removeElement($affiliation);
    }

    /**
     * Get affiliation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Set urls
     *
     * @param \ORMBundle\Entity\Urls $urls
     *
     * @return Site
     */
    public function setUrls(\ORMBundle\Entity\Urls $urls = null)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Get urls
     *
     * @return \ORMBundle\Entity\Urls
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set ftps
     *
     * @param \ORMBundle\Entity\Ftps $ftps
     *
     * @return Site
     */
    public function setFtps(\ORMBundle\Entity\Ftps $ftps = null)
    {
        $this->ftps = $ftps;

        return $this;
    }

    /**
     * Get ftps
     *
     * @return \ORMBundle\Entity\Ftps
     */
    public function getFtps()
    {
        return $this->ftps;
    }

    /**
     * Set analytics
     *
     * @param \ORMBundle\Entity\Analytics $analytics
     *
     * @return Site
     */
    public function setAnalytics(\ORMBundle\Entity\Analytics $analytics = null)
    {
        $this->analytics = $analytics;

        return $this;
    }

    /**
     * Get analytics
     *
     * @return \ORMBundle\Entity\Analytics
     */
    public function getAnalytics()
    {
        return $this->analytics;
    }

    /**
     * Set registrar
     *
     * @param \ORMBundle\Entity\Registrar $registrar
     *
     * @return Site
     */
    public function setRegistrar(\ORMBundle\Entity\Registrar $registrar = null)
    {
        $this->registrar = $registrar;

        return $this;
    }

    /**
     * Get registrar
     *
     * @return \ORMBundle\Entity\Registrar
     */
    public function getRegistrar()
    {
        return $this->registrar;
    }

    /**
     * Set sqls
     *
     * @param \ORMBundle\Entity\Sqls $sqls
     *
     * @return Site
     */
    public function setSqls(\ORMBundle\Entity\Sqls $sqls = null)
    {
        $this->sqls = $sqls;

        return $this;
    }

    /**
     * Get sqls
     *
     * @return \ORMBundle\Entity\Sqls
     */
    public function getSqls()
    {
        return $this->sqls;
    }

    /**
     * Set ips
     *
     * @param \ORMBundle\Entity\Ips $ips
     *
     * @return Site
     */
    public function setIps(\ORMBundle\Entity\Ips $ips = null)
    {
        $this->ips = $ips;

        return $this;
    }

    /**
     * Get ips
     *
     * @return \ORMBundle\Entity\Ips
     */
    public function getIps()
    {
        return $this->ips;
    }

    /**
     * Set hosts
     *
     * @param \ORMBundle\Entity\Hosts $hosts
     *
     * @return Site
     */
    public function setHosts(\ORMBundle\Entity\Hosts $hosts = null)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * Get hosts
     *
     * @return \ORMBundle\Entity\Hosts
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Set typeProjet
     *
     * @param \ORMBundle\Entity\TypeProjet $typeProjet
     *
     * @return Site
     */
    public function setTypeProjet(\ORMBundle\Entity\TypeProjet $typeProjet = null)
    {
        $this->type_projet = $typeProjet;

        return $this;
    }

    /**
     * Get typeProjet
     *
     * @return \ORMBundle\Entity\TypeProjet
     */
    public function getTypeProjet()
    {
        return $this->type_projet;
    }

    /**
     * Set pageSpeed
     *
     * @param \ORMBundle\Entity\PageSpeed $pageSpeed
     *
     * @return Site
     */
    public function setPageSpeed(\ORMBundle\Entity\PageSpeed $pageSpeed = null)
    {
        $this->page_speed = $pageSpeed;

        return $this;
    }

    /**
     * Get pageSpeed
     *
     * @return \ORMBundle\Entity\PageSpeed
     */
    public function getPageSpeed()
    {
        return $this->page_speed;
    }

    /**
     * Set backOffice
     *
     * @param \ORMBundle\Entity\BackOffice $backOffice
     *
     * @return Site
     */
    public function setBackOffice(\ORMBundle\Entity\BackOffice $backOffice = null)
    {
        $this->back_office = $backOffice;

        return $this;
    }

    /**
     * Get backOffice
     *
     * @return \ORMBundle\Entity\BackOffice
     */
    public function getBackOffice()
    {
        return $this->back_office;
    }
}
