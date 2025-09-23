<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle"). <br>
Exemple: <br>
afficherRadio ($nomsRadio)</p>

<?php
$nomsRadio=["Monsieur","Madame","Mademoiselle"];
function afficherRadio($nomsRadio){
    echo "<form>";
foreach($nomsRadio as $civilite)
    echo "<input type=radio value=$civilite/>
    <label for=civilite>$civilite</label><br>";
    echo "</form>";
}
afficherRadio($nomsRadio);