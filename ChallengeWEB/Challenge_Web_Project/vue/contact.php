<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="content">
    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form action="?page=process_contact" method="post" onsubmit="showPopup();">
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
    <div id="confirmation-message" style="display: none;">
            Formulaire validé avec succès ! 
    </div>
</div>
<script>
        function showPopup() {

            event.preventDefault();

            document.getElementById('confirmation-message').style.display = 'block';

            return false;
        }
</script>
</body>
</html>