<?php
require_once 'config/config.php';
require_once 'model/Database.php';
require_once 'model/Restaurant.php';
require_once 'controller/RestaurantController.php';

// Créer une instance de la classe de base de données
$database = new Database();

// Créer une instance du modèle et du contrôleur
$model = new RestaurantModel($database->getConnection());
$controller = new RestaurantController($model);

// Appeler la méthode index du contrôleur
$controller->index();
?>
