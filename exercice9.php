<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 9 partie 5 PHP</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css" />
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div>
            <?php
            // On crée un tableau associatif
            $hautsDeFranceDepartmentList = array('02' => 'Aisne',
                                                 '59' => 'Nord',
                                                 '60' => 'Oise', 
                                                 '62' => 'Pas-de-calais', 
                                                 '80' => 'Somme');
            
            // Puis on utilise une boucle foreach à laquelle on demande de stocker la valeur de $hdfDpt dans $element à chaque boucle
            foreach ($hautsDeFranceDepartmentList as $department) {
                ?>
                
            <!-- Puis on l'affiche -->
                <p><?= $department ?></p>
            <?php } ?>
        </div>
    </body>
</html>