<?php

namespace Usmba\FLRegistrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('nomfr', TextType::class)
            ->add('prenomfr', TextType::class)
            ->add('nomAr', TextType::class)
            ->add('prenomAr', TextType::class)
            ->add('sexe', ChoiceType::class, array(
                'choices' => array(
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin'
                ),
                'invalid_message' => 'Le sexe que vous avez choisi sa march pas %num%',
                'invalid_message_parameters' => array('%num%' => 6),
                'required'    => false,
                'empty_data'  => null
            ))
            ->add('handicap', TextType::class)
            ->add('dateNaiss', BirthdayType::class)
            ->add('lieuNaissFr', TextType::class)
            ->add('lieuNaissAr', TextType::class)
            ->add('cin', TextType::class)
            ->add('adresseEtd', TextareaType::class)
            ->add('gsm', TextType::class)
            ->add('email', EmailType::class)
            ->add('nomPrenomPereFr', TextType::class)
            ->add('nomPrenomPereAr', TextType::class)
            ->add('fonctioPere', TextType::class)
            ->add('nomPrenomMereFr', TextType::class)
            ->add('nomPrenomMereAr', TextType::class)
            ->add('fontionMere', TextType::class)
            ->add('dateObtBac', DateType::class)
            ->add('ville', VilleType::class)
            ->add('typeBac', TypeBacType::class)
            ->add('academie', AcademieType::class)
            ->add('serieDuBac', SerieDuBacType::class)
            ->add('mentionBac', MentionType::class)
            ->add('etablissementBac', EtablissementBacType::class)
            ->add('situationFamille', SituationFamilleType::class)
            ->add('categorieSocioProfessionnelle', CategorieSocioProfessionnelleType::class)
            ->add('Enregistrer', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-success'),
            ))
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
