<?php

namespace Smodeal\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller {

  public function indexAction() {
    return $this->render('SmodealAdminBundle:Category:index.html.twig');
  }

  public function addAction() {
    return $this->render('SmodealAdminBundle:Category:add.html.twig');
  }

}
