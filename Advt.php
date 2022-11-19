<?php
include 'server1.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertise with Us</title>
    <link rel="stylesheet" href="Advt.css">
</head>
<body class="body2">
    <article>
        <header></header>
        <main>
        <div class="header">
  	    <h2>Advertise with Us</h2>
        </div>
        <form method="post" action="Advt.php">
  	
  	<div class="input-group">
  	  <label for="name">Fullname</label>
  	  <input type="text" name="name" required>
  	</div>
  	<div class="input-group">
  	  <label for="email">Email Address</label>
  	  <input type="email" name="email" required>
  	</div>
  	<div class="input-group">
  	  <label for="phone">Phone Number</label>
  	  <input type="text" name="phone" required>
  	</div>
  	<div class="input-group">
  	  <label for="county">County</label>
  	  <input type="text" name="county" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Submit</button>
  	</div>
  </form>
       
        </main>
        <br>
        <footer class="ftr">
            <p>&#9978</p>
	    <p>Quality apartment.</p>
		<hr>
        <br>
		<a href="https://www.facebook.com/profile.php?id=100087640730555" class="fa fa-facebook">f</a>
		<a href="#" class="fa fa-twitter">t</a>
		<p>Contact:- +254742273610</p>
		<p>&copy Copyright Millan.All Reserved<br/>Powered by Millan Web Creator.</p>

        </footer>
    </article>
</body>
</html>