<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\ProvinceRepository")
 */
class Province
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
     * @ORM\Column(name="nomProvince", type="string", length=255)
     */
    private $nomProvince;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $ville;

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
     * Set nomProvince
     *
     * @param string $nomProvince
     *
     * @return Province
     */
    public function setNomProvince($nomProvince)
    {
        $this->nomProvince = $nomProvince;

        return $this;
    }

    /**
     * Get nomProvince
     *
     * @return string
     */
    public function getNomProvince()
    {
        return $this->nomProvince;
    }

    /**
     * Set ville
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Ville $ville
     *
     * @return Province
     */
    public function setVille(\Usmba\FLRegistrationBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}
