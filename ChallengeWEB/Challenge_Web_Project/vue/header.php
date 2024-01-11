<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestoHub</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="asset/style.css">
</head>

<body x-data="{ open: false }">

    <nav>
        <ul>
            <li><a href="?page=accueil" :class="{ 'active': window.location.href.includes('accueil') }">Accueil</a></li>
            <li><a href="?page=restaurant_view" :class="{ 'active': window.location.href.includes('restaurant_view') }">Restaurants</a></li>
            <li><a href="?page=contact" :class="{ 'active': window.location.href.includes('contact') }">Contact</a></li>
        </ul>
    </nav>

    <div style="margin-top: 50px;">
    </div>