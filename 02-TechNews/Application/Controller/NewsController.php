<?php
namespace Application\Controller;

use Auteur;
use Application\Model\Article\ArticleDb;
use Core\Model\ORM;


class NewsController extends \Core\Controller\AppController
{
    public function index() {

        # Connexion à la BDD
        $ArticleDb = new ArticleDb();

        # Récupération des Articles
        $articles   = $ArticleDb->fetchAll();

        # Récupération des Articles en Spotlight
        $where      = 'SPOTLIGHTARTICLE = 1';
        $spotlight  = $ArticleDb->fetchAll($where);

        # Affichage dans la Vue
        $this->render('news/index', [
            'articles' => $articles,
            'spotlight' => $spotlight
        ]);
    }

    public function business() {

         # Connexion à la BDD
         $ArticleDb = new ArticleDb();

         # Récupération des Articles
         $articles  = $ArticleDb->fetchAll('IDCATEGORIE = 2');

         # Transmission à la Vue
         $this->render('news/categorie', ['articles' => $articles]);
    }

    public function computing() {

        # Connexion à la BDD
        $ArticleDb = new ArticleDb();

        # Récupération des Articles
        $articles  = $ArticleDb->fetchAll('IDCATEGORIE = 3');

        # Transmission à la Vue
        $this->render('news/categorie', ['articles' => $articles]);
    }

    public function tech() {

        # Connexion à la BDD
        $ArticleDb = new ArticleDb();

        # Récupération des Articles
        $articles  = $ArticleDb->fetchAll('IDCATEGORIE = 4');

        # Transmission à la Vue
        $this->render('news/categorie', ['articles' => $articles]);
    }

    public function article() {

        $this->render('news/article');
    }

    /**
     * Test de fonctionnement de IDIORM
     * @return [type] [description]
     */
    public function idiorm() {

      $categories = ORM::for_table('categorie')->find_result_set();
      // print_r($categorie);

      // foreach ($categories  as $categorie) {
      //   echo $categorie->LIBELLECATEGORIE.'<br>';
      // }

      $auteurs = ORM::for_table('auteur')->find_result_set();

      echo '<table>';

      foreach ($auteurs as $auteur) {

      echo '<tr>';
          echo '<td>'.$auteur->IDAUTEUR.'</td>';
          echo '<td>'.$auteur->PRENOMAUTEUR.'</td>';
          echo '<td>'.$auteur->NOMAUTEUR.'</td>';
          echo '<td>'.$auteur->EMAILAUTEUR.'</td>';
      echo '</tr>';

      echo '</table>';

}

    }
}
