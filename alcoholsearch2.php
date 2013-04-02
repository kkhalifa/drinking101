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
        <form method = "post" action = "alcoholsearch2.php">
          <table>
            <tr><td>Enter Alcohol type:   </td><td><input type="text" id="alcsearch" name="alcsearch" /></td></tr>

            <tr><td>&nbsp;</td><td><input type="submit" value="Search For Alcohol" /></td></tr>
            </table>


       <?php

        include('dbconnect.php');

            $search = $_POST['alcsearch'];
			 
             $query = "SELECT d.name, da.aname, da.aamount, di.iname, di.iamount FROM 
			 drinks d JOIN drinksalcohol da JOIN drinksingredients di ON d.id = da.drinkid AND d.id = di.drinkid WHERE da.aname = '$search' ORDER BY d.id";
             $result = mysqli_query($db, $query)
             or die("Error Querying Database1");
             while($row = mysqli_fetch_array($result)){

              $name = $row['name'];
			  $aname = $row['aname'];
              $aamount = $row['aamount'];
			  $iname = $row['iname'];
              $iamount = $row['iamount'];
              
              echo "<p> </p>";
            
              echo "<p><h1> DRINK NAME: <a href=http://localhost/drinking101wip/drinkpage.php> $name </a> </h1></p>";

              echo "<p> <b> ALCOHOL: </b> </p>";

                echo "<p> $aname - $aamount </p>";

              echo "<p> <b>OTHER INGREDIENTS: </b> </p>";
                echo "<p> $iname - $iamount </p>";
              }
              
                mysqli_close($db);

            ?>
        
        
       </div>
    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; Company Name. All Rights Reserved. | <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.facebook.com/Hawaiian242">design by tmihelic</a></div>
  </div>
</body>
</html>
