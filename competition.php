<?php

require_once 'participations.php';
require_once 'functions.php';

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$information = [
  'Name' => $_POST['firstname'],
  'Email' => $_POST['email_address'],
  'Country' => $_POST['country'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php /*
    if (in_array($information['Email'], $participations, true)) {
      echo 'You already participated';
    } else {
      echo 'Thank you!';
    }
    */ ?></title>
  <link rel="stylesheet" href="style.css">
</head>

<?php



if (validate_email($information['Email'])){ ?>

<body>
<h1> Thank You for Participating in our Competition!</h1>
<h3> Wait and find out if you won! You can either win a bag of money or a piece of cake!</h3>
<img alt="money" src="money.jpg" height="250px" width="200px"/>
<img alt="money" src="mobleycake.jpg" height="220px" width="220px"/>
<br>
<a href="index.php"><button class="special-buttons">Home</button></a>
<br><br>
<h3>You participated with this information:</h3>
<ul>
  <?php foreach ($information as $label => $value): ?>
    <li><?php echo "$label: $value"; ?></li>
  <?php endforeach; ?>
</ul>
<?php

$mail = new PHPMailer(true);
//Server settings
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 's1.mailprovider.email';
$mail->SMTPAuth = true;
$mail->Username = 'victor@lfpost.dk';
$mail->Password = 'En#gRim!gRisesti53';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

//Recipients
$mail->setFrom('victor@lfpost.dk', 'Webmaster');
$mail->addAddress('elias@lfpost.dk', 'Website owner');
$mail->addBCC('victor@lfpost.dk');

//Content
$mail->isHTML(true);
$mail->Subject = $_POST['firstname'] . ' has participated in your competition!';
$mail->Body    = '<html lang="en">
            <body>
            <p>The user has participated with this information:</p>
            <br>
            <ul>
              <li>Name: ' . $_POST['firstname'] . '</li>
              <li>Email: ' . $_POST['email_address'] . '</li>
              <li>Country: ' . $_POST['country'] . '</li>
            </ul>
            </body>
        </html>';
$mail->AltBody = 'The user has participated with this information: Name: ' . $_POST['firstname'] . ', email address: ' . $_POST['email_address'] . ', country: ' . $_POST['country'];

$mail->send();

} else {
  echo '<h1 style="font-size: 280px;">Invalid email</h1>';
}
?>
</body>
</html>