<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantMaster
 *
 * @ORM\Table(name="etudiant_master")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\EtudiantMasterRepository")
 */
class EtudiantMaster extends Etudiant
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

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\TypeDiplome")
     * @ORM\JoinColumn(name="typeDiplome_id", referencedColumnName="id")
     */
    private $typeDiplome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Etablissement")
     * @ORM\JoinColumn(name="etablissement_id", referencedColumnName="id")
     */
    private $etablissementOrigin;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Filiere")
     * @ORM\JoinColumn(name="filiere_id", referencedColumnName="id")
     */
    private $filiere;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Specialite")
     * @ORM\JoinColumn(name="specialite_id", referencedColumnName="id")
     */
    private $specialite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObtDiplome", type="datetime")
     */
    private $dateObtDiplome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Mention")
     * @ORM\JoinColumn(name="mention_diplome_id", referencedColumnName="id")
     */
    private $mentionDiplome;
    

    /**
     * Set dateObtDiplome
     *
     * @param \DateTime $dateObtDiplome
     *
     * @return EtudiantMaster
     */
    public function setDateObtDiplome($dateObtDiplome)
    {
        $this->dateObtDiplome = $dateObtDiplome;

        return $this;
    }

    /**
     * Get dateObtDiplome
     *
     * @return \DateTime
     */
    public function getDateObtDiplome()
    {
        return $this->dateObtDiplome;
    }

    /**
     * Set typeDiplome
     *
     * @param \Usmba\FLRegistrationBundle\Entity\TypeDiplome $typeDiplome
     *
     * @return EtudiantMaster
     */
    public function setTypeDiplome(\Usmba\FLRegistrationBundle\Entity\TypeDiplome $typeDiplome = null)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }

    /**
     * Get typeDiplome
     *
     * @return \Usmba\FLRegistrationBundle\Entity\TypeDiplome
     */
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set etablissementOrigin
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Etablissement $etablissementOrigin
     *
     * @return EtudiantMaster
     */
    public function setEtablissementOrigin(\Usmba\FLRegistrationBundle\Entity\Etablissement $etablissementOrigin = null)
    {
        $this->etablissementOrigin = $etablissementOrigin;

        return $this;
    }

    /**
     * Get etablissementOrigin
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Etablissement
     */
    public function getEtablissementOrigin()
    {
        return $this->etablissementOrigin;
    }

    /**
     * Set filiere
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Filiere $filiere
     *
     * @return EtudiantMaster
     */
    public function setFiliere(\Usmba\FLRegistrationBundle\Entity\Filiere $filiere = null)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Filiere
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set specialite
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Specialite $specialite
     *
     * @return EtudiantMaster
     */
    public function setSpecialite(\Usmba\FLRegistrationBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set mentionDiplome
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Mention $mentionDiplome
     *
     * @return EtudiantMaster
     */
    public function setMentionDiplome(\Usmba\FLRegistrationBundle\Entity\Mention $mentionDiplome = null)
    {
        $this->mentionDiplome = $mentionDiplome;

        return $this;
    }

    /**
     * Get mentionDiplome
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Mention
     */
    public function getMentionDiplome()
    {
        return $this->mentionDiplome;
    }
}
