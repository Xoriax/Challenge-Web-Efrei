<?php
if (isset($plats)) {
    echo "<h1 class='title-restaurant-list'>Plats du Restaurant</h1>";

    echo '<ul class="restaurant-list">';
    foreach ($plats as $plat) {
        echo "<li>";
        echo "<div class='restaurant-card'>";
        echo "<strong>Nom :</strong> " . $plat['name'] . "<br>";
        if (!empty($plat['image'])) {
            echo "<img src='" . $plat['image'] . "' alt='" . $plat['name'] . "' class='restaurant-image'><br>";
        }
        echo "</div>";
        echo "</li>";
    }
    echo '</ul>';
    ?>
    <div class="button-containerDR">
        <a href="javascript:history.go(-1)" class="buttonDRBack">Retour</a>
    </div>
    <?php
} else {
    echo "Aucun plat trouvé.";
}
?>