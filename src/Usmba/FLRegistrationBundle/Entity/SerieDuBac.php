<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerieDuBac
 *
 * @ORM\Table(name="serie_du_bac")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\SerieDuBacRepository")
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
     * @ORM\Column(name="nomSerieDuBac", type="string", length=255)
     */
    private $nomSerieDuBac;


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
     * Set nomSerieDuBac
     *
     * @param string $nomSerieDuBac
     *
     * @return SerieDuBac
     */
    public function setNomSerieDuBac($nomSerieDuBac)
    {
        $this->nomSerieDuBac = $nomSerieDuBac;

        return $this;
    }

    /**
     * Get nomSerieDuBac
     *
     * @return string
     */
    public function getNomSerieDuBac()
    {
        return $this->nomSerieDuBac;
    }

    public function __toString()
    {
        return $this->nomSerieDuBac;
    }
}
