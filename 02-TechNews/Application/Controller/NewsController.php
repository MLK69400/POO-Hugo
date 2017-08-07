<?php

namespace Application\Controller;

class NewsController extends \Core\Controller\AppController
{
  public function index(){
    $this->render('news/index',["titre"=>"WebForce","accroche"=>"Partez tous !"]);
  }
  public function categorie(){
    echo '<h1>Je suis la page CATEGORIE</h1>';
  }
  public function article(){
    echo '<h1>Je suis la page ARTICLE</h1>';
  }
}
