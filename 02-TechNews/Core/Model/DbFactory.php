<?php

namespace Core\Model;

class DbFactory {

    /**
     * Initialisation de la connexion PDO
     * @return \PDO
     */
    public static function PDOFactory() {

        # Création d'une Connexion PDO
        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSERNAME, DBPASSWORD);

        # Gestion des erreurs : http://php.net/manual/fr/pdo.error-handling.php
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        # On retourne $pdo
        return $pdo;

    }

    /**
     * Initialisation de la connexion PDO via ORM
     */
     public static function ORMFactory() {

       ORM::configure('mysql:host='.DBHOST.';dbname='.DBNAME);
       ORM::configure('username' , DBUSERNAME);
       ORM::configure('password' , DBPASSWORD);

     }


}
