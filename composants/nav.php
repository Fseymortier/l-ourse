<!-- mettre la condition si l'utilisateur est connecté -->
<nav>
    <img class="logo_nav" src="/l-ourse/images/ourse2.webp" alt="icone l'ourse">
    <div class="container_menu">
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/index.php">Accueil</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/carte.php">La carte</a>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_adherer" href="/l-ourse/pages/adherer.php">Adhérer</a>
            <div class="second_menu second_menu_adherer">
                <a class="nav_link" href="/l-ourse/pages/particulier.php">Particuliers</a>
                <a class="nav_link" href="/l-ourse/pages/prestataire.php">Prestataires</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_actu" href="/l-ourse/pages/actualites.php">Actualités</a>
            <div class="second_menu second_menu_actu">
                <a class="nav_link" href="/l-ourse/pages/pire-campagne.php">La pire campagne</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/contact.php">Contact</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/se-connecter.php">Se connecter</a>
        </div>
    </div>
</nav>
<!-- 
<nav>
    <img class="logo_nav" src="/l-ourse/images/ourse2.webp" alt="icone l'ourse">
    <div class="container_menu">
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/index.php">Accueil</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/carte.php">La carte</a>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_adherer" href="/l-ourse/pages/adherer.php">Adhérer</a>
            <div class="second_menu second_menu_adherer">
                <a class="nav_link" href="/l-ourse/pages/particulier.php">Particuliers</a>
                <a class="nav_link" href="/l-ourse/pages/prestataire.php">Prestataires</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link nav_link_actu" href="/l-ourse/pages/actualites.php">Actualités</a>
            <div class="second_menu second_menu_actu">
                <a class="nav_link" href="/l-ourse/pages/pire-campagne.php">La pire campagne</a>
            </div>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/contact.php">Contact</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="/l-ourse/pages/profil.php">Profil</a>
        </div>
        <div class="item_menu">
            <a class="nav_link" href="">Se déconnecter</a>
        </div>
    </div>
</nav> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navigationItems = document.querySelectorAll("nav a");

        // Fonction pour vérifier l'URL de la page actuelle
        function checkCurrentPage() {
            var currentPageUrl = window.location.href;
            navigationItems.forEach(function(item) {
                if (item.href === currentPageUrl) {
                    item.classList.add("selected");
                }
            });
        }

        // Appeler la fonction pour vérifier l'URL de la page actuelle
        checkCurrentPage();
    });
</script>