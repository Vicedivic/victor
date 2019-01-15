<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h1>Elias Gideon Bruhn</h1>
<h2>My life</h2>
<h4>I am Elias Gideon Bruhn and I am 13 years old. I was born in Hiller&#248;d, Denmark. <br> I lived in Denmark until I was 12 years old, and then I moved to the Czech Republic.<br></h4>
<h3>Click on the links below to see more about me... </h3>

<a href="Sport%20and%20food.php"><button>Sport and Food</button></a>
<a href="pets.php"><button>Pets</button></a>
<?php
$information = [
  'things-to-know' => [
    'I like soccer',
    'I like food',
    'I like the Czech Republic',
    'I like Denmark',
    'I am the oldest of my siblings',
    'I have two younger brothers',
    'My mom is called Anna',
    'My dad is called Andreas (Andrew)',
    'My parents still work at a hotel in Denmark',
  ],
  'table-headers' => [
    'Best Friends',
    'Friend\'s Mom',
    'Friend\'s Dad'
  ],
  'table-data' => [
    0 => [
      'Joseph Andreas Kristiansen',
      'Naomi',
      'Joseph',
    ],
    1 => [
      'Nathanael Christensen',
      'Eliza',
      'Peter',
    ],
    2 => [
      'Samuel Sejr Dalgaard',
      'Dorthe',
      'Joshua',
    ],
    3 => [
      'Victor Fink',
      'Helle',
      'Peter',
    ],
    4 => [
      'Simeon Joel Kristiansen',
      'Naomi',
      'Joseph',
    ],
    5 => [
      'Noah Adelgaard',
      'Maria',
      'John'
    ]
  ]
];
?>

<table id="customers">
  <!-- Print headers -->
  <pre>
  <?php print_r($information['table-data']) ?>
  </pre>
  <?php foreach ($information['table-headers'] as $header): ?>
    <th><?php echo $header ?></th>
  <?php endforeach; ?>
  <!-- Print data -->
  <?php foreach ($information['table-data'] as $data): ?>
    <tr>

    </tr>
  <?php endforeach; ?>
</table>


<h3>Things you should know about me</h3>
<ul>
  <?php foreach($information['things-to-know'] as $thing): ?>
    <li><?php echo $thing ?></li>
  <?php endforeach; ?>
</ul>
<br><br><br>




<h3>Participate in our Competition!</h3>
<h4>You can either win a bag of money or a piece of cake!</h4>

<form id="competition-form" action="competition.php" method="post">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="email">Email</label>
  <input type="text" id="email" name="email_address" placeholder="Your Email..">

  <label for="country">Where do you want to live the most?</label>
  <select id="country" name="country">
    <option value="Denmark">Denmark</option>
    <option value="Czechia">Czechia</option>
    <option value="Usa">USA</option>
  </select>


  <input type="submit" value="Submit">
</form>

<a href="mailto:eliasbruhn123@gmail.com?subject=Feedback to your website"><button>Feedback!</button></a>
<button class="to-the-top" onclick="toTheTop()">To the top!</button>
<script src="script.js"></script>
</body>
</html>
