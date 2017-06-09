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
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzAKEH8nhXeUV45KOGAKqUtkySs-DCCGQ&libraries=geometry,places&ext=.js">
</script>
<script>
var myCenter=new google.maps.LatLng(44.565739, -123.278907);
var locationish=new google.maps.LatLng(44.568143, -123.275540);
var location2=new google.maps.LatLng(44.568688, -123.277827);
var location3=new google.maps.LatLng(44.567558, -123.273235);
var location4=new google.maps.LatLng(44.563459, -123.259759);
var location5=new google.maps.LatLng(44.569059, -123.279588);
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Mcmenamins</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Mcmenamins on Monroe</b> is a popular happy hour destination for many students, ' +
      'with a wide variety of beers and delicious appetizers.</p>'+
      '<p>Happy hour page: <a href="http://www.mcmenamins.com/605-mcmenamins-on-monroe-menus"> '+
      'http://www.mcmenamins.com/605-mcmenamins-on-monroe-menus</a></p> '+
      '</div>'+
      '</div>';
var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Downward Dog</h1>'+
      '<div id="bodyContent">'+
      '<p><b>The Downward Dog Campus Location</b>, formerly the Red Fox, has happy hour every day from 4pm-7pm ' +
      'as well various theme nights with great deals.</p>'+
      '<p>Website: <a href="http://campus.drinkthedog.com/"> '+
      'campus.drinkthedog.com/</a></p> '+
      '</div>'+
      '</div>';
var contentString3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Clodfelters</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Clodfelters Pub</b> is very close to campus with a daily happy hour from 4-6, as well as a very popular pint night on Wednesdays.</p>'+
      '<p>Website: <a href="http://www.clodfelterspub.com/"> '+
      'www.clodfelterspub.com/</a></p> '+
      '</div>'+
      '</div>';
var contentString4 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Peacock</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Peacock Bar & Grill</b> has been a mainstay in Corvallis since 1929 ' +
      'and serves breakfast, lunch, and dinner daily from 7 a.m. to 2 a.m.</p>'+
      '<p>Menu: <a href="https://www.facebook.com/The-Peacock-Bar-Grill-64517167600/menu/?p_ref=pa"> '+
      'Menu page on Facebook</a></p> '+
      '</div>'+
      '</div>';
var contentString5 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Bombs Away</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Bombs Away</b> is a local Tex-Mex resurant with burritos ' +
      'burgers, salads, quesadillas, and live music at night.</p>'+
      '<p>Menu: <a href="http://www.bombsawaycafe.com/menus/"> '+
      'Menu page on Website</a></p> '+
      '</div>'+
      '</div>';      
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:locationish,
  });
  var marker2=new google.maps.Marker({
  position:location2,
  });
  var marker3=new google.maps.Marker({
  position:location3,
  });
  var marker4=new google.maps.Marker({
  position:location4,
  });
  var marker5=new google.maps.Marker({
  position:location5,
  });

marker.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:contentString
  });
var infowindow2 = new google.maps.InfoWindow({
  content:contentString2
  });
var infowindow3 = new google.maps.InfoWindow({
  content:contentString3
  });
var infowindow4 = new google.maps.InfoWindow({
  content:contentString4
  });  
var infowindow5 = new google.maps.InfoWindow({
  content:contentString5
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
google.maps.event.addListener(marker2, 'click', function() {
  infowindow2.open(map,marker2);
  });
google.maps.event.addListener(marker3, 'click', function() {
  infowindow3.open(map,marker3);
  });
google.maps.event.addListener(marker4, 'click', function() {
  infowindow4.open(map,marker4);
  });
google.maps.event.addListener(marker5, 'click', function() {
  infowindow5.open(map,marker5);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
  	
	<title>My Food Project</title>
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
	<div id="large-header" class="large-header">
		<canvas id="demo-canvas"></canvas>
		<h1 class="main-title">Our Food Project!</span></h1>
	</div>


	<main class="cd-main-content-project">
		<div id="more" class="cd-container-project">
		
		<div class="cd-container-project-clmn-1">
			<h1>Preview of Our Next Project! Finding Deals for Everyone</h1>
			<h2>Click on the locations to get information on deals around OSU! </h2>
			<br></br>
				
<div id="googleMap" style="width:700px;height:580px;">
			
			<img src="http://heydays.no/wp-content/uploads/2013/11/heydays_nora01-1440x900.jpg">
			<img src="http://heydays.no/wp-content/uploads/2013/11/heydays_nora022-1440x900.jpg">
			<img src="http://heydays.no/wp-content/uploads/2013/11/heydays_nora10.jpg">
			<img src="http://heydays.no/wp-content/uploads/2013/11/heydays_nora04-1440x900.jpg">
		
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
