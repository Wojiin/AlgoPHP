<?php
$email = 'contact@elan.fr';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est considérée comme valide.";
}
 else {
    echo "L'adresse email '$email' est considérée comme invalide.";
}
?>