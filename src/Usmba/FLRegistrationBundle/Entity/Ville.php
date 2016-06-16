<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\VilleRepository")
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
     * @ORM\Column(name="nomVilleFr", type="string", length=255)
     */
    private $nomVilleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVilleAr", type="string", length=255)
     */
    private $nomVilleAr;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Pays")
     * @ORM\JoinColumn(name="pays_id", referencedColumnName="id")
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

    /**
     * Set nomVilleFr
     *
     * @param string $nomVilleFr
     *
     * @return Ville
     */
    public function setNomVilleFr($nomVilleFr)
    {
        $this->nomVilleFr = $nomVilleFr;

        return $this;
    }

    /**
     * Get nomVilleFr
     *
     * @return string
     */
    public function getNomVilleFr()
    {
        return $this->nomVilleFr;
    }

    /**
     * Set nomVilleAr
     *
     * @param string $nomVilleAr
     *
     * @return Ville
     */
    public function setNomVilleAr($nomVilleAr)
    {
        $this->nomVilleAr = $nomVilleAr;

        return $this;
    }

    /**
     * Get nomVilleAr
     *
     * @return string
     */
    public function getNomVilleAr()
    {
        return $this->nomVilleAr;
    }

    /**
     * Set pays
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Pays $pays
     *
     * @return Ville
     */
    public function setPays(\Usmba\FLRegistrationBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
    
    public function __toString()
    {
        return $this->nomVilleFr;
    }
}
