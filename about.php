<!doctype html>
<html lang="en" class="no-js">
<head><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="http://static.tumblr.com/1ccbc9v/sCFnc0fp4/apple-touch-icon-72x72.png">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>About Us</title>
</head>
<body>
	<header class="cd-header">
		<div class="cd-logo"><a href="index.php"><img src="img/illu.jpg" alt="Logo"></a></div>

		<div class="cd-logo"><!-- ... --></div>
 
	<nav>
		<ul class="cd-secondary-nav">
			<li><a href="tool.php">Recipes</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="project.php">Coming Soon</a></li>
			<li><a href= "index.php">Login</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
	</nav>

	</header>

	<section class="cd-intro-about">
		<h1><a href="#more"><img src="http://cdn.onnoschwanen.com/images/ui/arrow-down.svg"/></a></h1>
	</section>

	<main class="cd-main-content-about">
		<div id="more" class="cd-container" style="margin-bottom: 0px;">
		
				<div class="cd-container-people-clmn-1">
						<img src="http://web.engr.oregonstate.edu/~nguyenau/CS340/Project/img/Screenshot_20170606-231324-2.png" height="200" width= "50">
					<div class="cd-container-people-info">
						<h4>Food Enthusiast</h4>
						<h2>Austin Nguyen</h2>
						<br>3nd year computer science and bioinformatics major</br>
						<br>From Beaverton, Oregon</br>
						<br>Seared Medium Rare</br>
					</div>
				</div>
				<div class="cd-container-people-clmn-1">
						<img src="http://web.engr.oregonstate.edu/~sladeka/graphics/Pie.JPG" height="200" width= "50">
	<div class="cd-container-people-info">
						<h4>Amateur Baker</h4>
						<h2>Allison Sladek</h2>
						<br>Major: Computer Science</br>			
						<br>From Salem, Oregon</br>
						<br>Pyromaniac</br>

					</div>
				</div>		
				<div class="cd-container-people-clmn-1">
						<img src="http://web.engr.oregonstate.edu/~kiefk/bread.jpeg" height="200" width= "50">
				
						<h4>Chocolate Maker</h4>
						<h2>Keana Kief</h2>
						<br>Major: Computer Science </br>
						<br>From Eugene, Oregon </br>
						<br>75% Belgian Dark </br>
					</div>
				</div>
<br></br>
<br></br>
<br></br>



<!-- Section 3 (Footer) -->
		
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

