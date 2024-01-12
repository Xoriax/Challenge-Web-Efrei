<h2>Commander</h2>

<form action="?page=reservation_view" method="post">
    <select name="restaurant" id="restaurant">
                <?php foreach ($allResto as $resto): ?>
                    <option value="<?php echo $resto['id']; ?>">
                        <?php echo $resto['name']; ?>
                    </option>
                <?php endforeach; ?>
    </select>
    <label for="name">name</label> 
    <input type="text" name="name" id="name" required><br>

    <label for="firstname">prenom</label> 
    <input type="text" name="firstname" id = firstname required><br>

    <label for="mail">email</label> 
    <input type="email" name="mail" id=mail required><br>

    <button type="submit">valider</button>

</form>
