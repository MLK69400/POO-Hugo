
    <meta charset="utf-8">

<?php

include '../includes/header.php';
include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';


/**
* Création d'une instance de la class "Article"
* Ici, notre variable $UnArticle
*/


$UnArticle = new Article("La formation WF3", "Une formation Certifiante en 3 mois !","Rejoingnez-nous", "WF3.jpg", "04/08/2017");
$Auteur = new Auteur("Kermiche", "Mohamed", "mohamedkermiche@hotmail.fr");
$Categorie = new Categorie("Action");

// -- Affichage de l'Objet Article
echo"<pre style='color:red;'>";
print_r($UnArticle);
print_r($Auteur);
echo '</pre>';




$UnDexiemeArticle = new Article("La martinique", "Une île pour les vacances !","Venez nombreux", "Image.jpg", "04/08/2017");
$Auteur2 = new Auteur("Biloute", "Lili", "mohiche@hotmail.fr");
$Categorie2 = new Categorie("Comedie");

// -- Affichage de l'Objet Article
echo"<pre style='color:green;'>";
print_r($UnDexiemeArticle);
print_r($Auteur2);
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

 $UnArticle->setAccroche('Accroche modifier');
 echo '<br>';
 echo $UnArticle->getAccroche();


  $Auteur->setNom('edghezgh');
  echo '<br>';
  echo $Auteur->getNom();

  echo '<hr>';

  $UneCategorie = new Categorie('Formation Informatique');
  $UneCategorie->AjouterArticle($UnArticle);
  $UneCategorie->AjouterArticle($UnDexiemeArticle);

echo "<pre style='color:blue;'>";
  print_r($UneCategorie);
echo '</pre>';


echo '<hr>';

echo '<ol>';
  echo '<li>';
    echo $UneCategorie->getLibelle();
  echo '</li>';
  echo '<ul>';
     $articles = $UneCategorie->getCollectionArticles();
    foreach ($articles as $article);
      echo "<li>".$article->getTitre() ."- ".$article->getAuteur()->getNomComplet()."</li>";
  echo '</ul>';
echo '</ol>';
