<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 partie 5 PHP</title>
  <!-- ICI LES STYLES -->
  <link rel="stylesheet" href="style.css" />
  <!-- FIN DES STYLES -->
</head>
<body>
<div>
<?php
    // On fait un tableau avec une variable qui est un tableau (array), on répertorie dans la parenthèse les lignes
    $mois = array(
        'Janvier',
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
    echo "{$mois}";
    ?>
</div>
</body>
</html>