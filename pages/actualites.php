<?php
$title = 'Actualités';
$h1 = 'Actualités';
$txtHeader = 'Retrouvez les différentes actualités et évènements de l\'association';
require_once('../composants/header.php');
?>
<script>
    let index = 0
array.map((actu) => {
    if(index % 2 === 0){
    <div class='item_actu'>
    <h2>{actu.titre}</h2>
    <p class='txt_actu'>{actu.date} - {actu.lieu}</p>
    <img src={actu.image} class="img_actu" alt='affiche actualité' />
    <p class='txt_actu'>{actu.description}</p>
    </div>
}
else{
    <div class='item_actu item_actu2'>
    <h2>{actu.titre}</h2>
    <p class='txt_actu'>{actu.date} - {actu.lieu}</p>
    <img src={actu.image} class="img_actu" alt='affiche actualité' />
    <p class='txt_actu'>{actu.description}</p>
    </div>
}
});
</script>
<section class="container_actu">
</section>
<?php require_once('../composants/footer.php') ?>