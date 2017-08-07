<?php


/**
 * Nous sommes ici sur le point d'entrée de notre Application.
 * En MVC c'est ce que l'on appel: un Controleur Frontal.
 * L'ensemble des actions de notre site internet passera uniquement par ce fichier.
 * Il a pour mission de transférer au bon controleur la demande de l'utilisateur.
 * -----------------------
 * Dans un framwork et en MVC, nous utilisons la pussance de la réécriture des URLs
 * via la création d'un fichier .htaccess.
 */

use Core\Core;

# Initialisation du Site
require 'bootstrap.inc.php';


// require (HEADER_SITE);

    $core = new Core($_GET);

// require (FOOTER_SITE);
