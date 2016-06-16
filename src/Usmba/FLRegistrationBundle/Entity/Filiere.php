<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\FiliereRepository")
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
     * @var string
     *
     * @ORM\Column(name="nomFiliere", type="string", length=255)
     */
    private $nomFiliere;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Parcours")
     * @ORM\JoinColumn(name="parcours_id", referencedColumnName="id")
     */
    private $parcours;

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
     * Set nomFiliere
     *
     * @param string $nomFiliere
     *
     * @return Filiere
     */
    public function setNomFiliere($nomFiliere)
    {
        $this->nomFiliere = $nomFiliere;

        return $this;
    }

    /**
     * Get nomFiliere
     *
     * @return string
     */
    public function getNomFiliere()
    {
        return $this->nomFiliere;
    }

    /**
     * Set parcours
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Parcours $parcours
     *
     * @return Filiere
     */
    public function setParcours(\Usmba\FLRegistrationBundle\Entity\Parcours $parcours = null)
    {
        $this->parcours = $parcours;

        return $this;
    }

    /**
     * Get parcours
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Parcours
     */
    public function getParcours()
    {
        return $this->parcours;
    }
    public function __toString()
    {
        return $this->nomFiliere;
    }
}
