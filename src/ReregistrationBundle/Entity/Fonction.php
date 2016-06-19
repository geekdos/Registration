<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FonctionRepository")
 */
class Fonction
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="fonctioPere")
     */
    private $traveursPere;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="fonctioMere")
     */
    private $traveursMere;
    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Fonction
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
     * Constructor
     */
    public function __construct()
    {
        $this->traveursPere = new \Doctrine\Common\Collections\ArrayCollection();
        $this->traveursMere = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add traveursPere
     *
     * @param \ReregistrationBundle\Entity\Etudiant $traveursPere
     *
     * @return Fonction
     */
    public function addTraveursPere(\ReregistrationBundle\Entity\Etudiant $traveursPere)
    {
        $this->traveursPere[] = $traveursPere;

        return $this;
    }

    /**
     * Remove traveursPere
     *
     * @param \ReregistrationBundle\Entity\Etudiant $traveursPere
     */
    public function removeTraveursPere(\ReregistrationBundle\Entity\Etudiant $traveursPere)
    {
        $this->traveursPere->removeElement($traveursPere);
    }

    /**
     * Get traveursPere
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursPere()
    {
        return $this->traveursPere;
    }

    /**
     * Add traveursMere
     *
     * @param \ReregistrationBundle\Entity\Etudiant $traveursMere
     *
     * @return Fonction
     */
    public function addTraveursMere(\ReregistrationBundle\Entity\Etudiant $traveursMere)
    {
        $this->traveursMere[] = $traveursMere;

        return $this;
    }

    /**
     * Remove traveursMere
     *
     * @param \ReregistrationBundle\Entity\Etudiant $traveursMere
     */
    public function removeTraveursMere(\ReregistrationBundle\Entity\Etudiant $traveursMere)
    {
        $this->traveursMere->removeElement($traveursMere);
    }

    /**
     * Get traveursMere
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraveursMere()
    {
        return $this->traveursMere;
    }
}
