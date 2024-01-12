<?php
include_once('model/Reservation.php');
class ReservationController
{
    private $restoModel;

    public function __construct()
    {
        $this->restoModel = new Restaurant();
    }
    public function index()
    {
        $allResto = $this->restoModel->getAllRestaurants();
        include 'vue/form.php';
    }



    public function Reserver()
    {


        include 'vue/reservation_view.php';

    }
}
?>