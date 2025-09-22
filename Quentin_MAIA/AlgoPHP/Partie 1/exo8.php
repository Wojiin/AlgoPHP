<h1>Exercice 8</h1>

<p>Ecrire un algoroithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme : <br>
Affichage (pour la table de 8) : <br>
Table de 8 : <br>
1 x 8 = 8 <br>
2 x 8 = 16 <br>
3 x 8 = 24 <br>
Remarque : proposer 2 solutions avec 2 types de boucles. </p>

<h2>Résultat</h2>
<?php
$entier = 8;
$mult = 1;
$result = $mult * $entier;

while($mult <= 10){ //Tant que mult est inférieur ou égal à 10
echo "$mult x $entier = $result";
echo "<br>"; 
$mult++;
$result = $mult * $entier;
}
echo "<br><br><br>";
for($mult = 1; $mult <=10; $mult++){
    $result = $mult * $entier;
    echo " $mult x $entier = $result";
    echo "<br>";
}