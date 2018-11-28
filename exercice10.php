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
            
            // Puis on utilise une boucle foreach qui va stocker $indexnumber et sa valeur associée dans $element à chaque boucle
            foreach ($hautsDeFranceDepartmentList as $departmentNumber => $department) {
                ?>
                
                <!-- Puis on affiche le tout en concaténant -->
                <p><?= 'Le département ' . $department . ' a pour numero ' . $departmentNumber; ?></p>
                
                <!-- On peut aussi utiliser -->
                <p><?php echo sprintf('Le département %s a pour numero %s', $department, $departmentNumber); ?></p>
            
            <?php } ?>
        </div>
    </body>
</html>