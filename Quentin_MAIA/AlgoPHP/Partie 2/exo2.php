<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <br>
$capitales = <br>
[France"=>Paris","Allemagne"=>Berlin,"USA"=>"Washington","Italie"=>"Rome"]; <br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant ( notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée. <br>
Vous devrez appeler la fonction comme suit : "afficherTableHTML($capitales)"</p>

<h2>Résultat</h2>
<?php
$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
ksort($capitales);
afficherTableHTML($capitales);
function afficherTableHTML($array){
    echo"<table border=1>
    <th>Pays </th>
    <th>Capitale</th>";
    foreach($array as $k =>$v){
        echo "<tr><td>". strtoupper($k)."</td></td>
        <td>". $v."</td></tr>";
}
echo"</table>";    
}