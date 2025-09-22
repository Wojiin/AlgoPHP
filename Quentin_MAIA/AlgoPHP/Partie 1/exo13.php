<h1>Exercice 13</h1>

<p>Calcule la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra etre affichée avec 2 décimales</p>

<h2>Résultat</h2>
<?php

$tabNotes = array(10,12,8,19,3,16,11,13,9);
$nbNotes = count($tabNotes);
$addNotes = array_sum($tabNotes);
$moyNotes = round(($addNotes/$nbNotes),2);


echo "Les notes obtenues par l'élève sont :".implode(', ',$tabNotes);
echo "<br>";
echo " Sa moyenne générale est donc de : $moyNotes";