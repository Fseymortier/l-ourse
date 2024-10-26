<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/db/session.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> - L'ourse</title>
    <link rel="icon" type="text/css" href="/images/ourse2.webp" />

    <link rel="stylesheet" href="/styles/nav.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="stylesheet" href="/styles/adherer.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <link rel="stylesheet" href="/styles/carte.css">
    <link rel="stylesheet" href="/styles/contact.css">
    <link rel="stylesheet" href="/styles/campagne.css">
    <link rel="stylesheet" href="/styles/actualites.css">
</head>

<body>
    <header>
        <?php require_once('nav.php') ?>
        <div class="container_entete">
            <div class="item_header">
                <h1><?php echo $h1 ?></h1>
                <p class="txt_header"><?php echo $txtHeader ?></p>
            </div>
            <img class="image_entete" src="/images/ourse3.webp" alt="logo l'ourse">
        </div>
    </header>