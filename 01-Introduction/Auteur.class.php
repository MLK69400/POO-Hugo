<?php

class Auteur
{

  private $Nom,
          $Prenom,
          $Email;


  public function __construct(
            $Nom,
            $Prenom,
            $Email)
          {

            $this->Nom            =$Nom;
            $this->Prenom         =$Prenom;
            $this->Email          =$Email;

          } // Fin de mon constucteur


        public function getNom()
        {
          return $this->Nom;
        }

        public function getPrenom()
        {
          return $this->Prenom;
        }

        public function getNomComplet()
        {
          return $this->Prenom." ".$this->Nom;
        }

        public function getEmail()
        {
          return $this->Email;
        }


        public function setNom($NouveauNom)
        {
          $this->Nom = $NouveauNom;
        }

        public function setPrenom($NouveauPrenom)
        {
          $this->Prenom = $NouveauPrenom;
        }

        public function setEmail($NouvelleEmail)
        {
          $this->Email = $NouvelleEmail;
        }


} // Fin de ma Classe Auteur
