<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. <br>
Exemple: <br>
$elements = ["Monsieur","Madame","Mademoiselle"];
</p>

<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($elements) {
    echo "<select>"; //balise liste déroulante
    foreach ($elements as $valeur) {
        echo "<option>$valeur</option>";//balise des choix dans la liste déroulante
    } 
    echo "</select>";
}

alimenterListeDeroulante($elements);
