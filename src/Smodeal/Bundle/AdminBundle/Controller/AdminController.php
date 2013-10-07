<?php

namespace Smodeal\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller {

  public function indexAction() {
    return $this->render('SmodealAdminBundle:Admin:index.html.twig');
  }

}
