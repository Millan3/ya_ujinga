s<?php 
  session_start(); 

    if (isset($_GET['logout'])) {
    session_destroy();
  	unset($_SESSION['sname']);
  	header("location: PAGE.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>successful</title>
	<link rel="stylesheet" type="text/css" href="Advt.css">
</head>
<body class="body2">

<article>
<header></header>
<main>
    <div class="header">
	<h2>&#9770 Request</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['sname'])): ?>
    	<p>Welcome <strong><?php echo $_SESSION['sname']; ?></strong></p>
    	<p> <a href="success.php?logout='1'" style="color: navy-blue;">Back to Home Page</a> </p>
    <?php endif ?>
</div>
</main>
<footer></footer>

</article>
		
</body>
</html>