<?php
    $couleur_bulle_classe = "turquoise";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Propos</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/a-propos.css">
    <link rel="stylesheet" href="ressources/css/header-a-propos.css">
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
            <section class="présen">
                
                    <ul class="conteneur-ancre">
                        <li><a class="ancre-color" href="#Présentation">Présentation</a></li>
                        <li><a class="ancre-color" href="#SAÉ">SAÉ</a></li>
                        <li><a class="ancre-color" href="#Exemple de SAÉ">Exemple de SAÉ</a></li>
                    </ul>
                
                <p class="paragraphe-A-propos" id="Présentation">Le BUT métiers du multimédia et de l'internet (MMI) remplace le DUT MMI à partir de la rentrée 2021, 
                auparavant appelé DUT SRC (services et réseaux de communication) jusqu'en mai 2013, qui était lancé à la rentrée universitaire 1994 
                par les IUT de Vélizy, Marne-la- Vallée, Saint-Raphaël et Verdun. Ce BUT offre une alternative aux anciens diplômes Bac+3, tels que 
                la licence professionnelle en activités et techniques de communication et la licence professionnelle en systèmes 
                informatiques et logiciels.
                </p>

                <p class="paragraphe-A-propos">Lorsque cette formation était proposée sous la forme d'un Diplôme Universitaire Technologique (DUT), 
                elle se déroulait sur deux années (1 800 heures). En théorie, elle est accessible à tous les bacheliers, quelle que soit leur série. 
                En moyenne, il y a de 30 à 35 heures de cours par semaine. Cette formation se divise en trois grands pôles, auxquels il faut ajouter 
                le projet tutoré (300 heures) et les stages (420 heures). Les trois grands axes sont les suivants :
                </p>
                
                <ul class="liste-a-propos">
                    <li> • La culture contemporaine et langues étrangères (500 heures)</li>
                    <li> • La culture scientifique et technique (700 heures)</li>
                    <li> • La culture communicationnelle (600 heures)</li>
                </ul>

                <div class="conteneur-UQAC">
                    <img class="image-UQAC" src="ressources/images/UQAC.JPG" alt="Image de l'Université du Québec à Chicoutimi">
                </div>

                <p class="paragraphe-A-propos">A CY Cergy Paris Université, il est donné la possibilité aux étudiants de passer un semestre au Québec 
                à l'Université du Québec à Chicoutimi (UQAC) dans une formation dont le contenu est proche de celui proposé 
                à l'IUT. Il est également possible d'effectuer ce semestre après avoir été diplômé. Attention : les cours sont 
                dispensés en langue française.
                </p>
            </section>
            
            <section class="sae">
                <h1 class="titre-page" id="SAÉ">Situation d'Apprentissage et d'Évaluation</h1>

                <p class="paragraphe-A-propos">Dans l'optique de préparer au mieux les étudiants à leur future vie professionnelle, les étudiants 
                sont regroupés en agences de communication de 3 à 7 personnes dans des projets appelés "SAÉ" ou Situation d'Apprentissage 
                et d'Évaluation. Ces agences ont pour but d'encourager le travail d'équipe dans un cadre reprenant l'environnement 
                du travail en entreprise.
                </p>

                <p class="paragraphe-A-propos">La situation d'apprentissage et d'évaluation ou simplement SAÉ est la situation didactique que privilégie, 
                au Québec, le Ministère de l'Éducation, Enseignement supérieur et Recherche (MEESR) par le biais du Programme de 
                formation de l'école québécoise (PFEQ). Une SAE se définit comme un ensemble constitué d'une ou plusieurs tâches à 
                réaliser par l'élève en vue d'atteindre le but fixé. Elle permet: à l'élève, de développer et d'exercer une ou plusieurs 
                compétences disciplinaires et transversales; à l'enseignant, d'assurer le suivi du développement des compétences dans 
                une perspective d'aide à l'apprentissage. Elle est donc centrée sur l'élève et préconise une approche constructiviste 
                ou socioconstructiviste à l'école.
                </p>

                <p class="paragraphe-A-propos">Les SAE sont une nouveauté des diplômes BUT, elles visent à remplacer les Devoirs Sur Table et les notes à terme, 
                en proposant une approche plus "ingénieure" de la scolarité avec des étudiants qui apprennent à résoudre des problèmes 
                et non plus apprendre par cœur leurs cours.
                </p>
            </section>

            <section class="ex-sae">
                <h1 class="titre-page" id="Exemple de SAÉ">Exemples de projets réalisés en SAÉ</h1>

                <ul class="conteneur-pierre">
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-SAE-104" src="ressources/images/SAE-104.JPG" alt="Photo d'un Projet ouvert sur Davinci resolve">
                        </figure>
                        <h1 class="titre-article">Produire un contenu audio et vidéo ● SAÉ 104</h1>
                        <p class="description">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </li>
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-SAE-103" src="ressources/images/SAE-103.jpg" alt="Photos des première de couverture de différent livret d'exposition">
                        </figure>
                        <h1 class="titre-article">Produire les éléments d'une communication visuelle ● SAÉ 103</h1>
                        <p class="description">Réalisation et mise en page d'un livret d'exposition</p>
                    </li>
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-SAE-101" src="ressources/images/SAE-101.jpg" alt="Photo d'une pierre en bord de mer">
                        </figure>
                        <h1 class="titre-article">Auditer une communication numérique ● SAÉ 101</h1>
                        <p class="description">Annalyse d'une page web</p>
                    </li>
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-SAE-105" src="ressources/images/SAE-105.jpg" alt="Photos de la page a propos et le code html qui la compose">
                        </figure>
                        <h1 class="titre-article">Produire un site Web SAE ● 105</h1>
                        <p class="description">Réalisation d'un site web en utilisent les différent lengage apris comme l'HTML, le CSS et le PHP</p>
                    </li>
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-pierre" src="ressources/images/pierre.jpg" alt="Photo d'une pierre en bord de mer">
                        </figure>
                        <h1 class="titre-article">Gérer un projet de communication numérique ● SAÉ 106</h1>
                        <p class="description">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </li>
                    <li class="conteneur-article">
                        <figure>
                            <img class="image-pierre" src="ressources/images/pierre.jpg" alt="Photo d'une pierre en bord de mer">
                        </figure>
                        <h1 class="titre-article">Concevoir une recommandation de communication numérique ● SAÉ 102</h1>
                        <p class="description">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </li>
                </ul>
            </section>
            
        <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>