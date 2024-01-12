<div id="content">
    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form class="formcontact" action="?page=process_contact" method="post">
            <label class="labelcontact" for="nom">Nom :</label>
            <input class="inputcontact" type="text" name="nom" id="nom" required>

            <label class="labelcontact" for="prenom">PrÃ©nom :</label>
            <input class="inputcontact" type="text" name="prenom" id="prenom" required>

            <label class="labelcontact" for="email">Email :</label>
            <input class="inputcontact" type="email" name="email" id="email" required>

            <label class="labelcontact" for="message">Message :</label>
            <textarea class="areatextcontact" name="message" id="message" rows="4" required></textarea>

            <button class="btncontact" type="submit">Envoyer</button>
        </form>
    </div>
</div>
