<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lavanya Kumar Portfolio</title>

		<!--CSS-->
		<link rel="stylesheet" media="screen" href="css/mystyle.css">
		<link rel="stylesheet" media="screen" href="css/bootstrap.css">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

		<!--FAVICON-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!--LIGHTBOX-->
        <link href="lightbox.css" rel="stylesheet" />
		<script src="jquery-1.7.2.min.js"></script>
		<script src="lightbox.js"></script>

		<!--MIX IT UP-->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="js/jquery.mixitup.min.js"></script>
		<script>
			$(document).on('ready', function() {
				$('#container').mixItUp();
			})
		</script>
		<style>
			.mix {
				display:none;
			}
		</style>

	
	</head>

	<body>

		<?php 
        	include ("header.php");
  		?> 

		<div class="container">
            	<img src="panel2_banner1.png" class="center-block img-responsive portfolio_panel" alt="websites_banner">
        </div>

        

		<div class="center-block">
			<button class="btn btn-default filter portfolio_buttons" data-filter="all">All</button>
			<button class="btn btn-default filter portfolio_buttons" data-filter=".category-1">Graphic Design</button>
			<button class="btn btn-default filter portfolio_buttons" data-filter=".category-2">Web Development</button>
			<button class="btn btn-default filter portfolio_buttons" data-filter=".category-3">Prototypes/ User Research</button>
			<button class="btn btn-default filter portfolio_buttons" data-filter=".category-4">Mobile Design</button>
<!-- 			<button class="btn btn-default filter portfolio_buttons" data-filter=".category-5">Design Competitions</button>
 -->		</div>


		
		<div class="center-block portfolio_content">
		<div id="container">
			<!--CATEGORY 1-->
			<div class="mix category-1">
				<a href="image/Ex7.png" rel="lightbox[art]" title="Adobe Illustrator: This piece was done in Adobe Illustrator. By applying various types of filters to each of the images placed in a tile layout, I was able to create an interesting look overall.">
				<img src="image/Ex7.png" alt="GraphicDesign/Squares" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Adobe Illustrator: Abstract Squares</h4>
			</div>
			<div class="mix category-1">
				<a href="image/Ex4.png" rel="lightbox[art]" title="Adobe Illustrator: Using a photograph as reference, I hand sketched this image and use the live trace feature of Adobe Illustrator to achieve a replica of my drawing in the software. I then used a stylus and tablet to maintain the colors and effects shown in the image.">
				<img src="image/Ex4.png" alt="GraphicDesign/Dog" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Adobe Illustrator: "Rocky"</h4>
			
			</div>
			<div class="mix category-1">
				<a href="image/Ex6.png" rel="lightbox[art]" title="Adobe Illustrator: For this image, 'The Dream' by Pablo Picasso, I manually traced each detail using multiple layers on Adobe Illustrator. I was also able to demonstrate the various brush strokes to achieve an effect similar to Picasso's famous painting.">
				<img src="image/Ex6.png" alt="GraphicDesign/Picasso" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Adobe Illustrator: "The Dream"</h4>

			</div>
			<div class="mix category-1">
				<a href="image/Ex5.png" rel="lightbox[art]" title="Adobe Illustrator: This piece was also originally sketched on paper and then transferred to Adobe Illustrator using the live trace feature. I applied a filter on the image to reverse the colors, then added hints of warmer colors with the magic wand tool.">
				<img src="image/Ex5.png" alt="GraphicDesign/Fan" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Adobe Illustrator: Fan</h4>

			</div>


			<!--CATEGORY 2-->
			<div class="mix category-2">
				<a href="image/spork.png" rel="lightbox[spork]" title="Class Project using Twitter Bootsrap: This project was completed as a group, and was my first interaction with Boostrap and web development. Our final product was a website displaying images and recipes of meals for individuals with specific diets. They could also find meals for different times of the day as well as restaurant suggestions.">
				<img src= "image/spork.png" alt="Spork Image" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">The Spork</h4>
				<a href="image/spork2.png" rel="lightbox[spork]" title="Class Project using Twitter Bootsrap: This project was completed as a group, and was my first interaction with Boostrap and web development. Our final product was a website displaying images and recipes of meals for individuals with specific diets. They could also find meals for different times of the day as well as restaurant suggestions.">
				</a>
			</div>

			<div class="mix category-2">
				<a href="image/shoe_holic.png" rel="lightbox[shoe]" title="Class Project using Bootstrap and PHP: This site was developed for a class group project and was more dynamic rather than informational. Users could create an account, login (all information was stored in a database), and shop for shoes by updating their cart. We attempted to mimic a typical e-commerce experience but made sure not to charge our users for their purchases!">
				<img src= "image/shoe_holic.png" alt="Shoe-A-Holic" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Shoe-A-Holic</h4>
				<a href="image/shoe_holic2.png" rel="lightbox[shoe]" title="Class Project using Bootstrap and PHP: This site was developed for a class group project and was more dynamic rather than informational. Users could create an account, login (all information was stored in a database), and shop for shoes by updating their cart. We attempted to mimic a typical e-commerce experience but made sure not to charge our users for their purchases!">
				</a>
				<a href="image/shoe_holic3.png" rel="lightbox[shoe]" title="Class Project using Bootstrap and PHP: This site was developed for a class group project and was more dynamic rather than informational. Users could create an account, login (all information was stored in a database), and shop for shoes by updating their cart. We attempted to mimic a typical e-commerce experience but made sure not to charge our users for their purchases!">
				</a>
			</div>

			<div class="mix category-2">
				<a href="image/webdsc.png" rel="lightbox[webdsc]" title="Internship Project using Bootstrap: For my internship as a front-end web developer at a start-up web design company (completely run by students), a few other interns and I designed and built this informational site about the company, its focus, and its members.">
				<img src= "image/webdsc.png" alt="WebDSC" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Web Development</h4>
				<a href="image/webdsc2.png" rel="lightbox[webdsc]" title="Internship Project using Bootstrap: For my internship as a front-end web developer at a start-up web design company (completely run by students), a few other interns and I designed and built this informational site about the company, its focus, and its members.">
				</a>
			</div>


			<!--CATEGORY 3-->
			<div class="mix category-3">
				<a href="image/WeMailA.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Affinity Wall (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. We started here by conducting interviews and displaying the information collected on an affinity wall.">
					<img src= "image/WeMailA.png" alt="WeMail" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">WeMail: Using Contextual Inquiry</h4>
				<a href="image/WeMailB.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Digital Affinity Diagram (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. Here, we have translated our paper affinity wall into a digital diagram, representing our scheme.">
				</a>
				<a href="image/WeMailB1.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Personas (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. Our pink and blue labels allowed us to create personas and further scope our design ideas.">
				</a>
				<a href="image/WeMailB2.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Sequence Models (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. Creating sequence diagrams was extremely useful as we were able to capture the workflow of the system.">
				</a>
				<a href="image/WeMailC.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Paper Prototypes (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. We conducted a second round of interviews using paper prototypes, so that we could test our initial interface ideas with users.">
				</a>
				<a href="image/WeMail1.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Digital Prototypes (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. This was the third and final interation of our digital prototype, created on Adobe Photoshop.">
				</a>
				<a href="image/WeMail2.png" rel="lightbox[Mail]" title="Contextual Inquiry Process - Digital Prototypes (Class Project): This was my first exposure to the Contextual Inquiry process, and my group and I decided to redesign our school's email server. This was the third and final interation of our digital prototype, created on Adobe Photoshop.">
				</a>
			</div>

			<div class="mix category-3">
				<a href="image/Spaceship2.png" rel="lightbox[space]" title="Class Project using Autodesk 123D: For this project, I studied the environment necessary to create a cognitively sound interior design of spaceship. Prior to creating my 3D model, I used Adobe Photoshop to prototype a 2D version.">
				<img src= "image/Spaceship2.png" alt="WeMail" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Autodesk 123D</h4>

				<a href="image/Spaceship1.png" rel="lightbox[space]" title="Class Project using Autodesk 123D: For this project, I studied the environment necessary to create a cognitively sound interior design of spaceship. Prior to creating my 3D model, I used Adobe Photoshop to prototype a 2D version.">
				</a>
			</div>

			<div class="mix category-3">
				<a href="image/RLabs1.png" rel="lightbox[space]" title="Internship Project using Axure (Prorotype Version 1): This project assisted users in performing basic queries. Using Axure, I created an interactive prototype to demonstrate all the search criteria and layout of the search results.">
				<img src= "image/RLabs1.png" alt="WeMail" class="img-circle square img-responsive">
				</a>
				<h4 class="portfolio_title">Axure Interactive Prototype</h4>

				<a href="image/RLabs2.png" rel="lightbox[space]" title="Internship Project using Axure (Prototype Version 2): This project assisted users in performing basic queries. Using Axure, I created an interactive prototype to demonstrate all the search criteria and layout of the search results.">
				</a>
			</div>


			<!--CATEGORY 4-->
			<div class="mix category-4">
			

 				<a href="image/pantryplanner_Android.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
 				<img src= "image/pantryplanner_Android.png" alt="Pantry Planner Mobile App" class="img-circle square img-responsive">
				</a>
				<h4 class="about_title">The Pantry Planner <a href="http://player.vimeo.com/video/113467403" class="iframe"><span class="pantryplanner_link">(Video)</span></a></h4>
		
				<a href="image/pantryplannerA1.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
				</a>

				<a href="image/pantryplannerA2.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
				</a>

				<a href="image/pantryplannerA.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
				</a>

				<a href="image/pantryplannerB.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
				</a>

				<a href="image/pantryplannerC.png" rel="lightbox[pantryplanner]" title="Class Project using Android Studio: The Pantry Planner is a mobile application that allows users to upload recipes as well as search for them based on the ingredients they have in their pantry! My group and I developed the user interface as well as a basic database using Android Studio. We also tested our initial interface with users using paper prototypes.">
				</a>
				

 				

			</div>


		</div>
	</div>



	<?php
  include ("footer.php");
  ?> 

</body>
</html>






