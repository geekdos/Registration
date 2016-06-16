<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtablissementBac
 *
 * @ORM\Table(name="etablissement_bac")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\EtablissementBacRepository")
 */
class EtablissementBac
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
     * @ORM\Column(name="nomEtaBac", type="string", length=255)
     */
    private $nomEtaBac;
    
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
     * Set nomEtaBac
     *
     * @param string $nomEtaBac
     *
     * @return EtablissementBac
     */
    public function setNomEtaBac($nomEtaBac)
    {
        $this->nomEtaBac = $nomEtaBac;

        return $this;
    }

    /**
     * Get nomEtaBac
     *
     * @return string
     */
    public function getNomEtaBac()
    {
        return $this->nomEtaBac;
    }

    public function __toString()
    {
        return $this->nomEtaBac;
    }
}
