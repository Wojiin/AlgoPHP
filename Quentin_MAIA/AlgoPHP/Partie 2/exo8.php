<h1>Exercice 8</h1>

<p>Soit l'URL suivante : http://mymobirise.com/data/userpic/764.jpg; <br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran. <br>
Exemple: <br>
repeterImage($url,4);</p>

<?php
$n = 4;
$url = "http://mymobirise.com/data/userpic/764.jpg";
function repeterImage($url,$n){
 for ($i = 1; $i <= $n; $i++)
 echo '<img src=$url alt="chien avec pantoufle"/>';
}
repeterImage($url,$n);