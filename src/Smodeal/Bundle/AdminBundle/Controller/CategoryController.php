<?php

namespace Smodeal\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smodeal\Bundle\AdBundle\Entity\Category;
use Smodeal\Bundle\AdBundle\Form\CategoryType;

class CategoryController extends Controller {

  public function indexAction() {
    return $this->render('SmodealAdminBundle:Category:index.html.twig');
  }

  public function addAction() {
    $oCategory = new Category();
    $oForm = $this->createForm(new CategoryType, $oCategory);
    
    return $this->render('SmodealAdminBundle:Category:add.html.twig', array(
      'form' => $oForm->createView(),
  ));
  }

}
