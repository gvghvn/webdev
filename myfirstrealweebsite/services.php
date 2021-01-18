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
		<h2 class="sub-header-h2">Services</h2>
	</div>

	<div class="full-body-content-about-us flexbox">
		<div class="about-inside-pos-2 flexbox">
			<div class="flexbox block-quote-services-2 about-traits-bg-2"> 
				<div class="special-about-lettering-2">Web Dev</div>
				<hr class="grey-border-2">
				<div class="traits-defined-text-2">
					 Mobile First Website Design
					<br>
					Landing Pages
					<br>
					API Integration
					<br>
					Content Management Systems
					<br>
					Mongodb + Express
					<br>
					E-commerce Design and Developement
					<br>
					Custom Design and Developement
					<br>
				</div>
			</div>
			<div class="flexbox block-quote-services-2 about-traits-bg-2"> 
				<div class="special-about-lettering-2">SEO</div>
				<hr class="grey-border-2">
				<div class="traits-defined-text-2">
					Keyword Strategy
					<br>
					Longterm SEO Strategy
					<br>
					On-page Keyword and Title/Meta Tag optimization
					<br>
					Website Audits + Speed optimization
					<br>
					Local SEO + Directory indexing
					<br>
					Blog Posts + Article Creation
					<br>
				</div>
			</div>
			<div class="flexbox block-quote-services-2 about-traits-bg-2"> 
				<div class="special-about-lettering-2">Digital Content</div>
				<hr class="grey-border-2">
				<div class="traits-defined-text-2">
					Copy Writing
					<br>
					Tutorials and Website Walkthroughs
					<br>
					Targeted newsletter planning
					<br>
				</div>
			</div>
		</div>
	</div>

	<div id="" class="location-and-contact flexbox">
		<div class="my-contact-info">
			<h3 class="solve-lg-text">Let's solve your website pains today.</h3>
			<p><strong>Discovery calls are always free.</strong> We work around your schedule. Our email is a great way to reach u as well.</p>
			<p>E: info@garrettvaughn.com</p>
		</div>
		<div class="contact-full-form">
			<form  method="post" name="contact_form" action="contactf.php" class="flexing-form">
				<input type="text" name="fname" onfocus="this.value=''" placeholder="Name">
				<br>
				<input type="text" name="email" onfocus="this.value=''" placeholder="Email">
				<br>
				<input type="text" name="buget" onfocus="this.value=''" placeholder="Buget">
				<br>
				<textarea rows="4" cols="50" name="message" onfocus="this.value=''"> Message</textarea>
				<input type="submit" value="Submit" name="submit" class="input-button-contact">
			</form>
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

