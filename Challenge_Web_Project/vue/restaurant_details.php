<?php
if (isset($restaurant)) {
    ?>

    <h1>Détails du Restaurant</h1>

    <strong>Nom :</strong>
    <?php echo $restaurant['name']; ?><br>
    <strong>Adresse :</strong>
    <?php echo $restaurant['address']; ?><br>
    <?php if (!empty($restaurant['image'])): ?>
        <img src="<?php echo $restaurant['image']; ?>" alt="<?php echo $restaurant['name']; ?>"><br>
    <?php endif; ?>
    <a href="?page=plat_view&id=<?php echo $restaurant['id']; ?>">Voir les plats</a>

    <?php

    echo '<a href="javascript:history.go(-1)">Retour</a>';
} else {
    echo "Restaurant non trouvé.";
}
?>
