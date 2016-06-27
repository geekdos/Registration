<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiliereLicence
 *
 * @ORM\Table(name="filiere_licence")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FiliereLicenceRepository")
 */
class FiliereLicence
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantLicence", mappedBy="filiere")
     */
    private $etudiantsLicence;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Parcours", inversedBy="filieresLicence")
     */
    private $parcours;

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
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return FiliereLicence
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
     * @return FiliereLicence
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
     * Set parcours
     *
     * @param \ReregistrationBundle\Entity\Parcours $parcours
     *
     * @return FiliereLicence
     */
    public function setParcours(\ReregistrationBundle\Entity\Parcours $parcours = null)
    {
        $this->parcours = $parcours;

        return $this;
    }

    /**
     * Get parcours
     *
     * @return \ReregistrationBundle\Entity\Parcours
     */
    public function getParcours()
    {
        return $this->parcours;
    }
}
