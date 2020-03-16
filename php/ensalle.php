<?php

$movies = [
    'Les dents de la mer',
    'Les goonies',
    'Titanic',
    'Star Wars 13',
    'La Cité de la peur',
    'Dikkenek',
    'Vendredi 13',
    'Interstellar',
    'The Bureau'
];

$pageName = "À l'affiche";
include "partials/header.tpl.php";

?>
    <section>
        <h2>Les films à l'affiche</h2>
        <ul>
            <!-- Display all movies through loop -->
            <?php for ($i = 0; $i < count($movies); $i++) {
                echo "<li>".$movies[$i]."</li>";
            } ?>
        </ul>
    </section>

<?php include "partials/footer.tpl.php";?>