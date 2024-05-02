<?php
$title = 'Contact';
$h1 = 'Contactez-nous !';
$txtHeader = 'Vous avez beoin de renseignement ou de nous faire remonter une information ? ';
require_once('../composants/header.php');
?>
<section class="container_adherer">
    <form action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'une <span class="stars_form">*</span> sont obligatoires</p>
        <label for="name">Nom <span class="stars_form">*</span></label><input class="saisie" type="text" name="name" id="name" required />
        <label for="prenom">Prénom <span class="stars_form">*</span></label><input class="saisie" type="text" name="prenom" id="prenom" required />
        <label for="mail">Email <span class="stars_form">*</span></label><input class="saisie" type="email" name="mail" id="mail" required />
        <label for="objet">Sujet de votre prise de contact<span class="stars_form">*</span></label><input class="saisie" type="text" name="objet" id="objet" required />
        <label for="message">Message <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
<?php require_once('../composants/footer.php') ?>