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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="ville")
     */
    private $habitants;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Pays", inversedBy="villes")
     */
    private $pays;
    
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
        $this->habitants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add habitant
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitant
     *
     * @return Ville
     */
    public function addHabitant(\ReregistrationBundle\Entity\Etudiant $habitant)
    {
        $this->habitants[] = $habitant;

        return $this;
    }

    /**
     * Remove habitant
     *
     * @param \ReregistrationBundle\Entity\Etudiant $habitant
     */
    public function removeHabitant(\ReregistrationBundle\Entity\Etudiant $habitant)
    {
        $this->habitants->removeElement($habitant);
    }

    /**
     * Get habitants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitants()
    {
        return $this->habitants;
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
