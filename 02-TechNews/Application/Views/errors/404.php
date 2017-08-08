<?php

# On récupère les cparametres de la Vue
$params = $this->getParams();

?>

<div class="page-404">
  <h1>404</h1>
  <p>Erreur, <?= $params['erreur']; ?></p>
  <p><img src="<?= PUBLIC_URL ;?> /images/404.gif" alt=""></p>
  <a href="<?= PUBLIC_URL ;?>" class="my-btn btn-go-home">Retourner vers l'ACCUEIL</a>
</div>
