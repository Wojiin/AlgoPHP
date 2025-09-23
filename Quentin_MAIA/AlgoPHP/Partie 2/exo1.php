<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée " convertirMajRouge() " permettant de transformer une chaine de caractère passée en argument en majuscules et en rouge <br>
Vous devrez appeler la fonction comme suit : " convertirMajRouge($texte);</p>

<h2>Résultat</h2>
<?php
$texte= " mon texte en paramètre";
function convertirMajRouge($texte){
$texteMaj = strtoupper($texte);
echo '<font color="#ff0000">'.$texteMaj.'</font>';
}
convertirMajRouge($texte);
