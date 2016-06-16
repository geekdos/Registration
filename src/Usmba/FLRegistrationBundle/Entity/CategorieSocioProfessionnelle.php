<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieSocioProfessionnelle
 *
 * @ORM\Table(name="categorie_socio_professionnelle")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\CategorieSocioProfessionnelleRepository")
 */
class CategorieSocioProfessionnelle
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
     * @ORM\Column(name="nomCategorieP", type="string", length=255)
     */
    private $nomCategorieP;

    /**
     * @var string
     *
     * @ORM\Column(name="cspetud", type="string", length=255)
     */
    private $cspetud;


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
     * Set nomCategorieP
     *
     * @param string $nomCategorieP
     *
     * @return CategorieSocioProfessionnelle
     */
    public function setNomCategorieP($nomCategorieP)
    {
        $this->nomCategorieP = $nomCategorieP;

        return $this;
    }

    /**
     * Get nomCategorieP
     *
     * @return string
     */
    public function getNomCategorieP()
    {
        return $this->nomCategorieP;
    }

    /**
     * Set cspetud
     *
     * @param string $cspetud
     *
     * @return CategorieSocioProfessionnelle
     */
    public function setCspetud($cspetud)
    {
        $this->cspetud = $cspetud;

        return $this;
    }

    /**
     * Get cspetud
     *
     * @return string
     */
    public function getCspetud()
    {
        return $this->cspetud;
    }

    public function __toString()
    {
        return $this->nomCategorieP;
    }
}
