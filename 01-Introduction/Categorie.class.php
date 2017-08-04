<?php


class Categorie
{

  private $Libelle,
          $CollectionArticles = [];


  public function __construct($Libelle)
          {

            $this->Libelle=$Libelle;

          } // Fin de mon constucteur

        public function getLibelle()
        {
          return $this->Libelle;
        }

        public function getCollectionArticles()
        {
          return $this->CollectionArticles;
        }

        public function setLibelle($NouveauLibelle)
        {
          $this->Libelle = $NouveauLibelle;
        }

        /**
         * Permet d'ajouter un objet Article a notre tableau (CollectionArticle)
         */
        public function AjouterArticle(Article $Article)
        {
          $this->CollectionArticles[] = $Article;
        }


} // Fin de ma Classe Article
