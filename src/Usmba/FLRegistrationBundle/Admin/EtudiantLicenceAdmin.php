<?php

namespace Usmba\FLRegistrationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EtudiantLicenceAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cne')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('handicap')
            ->add('dateNaiss')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomPereAr')
            ->add('fonctioPere')
            ->add('nomPrenomMereFr')
            ->add('nomPrenomMereAr')
            ->add('fontionMere')
            ->add('dateObtBac')
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
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('handicap')
            ->add('dateNaiss')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomPereAr')
            ->add('fonctioPere')
            ->add('nomPrenomMereFr')
            ->add('nomPrenomMereAr')
            ->add('fontionMere')
            ->add('dateObtBac')
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
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('handicap')
            ->add('dateNaiss')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomPereAr')
            ->add('fonctioPere')
            ->add('nomPrenomMereFr')
            ->add('nomPrenomMereAr')
            ->add('fontionMere')
            ->add('dateObtBac')
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
            ->add('nomfr')
            ->add('prenomfr')
            ->add('nomAr')
            ->add('prenomAr')
            ->add('sexe')
            ->add('handicap')
            ->add('dateNaiss')
            ->add('lieuNaissFr')
            ->add('lieuNaissAr')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
            ->add('email')
            ->add('nomPrenomPereFr')
            ->add('nomPrenomPereAr')
            ->add('fonctioPere')
            ->add('nomPrenomMereFr')
            ->add('nomPrenomMereAr')
            ->add('fontionMere')
            ->add('dateObtBac')
        ;
    }
}
