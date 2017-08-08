<?php

namespace Core;

class Core  extends \Core\Controller\AppController {

  public function __construct($params){

    // print_r($params);

    if(empty($params)) {
      $params['controller'] = 'news';
      $params['action'] = 'index';
    }
    // -- Récuperation des parametre
    $controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
    $action     = $params['action'];


    // -- On vérifie si le fichier du controleur existe avant de l'instancier
    if(file_exists(RACINE_SITE.'\\'.$controller.'.php')) {

      $obj = new $controller;

      // -- Si la methode existe dans mon controleur, alors ja peux l'executer
      if(method_exists($obj,$action)) {

        // -- on execute l'action
        $obj->$action();
      }
      else{ //echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Aucune vue correspondante</h3>";
      $this->render('errors/404',['erreur'=>'Aucune vue correspondante']);
      }

    }else {

      echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Ce controleur n'existe pas </h3>";
    }

  }
}
