<?php

namespace ReregistrationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConfigurationAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('value')
            ->add('online')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('nom')
            ->add('online', null, array(
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
            ->with('Choix de la Configuration', array('class'=> 'col-md-6'))
                ->add('nom', 'choice',  array(
                    'choices' => array(
                        'Lancer l\'inscription'             => 'inscription',
                        'Lancer la Re-inscription'          => 'Re_inscription',

                        'Lancer l\'Inscription Deug'        => 'Inscription_Deug',
                        'Lancer l\'Inscription Licence'     => 'Inscription_Licence',
                        'Lancer l\'Inscription Master'      => 'Inscription_Master',
                        'Lancer l\'Inscription Doctorat'    => 'Inscription_Doctorat',

                        'Lancer la Re-Inscription Deug'        => 'Re_Inscription_Deug',
                        'Lancer la Re-Inscription Licence'     => 'Re_Inscription_Licence',
                        'Lancer la Re-Inscription Master'      => 'Re_Inscription_Master',
                        'Lancer la Re-Inscription Doctorat'    => 'Re_Inscription_Doctorat',

                        'Les Conditions d\'Inscription Licence'  => 'Inscription_Licence_Condition',
                        'Les Conditions d\'Inscription Deug'     => 'Inscription_Deug_Condition',
                        'Les Conditions d\'Inscription Master'   => 'Inscription_Master_Condition',
                        'Les Conditions d\'Inscription Doctorat' => 'Inscription_Doctorat_Condition',

                        'Les Conditions de la Re-Inscription Licence'  => 'Inscription_Licence_Condition',
                        'Les Conditions de la Re-Inscription Deug'     => 'Inscription_Deug_Condition',
                        'Les Conditions de la Re-Inscription Master'   => 'Inscription_Master_Condition',
                        'Les Conditions de la Re-Inscription Doctorat' => 'Inscription_Doctorat_Condition',
                    )
                ))
            ->end()
            ->with('Online', array('class'=> 'col-md-6'))
                ->add('online')
            ->end()
            ->with('La description')
                ->add('value', 'ckeditor', array(
                    'required' => true,
                    'attr' => array('cols' => '8', 'rows' => '8')
                ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nom')
            ->add('value')
            ->add('online')
        ;
    }
}
