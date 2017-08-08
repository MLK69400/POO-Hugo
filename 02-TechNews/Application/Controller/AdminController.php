<?php

namespace Application\Controller;

class AdminController extends \Core\Controller\AppController
{
  public function connexion(){
    $this->render('admin/connexion');
  }
}
