<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome.</p>
<h2>Résultat</h2>
<?php
$phrase = "Engage le jeu que je le gagne";
$phraseMin = strtolower($phrase); // Tout en minuscule
$phraseNoSpace = str_replace(" ", "", $phraseMin); // Sans espace
$revPhrase = strrev($phraseNoSpace); // Phrase inversée

if ($phraseNoSpace == $revPhrase) {
    echo "La phrase '$phrase' est un palindrome.";
} else {
    echo "La phrase '$phrase' n'est pas un palindrome.";
}
 ?>
