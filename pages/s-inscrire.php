<?php
$title = 'S\'inscrire';
$h1 = 'S\'inscrire';
$txtHeader = 'Inscrivez-vous pour nous rejoindre !';
require_once('../composants/header.php');
require_once('../db/conn.php');
require_once('../db/User.php');

if (isset($_POST['submit'])) {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['MDP'];

  // Appeler la méthode GetUserbyUser() pour vérifier si l'utilisateur existe déjà
  $error_message = $User->GetUserbyUser($user);
}
?>

<section class="container_adherer">
  <form method="POST" action="">
    <p class="champ_obligatoire">Inscrivez-vous</p>
    <label for="">Nom d'utilisateur / pseudo :</label>
    <input type="text" id="user" name="user" />
    <?php
    // Afficher le message d'erreur s'il existe
    if (isset($error_message)) {
      echo "<p class='txt_error' style='color: red;'>$error_message</p>";
    }
    ?>
    <label for="form2Example11">Email :</label>
    <input type="email" id="form2Example11" name="email" />
    <label for="form2Example22">Mot de passe :</label>
    <input type="password" id="form2Example22" name="MDP" />
    <input type="submit" name="submit" value="Connexion" class="button_form button_connexion">
  </form>
</section>
<?php require_once('../composants/footer.php') ?>