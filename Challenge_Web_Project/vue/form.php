<h2>Réservation</h2>

<form action="?page=reservation_view" method="post">
    <label for="restaurant">Choisissez un restaurant :</label>
    <select name="restaurant" id="restaurant">
        <?php foreach ($allResto as $resto): ?>
            <option value="<?php echo $resto['id']; ?>">
                <?php echo $resto['name']; ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required><br>

    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" id="firstname" required><br>

    <label for="mail">Email :</label>
    <input type="email" name="mail" id="mail" required><br>

    <button type="submit">Valider</button>
</form>

<div class="button-containerDR">
    <a href="javascript:history.go(-1)" class="buttonDRBack">Retour</a>
</div>