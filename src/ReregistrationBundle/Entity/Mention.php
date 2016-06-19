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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="mentionBac")
     */
    private $elevesBac;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="mentionDeug")
     */
    private $etudiantDeug;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="mentionLicence")
     */
    private $etudiantLicence;

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
        $this->elevesBac = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantDeug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiantLicence = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add elevesBac
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elevesBac
     *
     * @return Mention
     */
    public function addElevesBac(\ReregistrationBundle\Entity\Etudiant $elevesBac)
    {
        $this->elevesBac[] = $elevesBac;

        return $this;
    }

    /**
     * Remove elevesBac
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elevesBac
     */
    public function removeElevesBac(\ReregistrationBundle\Entity\Etudiant $elevesBac)
    {
        $this->elevesBac->removeElement($elevesBac);
    }

    /**
     * Get elevesBac
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElevesBac()
    {
        return $this->elevesBac;
    }

    /**
     * Add etudiantDeug
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudiantDeug
     *
     * @return Mention
     */
    public function addEtudiantDeug(\ReregistrationBundle\Entity\Etudiant $etudiantDeug)
    {
        $this->etudiantDeug[] = $etudiantDeug;

        return $this;
    }

    /**
     * Remove etudiantDeug
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudiantDeug
     */
    public function removeEtudiantDeug(\ReregistrationBundle\Entity\Etudiant $etudiantDeug)
    {
        $this->etudiantDeug->removeElement($etudiantDeug);
    }

    /**
     * Get etudiantDeug
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantDeug()
    {
        return $this->etudiantDeug;
    }

    /**
     * Add etudiantLicence
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudiantLicence
     *
     * @return Mention
     */
    public function addEtudiantLicence(\ReregistrationBundle\Entity\Etudiant $etudiantLicence)
    {
        $this->etudiantLicence[] = $etudiantLicence;

        return $this;
    }

    /**
     * Remove etudiantLicence
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudiantLicence
     */
    public function removeEtudiantLicence(\ReregistrationBundle\Entity\Etudiant $etudiantLicence)
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
}
