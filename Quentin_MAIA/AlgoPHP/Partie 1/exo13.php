<h1>Exercice 13</h1>

<p>Calcule la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra etre affichée avec 2 décimales</p>

<h2>Résultat</h2>
<?php

$tabNotes = array(10,12,8,19,3,16,11,13,9);
$nbNotes = count($tabNotes);//compte le nombre d'entrées du tableau
$addNotes = array_sum($tabNotes);//additionne toutes les valeurs du tableau
$moyNotes = round(($addNotes/$nbNotes),2); //Divise la somme des notes avec le nombre d'entrée, arrondi à la 2e décimale


echo "Les notes obtenues par l'élève sont :".implode(', ',$tabNotes);//implode transforme le contenu d'un tableau en série de strings
echo "<br>";
echo " Sa moyenne générale est donc de : $moyNotes";