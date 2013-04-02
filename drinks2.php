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
		<h1>Thank you for submitting!</h1> 
		
		  <?php
					include('dbconnect.php');
					$name = $_POST['name'];
					$alc1 = $_POST['alcohol1'];
          
					$ing1 = $_POST['ingredient1'];
          

          $amt1 = $_POST['amount1'];
          
          $amt4 = $_POST['amount4'];
         

					if(!empty($name) && !empty($alc1) && !empty($amt1)&& !empty($ing1)&& !empty($amt4)){
    				$query = "INSERT INTO drinks (name) VALUES ('";
    				$query = $query . $name . "')";
    				$result = mysqli_query($db, $query)
                           or die("Error Querying Database");

          $query = "SELECT id FROM drinks WHERE name = '$name' ORDER BY id DESC";

          $result = mysqli_query($db, $query)
          or die("Error Querying Database");

          $row = mysqli_fetch_array($result);
          $id = $row['id'];

            $query = "INSERT INTO drinksalcohol (drinkid, aname, aamount) VALUES ('";
            $query = $query . $id . "', '" . $alc1 . "', '" . $amt1 . "')";
            $result = mysqli_query($db, $query)
                           or die("Error Querying Database");


          


          $query = "INSERT INTO drinksingredients (drinkid, iname, iamount) VALUES ('";
            $query = $query . $id . "', '" . $ing1 . "', '" . $amt4 . "')";
            $result = mysqli_query($db, $query)
                           or die("Error Querying Database");


          





          }

					?>

        
        
       </div>
    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; Company Name. All Rights Reserved. | <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.facebook.com/Hawaiian242">design by tmihelic</a></div>
  </div>
</body>
</html>