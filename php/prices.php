<?php

  include "data/prices.php";


  $pageName = "Tarifs";
  include "partials/header.tpl.php";

?>

    <section id="tarifs">
      <h2>Tarifs</h2>
      <div class="flex">
        <ul>
          <li>Tarif Plein : <?=$fullPrice?> &euro;</li>
          <li>Tarif Réduit : <?=$reducedPrice?> &euro;</li>
          <li>Tarif Enfant : <?=$childPrice?> &euro;</li>
          <li>Supplément 3D : 1 &euro;</li>
        </ul>
        <ul>
          <li>Abonnement 5 places : -10%</li>
          <li>Abonnement 5 places -25ans : -20%</li>
        </ul>
      </div>
      <p>
        Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
        Tarif Enfant pour les - de 14 ans
      </p>

      <h2>Selon votre âge</h2>
      <p>
      <?php for ($age = 1; $age <= 99; $age++) {

      if ($age < 14) { // child price
        $price = $childPrice;
      } elseif ($age < 16 || $age > 60) {
        $price = $reducedPrice;
      } else {
        $price = $fullPrice;
      }

      echo "<p>Pour vous qui avez $age ans, une place vous coûtera $price €</p>".PHP_EOL;
      } ?>
      </p>
    </section>
<?php include "partials/footer.tpl.php"?>