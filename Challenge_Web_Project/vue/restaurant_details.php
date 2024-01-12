<?php
if (isset($restaurant)) {
    ?>

    <h1 class="h1DR">Détails du Restaurant</h1>

    <div class="card-container">
        <div class="card custom-card mb-3 mx-auto">
            <div class="row g-0">
                <div class="col-md-4">
                    <?php if (!empty($restaurant['image'])): ?>
                        <img class="imgDR" src="<?php echo $restaurant['image']; ?>"
                            alt="<?php echo $restaurant['name']; ?>"><br>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 text-center">
                    <div class="card-body">
                        <strong>Nom :</strong>
                        <?php echo $restaurant['name']; ?><br>
                        <strong>Adresse :</strong>
                        <?php echo $restaurant['address']; ?><br><br><br>
                        <a href="?page=plat_view&id=<?php echo $restaurant['id']; ?>" class="buttonDR">Voir les plats</a>
                        <a href="?page=form">Reserver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="button-containerDR">
        <a href="javascript:history.go(-1)" class="buttonDRBack">Retour</a>
    </div>

    <?php
} else {
    echo "Restaurant non trouvé.";
}
?>