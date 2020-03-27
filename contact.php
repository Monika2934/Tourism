<!DOCTYPE html>
<?php
session_start();
require ("mysqli_connect.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $comments = $_POST['comments'];
	
	$q= "SELECT * FROM contact ";
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
	
	if(!empty($firstname) || !empty($lastname)|| !empty($email)|| !empty($comments)){
		//insert the data to database
    	$q="insert into contact(firstname,lastname,email,comments) values('$firstname','$lastname','$email','$comments')";
	
			 
//		print msg f successfully done otherwise print failure
		if ($dbc->query($q) === TRUE) 
		{
    		echo ' <div class="alert alert-success container" style="width:500px;" role="alert">New record created successfully</div>';
		}
		else
		{
				echo ' <div class="alert alert-danger container" style="width:500px;" role="alert">Failure</div>';
		}
		}
	
}
?>
<html>
<head>
	<title>contact us</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript">
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
	    	$('.header_bottom').addClass("sticky");
	  	}
	  	else
	  	{
	    	$('.header_bottom').removeClass("sticky");
	  	}
	});
	
	
//	$(document).ready(function() {
//
//	var emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
//    
//    
//    $("#sub").click(function(event){
//        
//        isValid=true;
//
//		 // get email field value and validate
//        var email = $("#em").val().trim();
//        if(email==""){
//            $("#em").next().text("This field is required").css('color', 'red');
//		
//            isValid=false;
//        }else if(!emailPattern.test(email)){
//            $("#em").next().text("Must be a valid email address.").css('color', 'red');;
//            isValid=false;
//        }else{
//            $("#em").next().text("");
//			alert(" we receive your message.Soon you will get respond from us");
//        }
//
//		 // prevent default submit function if there is any error
//		 
//        if (isValid == false) { event.preventDefault();}
//        
//    });
//});



	</script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="header_top">
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="header_top_left">
                                <img src="images/logo.png" class="img-responsive">
                                
						
					</div>
				</div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<nav class="navbar">
		    					<div class="navbar-header">
		      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
		    					</div>
		    					<div class="collapse navbar-collapse" id="myNavbar">
							      	<ul class="nav navbar-nav">
							        	<li class="active"><a href="index.php">Home</a></li>
							        	
							        	<li class="active"><a href="Gallery.html">Collection</a></li>
                                        <li class="active"><a href="aboutus.html">About Us</a></li>
							        	<li class="active"><a href="contact.php">Contact Us</a></li>
                                        <li class="active"><a href="login.php">Login/Register</a></li>
							      	</ul>
		    					</div>
							</nav>
                              
						</div>
								
							</div>
						</div>
						
			
						
				</div>
			</div><!--header_bottom-->
		</div><!--header-->
        <!-- contact-->
    <section id="contact" style="background-color: #fff;font:" class="text-page"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Contact</h2>
            <div class="row">
              <div class="col-md-6">
                <form id="contact-form" method="post" action="#" class="contact-form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name">Firstname *</label>
                          <input type="text" name="firstname"  placeholder="First Name" required="required" class="form-control">
						  <span id="de"></span>
                        </div>
                        <div class="form-group">
                          <label for="surname">Lastname *</label>
                          <input type="text" name="lastname" placeholder="Last Name" required="required" class="form-control">
                        </div>
						<div class="form-group">
                      <label for="email">Email Address *</label>
                      <input type="text" name="email" id="em" placeholder="E-mail address" required="required" class="form-control">
					  <span></span>
                    </div>
                    <div class="form-group">
                      <label for="comments">Comments*</label><br>
                      <textarea rows="4" name="comments" placeholder="Comments" required="required" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="name" id="sub" value="Submit" class="btn btn-primary btn-block">
                    </div>

                      </div>
                    </div>
                                      </div>
                </form>
              </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_first">
						<img src="imagesnew/idea.jpg" class="img-responsive">
					</div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
 
		<div class="footer">
			<div class="container">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="contact_us">
							<h4>Contact Us</h4>
							<div class="contact_us_menu">
								<ul>
                                    <li><i class="fa fa-envelope-open" aria-hidden="true"></i><span>webdesigners@gmail.com</span></li>
									<li><i class="fa fa-mobile" aria-hidden="true"></i><span>235-562-2563</span></li>
									
									<li><i class="fa fa-map-pin" aria-hidden="true"></i><span>1235,Street Market Canada Ontario. </span></li>
								</ul>
                                <p>© 2019. All rights reserved. </p>
							</div>
						</div>
							
							
							
						
					</div>
					
                </div>
            </div>
    </div><!--footer-->
    </body></html>
	