<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mention
 *
 * @ORM\Table(name="mention")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\MentionRepository")
 */
class Mention
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="mentionBac")
     */
    private $elevesBacDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="mentionBac")
     */
    private $elevesBacLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="mentionBac")
     */
    private $elevesBacMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="mentionBac")
     */
    private $elevesBacDoctorat;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="mentionDeug")
     */
    private $etudiantLicence;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="mentionLicence")
     */
    private $etudiantMaster;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDoctorat", mappedBy="mentionMaster")
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
        $this->elevesBacDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesBacLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesBacMaster = new \Doctrine\Common\Collections\ArrayCollection();
        $this->elevesBacDoctorat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantLicence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantMaster = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Mention
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
     * Add elevesBacDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $elevesBacDeug
     *
     * @return Mention
     */
    public function addElevesBacDeug(\ReregistrationBundle\Entity\EtudiantDeug $elevesBacDeug)
    {
        $this->elevesBacDeug[] = $elevesBacDeug;

        return $this;
    }

    /**
     * Remove elevesBacDeug
     *
     * @param \ReregistrationBundle\Entity\EtudiantDeug $elevesBacDeug
     */
    public function removeElevesBacDeug(\ReregistrationBundle\Entity\EtudiantDeug $elevesBacDeug)
    {
        $this->elevesBacDeug->removeElement($elevesBacDeug);
    }

    /**
     * Get elevesBacDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesBacDeug()
    {
        return $this->elevesBacDeug;
    }

    /**
     * Add elevesBacLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $elevesBacLicence
     *
     * @return Mention
     */
    public function addElevesBacLicence(\ReregistrationBundle\Entity\EtudiantLicence $elevesBacLicence)
    {
        $this->elevesBacLicence[] = $elevesBacLicence;

        return $this;
    }

    /**
     * Remove elevesBacLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $elevesBacLicence
     */
    public function removeElevesBacLicence(\ReregistrationBundle\Entity\EtudiantLicence $elevesBacLicence)
    {
        $this->elevesBacLicence->removeElement($elevesBacLicence);
    }

    /**
     * Get elevesBacLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesBacLicence()
    {
        return $this->elevesBacLicence;
    }

    /**
     * Add elevesBacMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $elevesBacMaster
     *
     * @return Mention
     */
    public function addElevesBacMaster(\ReregistrationBundle\Entity\EtudiantMaster $elevesBacMaster)
    {
        $this->elevesBacMaster[] = $elevesBacMaster;

        return $this;
    }

    /**
     * Remove elevesBacMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $elevesBacMaster
     */
    public function removeElevesBacMaster(\ReregistrationBundle\Entity\EtudiantMaster $elevesBacMaster)
    {
        $this->elevesBacMaster->removeElement($elevesBacMaster);
    }

    /**
     * Get elevesBacMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesBacMaster()
    {
        return $this->elevesBacMaster;
    }

    /**
     * Add elevesBacDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $elevesBacDoctorat
     *
     * @return Mention
     */
    public function addElevesBacDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $elevesBacDoctorat)
    {
        $this->elevesBacDoctorat[] = $elevesBacDoctorat;

        return $this;
    }

    /**
     * Remove elevesBacDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $elevesBacDoctorat
     */
    public function removeElevesBacDoctorat(\ReregistrationBundle\Entity\EtudiantDoctorat $elevesBacDoctorat)
    {
        $this->elevesBacDoctorat->removeElement($elevesBacDoctorat);
    }

    /**
     * Get elevesBacDoctorat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesBacDoctorat()
    {
        return $this->elevesBacDoctorat;
    }

    /**
     * Add etudiantLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $etudiantLicence
     *
     * @return Mention
     */
    public function addEtudiantLicence(\ReregistrationBundle\Entity\EtudiantLicence $etudiantLicence)
    {
        $this->etudiantLicence[] = $etudiantLicence;

        return $this;
    }

    /**
     * Remove etudiantLicence
     *
     * @param \ReregistrationBundle\Entity\EtudiantLicence $etudiantLicence
     */
    public function removeEtudiantLicence(\ReregistrationBundle\Entity\EtudiantLicence $etudiantLicence)
    {
        $this->etudiantLicence->removeElement($etudiantLicence);
    }

    /**
     * Get etudiantLicence
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantLicence()
    {
        return $this->etudiantLicence;
    }

    /**
     * Add etudiantMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantMaster
     *
     * @return Mention
     */
    public function addEtudiantMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantMaster)
    {
        $this->etudiantMaster[] = $etudiantMaster;

        return $this;
    }

    /**
     * Remove etudiantMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantMaster
     */
    public function removeEtudiantMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantMaster)
    {
        $this->etudiantMaster->removeElement($etudiantMaster);
    }

    /**
     * Get etudiantMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantMaster()
    {
        return $this->etudiantMaster;
    }

    /**
     * Add etudiantsDoctorat
     *
     * @param \ReregistrationBundle\Entity\EtudiantDoctorat $etudiantsDoctorat
     *
     * @return Mention
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
