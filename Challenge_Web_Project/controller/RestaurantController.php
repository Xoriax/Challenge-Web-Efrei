<?php
class RestaurantController
{
    public function listRestaurants()
    {
        $restaurantModel = new Restaurant();
        $restaurants = $restaurantModel->getAllRestaurants();

        include 'vue/restaurant_view.php';
    }

    public function restaurantDetails($id)
    {
        $restaurantModel = new Restaurant();
        $restaurant = $restaurantModel->getRestaurantById($id);

        include 'vue/restaurant_details.php';
    }
}

?>
