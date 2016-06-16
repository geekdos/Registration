<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="Usmba\FLRegistrationBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAr", type="string", length=255)
     */
    private $nomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAr", type="string", length=255)
     */
    private $prenomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="boolean")
     */
    private $handicap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObtBac", type="datetime")
     */
    private $dateObtBac;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtd", type="string", length=255)
     */
    private $adresseEtd;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Etablissement")
     * @ORM\JoinColumn(name="etablissement_id", referencedColumnName="id")
     */
    private $etablissement;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\SituationFamille")
     * @ORM\JoinColumn(name="situationFamille_id", referencedColumnName="id")
     */
    private $situationFamille;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Filiere")
     * @ORM\JoinColumn(name="filiere_id", referencedColumnName="id")
     */
    private $filiere;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle")
     * @ORM\JoinColumn(name="categorieSocioProfessionnelle_id", referencedColumnName="id")
     */
    private $categorieSocioProfessionnelle;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\SerieDuBac")
     * @ORM\JoinColumn(name="serieDuBac_id", referencedColumnName="id")
     */
    private $serieDuBac;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Mention")
     * @ORM\JoinColumn(name="mention_id", referencedColumnName="id")
     */
    private $mention;
    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nomAr
     *
     * @param string $nomAr
     *
     * @return Etudiant
     */
    public function setNomAr($nomAr)
    {
        $this->nomAr = $nomAr;

        return $this;
    }

    /**
     * Get nomAr
     *
     * @return string
     */
    public function getNomAr()
    {
        return $this->nomAr;
    }

    /**
     * Set prenomAr
     *
     * @param string $prenomAr
     *
     * @return Etudiant
     */
    public function setPrenomAr($prenomAr)
    {
        $this->prenomAr = $prenomAr;

        return $this;
    }

    /**
     * Get prenomAr
     *
     * @return string
     */
    public function getPrenomAr()
    {
        return $this->prenomAr;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Etudiant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set handicap
     *
     * @param boolean $handicap
     *
     * @return Etudiant
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return bool
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set dateObtBac
     *
     * @param \DateTime $dateObtBac
     *
     * @return Etudiant
     */
    public function setDateObtBac($dateObtBac)
    {
        $this->dateObtBac = $dateObtBac;

        return $this;
    }

    /**
     * Get dateObtBac
     *
     * @return \DateTime
     */
    public function getDateObtBac()
    {
        return $this->dateObtBac;
    }

    /**
     * Set adresseEtd
     *
     * @param string $adresseEtd
     *
     * @return Etudiant
     */
    public function setAdresseEtd($adresseEtd)
    {
        $this->adresseEtd = $adresseEtd;

        return $this;
    }

    /**
     * Get adresseEtd
     *
     * @return string
     */
    public function getAdresseEtd()
    {
        return $this->adresseEtd;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Etudiant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set etablissement
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Etablissement $etablissement
     *
     * @return Etudiant
     */
    public function setEtablissement(\Usmba\FLRegistrationBundle\Entity\Etablissement $etablissement = null)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set situationFamille
     *
     * @param \Usmba\FLRegistrationBundle\Entity\SituationFamille $situationFamille
     *
     * @return Etudiant
     */
    public function setSituationFamille(\Usmba\FLRegistrationBundle\Entity\SituationFamille $situationFamille = null)
    {
        $this->situationFamille = $situationFamille;

        return $this;
    }

    /**
     * Get situationFamille
     *
     * @return \Usmba\FLRegistrationBundle\Entity\SituationFamille
     */
    public function getSituationFamille()
    {
        return $this->situationFamille;
    }

    /**
     * Set filiere
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Filiere $filiere
     *
     * @return Etudiant
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
     * Set categorieSocioProfessionnelle
     *
     * @param \Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle $categorieSocioProfessionnelle
     *
     * @return Etudiant
     */
    public function setCategorieSocioProfessionnelle(\Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle $categorieSocioProfessionnelle = null)
    {
        $this->categorieSocioProfessionnelle = $categorieSocioProfessionnelle;

        return $this;
    }

    /**
     * Get categorieSocioProfessionnelle
     *
     * @return \Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle
     */
    public function getCategorieSocioProfessionnelle()
    {
        return $this->categorieSocioProfessionnelle;
    }

    /**
     * Set serieDuBac
     *
     * @param \Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieDuBac
     *
     * @return Etudiant
     */
    public function setSerieDuBac(\Usmba\FLRegistrationBundle\Entity\SerieDuBac $serieDuBac = null)
    {
        $this->serieDuBac = $serieDuBac;

        return $this;
    }

    /**
     * Get serieDuBac
     *
     * @return \Usmba\FLRegistrationBundle\Entity\SerieDuBac
     */
    public function getSerieDuBac()
    {
        return $this->serieDuBac;
    }

    /**
     * Set mention
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Mention $mention
     *
     * @return Etudiant
     */
    public function setMention(\Usmba\FLRegistrationBundle\Entity\Mention $mention = null)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Mention
     */
    public function getMention()
    {
        return $this->mention;
    }
}
