<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universite
 *
 * @ORM\Table(name="universite")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\UniversiteRepository")
 */
class Universite
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
     * @ORM\Column(name="nomUniversite", type="string", length=255)
     */
    private $nomUniversite;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Academie")
     * @ORM\JoinColumn(name="academie_id", referencedColumnName="id")
     */
    private $academie;

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
     * Set nomUniversite
     *
     * @param string $nomUniversite
     *
     * @return Universite
     */
    public function setNomUniversite($nomUniversite)
    {
        $this->nomUniversite = $nomUniversite;

        return $this;
    }

    /**
     * Get nomUniversite
     *
     * @return string
     */
    public function getNomUniversite()
    {
        return $this->nomUniversite;
    }

    /**
     * Set academie
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Academie $academie
     *
     * @return Universite
     */
    public function setAcademie(\Usmba\FLRegistrationBundle\Entity\Academie $academie = null)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Academie
     */
    public function getAcademie()
    {
        return $this->academie;
    }
    public function __toString()
    {
        return $this->nomUniversite;
    }
}
