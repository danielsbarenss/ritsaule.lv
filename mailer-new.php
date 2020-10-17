<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $findUs = explode('|', $_POST['find-us']);
    $message = trim($_POST["message"]);

    $hasLinks = strpos($message, 'http') !== false || strpos($message, 'www.') !== false;

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR $hasLinks == true) {
        header("Location: http://www.ritsaule.lv/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "katrina@ritsaule.lv";

    // Set the email subject.
    $subject = "Sazināties ar RitSaule no $name";

    // Build the email content.
    $email_content = "Vārds: $name\n";
    $email_content .= "Epasts: $email\n\n";
    $email_content .= "Atrada mūs caur:$findUs[1]\n\n";
    $email_content .= "Ziņa:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.ritsaule.lv/index.php?success=1#form");

?>