<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Drinking 101</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Drinking<span class="alternate_colour">101</span></h1>
		  <p style="color:#FFFFFF">
		  <?php
		  if(isset($_SESSION['user'])){
		  echo('Welcome to Drinking 101, ' . $_SESSION['user']);
		  echo('<a href="logout.php" style="color:#FFFFFF"> Logout </a>');
		  }else{
		  echo('Welcome to Drinking 101');
		  }
		  ?>
		  </p>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="tab_selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li><a href="login.php">Login/Register</a></li>
          <li><a href="games.php">Games</a></li>
          <li><a href="tips.php">Drinking Tips</a></li>
          <li><a href="drinks.php">Mixed Drinks</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/1234.png" alt="tree tops" /></div>
      <div class="sidebar">
       <!-- insert your sidebar items here -->
       
       
       </div>
      <div id="content">
        <!-- insert the page content here -->
        
					
					
					
					<form method="post" action="drinks2.php">
			<p>
			<label for="name">Drink Name:        </label>
			<input type="text" id="drinkName" name="name" size="40" /></p>
			<p> </p>
        <p>
      <label for="alcohol1">Alcoholic Ingredients:       </label></p>
      <p>
			<label for="alcohol1">Name of Alcohol / Amount (include units):       </label></p>
			
			<p>
        <input type="text" id="alc1" name="alcohol1" size="40" />
        <label for="amt1"> / </label>
        <input type="text" id="amt1" name="amount1" size="40" />
      </p>

      <p> </p>
			<p>
			<label for="description">Other Ingredients: </label></p>
			<p>
      <label for="alcohol1">Name of Ingredient / Amount (include units):       </label></p>
        <input type="text" id="ing1" name="ingredient1" size="40" />
        <label for="amt1"> / </label>
        <input type="text" id="amt4" name="amount4" size="40" />
      </p>
			<p><input type="submit" value="Submit Drink" /></p>
					
          
		</form>
 
        
        
       </div>
    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; Company Name. All Rights Reserved. | <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.facebook.com/Hawaiian242">design by tmihelic</a></div>
  </div>
</body>
</html>