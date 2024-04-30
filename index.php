<?php
$title = 'Accueil';
$h1 = 'Bienvenue sur le site de l\'ourse !';
$txtHeader = 'L\'OURSE est la <span class=\'colored_txt_header\' >monnaie locale citoyenne complémentaire, sociale et solidaire</span> du Pays de Questembert à celui de Férel.';

require_once('composants/header.php');
?>
<section class="container_accueil">
    <div class="items_adherer">
        <p class="txt_adherer">Vous souhaitez des renseignement concernant l'adhésion à l'association et utiliser l'OURSE au quotidien ?</p>
        <a class="links_adherer" href="/l-ourse/pages/particulier.php">Adhérer</a>
    </div>
    <div class="items_adherer">
        <p class="txt_adherer">Vous souhaitez des renseignement pour accepter les OURSES adans vos moyens de paiement et soutenir l'économie locale ?</p>
        <a class="links_adherer" href="/l-ourse/pages/prestataire.php">Adhérer</a>
    </div>
    <div class="item_txt_presentation">
        <p class="txt_presentation">Comme <a href="https://www.terreenvie.com/papillonstransition/?AccueilPapillons" class="colored_txt">Papillons Transition</a> nous partons du principe que notre quotidien va être confronté à une diminution des ressources et à des changements climatiques majeurs.</p>
        <p class="txt_presentation">Dans ce contexte, la monnaie locale participe à favoriser la résilience du territoire en mettant en lumière les acteurs locaux qui œuvrent près de chez nous tout en gardant la monnaie sur le territoire sans qu'elle puisse retourner dans les bulles spéculatives de la finance.</p>
    </div>
</section>
<section class="container_accueil">
    <div class="containeur_txt_accueil">
        <p class="txt_accueil">Plus nous utilisons l'OURSE, plus les effets seront visibles.</p>
    </div>
    <div class="container_contributeur">
        <p class="txt_contributeur">Pour y contribuer, rejoignez nous en vous inscrivant auprès du comptoir d'échange le plus proche de chez vous :</p>
        <div class="item_contributeur">
            <p class="contributeur">- Questembert : <span class='colored_txt'>Halle Terre Native</span></p>
            <p class="contributeur">- Muzillac / Ambon : <span class='colored_txt'>Biocoop Le Panier Bio</span></p>
            <p class="contributeur">- Nivillac : <span class='colored_txt'>O'Val en Vert</span></p>
            <p class="contributeur">- La Roche-Bernard : <span class='colored_txt'>La Petite Banquise</span></p>
        </div>
    </div>
</section>
<?php require_once('composants/footer.php') ?>