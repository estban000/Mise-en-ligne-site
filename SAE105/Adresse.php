<?php
    $couleur_bulle_classe = "violet" ;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/adresse.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="stylesheet" href="ressources/css/barre-navigation.css">
    <link rel="shortcut icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <!-- Image et info basique de l'IUT -->
            <div class="information-iut">
                <h1 class="titre-partie">L'IUT sur le site de Sarcelles</h1>
                <img src="ressources/images/iut.png" alt="Placeholder Image 800x600">
            </div>
            <!-- fin de l'Image et info pratique de l'IUT -->

            <!-- Info pratique + carte google maps -->
            <div class="information-iut">
                <h1 class="titre-partie">Comment accéder au site de Sarcelles?</h1>
                <p class="paragraphe-info">Adresse Site de Sarcelles: 34 Bd Henri Bergson, 95200 Sarcelles.</p>
                <p class="paragraphe-info"><span class="gras">Téléphone:</span> <a href="tel:0134382600">01 34 38 26 00</a>.</p>
                <p class="paragraphe-info">Site Internet de Cergy-Pontoise site Sarcelle: <a href="https://cyiut.cyu.fr/publications/site-de-sarcelles" target="_blank" rel="noopener noreferrer">IUT Cergy-Pontoise</a></p>
                <p class="paragraphe-info"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.8792992582753!2d2.3742022768515785!3d48.97482199250524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6697fd2eeccfb%3A0x2f4803cf34fe74a9!2sIUT%20de%20Cergy-Pontoise%20-%20site%20de%20Sarcelles!5e0!3m2!1sfr!2sfr!4v1705325529475!5m2!1sfr!2sfr"
                         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
            <!-- fin de l'Info pratique + carte google maps -->

            <!-- Info sur les moyens de tranports -->
            <div class="information-iut">
                <h1 class="titre-partie">Voici les transports pour accede à l'IUT Cergy-Pontoise</h1>
                <ul class="listes-transports">
                    <li>- La Gare "Garges-Sarcelles", prendre le RER D: Voici le plan <a href="https://www.ratp.fr/plan-de-ligne/img/rer/d/plan-de-ligne_rer_ligne-d.1695733918.png" target="_blank" rel="noopener noreferrer" title="Plan RER D RATP">RER D</a></li>
                    <li>- La station "Les Flanades", prendre le tranway n°5: Voici le plan <a href="https://www.ratp.fr/plan-de-ligne/img/tram/t5/plan-de-ligne_tram_ligne-t5.1648479819.png" target="_blank" rel="noopener noreferrer" title="Plan tramway 5 RATP">T5</a></li>
                    <li>- Pour d'autres itinéraire, rendez-vous sur le site de la SNCF: <a href="https://www.sncf.com/fr/itineraire-reservation/itineraire" target="_blank" rel="noopener noreferrer" title="Site de la SNCF">SNCF</a>
                </ul>
            </div>
            <!-- fin de l'Info sur les moyens de tranports -->
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>