<?php

namespace Core\Controller;

class AppController {

  private $_viewparams;

/**
 * Permet de générer l'affichage de la vue passée en paramètre.
 * @param String $view Vue à afficher
 * @param Array $viewparams données à passer à la vue
 */
  protected function render($view, $viewparams = '') {

    // Récupération et Affectation des Parametre de la Vues
    $this->_viewparams = $viewparams;

    // Affichage de l'En-tete
    require(HEADER_SITE);

    // Inclusion de la vue
    include_once VIEW_SITE.'/'.$view.'.php';

    //Affichage du Pied de page
    require(FOOTER_SITE);
  }
  
  public function getParams() {
    return $this->_viewparams;
  }
}
