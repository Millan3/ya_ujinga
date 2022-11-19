<?php
include 'server2.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Apartment</title>
    <link rel="stylesheet" href="Advt.css">
</head>
<body class="body2">
    <article>
        <header></header>
        <main>
        <div class="header">
  	    <h2>Request Apartment</h2>
        </div>
        <form method="post" action="Buy.php">
  	
  	<div class="input-group">
  	  <label for="sname">Fullname</label>
  	  <input type="text" name="sname" required>
  	</div>
  	<div class="input-group">
  	  <label for="semail">Email Address</label>
  	  <input type="email" name="semail" required>
  	</div>
  	<div class="input-group">
  	  <label for="sphone">Phone Number</label>
  	  <input type="text" name="sphone" required>
  	</div>
  	<div class="input-group">
  	  <label for="apartment">Specific Apartment(eg Home)</label>
  	  <input type="text" name="apartment" required>
  	</div>
      <div class="input-group">
  	  <label for="location">Apt-Location(eg Manyatta) </label>
  	  <input type="text" name="location" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register1">Submit</button>
  	</div>
  </form>
       
        </main>
        <br>
        <footer class="ftr">
            <p>&#9978</p>
	    <p>Quality apartment.</p>
		<hr>
        <br>
		<a href="#" class="fa fa-facebook">f</a>
		<a href="#" class="fa fa-twitter">t</a>
        <br>
		<p>Contact:- +254742273610</p>
		<p>&copy Copyright Millan.All Reserved<br/>Powered by Millan Web Creator.</p>

        </footer>
    </article>
</body>
</html>