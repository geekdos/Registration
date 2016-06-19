<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\EtudiantRepository")
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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\EtatActuel", inversedBy="etudiants")
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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Ville", inversedBy="habitants")
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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Fonction", inversedBy="traveursPere")
     */
    private $fonctioPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomMereFr", type="string", length=255)
     */
    private $nomPrenomMereFr;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Fonction", inversedBy="traveursMere")
     */
    private $fonctioMere;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\TypeBac", inversedBy="eleves")
     */
    private $typeBac;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Academie", inversedBy="eleves")
     */
    private $academie;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\SerieDuBac", inversedBy="eleves")
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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="elevesBac")
     */
    private $mentionBac;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Province", inversedBy="etudiant")
     */
    private $province;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="etudiantDeug")
     *
     */
    private $mentionDeug;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\TypeDiplome", inversedBy="etudiants")
     */
    private $typeDiplome;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Universite", inversedBy="etudiants")
     */
    private $universite;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Etablessement", inversedBy="etudiants")
     */
    private $etablisement;

    /**
     * @var string
     *
     * @ORM\Column(name="spesialite", type="string", length=255)
     */
    private $spesialite;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Filiere", inversedBy="etudiants")
     */
    private $filiere;

    /**
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="etudiantLicence")
     */
    private $mentionLicence;


    public function __toString()
    {
        return $this->nomfr;
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
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Etudiant
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
     * Set etatCivil
     *
     * @param string $etatCivil
     *
     * @return Etudiant
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
     * Set bourse
     *
     * @param boolean $bourse
     *
     * @return Etudiant
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
     * Set spesialite
     *
     * @param string $spesialite
     *
     * @return Etudiant
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
     * Set ville
     *
     * @param \ReregistrationBundle\Entity\Ville $ville
     *
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * Set mentionDeug
     *
     * @param \ReregistrationBundle\Entity\Mention $mentionDeug
     *
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * Set filiere
     *
     * @param \ReregistrationBundle\Entity\Filiere $filiere
     *
     * @return Etudiant
     */
    public function setFiliere(\ReregistrationBundle\Entity\Filiere $filiere = null)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \ReregistrationBundle\Entity\Filiere
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set mentionLicence
     *
     * @param \ReregistrationBundle\Entity\Mention $mentionLicence
     *
     * @return Etudiant
     */
    public function setMentionLicence(\ReregistrationBundle\Entity\Mention $mentionLicence = null)
    {
        $this->mentionLicence = $mentionLicence;

        return $this;
    }

    /**
     * Get mentionLicence
     *
     * @return \ReregistrationBundle\Entity\Mention
     */
    public function getMentionLicence()
    {
        return $this->mentionLicence;
    }

    /**
     * Set etablisement
     *
     * @param \ReregistrationBundle\Entity\Etablessement $etablisement
     *
     * @return Etudiant
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
     * Set statutActuel
     *
     * @param \ReregistrationBundle\Entity\EtatActuel $statutActuel
     *
     * @return Etudiant
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
     * Set anneeBac
     *
     * @param string $anneeBac
     *
     * @return Etudiant
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
     * Set province
     *
     * @param \ReregistrationBundle\Entity\Province $province
     *
     * @return Etudiant
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
     * Set anneeDiplome
     *
     * @param string $anneeDiplome
     *
     * @return Etudiant
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
}
