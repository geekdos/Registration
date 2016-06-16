<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mention
 *
 * @ORM\Table(name="mention")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\MentionRepository")
 */
class Mention
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
     * @ORM\Column(name="nomMention", type="string", length=255)
     */
    private $nomMention;


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
     * Set nomMention
     *
     * @param string $nomMention
     *
     * @return Mention
     */
    public function setNomMention($nomMention)
    {
        $this->nomMention = $nomMention;

        return $this;
    }

    /**
     * Get nomMention
     *
     * @return string
     */
    public function getNomMention()
    {
        return $this->nomMention;
    }
}
