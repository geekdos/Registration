<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Academie
 *
 * @ORM\Table(name="academie")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\AcademieRepository")
 */
class Academie
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="academie")
     */
    private $elevesDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="academie")
     */
    private $elevesLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="academie")
     */
    private $elevesMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="academie")
     */
    private $elevesDoctorat;

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
        $this->elevesDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Academie
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
     * Add elevesDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $elevesDeug
     *
     * @return Academie
     */
    public function addElevesDeug(\ReregistrationBundle\Entity\EtudiantDeug $elevesDeug)
    {
        $this->elevesDeug[] = $elevesDeug;

        return $this;
    }

    /**
     * Remove elevesDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $elevesDeug
     */
    public function removeElevesDeug(\ReregistrationBundle\Entity\EtudiantDeug $elevesDeug)
    {
        $this->elevesDeug->removeElement($elevesDeug);
    }

    /**
     * Get elevesDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesDeug()
    {
        return $this->elevesDeug;
    }

    /**
     * Add elevesLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $elevesLicence
     *
     * @return Academie
     */
    public function addElevesLicence(\ReregistrationBundle\Entity\EtudiantLicence $elevesLicence)
    {
        $this->elevesLicence[] = $elevesLicence;

        return $this;
    }

    /**
     * Remove elevesLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $elevesLicence
     */
    public function removeElevesLicence(\ReregistrationBundle\Entity\EtudiantLicence $elevesLicence)
    {
        $this->elevesLicence->removeElement($elevesLicence);
    }

    /**
     * Get elevesLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesLicence()
    {
        return $this->elevesLicence;
    }

    /**
     * Add elevesMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $elevesMaster
     *
     * @return Academie
     */
    public function addElevesMaster(\ReregistrationBundle\Entity\EtudiantMaster $elevesMaster)
    {
        $this->elevesMaster[] = $elevesMaster;

        return $this;
    }

    /**
     * Remove elevesMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $elevesMaster
     */
    public function removeElevesMaster(\ReregistrationBundle\Entity\EtudiantMaster $elevesMaster)
    {
        $this->elevesMaster->removeElement($elevesMaster);
    }

    /**
     * Get elevesMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesMaster()
    {
        return $this->elevesMaster;
    }

    /**
     * Add elevesDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $elevesDoctorat
     *
     * @return Academie
     */
    public function addElevesDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $elevesDoctorat)
    {
        $this->elevesDoctorat[] = $elevesDoctorat;

        return $this;
    }

    /**
     * Remove elevesDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $elevesDoctorat
     */
    public function removeElevesDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $elevesDoctorat)
    {
        $this->elevesDoctorat->removeElement($elevesDoctorat);
    }

    /**
     * Get elevesDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesDoctorat()
    {
        return $this->elevesDoctorat;
    }
}
