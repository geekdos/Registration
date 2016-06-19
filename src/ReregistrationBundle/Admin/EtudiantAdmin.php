<?php

namespace ReregistrationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EtudiantAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('statutActuel')
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
            ->add('spesialite')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper            
            ->addIdentifier('cne')
            ->addIdentifier('id')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('handicap')
            ->add('bourse')
            ->add('lieuNaissFr')
            ->add('gsm')
            ->add('spesialite')
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
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('statutActuel')
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
            ->add('spesialite')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('cne')
            ->add('nationalite')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('etatCivil')
            ->add('statutActuel')
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
            ->add('spesialite')
        ;
    }
}
