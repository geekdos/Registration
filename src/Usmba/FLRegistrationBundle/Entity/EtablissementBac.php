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
     * @ORM\ManyToMany(targetEntity="Usmba\FLRegistrationBundle\Entity\SerieDuBac", inversedBy="serieBacListe")
     * @ORM\JoinTable(name="serie_bac_liste")
     */
    private $serieBacListe;

    public function __construct() {
        $this->serieBacListe = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add serieBacListe
     *
     * @param \Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieBacListe
     *
     * @return EtablissementBac
     */
    public function addSerieBacListe(\Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieBacListe)
    {
        $this->serieBacListe[] = $serieBacListe;

        return $this;
    }

    /**
     * Remove serieBacListe
     *
     * @param \Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieBacListe
     */
    public function removeSerieBacListe(\Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieBacListe)
    {
        $this->serieBacListe->removeElement($serieBacListe);
    }

    /**
     * Get serieBacListe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSerieBacListe()
    {
        return $this->serieBacListe;
    }

    public function __toString()
    {
        return $this->nomEtaBac;
    }
}
