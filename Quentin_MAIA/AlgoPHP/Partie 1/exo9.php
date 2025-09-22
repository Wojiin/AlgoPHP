<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son age et de son sexe. Si la personne est une femme dont l'age est compris entre 18 et 35 ansou si c'est un homme de plus de 20ans,
     alors celle-ci est imposable (sinon ce n'est pas le cas, " non imposable ").</p>

<h2>Résultat</h2>
<?php

function imposable($age, $sexe){
    if ($sexe == "f" && $age >= 18 && $age <= 35) {//Si le sexe est féminin ET que son âge est égal ou supérieur à 18 ET que son âge est inférieur à 35
        echo "La personne est imposable";
    } elseif ($sexe == "h" && $age >= 20) {//Si le sexe est masculin ET que son âge est supérieur ou égal à 20
        echo "La personne est imposable";
    } else {
        echo "La personne n'est pas imposable";
    }
}

$age = 32;
$sexe = "f";
echo "Age : $age";
echo "<br>";
echo "Sexe : $sexe";
echo "<br>";
imposable($age, $sexe);