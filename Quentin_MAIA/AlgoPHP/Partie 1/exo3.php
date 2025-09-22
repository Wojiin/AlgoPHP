<h1>Exercice 3</h1>

<p>A partir de la phrase  de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain".Afficher l'ancienne et la nouvelle phrase. </demain></p>
<h2>Résultat</h2>
<?php
$phrase = "Notre formation DL commence aujourd'hui.";
$nbNewPhrase = str_replace("aujourd'hui","demain", $phrase);//str_replace("la string à modifier","la string qui remplace","dans quelle chaine modifier")

echo "Ancienne phrase << $phrase >><br>";
echo "Nouvelle phrase << $nbNewPhrase >> ";
?>