<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lavanya Kumar Portfolio</title>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<link rel="stylesheet" media="screen" href="css/bootstrap.css">
<!-- 		<link rel="stylesheet" media="screen" href="css/bootstrap-responsive.css">
 -->		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
		<link href="lightbox.css" rel="stylesheet" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script> 
            $document.on('click', function() {
                $('#container').mixItUp();
            })
        </script>
		<script src="jquery-1.7.2.min.js"></script>
		<script src="lightbox.js"></script>
        

	</head>
	
	<body>
           
        <?php
  include ("header.php");
  ?> 
        
            
            <!--<hr class="line_small">-->
            
            <div class="container">
            	<img src="panel2_banner1.png" class="center-block img-responsive portfolio_panel" alt="websites_banner">
            </div>
            
            <br/>
            <br/>
            
            <!-- <button class="fiter" data-filter=".category-1">Category 1</button>
            <button class="fiter" data-filter=".category-2">Category 2</button> -->

            
<!--             <div class="container col-md-12 center-block">
 -->
                <div>
                        <label>Project Type:</label>
                        <button class="btn btn-default filter" data-filter="all">All</button>
                        <button class="btn btn-default filter" data-filter=".category-1">Category 1</button>
                        <button class="btn btn-default filter" data-filter=".category-2">Category 2</button>
                </div>

               
                <div id="container">
                <div class="mix category-1">
                <img src= "image/spork.png" alt="Spork Image" class="img-thumbnail square img-responsive">
                </div>
                <div class="mix category-1">
                <img src= "image/treblesinger.png" alt="Treble Singer Image" class="img-thumbnail square">    
                </div>
                <div class="mix category-1">
                <img src= "image/webdsc.png" alt="WebDSC" class="img-thumbnail square"> 
                </div>
                <div class="mix category-2">
                <img src= "image/taiwan1.png" alt="Taiwanese Film Project" class="img-thumbnail square">
                </div>
                <div class="mix category-1">
                <img src= "image/KutasLab1.png" alt="Kutas Lab" class="img-thumbnail square">
                </div>
                <div class="mix category-1">
                <img src= "image/WeMail1.png" alt="We-Mail Class Project" class="img-thumbnail square">
                </div>
                <div class="mix category-2">
                <img src= "image/Spaceship1.png" alt="Autodesk 3D" class="img-thumbnail square">
                </div>
                <div class="mix category-2">
                <img src= "image/RLabs1.png" alt="RapLabs" class="img-thumbnail square">
                </div>
  
                <div class="gap"></div>
                <div class="gap"></div>
                </div>



            	<!-- <div id="MixItUp">
                <div class=" row">
                    <div class="col-md-10 col-md-offset-1">
            		<div class="col-md-4 mix category-1">
            			<a href="image/spork.png" rel="lightbox[spork]" title="Class Project: Food website displaying images and recipes for specific diets (Bootstrap)"><img src= "image/spork.png" alt="Spork Image" class="img-thumbnail square img-responsive"></a>
            			<br/><br/>
            			<a href="image/spork2.png" rel="lightbox[spork]" title="Class Project: Food website displaying images and recipes for specific diets (Bootstrap)"><img src= "image/spork2.png" alt="Spork Image" class="img-thumbnail square img-responsive"></a>
            		</div>
            		<div class="col-md-4">
            			<a href="image/treblesinger.png" rel="lightbox[treblesinger]" title="Personal Project: Website for college a cappella team (Apple iWeb)"><img src= "image/treblesinger.png" alt="Treble Singer Image" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/treblesinger2.png" rel="lightbox[treblesinger]" title="Personal Project: Website for college a cappella team (Apple iWeb)"><img src="image/treblesinger2.png" alt="Treble Singer Image" class="img-thumbnail square"></a>
            		</div>
            		<div class="col-md-4">
            			<a href="image/webdsc.png" rel="lightbox[webdsc]" title="Internship Project: Company website (Bootstrap)"><img src= "image/webdsc.png" alt="WebDSC" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/webdsc2.png" rel="lightbox[webdsc]" title="Internship Project: Company website (Bootstrap)"><img src="image/webdsc2.png" alt="WebDSC" class="img-thumbnail square"></a>
            		</div>
            	</div>
         		</div>
         		
         		<br/>
         		
         		<div class="row">
         		<div class="col-md-10 col-md-offset-1">
            		<div class="col-md-4 mix category-2">
            			<a href="image/taiwan1.png" rel="lightbox[taiwan]" title="Internship Project: Website in which users can upload files and videos (created interfaces for both Public and Admin views using Bootstrap)."><img src= "image/taiwan1.png" alt="Taiwanese Film Project" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/taiwan2.png" rel="lightbox[taiwan]" title="Internship Project:Website in which users can upload files and videos (created interfaces for both Public and Admin views using Bootstrap)."><img src= "image/taiwan2.png" alt="Taiwanese Film Project" class="img-thumbnail square"></a>
	            	</div>
            		<div class="col-md-4 mix category-2" >
            			<a href="image/KutasLab1.png" rel="lightbox[Kutas]" title="Research Project: Interface for Neuroscience Lab in which experiment subjects could login and answer required questionnaires (HTML and JQuery UI)"><img src= "image/KutasLab1.png" alt="Kutas Lab" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/KutasLab2.png" rel="lightbox[Kutas]" title="Research Project: Interface for Neuroscience Lab in which experiment subjects could login and answer required questionnaires (HTML and JQuery UI)"><img src= "image/KutasLab2.png" alt="Kutas Lab" class="img-thumbnail square"></a>
            		</div>
            		<div class="col-md-4 mix category-2">
            			<a href="image/WeMail1.png" rel="lightbox[Mail]" title="Class Project: Redesign of University's email server (Adobe Photoshop)"><img src= "image/WeMail1.png" alt="We-Mail Class Project" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/WeMail2.png" rel="lightbox[Mail]" title="Class Project: Redesign of University's email server (Adobe Photoshop)"><img src= "image/WeMail2.png" alt="We-Mail Class Project" class="img-thumbnail square"></a>
            		</div>
            	</div>
        		</div>
        		
        		<br/>
        		
        		<div class="mix category-2 row">
         		<div class="col-md-10 col-md-offset-1">
            		<div class="col-md-4">
            			<a href="image/Spaceship1.png" rel="lightbox[space]" title="Class Project: 2D model of cognitively sound interior design of spaceship (Adobe Photoshop)"><img src= "image/Spaceship1.png" alt="Autodesk 3D" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/Spaceship2.png" rel="lightbox[space]" title="Class Project: 3D model of cognitively sound interior design to correspond with 2D model (Autodesk 123D) "><img src= "image/Spaceship2.png" alt="Autodesk 3D" class="img-thumbnail square"></a>
            		</div>
            		<div class="col-md-4">
            			<a href="image/RLabs1.png" rel="lightbox[space]" title="Internship Project: Image query. A first design iteration of the images results page."><img src= "image/RLabs1.png" alt="RapLabs" class="img-thumbnail square"></a>
            			<br/><br/>
            			<a href="image/RLabs2.png" rel="lightbox[space]" title="Internship Project: Image query. A second design iteration of the images results page."><img src= "image/RLabs2.png" alt="RapLabs" class="img-thumbnail square"></a>
            		</div>
            	</div>
            	</div>
            </div>
   
        </div> -->
            
           
	    <br/>
	    <br/>
	    <br/>
	    <br/>
              
        <?php
  include ("footer.php");
  ?> 

 

	</body>
	
</html>