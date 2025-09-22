<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.</p>
<h2>Résultat</h2>

<?php
$montant = 100;
$conversion_euro = ($montant/6.55957);
$montant_euro = round($conversion_euro,2);//round arrondi à la décimale choisie
echo "Montant en francs : $montant<br>";
echo "$montant francs = $montant_euro €";