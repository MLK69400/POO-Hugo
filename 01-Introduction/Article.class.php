<?php


/**
 *Création d'une classe Article
 *Une Classe est une entité regroupant des variables / propriètés
 *et des fonction
 */
class Article
{
  // -- Déclaration des propriètés de notre Class "Article"
  private $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreationArticle;

/**
*Afin de pouvoir attribuer une valeur a mes differentes variables,
*Je vais mettre en place un constructeur
*/
  public function __construct(
            $Titre,
            $Accroche,
            $Description,
            $FeaturedImage,
            $DateCreationArticle)
          {
            // -- Ici nous allons attribuer a chaque proprièté de notre classe,
            // -- la valeur qui a été passée au constructeur.

            $this->Titre                =$Titre;
            $this->Accroche             =$Accroche;
            $this->Description          =$Description;
            $this->FeaturedImage        =$FeaturedImage;
            $this->DateCreationArticle  =$DateCreationArticle;
          } // Fin de mon constucteur

          /**
          * Getters : Function qui vont avoir la charge de nous renvoyer nos informations.
          * Nous aurons une fonction par propriètés de notre classe.
          */

        public function getTitre()
        {
          // return 'Mon Titre est : '.$this->Titre;
          return $this->Titre;
        }

        public function getAccroche()
        {
          // return 'Mon Titre est : '.$this->Titre;
          return $this->Accroche;
        }

        public function getDescription()
        {
          // return 'Mon Titre est : '.$this->Titre;
          return $this->Description;
        }

        public function getFeaturedImage()
        {
          // return 'Mon Titre est : '.$this->Titre;
          return $this->FeaturedImage;
        }

        public function getDateCreationArticle()
        {
          // return 'Mon Titre est : '.$this->Titre;
          return $this->DateCreationArticle;
        }

        /**
        * Setters : Function qui vont avoir la charge de modifier les proprièté
        * de notre classe.
        */

        public function setTitre($MonNouveauTitre)
        {
          $this->Titre = $MonNouveauTitre;
        }


} // Fin de ma Classe Article












 ?>
