<?php

include "data/movies.php";

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