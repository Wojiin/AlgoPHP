<h1>Exercice 7</h1>

<p>Crer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non</p>
<br>
Exemple: <br>
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées</p>

<?php
$elements = ["Choix 1","Choix 2","Choix 3"];
function genererCheckbox($elements){
    echo "<form>";
     foreach($elements as $choix){       
       echo "<input type=checkbox name=$choix />";
      echo "<label for=choix>$choix</label> <br>";
    }
echo "<form>";
}
genererCheckbox($elements);
