<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantDoctorat
 *
 * @ORM\Table(name="etudiant_doctorat")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\EtudiantDoctoratRepository")
 */
class EtudiantDoctorat extends Etudiant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function __construct()
    {
        parent::__construct();
    }

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
