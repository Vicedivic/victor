<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thank You!</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php

$information = [
	'Name' => $_POST['firstname'],
	'Email' => $_POST['email_address'],
	'Country' => $_POST['country'],
];
		
	?>
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
<h3></h3>
<?php
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
?>
</body>
</html>