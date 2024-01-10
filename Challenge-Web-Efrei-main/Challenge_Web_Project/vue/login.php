<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include 'header.php'; ?>
<body>
<div class="container">
    <h2>Connexion</h2>


    <form action="" method="post">
        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
