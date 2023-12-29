<?php 
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$phone=$_POST['phone'];
$subject=$_POST['sujet'];
$message=$_POST['message'];



// validation method 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($nom)){
        echo "Le nom est obligatoire";
        $error[]="Nom vide";
    }elseif(empty($prenom)){
        echo "Le prenom est obligatoire";
        $error[]="prenom vide";
    }elseif(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "L'email est obligatoire";
        $error[]="email vide";
    }elseif(empty($subject)){
        echo "Le sujet est obligatoire";
        $error[]="sujet vide";
    }elseif(empty($phone)){
        echo "Le téléphone est obligatoire";
        $error[]="téléphone vide";
    }elseif(empty($message)){
        echo "Le message est obligatoire";
        $error[]="message vide";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>thanks</title>
</head>
<body>
    
    <div>
    
        <p>
            <?php
            if(empty($error)){
            echo "
            <h2>Votre message a bien été envoyé ! </h2> 
            <br>Merci <b> $prenom $nom </b> de nous avoir contacté à propos de <b> $subject </b>.<br>
            Un de nos conseillers vous contactera soit à l’adresse <b>$email</b> ou par téléphone au 
            <b>$phone</b> dans les plus brefs délais pour traiter votre demande : <br><br>
            
            $message";
        }else{
            return $error;
        }
        
            ?>
        </p>
    </div>
    
</body>
</html>