<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce ableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>
<?php
$tabVoitures = array("Peugeot","Renault","BMW","Mercedes");//array crée un tableau avec les données inscrites entre parenthèses
$nbMarques = count($tabVoitures);//Compte le nombre d'entrées dans le tableau

echo "Il y a $nbMarques marques de voitures dans le tableau :";
echo "<br>";
echo "<ul>"; //echo affiche une liste
foreach($tabVoitures as $item){//Pour chaque entrée dans le tableau
    echo "<li>$item</li>";//echo affiche chaque marque de voiture avec une puce 
    echo "<br>";//retour à la ligne
}
echo "</ul>"; // fin de la liste