<?php

namespace Application\Model\ViewArticle;


class ViewArticle {


  private $LIBELLECATEGORIE,
          $NOMAUTEUR,
          $PRENOMAUTEUR,
          $TITREARTICLE,
          $CONTENUARTICLE,
          $FEATUREDIMAGEARTICLE,
          $DATECREATIONARTICLE;


/**
 * @return mixed
 */
public function getLIBELLECATEGORIE()
{
  return $this->LIBELLECATEGORIE;
}

/**
 * @return mixed
 */
public function getNOMAUTEUR()
{
  return $this->NOMAUTEUR;
}

/**
 * @return mixed
 */
public function getPRENOMAUTEUR()
{
  return $this->PRENOMAUTEUR;
}

/**
 * @return mixed
 */
public function getTITREARTICLE()
{
  return $this->TITREARTICLE;
}

/**
 * @return mixed
 */
public function getCONTENUARTICLE()
{
  return $this->CONTENUARTICLE;
}

/**
 * @return mixed
 */
public function getFEATUREDIMAGEARTICLE()
{
  return $this->FEATUREDIMAGEARTICLE;
}

/**
 * @return mixed
 */
public function getDATECREATIONARTICLE()
{
  return $this->DATECREATIONARTICLE;
}
}
