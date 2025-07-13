<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
echo "hy";
  $to      = 'agrawalanjali8743@gmail.com';
  $name    = htmlspecialchars($_POST['name']);
  $email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  
  if (!$email) {
    die('Invalid email address');
  }
  
  $headers = "From: $name <$email>\r\n" .
             "MIME-Version: 1.0\r\n" .
             "Content-type: text/plain; charset=UTF-8\r\n";
  
  if (mail($to, $subject, $message, $headers)) {
    echo 'OK';
  } else {
    echo 'Error sending email';
  }
  ?>
  
