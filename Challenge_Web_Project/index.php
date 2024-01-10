<?php
include 'config/config.php';
include 'model/Database.php';

spl_autoload_register(function ($class) {
    include 'model/' . $class . '.php';
});

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

include 'vue/header.php';

switch ($page) {
    case 'accueil':
        include 'vue/accueil.php';
        break;
    case 'restaurant_view':
        include 'vue/restaurant_view.php';
        break;
    case 'contact':
        include 'vue/contact.php';
        break;
    case 'profil':
        include 'vue/user_view.php';
        break;
    case 'reservation':
        include 'vue/reservation_view.php';
        break;
    case 'favoris':
        include 'vue/favoris_view.php';
        break;
    default:
        include 'vue/accueil.php';
}

include 'vue/footer.php';
?>