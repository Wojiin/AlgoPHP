<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. <br>
Exemple: <br>
$elements = ["Monsieur","Madame","Mademoiselle"];
</p>

<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];
function alimenterListeDeroulante($elements) {
    echo "<select>";
    foreach ($elements as $civilite) {
        echo "<option>$civilite</option>";
    } 
    echo "</select>";
}
alimenterListeDeroulante($elements);