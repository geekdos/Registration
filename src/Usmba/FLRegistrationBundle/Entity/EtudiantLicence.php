<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantLicence
 *
 * @ORM\Table(name="etudiant_licence")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\EtudiantLicenceRepository")
 */
class EtudiantLicence extends Etudiant
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

    public function __toString()
    {
        return $this->getPrenomfr();
    }
}
