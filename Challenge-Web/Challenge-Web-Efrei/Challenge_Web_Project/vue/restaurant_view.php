<h1>Liste des Restaurants</h1>

<ul>
    <?php foreach ($restaurants as $restaurant): ?>
        <li>
            <strong>
                <?php echo $restaurant['name']; ?>
            </strong><br>
            <?php echo $restaurant['address']; ?><br>
            <?php if (!empty($restaurant['image'])): ?>
                <img src="<?php echo $restaurant['image']; ?>" alt="<?php echo $restaurant['name']; ?>"><br>
            <?php endif; ?>
            <a href="?page=restaurant_details&id=<?php echo $restaurant['id']; ?>">Détails</a>
        </li>
    <?php endforeach; ?>
</ul>