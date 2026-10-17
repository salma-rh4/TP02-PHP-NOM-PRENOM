
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Calcul TVA</title>
</head>
<body>

    <h1>Récapitulatif de la commande</h1>

    <?php
    // 1. Définition des constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // 2. Déclaration des variables
    $prixUnitaireHT = 60;
    $quantite = 3;

    // 3. Calculs
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // 4. Ajouter les frais de livraison
    $totalTTC += 15;

    // 5. Affichage du récapitulatif
    echo "<p>Prix unitaire HT : " . $prixUnitaireHT . " " . DEVISE . "</p>";
    echo "<p>Quantité : " . $quantite . "</p>";
    echo "<p>Total HT : " . $totalHT . " " . DEVISE . "</p>";
    echo "<p>Montant de TVA (" . TAUX_TVA . "%) : "
         . $montantTVA . " " . DEVISE . "</p>";
    echo "<p>Total TTC : " . ($totalHT + $montantTVA) . " " . DEVISE . "</p>";
    echo "<p>Frais de livraison : 15 " . DEVISE . "</p>";

    echo "<h2>Montant final : " . $totalTTC . " " . DEVISE . "</h2>";

    // Vérifier l'existence de la constante
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est définie.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'est pas définie.</p>";
    }
    ?>

</body>
</html>
