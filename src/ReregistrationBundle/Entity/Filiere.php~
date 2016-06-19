<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FiliereRepository")
 */
class Filiere
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="etablisement")
     */
    private $etudians;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Parcours", inversedBy="filieres")
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
        $this->etudians = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Filiere
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
     * Add etudian
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudian
     *
     * @return Filiere
     */
    public function addEtudian(\ReregistrationBundle\Entity\Etudiant $etudian)
    {
        $this->etudians[] = $etudian;

        return $this;
    }

    /**
     * Remove etudian
     *
     * @param \ReregistrationBundle\Entity\Etudiant $etudian
     */
    public function removeEtudian(\ReregistrationBundle\Entity\Etudiant $etudian)
    {
        $this->etudians->removeElement($etudian);
    }

    /**
     * Get etudians
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudians()
    {
        return $this->etudians;
    }

    /**
     * Set parcours
     *
     * @param \ReregistrationBundle\Entity\Parcours $parcours
     *
     * @return Filiere
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
