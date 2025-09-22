<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge: <br>
<b>Poussin</b>: entre 6 et 7 ans <br>
<b>Pupille</b>: entre 8 et 9 ans <br>
<b>Minime</b>: entre 10 et 11 ans <br>
<b>Cadet</b>: à partir de 12 ans <br>
Si la catégorie n'est pas gérée, merci de le préciser. </p>

<h2>Résultat</h2>
<?php
$age = 10;

if ($age >= 6 && $age <= 7) {
    $categorie = "Poussin";
} elseif ($age >= 8 && $age <= 9) {
    $categorie = "Pupille";
} elseif ($age >= 10 && $age <= 11) {
    $categorie = "Minime";
} elseif ($age >= 12) {
    $categorie = "Cadet";
}
echo "L'enfant qui a $age ans appartient à la catégorie << $categorie >>";