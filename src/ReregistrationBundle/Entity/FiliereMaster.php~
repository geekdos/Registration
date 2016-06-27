<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiliereMaster
 *
 * @ORM\Table(name="filiere_master")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\FiliereMasterRepository")
 */
class FiliereMaster
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
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\EtudiantMaster", mappedBy="filiere")
     */
    private $etudiantsMaster;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Parcours", inversedBy="filieresMaster")
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
        $this->etudiantsMaster = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return FiliereMaster
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
     * Add etudiantsMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster
     *
     * @return FiliereMaster
     */
    public function addEtudiantsMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster)
    {
        $this->etudiantsMaster[] = $etudiantsMaster;

        return $this;
    }

    /**
     * Remove etudiantsMaster
     *
     * @param \ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster
     */
    public function removeEtudiantsMaster(\ReregistrationBundle\Entity\EtudiantMaster $etudiantsMaster)
    {
        $this->etudiantsMaster->removeElement($etudiantsMaster);
    }

    /**
     * Get etudiantsMaster
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiantsMaster()
    {
        return $this->etudiantsMaster;
    }

    /**
     * Set parcours
     *
     * @param \ReregistrationBundle\Entity\Parcours $parcours
     *
     * @return FiliereMaster
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
