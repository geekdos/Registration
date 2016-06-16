<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="parcours")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\ParcoursRepository")
 */
class Parcours
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
     * @ORM\Column(name="nomParcours", type="string", length=255)
     */
    private $nomParcours;
    
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
     * Set nomParcours
     *
     * @param string $nomParcours
     *
     * @return Parcours
     */
    public function setNomParcours($nomParcours)
    {
        $this->nomParcours = $nomParcours;

        return $this;
    }

    /**
     * Get nomParcours
     *
     * @return string
     */
    public function getNomParcours()
    {
        return $this->nomParcours;
    }
}
