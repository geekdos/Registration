<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantLicence
 *
 * @ORM\Table(name="etudiant_licence")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\EtudiantLicenceRepository")
 */
class EtudiantLicence
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
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=10)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=10)
     */
    private $nationalite;

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
     * @var string
     *
     * @ORM\Column(name="etatCivil", type="string", length=100)
     */
    private $etatCivil;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\EtatActuel", inversedBy="etudiantsLicence")
     */
    private $statutActuel;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="boolean")
     */
    private $handicap;

    /**
     * @var bool
     *
     * @ORM\Column(name="bourse", type="boolean")
     */
    private $bourse;

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
     * @ORM\Column(name="dateNaiss", type="datetime", length=255)
     */
    private $dateNaiss;

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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Ville", inversedBy="habitantsLicence")
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=30, nullable=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomPereFr", type="string", length=255)
     */
    private $nomPrenomPereFr;


    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Fonction", inversedBy="traveursPereLicence")
     */
    private $fonctioPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomMereFr", type="string", length=255)
     */
    private $nomPrenomMereFr;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Fonction", inversedBy="traveursMereLicence")
     */
    private $fonctioMere;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\TypeBac", inversedBy="elevesLicence")
     */
    private $typeBac;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Academie", inversedBy="elevesLicence")
     */
    private $academie;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\SerieDuBac", inversedBy="elevesLicence")
     */
    private $serieBac;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeBac", type="string", length=255)
     */
    private $anneeBac;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeDiplome", type="string", length=255)
     */
    private $anneeDiplome;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="elevesBacLicence")
     */
    private $mentionBac;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Province", inversedBy="etudiantsLicence")
     */
    private $province;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="etudiantLicence")
     *
     */
    private $mentionDeug;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\TypeDiplome", inversedBy="etudiantsLicence")
     */
    private $typeDiplome;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Universite", inversedBy="etudiantsLicence")
     */
    private $universite;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Etablessement", inversedBy="etudiantsLicence")
     */
    private $etablisement;

    /**
     * @var string
     *
     * @ORM\Column(name="spesialite", type="string", length=255)
     */
    private $spesialite;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\FiliereLicence", inversedBy="etudiantsLicence")
     */
    private $filiere;

    /**
     * @var string
     *
     * @ORM\Column(name="inscriptionStatus", type="boolean", nullable=true)
     */
    private $inscriptionStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="admit", type="boolean", nullable=true)
     */
    private $admit;
    
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nomfr . ' ' . $this->prenomfr . ' ' . $this->cne;
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return EtudiantLicence
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
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return EtudiantLicence
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     *
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * Set etatCivil
     *
     * @param string $etatCivil
     *
     * @return EtudiantLicence
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil
     *
     * @return string
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set handicap
     *
     * @param boolean $handicap
     *
     * @return EtudiantLicence
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
     * Set bourse
     *
     * @param boolean $bourse
     *
     * @return EtudiantLicence
     */
    public function setBourse($bourse)
    {
        $this->bourse = $bourse;

        return $this;
    }

    /**
     * Get bourse
     *
     * @return boolean
     */
    public function getBourse()
    {
        return $this->bourse;
    }

    /**
     * Set lieuNaissFr
     *
     * @param string $lieuNaissFr
     *
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return EtudiantLicence
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
     * Set cin
     *
     * @param string $cin
     *
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * @return EtudiantLicence
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
     * Set nomPrenomMereFr
     *
     * @param string $nomPrenomMereFr
     *
     * @return EtudiantLicence
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
     * Set anneeBac
     *
     * @param string $anneeBac
     *
     * @return EtudiantLicence
     */
    public function setAnneeBac($anneeBac)
    {
        $this->anneeBac = $anneeBac;

        return $this;
    }

    /**
     * Get anneeBac
     *
     * @return string
     */
    public function getAnneeBac()
    {
        return $this->anneeBac;
    }

    /**
     * Set anneeDiplome
     *
     * @param string $anneeDiplome
     *
     * @return EtudiantLicence
     */
    public function setAnneeDiplome($anneeDiplome)
    {
        $this->anneeDiplome = $anneeDiplome;

        return $this;
    }

    /**
     * Get anneeDiplome
     *
     * @return string
     */
    public function getAnneeDiplome()
    {
        return $this->anneeDiplome;
    }

    /**
     * Set spesialite
     *
     * @param string $spesialite
     *
     * @return EtudiantLicence
     */
    public function setSpesialite($spesialite)
    {
        $this->spesialite = $spesialite;

        return $this;
    }

    /**
     * Get spesialite
     *
     * @return string
     */
    public function getSpesialite()
    {
        return $this->spesialite;
    }

    /**
     * Set statutActuel
     *
     * @param \ReregistrationBundle\Entity\EtatActuel $statutActuel
     *
     * @return EtudiantLicence
     */
    public function setStatutActuel(\ReregistrationBundle\Entity\EtatActuel $statutActuel = null)
    {
        $this->statutActuel = $statutActuel;

        return $this;
    }

    /**
     * Get statutActuel
     *
     * @return \ReregistrationBundle\Entity\EtatActuel
     */
    public function getStatutActuel()
    {
        return $this->statutActuel;
    }

    /**
     * Set ville
     *
     * @param \ReregistrationBundle\Entity\Ville $ville
     *
     * @return EtudiantLicence
     */
    public function setVille(\ReregistrationBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \ReregistrationBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set fonctioPere
     *
     * @param \ReregistrationBundle\Entity\Fonction $fonctioPere
     *
     * @return EtudiantLicence
     */
    public function setFonctioPere(\ReregistrationBundle\Entity\Fonction $fonctioPere = null)
    {
        $this->fonctioPere = $fonctioPere;

        return $this;
    }

    /**
     * Get fonctioPere
     *
     * @return \ReregistrationBundle\Entity\Fonction
     */
    public function getFonctioPere()
    {
        return $this->fonctioPere;
    }

    /**
     * Set fonctioMere
     *
     * @param \ReregistrationBundle\Entity\Fonction $fonctioMere
     *
     * @return EtudiantLicence
     */
    public function setFonctioMere(\ReregistrationBundle\Entity\Fonction $fonctioMere = null)
    {
        $this->fonctioMere = $fonctioMere;

        return $this;
    }

    /**
     * Get fonctioMere
     *
     * @return \ReregistrationBundle\Entity\Fonction
     */
    public function getFonctioMere()
    {
        return $this->fonctioMere;
    }

    /**
     * Set typeBac
     *
     * @param \ReregistrationBundle\Entity\TypeBac $typeBac
     *
     * @return EtudiantLicence
     */
    public function setTypeBac(\ReregistrationBundle\Entity\TypeBac $typeBac = null)
    {
        $this->typeBac = $typeBac;

        return $this;
    }

    /**
     * Get typeBac
     *
     * @return \ReregistrationBundle\Entity\TypeBac
     */
    public function getTypeBac()
    {
        return $this->typeBac;
    }

    /**
     * Set academie
     *
     * @param \ReregistrationBundle\Entity\Academie $academie
     *
     * @return EtudiantLicence
     */
    public function setAcademie(\ReregistrationBundle\Entity\Academie $academie = null)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return \ReregistrationBundle\Entity\Academie
     */
    public function getAcademie()
    {
        return $this->academie;
    }

    /**
     * Set serieBac
     *
     * @param \ReregistrationBundle\Entity\SerieDuBac $serieBac
     *
     * @return EtudiantLicence
     */
    public function setSerieBac(\ReregistrationBundle\Entity\SerieDuBac $serieBac = null)
    {
        $this->serieBac = $serieBac;

        return $this;
    }

    /**
     * Get serieBac
     *
     * @return \ReregistrationBundle\Entity\SerieDuBac
     */
    public function getSerieBac()
    {
        return $this->serieBac;
    }

    /**
     * Set mentionBac
     *
     * @param \ReregistrationBundle\Entity\Mention $mentionBac
     *
     * @return EtudiantLicence
     */
    public function setMentionBac(\ReregistrationBundle\Entity\Mention $mentionBac = null)
    {
        $this->mentionBac = $mentionBac;

        return $this;
    }

    /**
     * Get mentionBac
     *
     * @return \ReregistrationBundle\Entity\Mention
     */
    public function getMentionBac()
    {
        return $this->mentionBac;
    }

    /**
     * Set province
     *
     * @param \ReregistrationBundle\Entity\Province $province
     *
     * @return EtudiantLicence
     */
    public function setProvince(\ReregistrationBundle\Entity\Province $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \ReregistrationBundle\Entity\Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set mentionDeug
     *
     * @param \ReregistrationBundle\Entity\Mention $mentionDeug
     *
     * @return EtudiantLicence
     */
    public function setMentionDeug(\ReregistrationBundle\Entity\Mention $mentionDeug = null)
    {
        $this->mentionDeug = $mentionDeug;

        return $this;
    }

    /**
     * Get mentionDeug
     *
     * @return \ReregistrationBundle\Entity\Mention
     */
    public function getMentionDeug()
    {
        return $this->mentionDeug;
    }

    /**
     * Set typeDiplome
     *
     * @param \ReregistrationBundle\Entity\TypeDiplome $typeDiplome
     *
     * @return EtudiantLicence
     */
    public function setTypeDiplome(\ReregistrationBundle\Entity\TypeDiplome $typeDiplome = null)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }

    /**
     * Get typeDiplome
     *
     * @return \ReregistrationBundle\Entity\TypeDiplome
     */
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set universite
     *
     * @param \ReregistrationBundle\Entity\Universite $universite
     *
     * @return EtudiantLicence
     */
    public function setUniversite(\ReregistrationBundle\Entity\Universite $universite = null)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return \ReregistrationBundle\Entity\Universite
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set etablisement
     *
     * @param \ReregistrationBundle\Entity\Etablessement $etablisement
     *
     * @return EtudiantLicence
     */
    public function setEtablisement(\ReregistrationBundle\Entity\Etablessement $etablisement = null)
    {
        $this->etablisement = $etablisement;

        return $this;
    }

    /**
     * Get etablisement
     *
     * @return \ReregistrationBundle\Entity\Etablessement
     */
    public function getEtablisement()
    {
        return $this->etablisement;
    }

    /**
     * Set filiere
     *
     * @param \ReregistrationBundle\Entity\FiliereLicence $filiere
     *
     * @return EtudiantLicence
     */
    public function setFiliere(\ReregistrationBundle\Entity\FiliereLicence $filiere = null)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \ReregistrationBundle\Entity\FiliereLicence
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     *
     * @return EtudiantLicence
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set inscriptionStatus
     *
     * @param boolean $inscriptionStatus
     *
     * @return EtudiantLicence
     */
    public function setInscriptionStatus($inscriptionStatus)
    {
        $this->inscriptionStatus = $inscriptionStatus;

        return $this;
    }

    /**
     * Get inscriptionStatus
     *
     * @return boolean
     */
    public function getInscriptionStatus()
    {
        return $this->inscriptionStatus;
    }

    public function getBirthDateFormatter(){
        return ($this->dateNaiss instanceof \DateTime) ? $this->dateNaiss->format("Y-m-d") : "";
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return EtudiantLicence
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set admit
     *
     * @param boolean $admit
     *
     * @return EtudiantLicence
     */
    public function setAdmit($admit)
    {
        $this->admit = $admit;

        return $this;
    }

    /**
     * Get admit
     *
     * @return boolean
     */
    public function getAdmit()
    {
        return $this->admit;
    }
}
