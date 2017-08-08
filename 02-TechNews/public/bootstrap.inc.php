<?php

#Affichage des Erreur en mode DEV
ini_set('display_errors',1);

# Racine du site Internet
# Necessite PHP 7+

define('RACINE_SITE', dirname(__FILE__, 2));

# Chemin relatif vers le dossier Public
define('PUBLIC_URL', '/POO-Hugo/02-TechNews/public');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/application/Layout/header.inc.php');

# Pied de password_get_info
define('FOOTER_SITE', RACINE_SITE.'/application/Layout/footer.inc.php');

# Les Vues
define ('VIEW_SITE',RACINE_SITE.'/Application/Views');

# Connexion BDD
define('DBHOST', 'localhost');
define('DBNAME', 'technews');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');

# Autoloader
require_once 'Autoloader.php';
Autoloader::register();
