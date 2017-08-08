<?php

namespace Core\Model;

class DbFactory {

  /**
   * Inisialisation de la connexion PDO
   * @return \PDO
   */

  public static function PDOFactory() {

    # Création d'une Connexion PDO
    $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSERNAME, DBPASSWORD);

    # Gestion des erreurs :
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    # On retourne $pdo
    return $pdo;
  }
}
