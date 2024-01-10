<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include 'header.php'; ?>
<div id="content">
    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form action="?page=process_contact" method="post">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>