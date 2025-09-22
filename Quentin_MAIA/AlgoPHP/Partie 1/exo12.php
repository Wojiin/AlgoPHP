<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau contenant clé et valur), dire bonjour aux différentes personnes dans leur langue respective (français = Salut, anglais = Hello, espagnol = Hola) en utilisant un switch.</p>
<h2>Résultat</h2>
<?php

$tabUsers = array(
    "Mickaël" => "FRA","Virgile" => "ESP","Marie-Claire" => "ENG");

function bonjour($prenom, $langue){
    switch($langue){
        case "FRA":
            echo "Salut $prenom<br>";
            break;
        case "ESP":
            echo "Hola $prenom<br>";
            break;
        case "ENG":
            echo "Hello $prenom<br>";
            break;  
        default:
            echo "Bonjour $prenom<br>";
            break;
    }
}
ksort($tabUsers);
foreach($tabUsers as $prenom => $langue){
    bonjour($prenom, $langue);
}
?>
