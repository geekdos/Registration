<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiliereDeug
 *
 * @ORM\Table(name="filiere_deug")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FiliereDeugRepository")
 */
class FiliereDeug
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantDeug", mappedBy="filiere")
     */
    private $etudiantsDeug;
    
    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Parcours", inversedBy="filieresDeug")
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
        $this->etudiantsDeug = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return FiliereDeug
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
     * @return FiliereDeug
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
     * Set parcours
     *
     * @param \ReregistrationBundle\Entity\Parcours $parcours
     *
     * @return FiliereDeug
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
