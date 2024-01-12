<?php
class Restaurant
{
    public function getAllRestaurants()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $query = "SELECT * FROM restaurant";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRestaurantById($id)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $query = "SELECT * FROM restaurant WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>