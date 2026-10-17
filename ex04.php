
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types et conversions PHP</title>
</head>
<body>

    <h1>Types et conversions en PHP</h1>

    <?php
    // 1. Déclaration des six variables
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    // 2. Examiner les types et les valeurs
    echo "<h2>1. Types et valeurs</h2>";
    echo "<pre>";

    var_dump($entier);
    var_dump($chaine);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);

    echo "</pre>";

    // 3. Conversions de types
    echo "<h2>2. Conversions</h2>";
    echo "<pre>";

    $chaineEnEntier = (int) $chaine;
    echo "Conversion de \"42\" en entier : ";
    var_dump($chaineEnEntier);

    $decimalEnEntier = (int) $decimal;
    echo "Conversion de 15.8 en entier : ";
    var_dump($decimalEnEntier);

    $entierEnChaine = (string) $entier;
    echo "Conversion de 42 en chaine : ";
    var_dump($entierEnChaine);

    echo "</pre>";

    // 4. Affichage de true et false
    echo "<h2>3. Affichage de true et false</h2>";

    echo "Avec echo : true = ";
    echo true;
    echo " ; false = ";
    echo false;
    echo "<br>";

    echo "<pre>";
    echo "Avec var_dump() : ";
    var_dump(true);
    var_dump(false);
    echo "</pre>";

    // 5. Conversion de plusieurs valeurs en booléens
    echo "<h2>4. Conversion en booléens</h2>";
    echo "<pre>";

    $zero = (bool) 0;
    $chaineZero = (bool) "0";
    $textePHP = (bool) "PHP";
    $tableauVide = (bool) [];

    echo "Conversion de 0 : ";
    var_dump($zero);

    echo "Conversion de \"0\" : ";
    var_dump($chaineZero);

    echo "Conversion de \"PHP\" : ";
    var_dump($textePHP);

    echo "Conversion d'un tableau vide : ";
    var_dump($tableauVide);

    echo "</pre>";
    ?>

</body>
</html>
