<?php

include 'Article.class.php';


/**
* Création d'une instance de la class "Article"
* Ici, notre variable $UnArticle
*/

$UnArticle = new Article("La formation WF3", "Une formation Certifiante en 3 mois !","Rejoingnez-nous", "WF3.jpg", "04/08/2017");

// -- Affichage de l'Objet Article
echo'<pre>';
print_r($UnArticle);
echo '</pre>';



$UnDexiemeArticle = new Article("La martinique", "Une île pour les vacances !","Venez nombreux", "Image.jpg", "04/08/2017");

// -- Affichage de l'Objet Article
echo'<pre>';
print_r($UnDexiemeArticle);
echo '</pre>';


// -- Je veux afficher le Titre de mon premier Article

 // echo $UnArticle->Titre;


 echo $UnArticle->getTitre();echo '<br>';
 echo $UnArticle->getAccroche();echo '<br>';
 echo $UnArticle->getDescription();echo '<br>';
 echo $UnArticle->getFeaturedImage();echo '<br>';
 echo $UnArticle->getDateCreationArticle();


// -- Ici je vais modifier le titre de mon Article
$UnArticle->setTitre('La formation WebForce3');
echo '<br>';
 echo $UnArticle->getTitre();
