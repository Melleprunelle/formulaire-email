<?php

//$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
$email = $_POST['email'];
$identite = $_POST['idendite'];
$objet = $_POST['objet'];
$message = $_POST['message'];
$expediteur = 'From: adressebidon@gmail.com'."\r\n" .
              'Reply-To: adresse@example.com'."\r\n" .
              'X-Mailer: PHP/' . phpversion();
//}

mail ($email, $identite, $objet, $message, $expediteur);
// echo "Votre message à bien été envoyé.";
header('Location: confirmation.php');
    
?>