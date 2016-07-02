<?php

namespace ReregistrationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EtudiantDoctoratAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('handicap')
            ->add('bourse')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('dateNaiss')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomMereFr')
            ->add('anneeBac')
            ->add('anneeDiplome')
            ->add('spesialite')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('cne')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('inscriptionStatus')
            ->add('cin')
            ->add('gsm')
            ->add('email')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('handicap')
            ->add('bourse')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('dateNaiss')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomMereFr')
            ->add('anneeBac')
            ->add('anneeDiplome')
            ->add('spesialite')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('handicap')
            ->add('bourse')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('dateNaiss')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomMereFr')
            ->add('anneeBac')
            ->add('anneeDiplome')
            ->add('spesialite')
        ;
    }

    /**
     * @return array
     */
    public function getExportFields()
    {
        return array(
            'ID' => 'id',
            'Laboratoire' => 'filiere',
            'CNE' => 'cne',
            'Nationalité' => 'nationalite',
            'Nom' => 'nomfr',
            'Prénom' => 'prenomfr',
            'الإسم' => 'nomAr',
            'النسب' => 'prenomAr',
            'Genre' => 'sexe',
            'État civil' => 'etatCivil',
            'Handicapé' => 'handicap',
            'Boursier' => 'bourse',
            'Lieu de naissance' => 'lieuNaissFr',
            'مكان الإزدياد' => 'lieuNaissAr',
            'Date de Naissance' => 'birthDateFormatter',
            'CIN' => 'cin',
            'Adresse' => 'adresseEtd',
            'GSM' => 'gsm',
            'Email' => 'email',
            'Nom complet du père' => 'nomPrenomPereFr',
            'Nom complet du Mère' => 'nomPrenomMereFr',
        );
    }
}
