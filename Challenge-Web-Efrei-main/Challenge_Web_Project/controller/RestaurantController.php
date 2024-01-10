<?php
class RestaurantController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $restaurants = $this->model->getAllRestaurants();

        include 'vue/restaurant_view.php';
    }
}
?>



