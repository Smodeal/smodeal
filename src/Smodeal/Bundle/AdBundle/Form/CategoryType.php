<?php

namespace Smodeal\Bundle\AdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType {

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
            ->add('name', 'text', array(
                'label' => 'Nom',
                'attr' => array('class' => 'form-control'),
                'block_name' => 'form-group'))
            ->add('description', 'textarea', array(
                'label' => 'Description',
                'attr' => array('class' => 'form-control')))
            ->add('status', 'checkbox', array(
                'label' => 'Actif',
                'attr' => array('class' => 'form-control')))
            ->add('ordered', 'integer', array(
                'label' => 'Ordre d\'affichage', 
                'attr' => array('class' => 'form-control')))
    ;
  }

  /**
   * @param OptionsResolverInterface $resolver
   */
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(array(
        'data_class' => 'Smodeal\Bundle\AdBundle\Entity\Category'
    ));
  }

  /**
   * @return string
   */
  public function getName() {
    return 'smodeal_bundle_adbundle_category';
  }

}
