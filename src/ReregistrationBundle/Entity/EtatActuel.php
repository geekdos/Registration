<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatActuel
 *
 * @ORM\Table(name="etat_actuel")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\EtatActuelRepository")
 */
class EtatActuel
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="statutActuel")
     */
    private $etudiantsDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="statutActuel")
     */
    private $etudiantsLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="statutActuel")
     */
    private $etudiantsMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="statutActuel")
     */
    private $etudiantsDoctorat;


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiantsDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantsLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantsMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantsDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return EtatActuel
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
     * Add etudiantsDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $etudiantsDeug
     *
     * @return EtatActuel
     */
    public function addEtudiantsDeug(\ReregistrationBundle\Entity\EtudiantDeug $etudiantsDeug)
    {
        $this->etudiantsDeug[] = $etudiantsDeug;

        return $this;
    }

    /**
     * Remove etudiantsDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $etudiantsDeug
     */
    public function removeEtudiantsDeug(\ReregistrationBundle\Entity\EtudiantDeug $etudiantsDeug)
    {
        $this->etudiantsDeug->removeElement($etudiantsDeug);
    }

    /**
     * Get etudiantsDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantsDeug()
    {
        return $this->etudiantsDeug;
    }

    /**
     * Add etudiantsLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $etudiantsLicence
     *
     * @return EtatActuel
     */
    public function addEtudiantsLicence(\ReregistrationBundle\Entity\EtudiantLicence $etudiantsLicence)
    {
        $this->etudiantsLicence[] = $etudiantsLicence;

        return $this;
    }

    /**
     * Remove etudiantsLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $etudiantsLicence
     */
    public function removeEtudiantsLicence(\ReregistrationBundle\Entity\EtudiantLicence $etudiantsLicence)
    {
        $this->etudiantsLicence->removeElement($etudiantsLicence);
    }

    /**
     * Get etudiantsLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantsLicence()
    {
        return $this->etudiantsLicence;
    }

    /**
     * Add etudiantsMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster
     *
     * @return EtatActuel
     */
    public function addEtudiantsMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster)
    {
        $this->etudiantsMaster[] = $etudiantsMaster;

        return $this;
    }

    /**
     * Remove etudiantsMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster
     */
    public function removeEtudiantsMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster)
    {
        $this->etudiantsMaster->removeElement($etudiantsMaster);
    }

    /**
     * Get etudiantsMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantsMaster()
    {
        return $this->etudiantsMaster;
    }

    /**
     * Add etudiantsDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $etudiantsDoctorat
     *
     * @return EtatActuel
     */
    public function addEtudiantsDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $etudiantsDoctorat)
    {
        $this->etudiantsDoctorat[] = $etudiantsDoctorat;

        return $this;
    }

    /**
     * Remove etudiantsDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $etudiantsDoctorat
     */
    public function removeEtudiantsDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $etudiantsDoctorat)
    {
        $this->etudiantsDoctorat->removeElement($etudiantsDoctorat);
    }

    /**
     * Get etudiantsDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantsDoctorat()
    {
        return $this->etudiantsDoctorat;
    }
}
