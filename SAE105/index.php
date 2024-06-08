<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil CY Cergy Paris Université</title>

    <!-- Partie des css venant du dossier ne_pas_modifier -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <!-- Fin des css venant du dossier ne_pas_modifier -->

    <!-- Partie des nouveaux css -->
    <link rel="stylesheet" href="ressources/css/barre-navigation.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="shortcut icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <!-- Fin des nouveaux css -->

    <!-- Vous n'avez pas besoin de ce fichier sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <section class="liste-articlesMMI">
                    <ul>
                        <li>
                            <figure>
                                <img src="ressources/images/dev-web.jpg" alt="image représentant le parcour développement web"/>
                            </figure>
                            <articles>
                                <h1 class="titre">Développement Web</h1>
                                <p class="description">Le parcours développement Web et dispositifs interactifs forme au développement de sites Web et à l’intégration d’applications multimédias ou mobiles.
                                    Il aborde notamment les outils et langages informatiques nécessaires à la conception et à la gestion de ces médias.
                                    Il prépare notamment aux métiers d’intégrateur ; de développeur « back », « front », ou « full stack »  d’intégrateur de dispositifs de réalité virtuelle.
                                </p>
                            </articles>
                        </li>
                        <li>
                            <figure>
                                <img src="ressources/images/crea-num.jpg" alt="une image représentant le parcour création numerique"/>
                            </figure>
                            <articles>
                                <h1 class="titre">Création Numérique</h1>
                                <p class="description">Le parcours création numérique vise à développer l’expression de message sur différents médias, sous la forme de création graphique et d’écriture multimédia. 
                                    II permet d’acquérir les techniques nécessaires à la création de ressources numériques, notamment de publications Web. 
                                    Il prépare principalement aux métiers de designer, infographiste, game designer ou technicien audiovisuel.
                                </p>
                            </articles>
                        </li>
                        <li>
                            <figure>
                                <img src="ressources/images/strat-com.jpg" alt="une image représentant le parcour stratégie de communication"/>
                            </figure>
                            <articles>
                                <h1 class="titre">Stratégie de Communication et Design d'Expérience</h1>
                                <p class="description">Le parcours stratégie de communication numérique et design d’expérience forme à la conception de supports de communication « orientés utilisateurs » (facilité de navigation, ergonomie, visibilité sur le Web…). 
                                    Il permet d’acquérir les techniques nécessaires pour déployer une stratégie de communication numérique et gérer des projets. 
                                    Il prépare principalement aux métiers de chargé de communication numérique, d’UX designer, de rédacteur Web, de community manager, de spécialiste du référencement sur Internet…
                                </p>
                            </articles>
                        </li>
                    </ul>
                </section>
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
            </section>
            
        </main>

        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>