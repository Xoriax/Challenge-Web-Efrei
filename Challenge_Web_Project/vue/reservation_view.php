<?php
$restaurant_id = $_POST['restaurant'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];

$reservationModel = new Reservation();
$reservationModel->setReservation($restaurant_id, $name, $firstname, $mail);
?>

<div id="content-reservation">
    <h2>Commande traitée avec succès !</h2>
    <p>Merci de votre commande. Vous serez contacté sous peu.</p>
    <a href="?page=restaurant">Retour à la liste des restaurant</a>
</div>

<?php echo '<a href="javascript:history.go(-1)">Retour</a>'; ?>