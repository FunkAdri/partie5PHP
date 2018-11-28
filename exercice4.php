<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 partie 5 PHP</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css" />
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div>
            <?php
            // On crée un tableau
            $mois = array('Janvier',
                          'Février', 
                          'Mars', 
                          'Avril', 
                          'Mai', 
                          'Juin', 
                          'Juillet', 
                          'Aout', 
                          'Septembre', 
                          'Octobre', 
                          'Novembre', 
                          'Décembre');
            $mois[7] = 'Aout';
            ?>
        </div>
    </body>
</html>