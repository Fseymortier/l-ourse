<?php
$title = "Ajout d'actualités";
$h1 = "Ajout d'actualités";
$txtHeader = "Qu'est ce qu'il y a au programme aujourd'hui ?";
require_once('../composants/header.php');

if (isset($_POST['submit'])) {
    $titreActu = $_POST['titre'];
    $imgActu = $_POST['image'];
    $descActu = $_POST['description'];
    $dateActu = $_POST['date'];
    $villeActu = $_POST['ville'];
    $result = $User->insertACTU($titreActu, $imgActu, $descActu,$dateActu,$villeActu);
    if ($result == true) {
      $error_message = 'Actualité ajoutée';
      $isValide = true;
    } else {
      $error_message = "Un problème est survenue lors de l'ajout";
      $isValide = false;
    }
  }
?>

<section class="container_actu">
<?php if (isset($_SESSION['user'])) :?>
   <form action="" method="POST" enctype="multipart/form-data">
   <?php
    // Afficher le message d'erreur s'il existe
    if (isset($isValide)) {
      if ($isValide === false) {
        echo "<p class='txt_error'>$error_message</p>";
      } else {
        echo "<p class='txt_validate'>$error_message</p>";
      }
    }
    ?>
    <label for="titre">Titre de l'actualité</label>
    <input type="text" name="titre" id="titre">
    <label for="image">Image de l'actualité</label>
    <input type="file" name="image" id="image">
    <label for="description">Description de l'actualité</label>
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