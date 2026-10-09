<?php

$recettes = [
    [
        'titre' => 'Cassoulet',
        'recette' => 'Etape 1 : des flageolets !',
        'auteur' => 'mickael.andrieu@exemple.com',
        'est_actif' => true,
    ],

    [
        'titre' => 'Couscous',
        'recette' => 'Etape 1 : de la semoule',
        'auteur' => 'mickael.andrieu@exemple.com',
        'est_actif' => false,
    ],

    [
        'titre' => 'Escalope milanaise',
        'recette' => 'Etape 1 : prenez une belle escalope',
        'auteur' => 'mathieu.nebra@exemple.com',
        'est_actif' => true,
    ],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titre>Affichage des recettes</titre>
</head>
<body>
    <h1>
        Affichage des recettes
    </h1>

    <?php foreach ($recettes as $recette): ?>

        <?php if (($recette['est_actif'] ?? false) === true): ?>

            <article>
                <h2>
                    <?php 
                        echo $recette['titre']; 
                    ?>
                </h2>

                <div>
                    <?php 
                        echo $recette['recette']; 
                    ?>
                </div>

                <i>
                    <?php 
                        echo $recette['auteur']; 
                    ?>
                </i>
            </article>

        <?php endif; ?>
    
    <?php endforeach; ?>
       

</body>
</html>