<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDiplome
 *
 * @ORM\Table(name="type_diplome")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\TypeDiplomeRepository")
 */
class TypeDiplome
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="typeDiplome")
     */
    private $etudiantsLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="typeDiplome")
     */
    private $etudiantsMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="typeDiplome")
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
     * @return TypeDiplome
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
     * Add etudiantsLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $etudiantsLicence
     *
     * @return TypeDiplome
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
     * @return TypeDiplome
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
     * @return TypeDiplome
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
