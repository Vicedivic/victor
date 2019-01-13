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

<table id="customers">
  <tr>
    <th>Best Friends</th>
    <th>Friend's Mom</th>
    <th>Friend's Dad</th>
  </tr>
  <tr>
    <td>Joseph Kristiansen</td>
    <td>Naomi</td>
    <td>Joseph</td>
  </tr>
  <tr>
    <td>Nathanael Christensen</td>
    <td>Eliza</td>
    <td>Peter</td>
  </tr>
  <tr>
    <td>Samuel Dalgaard</td>
    <td>Dorthe</td>
    <td>Joshua</td>
  </tr>
  <tr>
    <td>Victor Fink</td>
    <td>Helle</td>
    <td>Peter</td>
  </tr>
  <tr>
    <td>Simeon Kristiansen</td>
    <td>Naomi</td>
    <td>Joseph</td>
  </tr>
  <tr>
    <td>Noah Adelgaard</td>
    <td>Maria</td>
    <td>John</td>

  </tr>
</table>


<h3>Things you should know about me</h3>
<ul><li>I like soccer</li>
  <li>I like food</li>
  <li>I like the Czech Republic</li>
  <li>I like Denmark</li>
  <li>I am the oldest of my siblings</li>
  <li>I have two younger brothers</li>
  <li>My mom is called Anna</li>
  <li>My dad is called Andreas (Andrew)</li>
  <li>My parents still work at a hotel in Denmark</li></ul>
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
<script>
  $(function () {
    $("#competition-form").submit(function (e) {
      
      var form_data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "competition-mail.php",
        dataType: "json", // Add datatype
        data: form_data
      }).done(function (data) {
        console.log(data);
        alert("It's OK!");
      }).fail(function (data) {
        console.log(data);
      });
    });
  });
</script>
</body>
</html>
