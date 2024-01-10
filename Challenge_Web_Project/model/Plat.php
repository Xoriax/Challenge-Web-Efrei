<?php
class Plat
{

    public function getPlatsByRestaurant($restaurantId)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $query = "SELECT * FROM plat WHERE restaurant_id = :restaurant_id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':restaurant_id', $restaurantId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>