<?php

// set date
$date = date('d/m/Y');

include "data/movies.php";

$pageName = "À l'affiche";
include "partials/header.tpl.php";

?>
    <section>
        <h2>Les films à l'affiche</h2>
        <p>Nous sommes le <?=$date?></p>
        <table>
            <thead>
                <tr>
                    <th>Titre (année)</th>
                    <?php for ($window = 10; $window <= 24; $window += 2): ?>
                    <th><?=$window?>h</th>
                    <?php endfor; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // browse each movie
                for ($i = 0; $i < count($movies); $i++): ?>
                    <tr>
                        <th><?=$movies[$i]["title"]." (".$movies[$i]["year"].")"?></th>
                        <!-- browse each broadcast of movie -->
                        <?php foreach ($movies[$i]["broadcast"] as $index => $broadcasting): ?>

                            <?php if ($broadcasting): ?>
                            <td class="broadcast"></td>
                            <?php else: ?>
                            <td class="nobroadcast"></td>
                            <?php endif; ?>


                        <?php endforeach; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </section>

<?php include "partials/footer.tpl.php";?>