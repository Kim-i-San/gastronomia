<?php

return [

    'meta' => [
        'title' => 'FAQ | GastronomIA',
        'description' => 'Retrouvez les réponses aux questions fréquentes sur GastronomIA.',
    ],

    'hero' => [
        'eyebrow' => 'Centre d’aide',
        'title' => 'Comment pouvons-nous vous aider ?',
        'description' => 'Retrouvez les réponses aux questions les plus fréquentes sur GastronomIA.',
    ],

    'search' => [
        'placeholder' => 'Rechercher dans la FAQ...',
        'no_results_title' => 'Aucun résultat',
        'no_results_text' => 'Essayez avec un autre mot-clé ou contactez-nous.',
        'contact' => 'Nous contacter',
    ],

    'categories' => [

        [
            'title' => 'Bien démarrer',
            'description' => 'Découvrez GastronomIA et configurez votre compte.',
            'questions' => [

                [
                    'question' => 'À qui s’adresse GastronomIA ? Est-ce uniquement pour les professionnels ?',
                    'answer' => '
                        GastronomIA est conçu aussi bien pour les <strong>professionnels de la gastronomie</strong> que pour les passionnés de cuisine.
                        <br><br>
                        Les outils s’adaptent à différents usages : digitaliser des recettes personnelles, simplifier les tâches quotidiennes en cuisine ou gérer l’organisation complète d’un établissement professionnel.
                        <br><br>
                        Plusieurs niveaux d’abonnement sont disponibles afin de répondre aux besoins des utilisateurs occasionnels comme des établissements professionnels.
                    ',
                ],

                [
                    'question' => 'Par où commencer après ma première connexion ?',
                    'answer' => '
                        Depuis l’écran d’accueil, vous pouvez accéder aux principales fonctionnalités de GastronomIA.
                        <br><br>
                        En haut à droite, vous trouverez un accès rapide à votre profil.
                        Les deux boutons principaux permettent d’accéder au scan de recettes et à la création de recettes assistée par intelligence artificielle.
                        <br><br>
                        Les raccourcis donnent également accès à vos classeurs de recettes, vos favoris et vos différents plannings.
                        Le menu principal vous permet d’accéder à tout moment aux recettes, menus, outils IA, commandes et fonctions de planification.
                    ',
                ],

                [
                    'question' => 'Où puis-je modifier les informations de mon profil ?',
                    'answer' => '
                        Depuis n’importe quel écran, utilisez l’accès <strong>Profil</strong> situé en haut à droite.
                        <br><br>
                        Vous pouvez y compléter vos informations personnelles, les informations de votre établissement et accéder à différents paramètres tels que les fournisseurs, commandes ou membres de l’équipe.
                    ',
                ],

                [
                    'question' => 'Les informations sur mon équipement de cuisine améliorent-elles les résultats de l’IA ?',
                    'answer' => '
                        Oui. En renseignant votre équipement de cuisine, GastronomIA peut proposer des recettes et instructions mieux adaptées à votre environnement de travail.
                        <br><br>
                        Vous pouvez configurer ces informations depuis <strong>Profil → Restaurant → Gestion de la cuisine</strong>.
                    ',
                ],

            ],
        ],


        [
            'title' => 'Recettes & IA',
            'description' => 'Créez, digitalisez, organisez et exploitez vos recettes.',
            'questions' => [

                [
                    'question' => 'Comment créer ma première recette ?',
                    'answer' => '
                        Depuis le bouton de création ou de génération de recette, plusieurs méthodes sont disponibles.
                        <br><br>
                        <strong>Titre de recette</strong><br>
                        Créez une recette à partir du nom d’un plat.
                        <br><br>
                        <strong>Ingrédients</strong><br>
                        Créez une recette à partir d’un ou plusieurs ingrédients.
                        <br><br>
                        <strong>Création rapide</strong><br>
                        Générez rapidement une entrée, un plat ou un dessert, avec différents filtres et critères.
                        <br><br>
                        Les recettes générées sont ensuite accessibles dans votre espace de recettes pour être organisées, planifiées ou partagées.
                    ',
                ],

                [
                    'question' => 'Puis-je consulter les suggestions de l’IA avant de générer une recette ?',
                    'answer' => '
                        Oui. À chaque génération, GastronomIA peut vous proposer plusieurs suggestions en fonction du plat, des ingrédients ou de votre recherche.
                        <br><br>
                        Vous pouvez retrouver ces suggestions dans <strong>Mes recettes → Suggestions</strong>.
                        <br><br>
                        Après avoir sélectionné une suggestion, vous pouvez consulter les ingrédients et le coût estimé avant de générer la recette complète avec ses instructions, allergènes et informations nutritionnelles.
                    ',
                ],

                [
                    'question' => 'Où sont enregistrées toutes mes recettes ?',
                    'answer' => '
                        Chaque recette générée ou scannée est automatiquement enregistrée dans votre historique de recettes.
                        <br><br>
                        Vous pouvez ensuite organiser vos recettes à l’aide de classeurs et sous-classeurs et les retrouver via les différentes sections disponibles : historique, classeurs, scans, planning et suggestions.
                    ',
                ],

                [
                    'question' => 'Comment organiser mes recettes avec des classeurs et sous-classeurs ?',
                    'answer' => '
                        Dans <strong>Mes recettes → Classeurs</strong>, vous pouvez créer un classeur puis y ajouter autant de sous-classeurs que nécessaire.
                        <br><br>
                        Par exemple : <strong>Pâtisserie → Glaces & Sorbets</strong>.
                        <br><br>
                        Vous pouvez ensuite classer vos recettes directement depuis leur menu d’options.
                    ',
                ],

                [
                    'question' => 'Comment classer une recette dans un classeur ?',
                    'answer' => '
                        Ouvrez le menu d’options <strong>(⋮)</strong> de la recette puis sélectionnez l’option permettant de classer le plat.
                        <br><br>
                        Vous pourrez ensuite choisir le classeur ou sous-classeur dans lequel enregistrer la recette.
                    ',
                ],

                [
                    'question' => 'Puis-je scanner des recettes manuscrites ou des recettes en photo ?',
                    'answer' => '
                        Oui. La fonction de scan permet de digitaliser différents types de contenu : notes manuscrites, photos de magazines ou de livres, captures d’écran ou photographies de plats.
                        <br><br>
                        GastronomIA analyse ensuite le contenu et peut compléter automatiquement certaines informations manquantes telles que le temps de préparation, les instructions, les valeurs nutritionnelles ou les informations relatives aux ingrédients.
                    ',
                ],

                [
                    'question' => 'Comment modifier le nombre de portions d’une recette ?',
                    'answer' => '
                        Depuis la vue principale de la recette, modifiez simplement le champ correspondant au <strong>nombre de personnes</strong>.
                        <br><br>
                        Les quantités sont automatiquement recalculées en fonction du nouveau nombre de portions.
                    ',
                ],

                [
                    'question' => 'Comment modifier les ingrédients d’une recette ?',
                    'answer' => '
                        Depuis la vue principale de la recette, vous pouvez ajouter, modifier ou supprimer les ingrédients.
                        <br><br>
                        Cliquez simplement sur un ingrédient existant pour le modifier ou utilisez l’option permettant d’ajouter un nouvel ingrédient.
                    ',
                ],

                [
                    'question' => 'Où consulter les instructions, la fiche technique et exporter une recette en PDF ?',
                    'answer' => '
                        Depuis la recette, sélectionnez <strong>Créer la recette</strong> ou <strong>Voir la recette</strong> si celle-ci a déjà été générée.
                        <br><br>
                        Vous pouvez ensuite modifier son contenu, consulter les instructions détaillées ou utiliser l’option PDF pour exporter, partager ou imprimer la fiche.
                    ',
                ],

                [
                    'question' => 'Comment consulter les valeurs nutritionnelles et les allergènes ?',
                    'answer' => '
                        Depuis le menu d’options <strong>(⋮)</strong> de la recette, sélectionnez l’option permettant d’afficher les <strong>valeurs nutritionnelles et allergènes</strong>.
                    ',
                ],

                [
                    'question' => 'Comment partager une recette ou la publier sur les réseaux sociaux ?',
                    'answer' => '
                        Depuis le menu <strong>(⋮)</strong> d’une recette, utilisez l’option de partage pour diffuser le plat et son visuel.
                        <br><br>
                        Lorsque la recette fait partie d’un menu planifié, vous pouvez également partager des informations complémentaires telles que le prix ou le menu complet.
                    ',
                ],

            ],
        ],


        [
            'title' => 'Menus & Planning',
            'description' => 'Créez vos cartes, planifiez vos menus et organisez votre activité.',
            'questions' => [

                [
                    'question' => 'Comment créer et gérer mes menus ou cartes ?',
                    'answer' => '
                        Dans la section dédiée à vos menus et cartes, vous pouvez créer une nouvelle carte ou importer un contenu existant.
                        <br><br>
                        Une fois votre carte créée, vous pouvez la personnaliser et l’exporter au format PDF.
                    ',
                ],

                [
                    'question' => 'Puis-je planifier mes menus de la semaine et les partager ?',
                    'answer' => '
                        Oui. Dans <strong>Planning → Menu de la semaine</strong>, vous pouvez planifier vos recettes par catégorie, par exemple entrée, plat principal et dessert.
                        <br><br>
                        Le planning peut ensuite être exporté en PDF.
                        Vous pouvez également partager votre menu du jour sur les réseaux sociaux et y ajouter des informations complémentaires telles que le prix ou une photo du plat.
                    ',
                ],

                [
                    'question' => 'Comment planifier la présence de mon personnel ?',
                    'answer' => '
                        Dans <strong>Planning → Présence</strong>, sélectionnez les créneaux souhaités puis utilisez l’outil de gestion des horaires.
                        <br><br>
                        Vous pouvez ensuite sélectionner les collaborateurs et leurs fonctions pour les assigner aux différents créneaux.
                        Les horaires peuvent également être modifiés individuellement ou pour plusieurs collaborateurs.
                    ',
                ],

            ],
        ],


        [
            'title' => 'Équipe & Opérations',
            'description' => 'Gérez vos collaborateurs, tâches, commandes et temps de travail.',
            'questions' => [

                [
                    'question' => 'Comment fonctionnent les tâches et la mise en place ?',
                    'answer' => '
                        Dans <strong>Planning → Tâches</strong>, vous pouvez créer et assigner des tâches par équipe ou par journée.
                        <br><br>
                        Les tâches non terminées peuvent être reportées et réassignées.
                        Les collaborateurs peuvent également marquer leurs tâches comme terminées.
                        <br><br>
                        L’administrateur peut créer des tâches à partir du planning hebdomadaire ou ajouter des tâches indépendantes et les attribuer aux membres de l’équipe.
                    ',
                ],

                [
                    'question' => 'Où gérer mes fournisseurs et mes commandes ?',
                    'answer' => '
                        Dans <strong>Profil → Mes fournisseurs</strong>, vous pouvez gérer les coordonnées de vos fournisseurs.
                        Vous pouvez sélectionner des fournisseurs existants ou en ajouter manuellement.
                        <br><br>
                        Depuis la section Commandes ou directement depuis une recette, vous pouvez ajouter des produits, créer des bons de commande, puis les envoyer par e-mail ou les exporter au format PDF.
                    ',
                ],

                [
                    'question' => 'Existe-t-il un portail dédié aux employés ?',
                    'answer' => '
                        <strong>Oui.</strong> Chaque collaborateur dispose d’un espace dédié.
                        <br><br>
                        Il peut notamment accéder à la pointeuse, consulter les plannings de l’équipe et du personnel ainsi que le menu de la semaine.
                        <br><br>
                        Les collaborateurs peuvent également consulter les recettes liées aux menus ou au planning et envoyer leurs demandes de congé ou de vacances.
                    ',
                ],

                [
                    'question' => 'Comment ajouter des membres de l’équipe et gérer leurs rôles et permissions ?',
                    'answer' => '
                        Dans <strong>Profil → Équipe</strong>, vous pouvez ajouter vos collaborateurs, leur attribuer un rôle ou une zone de travail et gérer leurs accès.
                        <br><br>
                        Chaque collaborateur possède une fiche détaillée permettant notamment de gérer son rôle et de consulter ses données de temps de travail.
                        <br><br>
                        Lorsqu’un nouveau collaborateur est ajouté, il reçoit un e-mail lui permettant d’accéder à son portail employé.
                    ',
                ],

                [
                    'question' => 'GastronomIA permet-il de gérer les heures de travail et la pointeuse ?',
                    'answer' => '
                        Oui. GastronomIA comprend une <strong>pointeuse</strong> ainsi que des outils de gestion du temps disponibles pour les administrateurs et les collaborateurs.
                        <br><br>
                        L’administrateur peut notamment définir si un collaborateur est autorisé ou non à modifier ses propres entrées de temps.
                    ',
                ],

            ],
        ],


        [
            'title' => 'Compte & Abonnement',
            'description' => 'Gérez votre abonnement et les informations liées à votre compte.',
            'questions' => [

                [
                    'question' => 'Comment fonctionnent les abonnements et la facturation ?',
                    'answer' => '
                        Depuis <strong>Profil → Abonnement</strong>, vous pouvez gérer votre formule GastronomIA.
                        <br><br>
                        Les offres comprennent les formules HOME <strong>Freemium</strong> et <strong>Lite</strong>, ainsi que les formules PRO <strong>Basic</strong>, <strong>Advanced</strong> et <strong>Premium</strong>.
                        <br><br>
                        Vous pouvez également consulter les informations de facturation et vos factures.
                        Les nouveaux utilisateurs bénéficient d’un <strong>essai gratuit de 30 jours des fonctionnalités PRO</strong>.
                    ',
                ],

                [
                    'question' => 'Comment supprimer définitivement mon compte ?',
                    'answer' => '
                        Pour demander la suppression complète de votre compte et de vos données, écrivez à
                        <strong><a href="mailto:support@gastronomia.ai" class="text-gia-orange hover:underline">support@gastronomia.ai</a></strong>
                        depuis l’adresse e-mail associée à votre compte.
                        <br><br>
                        Indiquez les informations nécessaires pour nous permettre d’identifier votre compte et de traiter votre demande.
                    ',
                ],

            ],
        ],

    ],

    'cta' => [
        'title' => 'Vous n’avez pas trouvé votre réponse ?',
        'description' => 'Notre équipe est à votre disposition pour vous aider.',
        'button' => 'Nous contacter',
    ],

];