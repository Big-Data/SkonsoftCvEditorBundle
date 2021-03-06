<?php

namespace Skonsoft\Bundle\CvEditorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CvEmploymentHistoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jobTitle')
            ->add('startDate','date',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'datepicker')
            ))
            ->add('endDate','date',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'datepicker')
            ))
            ->add('employerNameAndPlace')
            ->add('description')
            ->add('quitReason')
            ->add('isLast')
            ->add('isLastItemWithJobTitle')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Skonsoft\Bundle\CvEditorBundle\Entity\CvEmploymentHistory'
        ));
    }

    public function getName()
    {
        return 'skonsoft_bundle_cveditorbundle_cvemploymenthistorytype';
    }
}
