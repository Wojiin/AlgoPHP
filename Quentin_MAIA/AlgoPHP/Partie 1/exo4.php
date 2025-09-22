<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome.</p>
<h2>Résultat</h2>
<?php
$phrase = "engage le jeu que je le gagne";
$phraseNoSpace= str_replace(" ","",$phrase);
$revPhrase= strrev($phraseNoSpace);
if ($phraseNoSpace == $revPhrase)
    
    echo " La phrase $phrase est un palindrome.";
else echo "La phrase $phrase n'est pas un palindrome.";
 ?>