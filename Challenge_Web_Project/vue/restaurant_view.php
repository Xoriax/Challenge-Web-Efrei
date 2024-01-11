<h1 class="title-restaurant-list">Liste des Restaurants</h1>

<div x-show="showModal" class="modal-overlay" @click="showModal = false"></div>

<ul class="restaurant-list">
    <?php foreach ($restaurants as $restaurant): ?>
        <li>
            <div class="restaurant-card">
                <strong>
                    <?php echo $restaurant['name']; ?>
                </strong><br>
                <?php echo $restaurant['address']; ?><br>
                <?php if (!empty($restaurant['image'])): ?>
                    <img src="<?php echo $restaurant['image']; ?>" alt="<?php echo $restaurant['name']; ?>"><br>
                <?php endif; ?>
                <a href="?page=restaurant_details&id=<?php echo $restaurant['id']; ?>" class="details-button">Détails</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
