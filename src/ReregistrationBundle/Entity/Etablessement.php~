<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablessement
 *
 * @ORM\Table(name="etablessement")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\EtablessementRepository")
 */
class Etablessement
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="etablisement")
     */
    private $etudians;

    public function __toString()
    {
        return $this->nom;
    }

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
     * @return Etablessement
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
     * @return Etablessement
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
}
