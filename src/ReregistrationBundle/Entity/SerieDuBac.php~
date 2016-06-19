<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerieDuBac
 *
 * @ORM\Table(name="serie_du_bac")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\SerieDuBacRepository")
 */
class SerieDuBac
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="serieBac")
     */
    private $eleves;

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
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return SerieDuBac
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
     * Add elefe
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elefe
     *
     * @return SerieDuBac
     */
    public function addElefe(\ReregistrationBundle\Entity\Etudiant $elefe)
    {
        $this->eleves[] = $elefe;

        return $this;
    }

    /**
     * Remove elefe
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elefe
     */
    public function removeElefe(\ReregistrationBundle\Entity\Etudiant $elefe)
    {
        $this->eleves->removeElement($elefe);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleves()
    {
        return $this->eleves;
    }
}
