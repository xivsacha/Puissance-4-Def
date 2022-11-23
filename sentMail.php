<?php 

    if(isset($_POST['submit'])){
        $mailto = "delalande.ethan@gmail.com";
        $name = $_POST['name'];
        $fromEmail = $_POST['email'];
        $subject = $_POST['subject'];
        $subject2 = "Confirmation: Message envoyé avec succès.";

        $message = "Nom du joueur: " . $name  . "\n"
        . "Message du joueur: " . "\n" . $_POST['message'];

        $message2 = "Cher" . $name . "\n"
        . "Merci de nous avoir contacter! Vous aurez de nos retours dès que possible." . "\n\n"
        . "Vous avez envoyé le message suivant: " . "\n" . $_POST['message'] . "\n\n"
        . "Nos sincères salutations bla bla bla";

        $headers = "From: " . $fromEmail;
        $headers2 = "From: " . $mailto;

        $result1 = mail($mailto, $subject, $message, $headers);
        $result2 = mail($fromEmail, $subject2, $message2, $headers2);

        if($result1 && $result2){
            $success = "Message envoyé.";
        } else{
            $failed = "Nous avons eu un problème, réessayez.";
        }
    }
    
?>
