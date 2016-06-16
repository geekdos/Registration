<?php

namespace Usmba\FLRegistrationBundle\Admin;

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
            ->addIdentifier('id')
            ->addIdentifier('cne')
            ->add('nomfr')
            ->add('prenomfr')
            ->add('sexe')
            ->add('handicap')
            ->add('dateNaiss')
            ->add('lieuNaissFr')
            ->add('cin')
            ->add('adresseEtd')
            ->add('gsm')
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
            ->add('typeBac', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\TypeBac',
                'property' => 'nom',
            ))
            ->add('academie', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\Academie',
                'property' => 'nom',
            ))
            ->add('serieDuBac', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\SerieDuBac',
                'property' => 'nomSerieDuBac',
            ))
            ->add('mentionBac', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\Mention',
                'property' => 'nomMention',
            ))
            ->add('dateObtBac')
            ->add('etablissementBac', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\EtablissementBac',
                'property' => 'nomEtaBac',
            ))
            ->add('situationFamille', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\SituationFamille',
                'property' => 'nomSituation',
            ))
            ->add('categorieSocioProfessionnelle', 'sonata_type_model', array(
                'class' => 'Usmba\FLRegistrationBundle\Entity\CategorieSocioProfessionnelle',
                'property' => 'cspetud',
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
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
