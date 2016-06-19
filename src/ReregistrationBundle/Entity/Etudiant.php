<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Entity

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
     * @var string
     *
     * @ORM\Column(name="statutActuel", type="string", length=100)
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
     * @ORM\ManyToOne(targetEntity="ReregistrationBundle\Entity\Mention", inversedBy="elevesBac")
     */
    private $mentionBac;
}
