<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date. <br>
Exemple; <br>
formaterDateFr("2018-02-23");</p>

<?php
$date = "2018-02-23";
function formaterDateFr($date){
$date = date_create_from_format("Y,m,d",$date);
$date = date_format($date,"l,d,F,Y");
};
echo "$date";
