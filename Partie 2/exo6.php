<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. <br>
Exemple: <br>
$elements = ["Monsieur","Madame","Mademoiselle"]; <br>
alimenterListeDeroulante($elements);</p>
<h2>Résultat</h2>
<?php
$elements = ["Monsieur","Madame","Mademoiselle"];
function alimenterListeDeroulante($elements){
    echo "<input type=select><name>Civilité</name><label>Quelle est votre civilité ?</label>"foreach($elements as) 
    echo"<option>$elements</option>
    
</input>"
};
alimenterListeDeroulante($elements);