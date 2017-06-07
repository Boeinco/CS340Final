
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="comments.css">
        <script src="jquery-1.9.1.min.js"></script>
        <script src="jquery-ui-1.10.3-custom.min.js"></script>
        <script src="jquery-migrate-1.2.1.js"></script>
        <script src="jquery.blockUI.js"></script>
        <script src="comments_blog.js"></script>
	<title>My Food Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://static.tumblr.com/1ccbc9v/sCFnc0fp4/apple-touch-icon-72x72.png">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/animated-bg.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

  <script>
  function showRecipe(str) {
      if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
      } else {
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          console.log(str);
          xmlhttp.open("GET","getRecipe.php?q="+str,true);
          xmlhttp.send();
      }
  }
  </script>


    </head>
    <body>
<header class="cd-header">
		<div class="cd-logo"><a href="index.php"><img src="img/illu.jpg" alt="Logo"></a></div>

		<div class="cd-logo"><!-- ... --></div>

	<nav>
		<ul class="cd-secondary-nav">
			<li><a href="tool.php">The Tool</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="project.php">Project</a></li>
			<li><a href="https://login.oregonstate.edu/cas/logout">Logout</a></li>
		</ul>
	</nav>

	</header>

	<div id="large-header" class="large-header">
		<canvas id="demo-canvas"></canvas>
		<h1 class="main-title">Our Food Project!</span></h1>
	</div>
<div class="cd-container" style="margin-top: 10rem;">
	<h2>View Recipes Here!</h2>
<br></br>
	<h3>Feel Free to Add Recipes Here!</h3>
        <?php
        include("config.php");
	   include("connect.php");
	   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }


    $result = mysqli_query($conn, "Select RecipeName from Recipe");
  	if (!$result) {
  		die("Query to show fields from table failed");
  	}
  	$num_row = mysqli_num_rows($result);

  	echo "<h1>Choose a Recipe:<h1>";
  	echo "<form>";
  	echo "<select name=\"table\" size=\"1\" Font size=\"+2\" onchange= showRecipe(this.value)>";
  	// Select a database table to display
    echo "<option value= \"\">-Select a Recipe-</option>";
  	for($i=0; $i<$num_row; $i++) {
  		$tablename=mysqli_fetch_row($result);
  		echo "<option value='$tablename[0]'>".$tablename[0]."</option>";
  	}

  	echo "</select>";
  	echo "</form>";
    echo "<br>";

    echo "<div id=\"txtHint\"><b>Recipe info will be listed here...</b></div>";

  	mysqli_free_result($result);


                ?>
            </div>
        </div>
</div>
    </body>
</html>

<?php ?>
