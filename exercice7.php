<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 partie 5 PHP</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css" />
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div>
            <?php
            // On crée le tableau associatif
            $hautsDeFranceDepartmentList = array('02' => 'Aisne', 
                                                 '59' => 'Nord',
                                                 '60' => 'Oise',
                                                 '62' => 'Pas-de-calais',
                                                 '80' => 'Somme');
            
            // Puis on ajoute la valeur indiquée
            $departmentList['51'] = 'Marne';
            ?>
        </div>
    </body>
</html>