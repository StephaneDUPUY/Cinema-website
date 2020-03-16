<?php
  // retrieve of datas
  include "data/movies.php";
  include "data/prices.php";

  // aleatory movy choice
  $aleatoryIndex = mt_rand(0, count($movies) - 1);
  $aleatoryMovie = $movies[$aleatoryIndex]['title'];
?>
<p id="bandeau">Ne ratez pas l'occasion de regarder <?=$aleatoryMovie?> dans notre cinéma pour seulement <?=number_format($prices['Tarif Plein'], 2, ",", " ")?> €</p>