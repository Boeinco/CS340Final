
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
	<h2>Post your name, email, and website.  Then tell people what you have and any information you might find helpful (such as cooking skill, amount of time you have, etc).  Then come back and check for a response!</h2>
<br></br>
	<h3>For example: I am a beginner chef with half an hour to prepare.  I have 1/2lb of king crab, parsley, chive, garlic, onion, red bell peppers, sourdough bread, eggs, cream, milk, asparagus, and flour.  What can I make?</h3>
<br></br>
        <?php
        include("config.php");
	   include("connect.php");
	   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }
    $table = 'Recipe';
    $query = "SELECT * FROM $table ";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query to show fields from table failed");
    }
    
    $fields_num = mysqli_num_fields($result);
    echo "<h1>Table: {$table}</h1>";
    echo "<table border='1'><tr>";
    // printing table headers
    for($i=0; $i<$fields_num; $i++) {    
        $field = mysqli_fetch_field($result);    
        echo "<td><b>{$field->name}</b></td>";
    }
    echo "</tr>\n";
    while($row = mysqli_fetch_row($result)) {    
        echo "<tr>";    
        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable    
        foreach($row as $cell)        
            echo "<td>$cell</td>";    
        echo "</tr>\n";
    }
                ?>
            </div>
        </div>
</div>
    </body>
</html>

<?php ?>
