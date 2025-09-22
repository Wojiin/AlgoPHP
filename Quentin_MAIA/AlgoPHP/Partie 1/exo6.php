<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TV (exprimé en décimal. ex : 20%->0.2</p>

<h2>Résultat</h2>

<?php
$prixHT=9.99;
$tva= 0.2;
$quantite= 5;
$prixTVA= ($prixHT*$tva)+$prixHT;
$prixFinal= round($prixTVA*$quantite,2);
echo "Prix unitaire de l'article : $prixHT € <br>
Quantité : $quantite <br>
Taux de TVA : $tva <br>
Le montant de la facture à régler est de : $prixFinal €";