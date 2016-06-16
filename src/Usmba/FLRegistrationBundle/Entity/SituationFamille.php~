<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SituationFamille
 *
 * @ORM\Table(name="situation_famille")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\SituationFamilleRepository")
 */
class SituationFamille
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
     * @ORM\Column(name="nomSituation", type="string", length=255)
     */
    private $nomSituation;


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
     * Set nomSituation
     *
     * @param string $nomSituation
     *
     * @return SituationFamille
     */
    public function setNomSituation($nomSituation)
    {
        $this->nomSituation = $nomSituation;

        return $this;
    }

    /**
     * Get nomSituation
     *
     * @return string
     */
    public function getNomSituation()
    {
        return $this->nomSituation;
    }
}
