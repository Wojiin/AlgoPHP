<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. <br>
Exemple: <br>
$nomsInput = ["Nom","Prénom","Ville"]; <br>
afficherInput($nomsInput);</p>
<h2>Résultat</h2>
<?php
$nomsInput = ["Nom","Prénom","Ville"];
function afficherInput($nomsInput){
foreach($nomsInput as $noms){
    echo "<label for=nom>$noms</label><input type=text>";
    };
};
afficherInput($nomsInput);