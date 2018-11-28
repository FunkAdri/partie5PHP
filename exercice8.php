<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 partie 5 PHP</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css" />
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div>
            <?php
            // On crée un tableau
            $monthsList = array('Janvier',
                                'Février',
                                'Mars',
                                'Avril',
                                'Mai',
                                'Juin',
                                'Juillet',
                                'Août',
                                'Septembre',
                                'Octobre',
                                'Novembre',
                                'Décembre');
            
            // Puis on utilise une boucle foreach (plus adaptée aux tableaux) en lui demandant de stocker à chaque boucle la valeur
            // de $monthsList dans la variable $month
            foreach ($monthsList as $month) {
                ?>
            
                <!-- Puis on l'affiche -->
                <p><?= $month ?></p>
                <?php } ?>
        </div>
    </body>
</html>