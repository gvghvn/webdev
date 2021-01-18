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
		<h2 class="sub-header-h2">About Garrett Web Developement</h2>
	</div>

	<div class="full-body-content-about-us flexbox">
		<div class="about-inside-pos flexbox  nowrap-col">
			<h1><span class="colored-text">Helping business owners is our passion.</span></h1>
			<h2>Web developement to help business owners get back to loving and doing what they do best.</h2>

			<p>We are a collection of passionate web developers and designers focused on helping people first and coding second. We take pride in helping small businesses grow their audience and find new avenues of growth online. Our team loves a challenge, and our wide service offerings in web design and development can help both old and new businesses find better more qualified clients, and reach your company’s future goals. </p>
			<br>
			<p>We have a near decade of experience combined in our small and cheerful team, and we seek not just to educate but provide structure and organization for new and old digital companies. Our team stays up-to-date in the latest design and user experience (UX/UI) trends and practices so that busy owners can relax knowing they are receiving the most vital feedback on their web presence. We have a passion in local search engine optimization (SEO) both on-page and off to help position your business to the right kinds of clients.</p>
			<br>
			<p>
			There is no web development business more passionate, driven and hungry to see your digital success like we are. From our initial contact to the final moments before your new website is launched, we stay on the ball and work tirelessly so you don’t have to. We love our clients and our success is due to the personal attention and careful preparation we give to every website we make</p>	
			<br>
		</div>

		<div class="about-three-traits flexbox">
			<div class="flexbox block-quote-services about-traits-bg"> 
				<div class="special-about-lettering">1</div>
				<div class="special-about-lettering-2">DEDICATION</div>
				<div class="traits-defined-text">We get the job done with 100% follow through. It is our goal to create a seamless client experience. No more headaches or missed project milestones. </div>
			</div>
			<div class="flexbox block-quote-services about-traits-bg"> 
				<div class="special-about-lettering">2</div>
				<div class="special-about-lettering-2">GOAL-CENTRIC</div>
				<div class="traits-defined-text">We value your time like our own; we are always moving toward your goals and solving your pain points. Where you are trying to take your business in the future is at the forefront of our design and development strategy.</div>
			</div>
			<div class="flexbox block-quote-services about-traits-bg"> 
				<div class="special-about-lettering">3</div>
				<div class="special-about-lettering-2">HONESTY AND PASSION</div>
				<div class="traits-defined-text">Trustworthy and down to earth people with the experience and hunger to take your web presence to the next level. We are constantly refining our approach to UI/UX, web development, SEO and digital content management.</div>
			</div>
		</div>
		<div id="" class="location-and-contact flexbox">
		<div class="my-contact-info">
			<h3 class="solve-lg-text">Let's solve your website pains today.</h3>
			<p><strong>Discovery calls are always free.</strong> We work around your schedule. Our email is a great way to reach u as well.</p>
			<p>E: info@garrettvaughn.com</p>
		</div>
		<div class="contact-full-form">
			<form method="post" name="contact_form" action="contactf.php" class="flexing-form">
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

