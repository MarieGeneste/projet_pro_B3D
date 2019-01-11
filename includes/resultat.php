<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $prenom = stripslashes(trim(htmlspecialchars($_POST['prenom'])));
    $nom = stripslashes(trim(htmlspecialchars($_POST['nom'])));
    $email = stripslashes(trim(htmlspecialchars($_POST['email'])));
	  $phone = stripslashes(trim(htmlspecialchars($_POST['phone'])));
    $message = stripslashes(trim(htmlspecialchars($_POST['message'])));
    $title = 'New letter from Artfish.pro';
    $my_email = 'kazarinov.yanek@gmail.com';
    //$my_email = 'artfish@ukr.net';

    $letter_text = '<html><body>';
    $letter_text .= 'Prenom: ' . $prenom . '<br>';
    $letter_text .= 'Nom: ' . $nom . '<br>';
    $letter_text .= 'Email: ' . $email . '<br>';
    $letter_text .= 'Telephone: ' . $phone . '<br>';
    $letter_text .= 'Message: ' . $message;
    $letter_text .= "</body></html>";

    $headers .= "Content-Type: text/html; charset=ISO-8859-1rn \r\n";
    $headers .= "From: " . strip_tags($nom) . ' ' . strip_tags($prenom) . '<' . strip_tags($email) . '>' . "\r\n";
    $headers .= "Reply-To: " . strip_tags($nom) . ' ' . strip_tags($prenom) . '<' . strip_tags($email) . '>' . "\r\n";
    $headers .= "MIME-Version: 1.0rn";

	  mail($my_email, $title, $letter_text, $headers);
 	  echo '<div class="col-lg-2"></div><div class="col-lg-8 center">Votre message a bien été envoyé. Merci de m\'avoir contacté :)</div><div class="col-lg-2"></div>';
  }
?>
