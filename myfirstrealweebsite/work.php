<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garrett Vaughn | Freelance Front-End Developer</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
  </head>
  <body>

<header class="site-header sticky">
  		<div id="nav-cont-space" class="flexbox container">
		  		<div id="logo"><img src="assets/mydevicon.PNG"></div>
		  		<nav id="menu-long" class="flexbox">
			  		<ul class="navi desktop-navi">
			    		<li><a href="index.php">Home</a></li>
			    		<li><a href="about.php">About</a></li>
			    		<li><a href="services.php">Services</a></li>
			    		<li><a href="work.php">Work</a></li>
			    		<li><a href="#contactform">Contact</a></li>
			  		</ul>
			  		<a id="hamburger" href="#home" onclick="myFunction()"><img src="https://img.icons8.com/android/24/000000/menu.png"></a>
				</nav>
		</div>
		<ul id="movingnav" class="navi mobile-navi">
						<li><a href="index.php">Home</a></li>
			    		<li><a href="about.php">About</a></li>
			    		<li><a href="services.php">Services</a></li>
			    		<li><a href="work.php">Work</a></li>
			    		<li><a href="#contactform">Contact</a></li>
		</ul>
	</header>


	<div id="" class="sub-header-1 flexbox nowrap padding-75">
		<h2 class="sub-header-h2">Work and Case Studies</h2>
	</div>

	<div class="full-body-content-about-us flexbox">
		<div class="about-inside-pos flexbox  nowrap-col">
			<h1><span class="colored-text">Work and Case Studies</span></h1>
			<h2>A curated collection of our work in web design, developemnt, and SEO.</h2>
			<br>
			<br>
			<img src="assets/resize02.PNG" class="expanding-img-work">
			<br>
			<p style="text-align: center; font-family: Proxima Nova; font-size: 13px; font-weight: bold;">WEB DESIGN/DEVELOPEMENT/SEO</p>
		</div>
	</div>

	<footer class="universal-footer flexbox nowrap-col">
		2020 Garrett Vaughn Developement
	</footer>
	  <script>
		function myFunction() {
		  var x = document.getElementById("movingnav");
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}
  </script>
  </body>
</html>

