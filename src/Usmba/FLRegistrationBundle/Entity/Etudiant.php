<?php

namespace Usmba\FLRegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Entity

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
     * @ORM\Column(name="cne", type="string", length=10)
     */
    private $cne;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomfr", type="string", length=255)
     */
    private $nomfr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenomfr", type="string", length=255)
     */
    private $prenomfr;

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
     * @var string
     *
     * @ORM\Column(name="dateNaiss", type="datetime", length=255)
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissFr", type="string", length=255)
     */
    private $lieuNaissFr;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissAr", type="string", length=255)
     */
    private $lieuNaissAr;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=20)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtd", type="string", length=255)
     */
    private $adresseEtd;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=30)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomPereFr", type="string", length=255)
     */
    private $nomPrenomPereFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomPereAr", type="string", length=255)
     */
    private $nomPrenomPereAr;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctioPere", type="string", length=255)
     */
    private $fonctioPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomMereFr", type="string", length=255)
     */
    private $nomPrenomMereFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomMereAr", type="string", length=255)
     */
    private $nomPrenomMereAr;

    /**
     * @var string
     *
     * @ORM\Column(name="fontionMere", type="string", length=255)
     */
    private $fontionMere;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\TypeBac")
     * @ORM\JoinColumn(name="typeBac_id", referencedColumnName="id")
     */
    private $typeBac;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Academie")
     * @ORM\JoinColumn(name="academie_id", referencedColumnName="id")
     */
    private $academie;


    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\SerieDuBac")
     * @ORM\JoinColumn(name="serieDuBac_id", referencedColumnName="id")
     */
    private $serieDuBac;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\Mention")
     * @ORM\JoinColumn(name="mention_bac_id", referencedColumnName="id")
     */
    private $mentionBac;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObtBac", type="datetime")
     */
    private $dateObtBac;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\EtablissementBac")
     * @ORM\JoinColumn(name="etablissement_bac_id", referencedColumnName="id")
     */
    private $etablissementBac;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\SituationFamille")
     * @ORM\JoinColumn(name="situationFamille_id", referencedColumnName="id")
     */
    private $situationFamille;

    /**
     * @ORM\ManyToOne(targetEntity="Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle")
     * @ORM\JoinColumn(name="categorieSocioProfessionnelle_id", referencedColumnName="id")
     */
    private $categorieSocioProfessionnelle;

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
     * Set cne
     *
     * @param string $cne
     *
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     *
     * @return Etudiant
     */
    public function setNomfr($nomfr)
    {
        $this->nomfr = $nomfr;

        return $this;
    }

    /**
     * Get nomfr
     *
     * @return string
     */
    public function getNomfr()
    {
        return $this->nomfr;
    }

    /**
     * Set prenomfr
     *
     * @param string $prenomfr
     *
     * @return Etudiant
     */
    public function setPrenomfr($prenomfr)
    {
        $this->prenomfr = $prenomfr;

        return $this;
    }

    /**
     * Get prenomfr
     *
     * @return string
     */
    public function getPrenomfr()
    {
        return $this->prenomfr;
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
     * @return boolean
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return Etudiant
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set lieuNaissFr
     *
     * @param string $lieuNaissFr
     *
     * @return Etudiant
     */
    public function setLieuNaissFr($lieuNaissFr)
    {
        $this->lieuNaissFr = $lieuNaissFr;

        return $this;
    }

    /**
     * Get lieuNaissFr
     *
     * @return string
     */
    public function getLieuNaissFr()
    {
        return $this->lieuNaissFr;
    }

    /**
     * Set lieuNaissAr
     *
     * @param string $lieuNaissAr
     *
     * @return Etudiant
     */
    public function setLieuNaissAr($lieuNaissAr)
    {
        $this->lieuNaissAr = $lieuNaissAr;

        return $this;
    }

    /**
     * Get lieuNaissAr
     *
     * @return string
     */
    public function getLieuNaissAr()
    {
        return $this->lieuNaissAr;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
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
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Etudiant
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
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
     * Set nomPrenomPereFr
     *
     * @param string $nomPrenomPereFr
     *
     * @return Etudiant
     */
    public function setNomPrenomPereFr($nomPrenomPereFr)
    {
        $this->nomPrenomPereFr = $nomPrenomPereFr;

        return $this;
    }

    /**
     * Get nomPrenomPereFr
     *
     * @return string
     */
    public function getNomPrenomPereFr()
    {
        return $this->nomPrenomPereFr;
    }

    /**
     * Set nomPrenomPereAr
     *
     * @param string $nomPrenomPereAr
     *
     * @return Etudiant
     */
    public function setNomPrenomPereAr($nomPrenomPereAr)
    {
        $this->nomPrenomPereAr = $nomPrenomPereAr;

        return $this;
    }

    /**
     * Get nomPrenomPereAr
     *
     * @return string
     */
    public function getNomPrenomPereAr()
    {
        return $this->nomPrenomPereAr;
    }

    /**
     * Set fonctioPere
     *
     * @param string $fonctioPere
     *
     * @return Etudiant
     */
    public function setFonctioPere($fonctioPere)
    {
        $this->fonctioPere = $fonctioPere;

        return $this;
    }

    /**
     * Get fonctioPere
     *
     * @return string
     */
    public function getFonctioPere()
    {
        return $this->fonctioPere;
    }

    /**
     * Set nomPrenomMereFr
     *
     * @param string $nomPrenomMereFr
     *
     * @return Etudiant
     */
    public function setNomPrenomMereFr($nomPrenomMereFr)
    {
        $this->nomPrenomMereFr = $nomPrenomMereFr;

        return $this;
    }

    /**
     * Get nomPrenomMereFr
     *
     * @return string
     */
    public function getNomPrenomMereFr()
    {
        return $this->nomPrenomMereFr;
    }

    /**
     * Set nomPrenomMereAr
     *
     * @param string $nomPrenomMereAr
     *
     * @return Etudiant
     */
    public function setNomPrenomMereAr($nomPrenomMereAr)
    {
        $this->nomPrenomMereAr = $nomPrenomMereAr;

        return $this;
    }

    /**
     * Get nomPrenomMereAr
     *
     * @return string
     */
    public function getNomPrenomMereAr()
    {
        return $this->nomPrenomMereAr;
    }

    /**
     * Set fontionMere
     *
     * @param string $fontionMere
     *
     * @return Etudiant
     */
    public function setFontionMere($fontionMere)
    {
        $this->fontionMere = $fontionMere;

        return $this;
    }

    /**
     * Get fontionMere
     *
     * @return string
     */
    public function getFontionMere()
    {
        return $this->fontionMere;
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
     * Set ville
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Ville $ville
     *
     * @return Etudiant
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

    /**
     * Set typeBac
     *
     * @param \Usmba\FLRegistrationBundle\Entity\TypeBac $typeBac
     *
     * @return Etudiant
     */
    public function setTypeBac(\Usmba\FLRegistrationBundle\Entity\TypeBac $typeBac = null)
    {
        $this->typeBac = $typeBac;

        return $this;
    }

    /**
     * Get typeBac
     *
     * @return \Usmba\FLRegistrationBundle\Entity\TypeBac
     */
    public function getTypeBac()
    {
        return $this->typeBac;
    }

    /**
     * Set academie
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Academie $academie
     *
     * @return Etudiant
     */
    public function setAcademie(\Usmba\FLRegistrationBundle\Entity\Academie $academie = null)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Academie
     */
    public function getAcademie()
    {
        return $this->academie;
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
     * Set mentionBac
     *
     * @param \Usmba\FLRegistrationBundle\Entity\Mention $mentionBac
     *
     * @return Etudiant
     */
    public function setMentionBac(\Usmba\FLRegistrationBundle\Entity\Mention $mentionBac = null)
    {
        $this->mentionBac = $mentionBac;

        return $this;
    }

    /**
     * Get mentionBac
     *
     * @return \Usmba\FLRegistrationBundle\Entity\Mention
     */
    public function getMentionBac()
    {
        return $this->mentionBac;
    }

    /**
     * Set etablissementBac
     *
     * @param \Usmba\FLRegistrationBundle\Entity\EtablissementBac $etablissementBac
     *
     * @return Etudiant
     */
    public function setEtablissementBac(\Usmba\FLRegistrationBundle\Entity\EtablissementBac $etablissementBac = null)
    {
        $this->etablissementBac = $etablissementBac;

        return $this;
    }

    /**
     * Get etablissementBac
     *
     * @return \Usmba\FLRegistrationBundle\Entity\EtablissementBac
     */
    public function getEtablissementBac()
    {
        return $this->etablissementBac;
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

    public function __toString()
    {
        return $this->prenomfr;
    }
}
