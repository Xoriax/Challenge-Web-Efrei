<?php
$restaurant_id = $_POST['restaurant'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];

$reservationModel = new Reservation();
$reservationModel->setReservation($restaurant_id, $name, $firstname, $mail);
?>

<div id="content-reservation">
    <h2>Réservation traitée avec succès !</h2><br><br><br>
    <p class="hp">Merci pour votre réservation. A bientôt dans nôtre restaurant.</p><br><br>
    <a href="javascript:history.go(-1)" class="buttonDR2">Retour</a>
    <a href="?page=restaurant_view" class="buttonDR3">Retour à la liste des restaurant</a>
</div>