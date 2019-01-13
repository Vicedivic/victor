<?php
/**
 * @file
 * Contains competition-mail.php
 */


$to = 'victor@lfpost.dk';
$subject = $_POST['firstname'] . ' has participated in your competition!';
$message = '
        <html lang="en">
            <body>
            <ul>
              <li>Name: ' . $_POST['firstname'] . '</li>
              <li>Email: ' . $_POST['email_address'] . '</li>
              <li>Counry: ' . $_POST['country'] . '</li>
            </ul>
            </body>
        </html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Elias Personal Website <victor@lfpost.dk>\r\n";
mail($to, $subject, $message, $headers);