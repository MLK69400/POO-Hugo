<?php

namespace Application\Controller;

use Application\Model\Categorie\CategorieDb;

class NewsController extends \Core\Controller\AppController
{
  public function index(){

    # Connexion à la BDD
    $CategorieDb = new CategorieDb();

    # Récupération des Categorie
    $categories = $CategorieDb->fetchAll();

    # Affichage dans la Vue
    $this->render('news/index',["categories"=>$categories]);
  }

  public function categorie(){
    // $this->render('news,index');
  }

  public function article(){
    echo '<h1>Je suis la page ARTICLE</h1>';
  }
}
