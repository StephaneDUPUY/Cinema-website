<?php

  include "data/prices.php";


  $pageName = "Tarifs";
  include "partials/header.tpl.php";

?>

    <section id="tarifs">
      <h2>Tarifs</h2>
      <div class="flex">
        <ul>
          <?php foreach ($prices as $type => $price): ?>
            <li><?=$type?> : <?=number_format($price, 2, ",", " ")?> &euro;</li>
          <?php endforeach; ?>
        </ul>
        <ul>
          <?php foreach ($subscriptions as $type => $reduction): ?>
            <li><?=$type?> : <?=$reduction?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <p>
        Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
        Tarif Enfant pour les - de 14 ans
      </p>

      <h2>Selon votre âge</h2>

      <table>
        <thead>
          <th>Âge</th>
          <th>Place unitaire</th>
          <th>Abonnement 5 places</th>
        </thead>
        <tbody>
          <?php for ($age = 1; $age <= 99; $age++):

            if ($age < 14) { // child price
              $price = $prices['Tarif Enfant'];
            } elseif ($age < 16 || $age > 60) {
              $price = $prices['Tarif Réduit'];
            } else {
              $price = $prices['Tarif Plein'];
            }

            // price for 5 tickets
            $priceFive = 5 * $price;

            // reduction
            if ($age < 25) {
              $priceFive *= .8;
            } else {
              $priceFive *= .9;
            }
            ?>

            <tr>
              <td><?=$age?> ans</td>
              <td><?=number_format($price, 2, ",", " ")?> €</td>
              <td><?=number_format($priceFive, 2, ",", " ")?> €</td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
    </section>
<?php include "partials/footer.tpl.php"?>