<?php
$title = 'Connexion';
$h1 = 'Connexion';
$txtHeader = 'Bon retour parmis nous !';
require_once('../composants/header.php');
require_once('../composants/session.php');
?>
<section class="container_adherer">
  <form method="POST" action="">
    <p class="champ_obligatoire">Connectez-vous</p>
    <label for="form2Example11">Email:</label>
    <input type="email" id="form2Example11" name="email" require/>
    <label for="form2Example22">Mot de passe:</label>
    <input type="password" id="form2Example22" name="password" require/>
    <input type="submit" value="Connexion" class="button_form button_connexion">
  </form>
  <a href="/l-ourse/pages/s-inscrire.php" class="button_form button_sincrire">S'inscrire</a>
</section>