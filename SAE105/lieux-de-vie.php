<?php
    $couleur_bulle_classe = "bleu gris";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lieux de vie</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/lieux-de-vie.css">
    <link rel="stylesheet" href="ressources/css/barre-navigation.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="shortcut icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        
    <main class="conteneur-principal">
    <article>
        <h1 class="titre-page">Lieux de vie</h1>
             <p class=>
                Entre les cours, l'université et ses IUT proposent de nombreux lieux de convivialité ou d'idéation. Divers et varies, ils permettent aux
                étudiants, de toute formation, de découvrir de nouveaux horizons et surtout de rencontrer les étudiants d'autres BUT.
            </p>
    </article>

    <ul class="liste-principale">
        <li class="conteneur">
            <figure>
                <img src="ressources/images/bibliotheque.JPG" alt="">
            </figure>
                <article>
                <h2 class="titre-page">Bibliothèque universitaire</h2>
                <p class="paragraphe">
                    La bibliotheque universitaire est un atout indispensable a votre reussite. Elle
                    met à votre disposition des collections (livres, revues, ressources numeriques
                    accessibles sur place et a distance) ainsi que des postes informatiques et des
                    espaces de travail.
                </p>
                </article> 
        </li>    
        <li class="conteneur row-reverse">
            <figure>
                <img src="ressources/images/cantine.JPG" alt="">
            </figure>
                <article>
                    <h2 class="titre-page">Se restaurer</h2>
                    <p class="paragraphe">
                        Les restaurants du CROUS vous permettent de déjeuner pour un tarif social,
                        fixé au plus à 3,30€. Pour bénéficier de ce tarif, il vous suffit de présenter
                        votre carte d'étudiant multiservices.
                    </p>
                    <p class="paragraphe">
                        <span class="police">Si vous êtes etudiant boursier, vous beneficiez automatiquement lors de
                        votre passage en caisse du tarif a 1€ pour un repas complet.</span>
                    </p>
                </article>
        </li>
        <li class="conteneur">
            <figure>
                <img src="ressources/images/faclab.JPG" alt=""> 
            </figure>
                <article>
                <h3 class="titre-page">Réseau des fablabs de CY Cergy Paris Université</h3>
                <p class="paragraphe"> 
                    Intégré au Centre d'appui aux enseignements, le réseau des fablabs de CY
                    Cergy Paris Universite comprend le fablabs LabBoite de Cergy (Grand centre)
                    et le Faclab de Gennevilliers (site de l'université). Ce réseau permet
                    d'expérimenter, tester et echanger dans des lieux collaboratifs, accueillants,
                    et ouverts à toutes et tous.
                </p>
                </article>
        </li>
    </ul>
            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>