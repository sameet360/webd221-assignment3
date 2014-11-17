<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Anna S. & Sowjanya S.">

	<title>Brandi | Digital Agency</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href='style/normalize.css'>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/media-queries.css">
</head>
<body>
	<nav>
		<div class="contain">
			<a id="logo" href="#">Brandi</a>
			<p><span id="divider"></span>I'm your tag line</p>
			
			<a id="right-panel-link" href="#menu"><i class="fa fa-bars"></i></a>
			<ul id="menu" class="panel">
				<li><a href="#header">Home</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#works">Works</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div><!-- /contain -->
<!-- 		<div id="right-panel" class="panel">
		    <h2>Right panel</h2>
		    <p>Clicking outside this panel wont close it because <code>clickClose = false</code></p>
		    <button id="close-panel-bt">Close</button>
		</div> -->
	</nav>

	<?php include('header.php'); ?>
	
	<section id="features">
		<div class="contain">
			<h3>features</h3>
			<div class="shapes">
				<hr class="main-lines"><i class="fa fa-heart-o"></i><hr class="main-lines">				
			</div><!-- /shapes -->			

			<div class="feature-column">
				<span><img src="images/feather.png" alt="feather icon"></span>
				<article>
					<h4>Branding</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
				</article>
			</div><!-- /feature-column -->

			<div class="feature-column">
				<span><img src="images/pencil.png" alt="pencil icon"></span>
				<article>
					<h4>Development</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
				</article>
			</div><!-- /feature-column -->

			<div class="feature-column">
				<span><img src="images/megaphone.png" alt="megaphone icon"></span>
				<article>
					<h4>Consulting</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
				</article>
			</div><!-- /feature-column -->
			<div style="clear: both;"></div> <!-- clear floats technique-->

			<ul class="pagination">
				<li class="circle"></li>
				<li class="circle"></li>
				<li class="circle"></li>
			</ul><!-- /pagination -->
		</div><!-- /contain -->		
	</section><!-- /features -->

	<section id="works">
		<div class="contain">
			<h3>works</h3>
			<div class="shapes">
				<hr class="main-lines"><i class="fa fa-heart-o"></i><hr class="main-lines">		
			</div><!-- /shapes -->
			<h5 class="subheading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</h5>

			<div id="categories">
				<a href="">All</a>
				<a href="">Branding</a>
				<a href="">Web</a>
				<a href="">Logo Design</a>
				<a href="">Photography</a>				
			</div><!-- /categories -->
		</div><!-- /contain -->

		<ul id="work-gallery">
			<li>
				<img class="work-tile" src="images/image1.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image2.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image2.jpg" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image4.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>

			<li>
				<img class="work-tile" src="images/image5.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image6.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image7.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
			<li>
				<img class="work-tile" src="images/image8.png" alt="piece of work">
				<a href="#" class="gallery-link">
					<img src="images/eye-icon.png" alt="eye icon"/>
					<h5>Lorem ipsum dolor sit amet.</h5>
					<p>Photography</p>
				</a><!-- /gallery-link -->
			</li>
		</ul><!-- /work-gallery -->
	</section><!-- /works -->

	<section id="team">
		<div class="contain">
			<h3>meet our team</h3>
			<div class="shapes">
				<hr class="main-lines"><i class="fa fa-heart-o"></i><hr class="main-lines">	
			</div><!-- /shapes -->
			<h5 class="subheading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</h5>

			<div class="team-column team-first">
				<div class="team-photo">
					<img src="images/john.png" alt="John Filmr Doe's photo">
					<div class="team-hover">

						<a href="#" class="team-info">
							<p><strong>Nemo enim ipsam <br> voluptatem quia voluptas</strong></p>
							<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
						</a>

						<div class="team-soc-link">
							<a href="#"><img src="images/team-facebook.png" alt="facebook icon"></a>
							<a href="#"><img src="images/team-twit.png" alt="twitter icon"></a>
							<a href="#"><img src="images/team-gplus.png" alt="google plus icon"></a>
						</div><!-- /team-soc-link -->
					</div><!-- /team-hover -->
				</div><!-- /team-photo -->
				<div style="clear: both;"></div> <!-- clear floats technique-->

				<a class="team-info" href="#">
					<h5>John Filmr Doe</h5>
					<p>Managing Director</p>
				</a>	
			</div><!-- /team-column -->

			<div class="team-column even">
				<div class="team-photo">
					<img src="images/team_image2.png" alt="Chystine Hineu's photo">
					<div class="team-hover">

						<a href="#" class="team-info">
							<p><strong>Nemo enim ipsam <br> voluptatem quia voluptas</strong><br>
							sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>	
						</a>

						<div class="team-soc-link">
							<a href="#"><img src="images/team-facebook.png" alt="facebook icon"></a>
							<a href="#"><img src="images/team-twit.png" alt="twitter icon"></a>
							<a href="#"><img src="images/team-gplus.png" alt="google plus icon"></a>
						</div><!-- /team-soc-link -->
					</div><!-- /team-hover -->
				</div><!-- /team-photo -->
				<div style="clear: both;"></div> <!-- clear floats technique-->

				<a class="team-info" href="#">
					<h5>Chystine Hineu</h5>
					<p>Lead Designer</p>
				</a>	
			</div><!-- /team-column -->

			<div class="team-column">
				<div class="team-photo">
					<img src="images/team_image3.png" alt="Martin Matrone's photo">
					<div class="team-hover">

						<a href="#" class="team-info">
							<p><strong>Nemo enim ipsam <br> voluptatem quia voluptas</strong></p>
							<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
						</a>

						<div class="team-soc-link">
							<a href="#"><img src="images/team-facebook.png" alt="facebook icon"></a>
							<a href="#"><img src="images/team-twit.png" alt="twitter icon"></a>
							<a href="#"><img src="images/team-gplus.png" alt="google plus icon"></a>
						</div><!-- /team-soc-link -->
					</div><!-- /team-hover -->
				</div><!-- /team-photo -->
				<div style="clear: both;"></div> <!-- clear floats technique-->

				<a class="team-info" href="#">
					<h5>Martin Matrone</h5>
					<p>Lead Developer</p>
				</a>		
			</div><!-- /team-column -->
			
			<div class="team-column even">
				<div class="team-photo">
					<img src="images/team_image4.png" alt="Steve Flaulkin's photo">
					<div class="team-hover">

						<a href="#" class="team-info">
							<p><strong>Nemo enim ipsam <br> voluptatem quia voluptas</strong></p>
							<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
						</a>

						<div class="team-soc-link">
							<a href="#"><img src="images/team-facebook.png" alt="facebook icon"></a>
							<a href="#"><img src="images/team-twit.png" alt="twitter icon"></a>
							<a href="#"><img src="images/team-gplus.png" alt="google plus icon"></a>
						</div><!-- /team-soc-link -->
					</div><!-- /team-hover -->
				</div><!-- /team-photo -->
				<div style="clear: both;"></div> <!-- clear floats technique-->

				<a class="team-info" href="#">
					<h5>Steve Flaulkin</h5>
					<p>Sr. UI Designer</p>
				</a>							
			</div><!-- /team-column -->
			<div style="clear: both;"></div> <!-- clear floats technique-->

			<ul class="pagination">
				<li class="circle"></li>
				<li class="circle"></li>
				<li class="circle"></li>
			</ul><!-- /pagination -->
		</div><!-- /contain -->
	</section><!-- /team -->

	<section id="facts">
		<div class="contain">
			<h3>some fun facts</h3>
			<div class="shapes">
				<hr class="main-lines"><i class="fa fa-heart-o"></i><hr class="main-lines">			
			</div><!-- /shapes -->

			<div class="facts-column">
				<img src="images/clock.png" alt="clock icon">
				<h2>3200</h2>
				<h5>hours of work</h5>
			</div><!-- /facts-column -->

			<div class="facts-column">
				<img src="images/clients.png" alt="friends icon">
				<h2>120</h2>
				<h5>Satisfied Clients</h5>
			</div><!-- /facts-column -->

			<div class="facts-column">
				<img src="images/projects.png" alt="project icon">
				<h2>360</h2>
				<h5>Projects Delivered</h5>
			</div><!-- /facts-column -->

			<div class="facts-column">
				<img src="images/awards.png" alt="awards icon">
				<h2>42</h2>
				<h5>Awards Won</h5>
			</div><!-- /facts-column -->
		</div><!-- /contain -->
	</section><!-- /facts -->

	<section id="contact">
		<div class="contain">
			<h3>let's discuss</h3>
			<div class="shapes">
				<hr class="main-lines"><i class="fa fa-heart-o"></i><hr class="main-lines">	
			</div><!-- /shapes -->

			<h5 class="subheading">Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</h5>
			
			<div id="contact-header"> 
				<div id="location">
					<h4>Cras at ultrices erat, sed vulputate!</h4>
					<p>2345 Setwant natrer, 1234,<br> 
					Washington. United States.<br>
					(401) 1234 567<br>
					hello@brandi.com<br>
					ww.brandi.com</p>
				</div><!-- /location -->

				<div id="form">
					<h3>Say hello!</h3>
					<form>
						<input type="text" id="form-name" placeholder="Name">
						<input type="text" id="form-email" placeholder="Email">
						<input type="text" id="form-message" placeholder="Message">

						<a href="">Send message</a>
					</form>				
				</div><!-- /form -->

				<div id="soc-links">
					<a href=""><img src="images/contact-behance.png" alt="behance profile icon"></a>
					<a href=""><img src="images/contact-twitter.png" alt="twitter profile icon"></a>
					<a href=""><img src="images/contact-dribble.png" alt="dribble profile icon"></a>
					<a href=""><img src="images/contact-forrest.png" alt="forresr profile icon"></a>
					<a href=""><img src="images/contact-gplus.png" alt="gplus profile icon">	</a>		
				</div><!-- /soc-links -->
			</div><!-- /contact-header -->
		</div><!-- /contain -->
	</section>

	<section id="map"></section>

	<?php include('footer.php'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.panelslider.min.js"></script>
<script>
	$(document).ready(function() {
		$('#right-panel-link').panelslider({side: 'right', clickClose: true, duration: 200 });

    	$('#menu li').click(function() {
	      $.panelslider.close();
	    });
	    console.log( "ready!" );
	});    
  </script>

</body>
</html>