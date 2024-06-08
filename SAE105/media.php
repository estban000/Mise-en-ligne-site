<?php
    $couleur_bulle_classe = "rouge" ;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur les médias</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/media.css">
    <link rel="stylesheet" href="ressources/css/barre-navigation.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="shortcut icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <nav>

        <main class="conteneur-principal">
            <div class="titre-media"><h1 class="titre-page">Les actualités et les évènements importants du BUT et de l'IUT CY Paris Université dans les médias</h1></div>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
        <ul class="liste-video">
            <li class="video"><p class="titre-vid">La nouvelle réforme : le BUT MMI</p><figure class="video-ytb"><iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU?si=TH3M-2sfhPzsFR6L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></figure></li>
            <li class="video"><p class="titre-vid">Pourquoi étudier à l'IUT CYU?</p><figure class="video-ytb"><iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q?si=7Ex3Hi2Gra2dxyzS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></figure></li>
            <li class="video"><p class="titre-vid">Job interview au département MMI</p><iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc?si=h7vtY034hrG7xC5S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></figure></li>
            <li class="video"><p class="titre-vid">L'importance de l'IUT dans les études supérieures</p><iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg?si=l9-6TM9gP-JFKe0l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></figure></li>
        </ul>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>