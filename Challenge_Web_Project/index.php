<?php
include 'config/config.php';
include 'model/Database.php';
include 'controller/RestaurantController.php';
require_once 'controller/ReservationController.php';
require_once 'model/Reservation.php';
include 'controller/PlatController.php';


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
        $restaurantController = new RestaurantController();
        $restaurantController->listRestaurants();
        break;
    case 'restaurant_details':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $restaurantController = new RestaurantController();
        $restaurantController->restaurantDetails($id);
        break;
    case 'form':
        $controller = new ReservationController();
        $controller->index();
        break;
    case 'reservation_view':
        $controller = new ReservationController();
        $controller->Reserver();
        break;
    case 'contact':
        include 'vue/contact.php';
        break;
    case 'plat_view':
        $restaurantId = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $platController = new PlatController();
        $platController->listPlatsByRestaurant($restaurantId);
        break;
    default:
        include 'vue/accueil.php';
}

include 'vue/footer.php';
?>