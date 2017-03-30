<?php

namespace Admin\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdulteType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('ninscription')
                ->add('dateinscription')
                ->add('nom')
                ->add('datenaissance')
                ->add('adresse')
                ->add('remarque')
                ->add('civilite', ChoiceType::class, array(
                    'choices' => array('Male' => 'Male', 'Female' => 'Female'),
                    'required' => false,
                    'placeholder' => 'Choose your gender',
                    'empty_data' => null))
                ->add('ad', ChoiceType::class, array(
                    'choices' => array('ad1' => 'ad1', 'ad2' => 'ad2', 'ad3' => 'ad3'),
                    'required' => false,
                    'placeholder' => 'ad',
                    'empty_data' => null))
                ->add('cin');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\Adulte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'admin_adminbundle_adulte';
    }

}
