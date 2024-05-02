<?php
$title = 'S\'inscrire';
$h1 = 'S\'inscrire';
$txtHeader = 'Inscrivez-vous pour nous rejoindre !';
require_once('../composants/header.php');
require_once('../composants/session.php');
?>
<section class="container_adherer">
  <form method="POST" action="" enctype="multipart/form-data">
    <p class="champ_obligatoire">Inscrivez-vous</p>
    <label for="nom">Nom d'utilisateur / pseudo :</label>
    <input type="text" id="nom" name="nom" require />
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" require />
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" require />
    <input type="submit" value="Connexion" class="button_form button_connexion">
  </form>
</section>
<?php require_once('../composants/footer.php') ?>
<?php
require_once('../db/conn.php');
require_once('../db/User.php');

$userObject = new User($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Appeler la méthode InsertUser() de la classe User avec les données postées
    $inserted = $userObject->InsertUser($user, $email, $password);

    if ($inserted) {
        echo "Utilisateur inséré avec succès.";
    } else {
        echo "Échec de l'insertion de l'utilisateur.";
    }
}
?>