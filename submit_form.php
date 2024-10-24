<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email où le message sera envoyé
    $to = "damien.ly03@gmail.com";
    $headers = "From: " . $email;

    // Sujet et corps du message
    $full_subject = "Nouveau message de votre portfolio : " . $subject;
    $body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    // Envoyer l'email
    if (mail($to, $full_subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>