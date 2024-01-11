<?php
if (isset($plats)) {
    echo "<h1>Plats du Restaurant</h1>";

    foreach ($plats as $plat) {
        echo "<strong>Nom :</strong> " . $plat['name'] . "<br>";
        if (!empty($plat['image'])) {
            echo "<img src='" . $plat['image'] . "' alt='" . $plat['name'] . "'><br>";
        }
        echo "<br>";
    }

    echo '<a href="javascript:history.go(-1)">Retour</a>';
} else {
    echo "Aucun plat trouvé.";
}
?>
