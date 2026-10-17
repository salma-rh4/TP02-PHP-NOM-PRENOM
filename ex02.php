
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables PHP</title>
</head>
<body>

<?php
// 1. Déclaration des variables
$nom = "Rich";
$prenom = "Salma";
$age = 18;
$formation = "IAP S3";

// 2. Concaténation avec l'opérateur .
$presentation = "Je m'appelle " . $prenom . " " . $nom
              . ", j'ai " . $age . " ans et je suis en "
              . $formation . ".";

// 3. Ajouter une phrase avec l'opérateur .=
$presentation .= " J'apprends PHP.";

// Afficher la présentation
echo $presentation . "<br>";

// 4. Les variables sont sensibles à la casse
$note = 12;
$Note = 16;

echo "La note est : " . $note . "<br>";
echo "La Note est : " . $Note . "<br>";
?>

</body>
</html>