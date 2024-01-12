<?php
require_once 'Database.php';
class Reservation
{

    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function setReservation($restaurant_id, $name, $firstname, $mail)
    {
        $query = "INSERT INTO reservation(restaurant_id,name,firstname,mail) VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$restaurant_id, $name, $firstname, $mail]);
    }


}


?>