<?php

namespace Smodeal\Bundle\AdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdConsumerType extends AbstractType {

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
            ->add('title', 'text', array('label' => 'Titre'))
            ->add('price', 'text', array('label' => 'Prix'))
            ->add('description', 'textarea', array('label' => 'Description'))
            ->add('subcategory')
            ->add('adress')
            ->add('urgent')
    ;
  }

  /**
   * @param OptionsResolverInterface $resolver
   */
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(array(
        'data_class' => 'Smodeal\Bundle\AdBundle\Entity\Ad'
    ));
  }

  /**
   * @return string
   */
  public function getName() {
    return 'smodeal_bundle_adbundle_ad';
  }

}
