<?php
class PlatController
{
    public function listPlatsByRestaurant($restaurantId)
    {
        $platModel = new Plat();
        $plats = $platModel->getPlatsByRestaurant($restaurantId);

        include 'vue/plat_view.php';
    }
}
?>
