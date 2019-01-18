<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    //Variables
    $first_name = formCheckInput($_POST['first_name']);
    $last_name = formCheckInput($_POST['last_name']);
    $email = formCheckInput($_POST['email']);
    $phone = formCheckInput($_POST['phone']);
    $message = formCheckInput($_POST['email']);
    $check_r = $_POST['check-rgpd'];
    //Verifications

    if(empty($first_name)) {
        array_push($errors, '<b> * </b> Vous devez indiquer votre prénom<br/>');
    }

    if(empty($last_name)) {
        array_push($errors, '<b> * </b> Vous devez indiquer votre nom<br/>');
    }

    if(empty($email)){
        array_push($errors, '<b> * </b> Vous devez indiquer votre email<br/>');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "<b> * </b> Votre adresse mail n'est pas valide<br/>");
    }
    
    if(empty($message)){
        array_push($errors, '<b> * </b> Vous devez indiquer votre message<br/>');
    }

    if (!empty($phone) && (!preg_match('/^(\s)?(+)?([- ().]?\d[- _().]?){10,14}(\s)?$/', $phone))) {
       array_push($errors, "<b> * </b> Votre numéro de téléphone n'est pas valide.<br/>");
    }

    //SEND TO AJAX
    if(empty($errors)){
        $json = [];
        $json = array(
            'message_success' => 'Votre demande nous a bien été envoyé !',
        );
        echo json_encode($json);
    } else {
        $json = [];
        $json = array(
            'errors' => $errors,
        );
        echo json_encode($json);
    }



}

function formCheckInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function Email($first_name, $last_name, $email, $message, $phone){
    $to = "";
    $subject = "";
    
    $final_message = "
    <html>
        <head>
            <meta charset='utf-8'>
        </head>
        <body>
            <div><b>De:</b> ".$first_name . "" . $last_name ."</div>
            <div><b>Email:</b> ".$email."</div>
            <div><b>Numéro de téléphone:</b> ".$phone."</div>
            <div><b>Message:</b> ".$message."</div>
        </body>
    </html>
    
    
    ";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    
    mail($to, $subject, $final_message, $headers);
}