<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FonctionRepository")
 */
class Fonction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="fonctioPere")
     */
    private $traveursPereDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="fonctioPere")
     */
    private $traveursPereLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="fonctioPere")
     */
    private $traveursPereMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="fonctioPere")
     */
    private $traveursPereDoctorat;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="fonctioMere")
     */
    private $traveursMereDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="fonctioMere")
     */
    private $traveursMereLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="fonctioMere")
     */
    private $traveursMereMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="fonctioMere")
     */
    private $traveursMereDoctorat;
    
    function __toString()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->traveursPereDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursPereLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursPereMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursPereDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursMereDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursMereLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursMereMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursMereDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Fonction
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
     * Add traveursPereDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $traveursPereDeug
     *
     * @return Fonction
     */
    public function addTraveursPereDeug(\ReregistrationBundle\Entity\EtudiantDeug $traveursPereDeug)
    {
        $this->traveursPereDeug[] = $traveursPereDeug;

        return $this;
    }

    /**
     * Remove traveursPereDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $traveursPereDeug
     */
    public function removeTraveursPereDeug(\ReregistrationBundle\Entity\EtudiantDeug $traveursPereDeug)
    {
        $this->traveursPereDeug->removeElement($traveursPereDeug);
    }

    /**
     * Get traveursPereDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursPereDeug()
    {
        return $this->traveursPereDeug;
    }

    /**
     * Add traveursPereLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $traveursPereLicence
     *
     * @return Fonction
     */
    public function addTraveursPereLicence(\ReregistrationBundle\Entity\EtudiantLicence $traveursPereLicence)
    {
        $this->traveursPereLicence[] = $traveursPereLicence;

        return $this;
    }

    /**
     * Remove traveursPereLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $traveursPereLicence
     */
    public function removeTraveursPereLicence(\ReregistrationBundle\Entity\EtudiantLicence $traveursPereLicence)
    {
        $this->traveursPereLicence->removeElement($traveursPereLicence);
    }

    /**
     * Get traveursPereLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursPereLicence()
    {
        return $this->traveursPereLicence;
    }

    /**
     * Add traveursPereMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $traveursPereMaster
     *
     * @return Fonction
     */
    public function addTraveursPereMaster(\ReregistrationBundle\Entity\EtudiantMaster $traveursPereMaster)
    {
        $this->traveursPereMaster[] = $traveursPereMaster;

        return $this;
    }

    /**
     * Remove traveursPereMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $traveursPereMaster
     */
    public function removeTraveursPereMaster(\ReregistrationBundle\Entity\EtudiantMaster $traveursPereMaster)
    {
        $this->traveursPereMaster->removeElement($traveursPereMaster);
    }

    /**
     * Get traveursPereMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursPereMaster()
    {
        return $this->traveursPereMaster;
    }

    /**
     * Add traveursPereDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $traveursPereDoctorat
     *
     * @return Fonction
     */
    public function addTraveursPereDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $traveursPereDoctorat)
    {
        $this->traveursPereDoctorat[] = $traveursPereDoctorat;

        return $this;
    }

    /**
     * Remove traveursPereDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $traveursPereDoctorat
     */
    public function removeTraveursPereDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $traveursPereDoctorat)
    {
        $this->traveursPereDoctorat->removeElement($traveursPereDoctorat);
    }

    /**
     * Get traveursPereDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursPereDoctorat()
    {
        return $this->traveursPereDoctorat;
    }

    /**
     * Add traveursMereDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $traveursMereDeug
     *
     * @return Fonction
     */
    public function addTraveursMereDeug(\ReregistrationBundle\Entity\EtudiantDeug $traveursMereDeug)
    {
        $this->traveursMereDeug[] = $traveursMereDeug;

        return $this;
    }

    /**
     * Remove traveursMereDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $traveursMereDeug
     */
    public function removeTraveursMereDeug(\ReregistrationBundle\Entity\EtudiantDeug $traveursMereDeug)
    {
        $this->traveursMereDeug->removeElement($traveursMereDeug);
    }

    /**
     * Get traveursMereDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursMereDeug()
    {
        return $this->traveursMereDeug;
    }

    /**
     * Add traveursMereLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $traveursMereLicence
     *
     * @return Fonction
     */
    public function addTraveursMereLicence(\ReregistrationBundle\Entity\EtudiantLicence $traveursMereLicence)
    {
        $this->traveursMereLicence[] = $traveursMereLicence;

        return $this;
    }

    /**
     * Remove traveursMereLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $traveursMereLicence
     */
    public function removeTraveursMereLicence(\ReregistrationBundle\Entity\EtudiantLicence $traveursMereLicence)
    {
        $this->traveursMereLicence->removeElement($traveursMereLicence);
    }

    /**
     * Get traveursMereLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursMereLicence()
    {
        return $this->traveursMereLicence;
    }

    /**
     * Add traveursMereMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $traveursMereMaster
     *
     * @return Fonction
     */
    public function addTraveursMereMaster(\ReregistrationBundle\Entity\EtudiantMaster $traveursMereMaster)
    {
        $this->traveursMereMaster[] = $traveursMereMaster;

        return $this;
    }

    /**
     * Remove traveursMereMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $traveursMereMaster
     */
    public function removeTraveursMereMaster(\ReregistrationBundle\Entity\EtudiantMaster $traveursMereMaster)
    {
        $this->traveursMereMaster->removeElement($traveursMereMaster);
    }

    /**
     * Get traveursMereMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursMereMaster()
    {
        return $this->traveursMereMaster;
    }

    /**
     * Add traveursMereDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $traveursMereDoctorat
     *
     * @return Fonction
     */
    public function addTraveursMereDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $traveursMereDoctorat)
    {
        $this->traveursMereDoctorat[] = $traveursMereDoctorat;

        return $this;
    }

    /**
     * Remove traveursMereDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $traveursMereDoctorat
     */
    public function removeTraveursMereDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $traveursMereDoctorat)
    {
        $this->traveursMereDoctorat->removeElement($traveursMereDoctorat);
    }

    /**
     * Get traveursMereDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursMereDoctorat()
    {
        return $this->traveursMereDoctorat;
    }
}
