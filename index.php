<?php
include 'connectvarsEECS.php';
	session_start();
?>

<!doctype html>
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





<!-- Section 1 (We are tomorrow's recipe finders) -->

	<main id="more" class="cd-main-content" style="margin-top: 8rem;">
		<div class="cd-container">
			<h4 style="color: rgb(212,175,55);">Who We Are</h4>
			<h1>For those who don't know what to do with the things in their fridge</h1>
			<p>We want to help you find recipes, post recipes, or find someone else to trade with!</p>
			
			<a href="about.php"><div class="read-more-btn">Read More About Us</div></a>
		</div>

		<div class="cd-container" style="margin-top: 4rem;">
			<h4 style="color: rgb(212,175,55);">What We Do</h4>
			<a href="signup.php"><div class="read-more-btn">Let's Get Started!</div></a>
		</div>	
				


<!-- Section 5 (Footer) -->
		
		<div class="footer">
			<div class="footer-content">
					<div class="footer-clmn1">© 2017 Designed and Developed by <a href="http://nourritureamende.blogspot.com/">Austin Nguyen</a></div>
					<div class="footer-clmn2">Email: <a href="mailto:nguyenau@oregonstate.edu">nguyenau@oregonstate.edu</a></div>
			</div>
		</div>
		
	</main>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5wGdqrTcgLdOPzMbASsbiHkloxc6v2rE"></script>

		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>

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