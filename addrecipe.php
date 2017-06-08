?<!doctype html>

<?php 
session_start(); 

function currentUrl() {
	$pageURL = 'http';
	if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
	}
	// FYI: You could also append the query string if that was important to you
	return $pageURL;
}

// returns the user's uid if logged in
// or returns "" <-- in this case, pass $redirectIfNeeded = true to force login
function checkAuth($redirectIfNeeded) {
	// is the user already logged in?
	if (isset($_SESSION["uid"]) && $_SESSION["uid"] != "") {
		// yes, already logged in
		return $_SESSION["uid"];
	} else if ($redirectIfNeeded) {
		// user is not logged in and needs to do so
		// send to the login page

		// pass the current URL so that we can come back here after login
		$currentUrl = currentUrl();

		// rawurlencode converts the string so it's safe to pass as a URL GET parameter
		$urlOfLogin = "login.php?sendBackTo=".rawurlencode($currentUrl)."&cb=".microtime(true);

		// use a JavaScript redirect; FYI, there's also an http header (Location:) that 
		//    can be used to redirect, but that MUST be sent before any HTML, and this 
		//    function (checkAuth) might be called after some HTML is sent
		echo "<script>location.replace('$urlOfLogin');</script>";
		return "";
	} else {
		// user is not logged in, but whoever called this function doesn't care
		return "";
	}
}
?>

<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
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
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	
	<title>My Food Project</title>
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
			<li><a href="login.php">Login</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
	</nav>

	</header>

	<div id="large-header" class="large-header">
		<canvas id="demo-canvas"></canvas>
		<h1 class="main-title">Our Food Project!</span></h1>
	</div>


<main id="more" class="cd-main-content" style="margin-top: 8rem;">
		<div class="cd-container">
	<h1>Contact Us!</h1>
	<h2>If you have any comments, concerns, questions, appraisals, if you want to just troll us, or want access to the tool without being an OSU student, send us a comment</h2>
	<div id="contact_form" class="contact_form">
		<form method="post" action='add_contact_recieve.php'>
			<ul>
			<li><label>Name:</label> <input type="text" name="name" value="<?=htmlspecialchars(checkAuth(false)) ?>">
			<li><label>Email:</label> <input type="text" name="email" value="<?=htmlspecialchars(checkAuth(false)) ?>">
			<li><label>Message:</label> <textarea rows="10" cols="50" name="comment"></textarea>
			<br>
			<input type=submit value=Send>
			</ul>
		</form>
	</div>
</div>

<!-- Footer -->
		
		<div class="footer">
			<div class="footer-content">
					<div class="footer-clmn1">© 2017 Designed and Developed by <a href="http://nourritureamende.blogspot.com">Austin Nguyen</a></div>
					<div class="footer-clmn2">Email: <a href="mailto:nguyenau@oregonstate.edu">nguyenau@oregonstate.edu</a></div>
			</div>
		</div>
		
	</main>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5wGdqrTcgLdOPzMbASsbiHkloxc6v2rE"></script>

<!-- Script for smooth scrolling -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

</body>
</html>
