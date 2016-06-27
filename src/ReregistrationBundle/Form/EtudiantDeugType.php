<?php

namespace ReregistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantDeugType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        $builder
        ->add('cne', TextType::class, array(
            'label' => 'CNE (*) | الرقم الوطني للطالب'
        ))
        ->add('nationalite', ChoiceType::class, array(
            'choices'  => array(
                'Marocaine' => 'Marocaine',
                'Etranger' => 'Etranger'
            ),
            'label' => 'Nationalité (*) | الجنسية'
        ))
        ->add('nomfr', TextType::class, array(
            'label' => 'Nom (*) | نسبك بالفرنسية'
        ))
        ->add('prenomfr',TextType::class, array(
            'label' => 'Prénom (*) | إسمك بالفرنسية'
        ))
        ->add('prenomAr',TextType::class, array(
            'label' => 'الإسم (*)'
        ))
        ->add('nomAr',TextType::class, array(
            'label' => 'النسب (*)'
        ))
        ->add('sexe', ChoiceType::class, array(
            'choices'  => array(
                'Masculin  | ذكر' => 'Masculin',
                'Féminin | أنثى' => 'Féminin'
            ),
            'label' => 'Sexe (*) | الجنس'
        ))
        ->add('etatCivil', ChoiceType::class, array(
            'choices'  => array(
                'Célibataire | عازب' => 'Célebataire',
                'Marier | متزوج' => 'Marier',
                'Divorcer | مطلق' => 'Divorcer'
            ),
            'label' => 'État civil (*) | الحالة المدنية'
        ))
        ->add('statutActuel', null, array(
            'label' => 'Statut actuel (*) | الوضع الحالي'
        ))
        ->add('handicap', CheckboxType::class, array(
                'label' => 'Avez vous un handicape(*) | هل لديك إعاقة',
                'required' => false
            )
        )
        ->add('bourse', CheckboxType::class, array(
                'label' => 'Boursier (*) | هل لديك المنحة',
                'required' => false
            )
        )
        ->add('lieuNaissFr',TextType::class, array(
            'label' => 'مكان الإزدياد  |  Lieu de naissance'
        ))
        ->add('lieuNaissAr',TextType::class, array(
            'label' => 'مكان الإزدياد (*)'
        ))
        ->add('dateNaiss', DateType::class,array(
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'label' => 'تاريخ الإزدياد (*)Date de naissance'
        ))
        ->add('cin',TextType::class, array(
            'label' => 'CIN (*) | رقم البطاقة الوطنية'
        ))
        ->add('adresseEtd',TextType::class, array(
            'label' => 'Adresse (*) | العنوان'
        ))
        ->add('ville', null, array(
            'label' => 'Ville (*) | المدينة'
        ))
        ->add('gsm',TextType::class, array(
            'label' => 'GSM (*) | الهاتف'
        ))
        ->add('email',TextType::class, array(
            'label' => 'Email (*) | البريد الإلكتروني'
        ))
        ->add('nomPrenomPereFr',TextType::class, array(
            'label' => 'Nom et prénom du pére (*) | الاسم الكامل للأب'
        ))
        ->add('fonctioPere', null, array(
            'label' => 'Fonction du pére (*) | وظيفة اللأب'
        ))
        ->add('nomPrenomMereFr',TextType::class, array(
            'label' => 'Nom et prénom de la mére (*) | الاسم الأم الكامل '
        ))
        ->add('fonctioMere',null, array(
            'label' => 'Fonction du pére (*) | وظيفة الأم'
        ))
        ->add('typeBac', null, array(
            'label' => 'Type du Baccalauréat (*) | نوع البكالوريا'
        ))
        ->add('anneeBac', null, array(
            'label' => 'Année d\'obtention du baccalauréat (*) | سنة الحصل على البكالوريا'
        ))
        ->add('academie', null, array(
            'label' => 'Acadimie (*) | الأكادمية'
        ))
        ->add('province', null, array(
            'label' => 'Province (*) | الإقليم'
        ))
        ->add('serieBac', null, array(
            'label' => 'Série du baccalauréat (*) | مسلك البكالوريا'
        ))
        ->add('mentionBac', null, array(
            'label' => 'Mention du baccalauréat (*) | ميزة البكالوريا'
        ))
        ->add('filiere', null, array(
            'label' => ' '
        ))
    ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ReregistrationBundle\Entity\EtudiantDeug'
        ));
    }
}
