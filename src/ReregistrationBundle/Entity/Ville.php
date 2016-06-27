<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="ville")
     */
    private $habitantsDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="ville")
     */
    private $habitantsLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="ville")
     */
    private $habitantsMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="ville")
     */
    private $habitantsDoctorat;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Pays", inversedBy="villes")
     */
    private $pays;

    public function __toString()
    {
        return $this->nom;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitantsDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->habitantsLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->habitantsMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->habitantsDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ville
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
     * Add habitantsDeug
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsDeug
     *
     * @return Ville
     */
    public function addHabitantsDeug(\ReregistrationBundle\Entity\Etudiant $habitantsDeug)
    {
        $this->habitantsDeug[] = $habitantsDeug;

        return $this;
    }

    /**
     * Remove habitantsDeug
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsDeug
     */
    public function removeHabitantsDeug(\ReregistrationBundle\Entity\Etudiant $habitantsDeug)
    {
        $this->habitantsDeug->removeElement($habitantsDeug);
    }

    /**
     * Get habitantsDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitantsDeug()
    {
        return $this->habitantsDeug;
    }

    /**
     * Add habitantsLicence
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsLicence
     *
     * @return Ville
     */
    public function addHabitantsLicence(\ReregistrationBundle\Entity\Etudiant $habitantsLicence)
    {
        $this->habitantsLicence[] = $habitantsLicence;

        return $this;
    }

    /**
     * Remove habitantsLicence
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsLicence
     */
    public function removeHabitantsLicence(\ReregistrationBundle\Entity\Etudiant $habitantsLicence)
    {
        $this->habitantsLicence->removeElement($habitantsLicence);
    }

    /**
     * Get habitantsLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitantsLicence()
    {
        return $this->habitantsLicence;
    }

    /**
     * Add habitantsMaster
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsMaster
     *
     * @return Ville
     */
    public function addHabitantsMaster(\ReregistrationBundle\Entity\Etudiant $habitantsMaster)
    {
        $this->habitantsMaster[] = $habitantsMaster;

        return $this;
    }

    /**
     * Remove habitantsMaster
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsMaster
     */
    public function removeHabitantsMaster(\ReregistrationBundle\Entity\Etudiant $habitantsMaster)
    {
        $this->habitantsMaster->removeElement($habitantsMaster);
    }

    /**
     * Get habitantsMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitantsMaster()
    {
        return $this->habitantsMaster;
    }

    /**
     * Add habitantsDoctorat
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsDoctorat
     *
     * @return Ville
     */
    public function addHabitantsDoctorat(\ReregistrationBundle\Entity\Etudiant $habitantsDoctorat)
    {
        $this->habitantsDoctorat[] = $habitantsDoctorat;

        return $this;
    }

    /**
     * Remove habitantsDoctorat
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitantsDoctorat
     */
    public function removeHabitantsDoctorat(\ReregistrationBundle\Entity\Etudiant $habitantsDoctorat)
    {
        $this->habitantsDoctorat->removeElement($habitantsDoctorat);
    }

    /**
     * Get habitantsDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitantsDoctorat()
    {
        return $this->habitantsDoctorat;
    }

    /**
     * Set pays
     *
     * @param \ReregistrationBundle\Entity\Pays $pays
     *
     * @return Ville
     */
    public function setPays(\ReregistrationBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \ReregistrationBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
