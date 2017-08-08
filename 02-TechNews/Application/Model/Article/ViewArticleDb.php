<?php

namespace Application\Model\ViewArticle;
use Core\Model\DbTable;

/**
 *
 */
class ArticleDb extends DbTable
{
  protected $_table = 'article';
  protected $_primary = 'IDARTICLE';
  protected $_classToMap = __NAMESPACE__.'\\ViewArticle';
}
