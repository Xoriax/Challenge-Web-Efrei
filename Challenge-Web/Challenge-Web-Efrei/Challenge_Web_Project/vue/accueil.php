<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Carrousel -->
<div x-data="{ activeSlide: 0, totalSlides: 5 }">
    <div class="carousel">
        <div class="slides" style="transform: translateX(-{{ activeSlide * 100 }}%)">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="slide">
                    <img src="images/restau<?= $i ?>.jpg" alt="Restaurant <?= $i ?>">
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Contrôles du carrousel -->
    <button @click="activeSlide = (activeSlide - 1 + totalSlides) % totalSlides">Précédent</button>
    <button @click="activeSlide = (activeSlide + 1) % totalSlides">Suivant</button>
</div>

<h1>Invitation Gastronomique</h1>

<ul>
    <li>Savourez l'exception culinaire dans l'un des joyaux gastronomiques de notre sélection, parmi les 5 meilleurs restaurants de France.</li>
    <li>Explorez les délices de la cuisine française dans nos établissements étoilés, où chaque plat est une symphonie de saveurs raffinées.</li>
    <li>Découvrez l'art de la gastronomie dans nos restaurants, où la passion pour la cuisine rencontre l'élégance pour créer des expériences uniques.</li>
    <li>Plongez dans une aventure gustative inoubliable en visitant nos restaurants prisés, où la qualité des plats atteint des sommets d'excellence.</li>
    <li>Laissez-vous emporter par une expérience culinaire exceptionnelle dans nos établissements distingués, où la perfection se déguste à chaque instant.</li>
</ul>
</body>
</html>

