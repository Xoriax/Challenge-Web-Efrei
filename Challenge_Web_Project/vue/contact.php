<div id="content">
    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form class="formContact" action="?page=process_contact" method="post" onsubmit="showPopup();">
            <label class="labelcontact for=" nom">Nom :</label>
            <input class="inputcontact" type="text" name="nom" id="nom" required>

            <label class="labelcontact for=" prenom">Prénom :</label>
            <input class="inputcontact" type="text" name="prenom" id="prenom" required>

            <label class="labelcontact for=" email">Email :</label>
            <input class="inputcontact" type="email" name="email" id="email" required>

            <label class="labelcontact for=" message">Message :</label>
            <textarea class="areatextcontact" name="message" id="message" rows="4" required></textarea>

            <button class="btncontact" type="submit">Envoyer</button>
        </form>
    </div>
    <div id="confirmation-message" style="display: none;">
        Formulaire validé avec succès !
    </div>
    <div class="button-containerDR">
        <a href="javascript:history.go(-1)" class="buttonDRBack">Retour</a>
    </div>
</div>
<script>
    function showPopup() {

        event.preventDefault();

        document.getElementById('confirmation-message').style.display = 'block';

        return false;
    }
</script>