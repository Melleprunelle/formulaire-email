<?php

//$identite = $_POST['idendite'];
$email = $_POST['email'];
$objet = $_POST['objet'];
$message = $_POST['message'];
$expediteur = 'from : adressebidon@gmail.com';

mail ($email, $objet, $message, $expediteur);
echo "Votre message à bien été envoyé.";
    
?>