<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billet de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>
<?php

$prix = 152;
$versement = 200;
$diff = ($versement-$prix); //Monnaie à rendre
$billets10 = intdiv($diff, 10);// nombre de billets de 10
$reste = $diff - ($billets10 * 10);// Reste à rendre après les billets de 10
$billets5 = intdiv($reste, 5);// nombre de billets de 5
$reste = $reste - ($billets5 * 5);// Reste à rendre après les billets de 5
$piece2 = intdiv($reste, 2);// nombre de pièces de 2
$reste = $reste - ($piece2 * 2); // Reste à rendre après les pièces de 2
$piece1 = $reste;// le reste final correspond aux pièces de 1

echo "Montant à payer : $prix €";
echo "<br>";
echo "Montant versé : $versement €";
echo "<br>";
echo "Reste à payer : $diff €";
echo "<br>";
echo "************************************";
echo "<br>";
echo "Rendu de monnaie :";
echo "<br>";
echo "$billets10 billets de 10€, $billets5 billet de 5€, $piece2 pièces de 2€, $piece1 pièces de 1€.";