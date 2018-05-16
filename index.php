<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 1 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    $age = 24;
    // Affichage du contenu de la variable pour vérification
    echo 'le contenu de ma variable $age est ' . $age . '<br />';
    if ($age <= 18) { //Si $age est inférieur à 18, on affiche vous êtes mineur
      echo 'Vous êtes mineur';
    } else {  //Sinon, on affiche vous êtes majeur
      echo 'Vous êtes majeur';
    }
    ?>
  </p>
</body>
</html>
