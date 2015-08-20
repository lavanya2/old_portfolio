<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lavanya Kumar Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<link rel="stylesheet" media="screen" href="css/bootstrap.css">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href="lightbox.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="jquery-1.7.2.min.js"></script>
		<script src="lightbox.js"></script>

    <script>
      $('.maps').click(function () {
        $('.maps iframe').css("pointer-events", "auto");
      });
    </script>


	</head>
	
	<body>
	
	<?php
  include ("header.php");
  ?> 
    
  <!--CONTACT BANNER -->        
   <div class="container">
      <img src="panel4_banner1.png" class="center-block img-responsive contact_panel" alt="contact_banner">
   </div>

   <!--EMBEDDED MAP-->
   <div class="container maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.9050577472667!2d-83.740226!3d42.280550000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cae40746ad639%3A0x9777deab36d450cd!2sSchool+of+Information+at+the+University+of+Michigan!5e0!3m2!1sen!2sus!4v1418623010079" class="center-block contact_maps img-responsive"></iframe>
   </div>
          
   <!--FORM START-->
    <form class="form-horizontal form_margin" role="form" action="lavanya_process_new.php" method="POST">
    <div class="panel panel-default">

    <div class="panel-heading">
      <h2 class="section_title">Contact Me!</h2>
      <h3 class="section_title">(lakumar965@gmail.com)</h3>
    </div>


   <div class="panel-body">

   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">First Name:</label>
      <div class="col-sm-10">
         <input type="text" required class="form-control" name="Firstname" id="firstname" placeholder="John">
      </div>
   </div>


   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">Last Name:</label>
      <div class="col-sm-10">
         <input type="text" required class="form-control" name="Lastname" id="lastname" placeholder="Smith">
      </div>
   </div>

   
   <div class="form-group">
      <label for="exampleInputEmail2" class="col-sm-2 control-label">Email Address:</label>
      <div class="col-sm-10">
      <input type="email" required class="form-control" name="Email" id="exampleInputEmail2" placeholder="johnsmith@example.com">
      </div>
   </div>
  

   <div class="form-group">
      <label for="phone" class="col-sm-2 control-label">Phone:</label>
      <div class="col-sm-10">
      <input type="text" name="Phone" id="phone" class="form-control" placeholder="(123) 456-7890">
      </div>  
   </div>  


   <div class="form-group">
      <label for="about" class="col-sm-2 control-label">Message:</label>
      <div class="col-sm-10">
         <textarea maxlength="500" required id="about" class="form-control" name="About"></textarea>
      </div>
   </div>


<div class="form-group">
      <label for="profile-pic" class="col-sm-2 control-label">Attach a File:</label>
      <div class="col-sm-10">
         <input type="file" name="Profile-pic" id="profile-pic" accept="image/*" onchange="readURL(this);"><br>   
      <img id="blah" src="document.png" alt="Your Profile Image" /><br>
      </div>
</div>

<div class="buttons_position">
<button type="submit" name="submit" class="btn btn-default btn-lg btn_style" id="submit" value="submit">Submit</button>
<button type="reset" class="btn btn-default btn-lg btn_reset_style"  value="Reset">Reset </button>
</div>

</div>
        
</div>
</form>
            
       
  <?php
  include ("footer.php");
  ?>   

            
            
</body>
</html>