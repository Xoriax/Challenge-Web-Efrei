<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant List</title>
</head>
<body>
    <h1>Liste des Restaurants</h1>

    <ul>
        <?php foreach ($restaurants as $restaurant): ?>
            <li>
                <?php echo $restaurant['name']; ?> - <?php echo $restaurant['address']; ?> - <img src="<?php echo $restaurant['image']; ?>" alt="">
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

