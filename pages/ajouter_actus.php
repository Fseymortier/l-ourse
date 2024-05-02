<?php
$title = "Ajout d'ctualités";
$h1 = "Ajout d'actualités";
$txtHeader = "Qu'est ce qu'il y a au programme aujourd'hui ?";
require_once('../composants/header.php');
?>

<section class="container_actu">
<?php if (isset($_SESSION['user'])) :?>
   <form action="" method="POST" enctype="multipart/form-data">
    <label for="">Titre de l'actualité</label>
    <input type="text" name="titre" id="titre">
    <label for="image">Image de l'actualité</label>
    <input type="file" name="image" id="image">
    <label for="">Description de l'actualité</label>
    <textarea type="text" name="description" id="description"></textarea>
    <label for="date">Date de l'actualité</label>
    <input type="date">
    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville">
    <input type="submit" value="Ajouter" class="button_form button_connexion">
   </form>
<?php else : ?>
    <h2>Vous n'êtes pas autoriser à accéder à cette pasge</h2>
<?php endif ?>
</section>
<?php require_once('../composants/footer.php') ?>