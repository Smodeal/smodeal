<?php

namespace Smodeal\Bundle\AdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdController extends Controller {

  public function indexAction() {
    return $this->render('SmodealAdBundle:Ad:index.html.twig');
  }
}
