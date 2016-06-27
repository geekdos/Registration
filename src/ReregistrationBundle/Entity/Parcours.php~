<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="parcours")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\ParcoursRepository")
 */
class Parcours
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\FiliereDeug", mappedBy="parcours")
     */
    private $filieresDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\FiliereLicence", mappedBy="parcours")
     */
    private $filieresLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\FiliereMaster", mappedBy="parcours")
     */
    private $filieresMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\LaboDoctorat", mappedBy="parcours")
     */
    private $laboDoctoctorat;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filieresDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filieresLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filieresMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->laboDoctoctorat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Parcours
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
     * Add filieresDeug
     *
     * @param \ReregistrationBundle\Entity\FiliereDeug $filieresDeug
     *
     * @return Parcours
     */
    public function addFilieresDeug(\ReregistrationBundle\Entity\FiliereDeug $filieresDeug)
    {
        $this->filieresDeug[] = $filieresDeug;

        return $this;
    }

    /**
     * Remove filieresDeug
     *
     * @param \ReregistrationBundle\Entity\FiliereDeug $filieresDeug
     */
    public function removeFilieresDeug(\ReregistrationBundle\Entity\FiliereDeug $filieresDeug)
    {
        $this->filieresDeug->removeElement($filieresDeug);
    }

    /**
     * Get filieresDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilieresDeug()
    {
        return $this->filieresDeug;
    }

    /**
     * Add filieresLicence
     *
     * @param \ReregistrationBundle\Entity\FiliereLicence $filieresLicence
     *
     * @return Parcours
     */
    public function addFilieresLicence(\ReregistrationBundle\Entity\FiliereLicence $filieresLicence)
    {
        $this->filieresLicence[] = $filieresLicence;

        return $this;
    }

    /**
     * Remove filieresLicence
     *
     * @param \ReregistrationBundle\Entity\FiliereLicence $filieresLicence
     */
    public function removeFilieresLicence(\ReregistrationBundle\Entity\FiliereLicence $filieresLicence)
    {
        $this->filieresLicence->removeElement($filieresLicence);
    }

    /**
     * Get filieresLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilieresLicence()
    {
        return $this->filieresLicence;
    }

    /**
     * Add filieresMaster
     *
     * @param \ReregistrationBundle\Entity\FiliereMaster $filieresMaster
     *
     * @return Parcours
     */
    public function addFilieresMaster(\ReregistrationBundle\Entity\FiliereMaster $filieresMaster)
    {
        $this->filieresMaster[] = $filieresMaster;

        return $this;
    }

    /**
     * Remove filieresMaster
     *
     * @param \ReregistrationBundle\Entity\FiliereMaster $filieresMaster
     */
    public function removeFilieresMaster(\ReregistrationBundle\Entity\FiliereMaster $filieresMaster)
    {
        $this->filieresMaster->removeElement($filieresMaster);
    }

    /**
     * Get filieresMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilieresMaster()
    {
        return $this->filieresMaster;
    }

    /**
     * Add laboDoctoctorat
     *
     * @param \ReregistrationBundle\Entity\LaboDoctorat $laboDoctoctorat
     *
     * @return Parcours
     */
    public function addLaboDoctoctorat(\ReregistrationBundle\Entity\LaboDoctorat $laboDoctoctorat)
    {
        $this->laboDoctoctorat[] = $laboDoctoctorat;

        return $this;
    }

    /**
     * Remove laboDoctoctorat
     *
     * @param \ReregistrationBundle\Entity\LaboDoctorat $laboDoctoctorat
     */
    public function removeLaboDoctoctorat(\ReregistrationBundle\Entity\LaboDoctorat $laboDoctoctorat)
    {
        $this->laboDoctoctorat->removeElement($laboDoctoctorat);
    }

    /**
     * Get laboDoctoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLaboDoctoctorat()
    {
        return $this->laboDoctoctorat;
    }
}
