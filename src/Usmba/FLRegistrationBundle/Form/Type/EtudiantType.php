<?php

namespace Usmba\FLRegistrationBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cne', TextType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('nomAr', TextType::class)
            ->add('prenomAr', TextType::class)
            ->add('sexe', RadioType::class)
            ->add('handicap', RadioType::class)
            ->add('dateNaiss', BirthdayType::class)
            ->add('lieuNaissFr', TextType::class)
            ->add('lieuNaissAr', TextType::class)
            ->add('cin', TextType::class)
            ->add('situationFamille', SituationFamilleType::class)
            ->add('categorieSocioProfessionnelle', CategorieSocioProfessionnelleType::class)
            //Coordonnés
            ->add('dateObtBac', DateType::class)
            ->add('adresseEtd', TextareaType::class)
            ->add('gsm', TextType::class)
            ->add('email', EmailType::class)
            ->add('nomPrenomPereFr', TextType::class)
            ->add('nomPrenomPereAr', TextType::class)
            ->add('fonctioPere', TextType::class)
            ->add('nomPrenomMereFr', TextType::class)
            ->add('nomPrenomMereAr', TextType::class)
            ->add('fontionMere', TextType::class)
            //Informations Baccalauéat
            ->add('typeBac', TextType::class)
            ->add('academie', AcademieType::class)
            ->add('serieDuBac', SerieDuBacType::class)
            ->add('mentionBac', MentionType::class)
            ->add('dateObtBac', DateType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Usmba\FLRegistrationBundle\Entity\Etudiant'
        ));
    }
}
