<?php
// Vérifier si l'utilisateur a cliqué sur "Se déconnecter"
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /');
    exit();
}
?>
<nav>
    <img class="logo_nav" src="/images/ourse2.webp" alt="icone l'ourse">
    <div class="container_menu">
        <div class="item_menu">
            <a class="nav_link" href="/index.php">Accueil</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/pages/carte.php">La carte</a>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_adherer" href="/pages/adherer.php">Adhérer</a>
            <div class="second_menu second_menu_adherer">
                <a class="nav_link" href="/pages/particulier.php">Particuliers</a>
                <a class="nav_link" href="/pages/prestataire.php">Prestataires</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_actu" href="#">Communauté</a>
            <div class="second_menu second_menu_actu">
                <a class="nav_link nav_link_actu" href="/pages/actualites.php">Actualités</a>
                <a class="nav_link" href="/pages/pire-campagne.php">La pire campagne</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/pages/contact.php">Contact</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/composants/logout.php">Se déconnecter</a>
        </div>
    </div>
</nav>