<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : << Développeur logiciel >>, << Designer web>>,<< Intégrateur >> ou << Chef de projet >>. <br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<?php
$postes = ["Développeur logiciel", "Designer web", "Intégrateur", "Chef de projet"];
$civilitesInput = ["Nom","Prénom","Sexe","Ville","E-mail"];
function afficherInput($civilitesInput){
    echo "<form>";
 foreach($civilitesInput as $civilite){
    echo "<label for=civilite>$civilite</label><input type=text><br>";
    }
}
function alimenterListeDeroulante($postes) {
    echo "<select>"; 
    foreach ($postes as $poste) {
        echo "<option>$poste</option>";
    } 
    echo "</select>";
}
afficherInput($civilitesInput);
alimenterListeDeroulante($postes);
echo "<input type=submit value=submit>";
echo "</form>";
