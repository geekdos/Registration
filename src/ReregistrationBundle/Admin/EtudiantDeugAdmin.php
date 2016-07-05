<?php

namespace ReregistrationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EtudiantDeugAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id', null, array(
                'label' => 'ID',
            ))
            ->add('cne', null, array(
                'label' => 'CNE',
            ))
            ->add('cin', null, array(
                'label' => 'CIN',
            ))
            ->add('filiere', null, array(
                'label' => 'Filiere',
            ))
            ->add('nomfr', null, array(
                'label' => 'Nom',
            ))
            ->add('prenomfr', null, array(
                'label' => 'Prénom',
            ))
            ->add('nationalite', null, array(
                'label' => 'Nationalité',
            ))
            ->add('sexe', null, array(
                'label' => 'Genre',
            ))
            ->add('handicap', null, array(
                'label' => 'Handicapé',
            ))
            ->add('bourse', null, array(
                'label' => 'Boursier',
            ))
            ->add('lieuNaissFr', null, array(
                'label' => 'Lieu de Naissance',
            ))
            ->add('anneeBac', null, array(
                'label' => 'Année d\'obtention du bac',
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id', null, array(
                'label' => 'ID',
            ))
            ->addIdentifier('cne', null, array(
                'label' => 'CNE',
            ))
            ->add('cin', null, array(
                'label' => 'CIN',
            ))
            ->add('filiere', null, array(
                'label' => 'Filiere',
            ))
            ->add('nomfr', null, array(
                'label' => 'Nom',
            ))
            ->add('prenomfr', null, array(
                'label' => 'Prénom',
            ))
            ->add('gsm', null, array(
                'label' => 'GSM',
            ))
            ->add('email', null, array(
                'label' => 'Email',
            ))
            ->add('inscriptionStatus', null, array(
                'label' => 'Inscrit ?',
                'editable' => true,
                'ajax_hidden' => true
            ))
            ->add('status', null, array(
                'label' => 'Nouveau ?',
                'editable' => true,
                'ajax_hidden' => true
            ))
            ->add('admit', null, array(
                'label' => 'Admit ?',
                'editable' => true,
                'ajax_hidden' => true
            ))
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
        ;
    }

    /**
     * @return array
     */
    public function getExportFields()
    {
        return array(
            'ID' => 'id',
            'Filière' => 'filiere',
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
