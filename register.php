<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['errMsg'])){
    echo $_SESSION['errMsg'];
}
require ("mysqli_connect.php");//connect to mysql


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $username = mysqli_real_escape_string($dbc, $_POST['username']);
 $password = mysqli_real_escape_string($dbc, $_POST['password']);
 $confirmpassword = mysqli_real_escape_string($dbc, $_POST['confirmpassword']);
 $email = mysqli_real_escape_string($dbc, $_POST['email']);
 
// sql query to select users

$q= "SELECT * FROM userinfo where  username ='$username'";
   
$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));// @ is used to display just errors

//now start the session
$num= mysqli_num_rows($r);
   echo $num;
if($num>1){
   
	echo ' <div class="alert alert-danger container" style="width:500px;" role="alert">Username Already Exists</div>';
    //$_SESSION['errMsg'] = "Username already exists";
     header("Location:register.php");
}
//    
    else{
        
        $reg= "insert into userinfo (username, password,confirmpassword,email,isadmin) values('$username', '$password','$confirmpassword','$email','0')";
        mysqli_query($dbc, $reg);
       echo ' <div class="alert alert-success container" style="width:500px;" role="alert">Registration Successful</div>';
    }
}
?>

<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		
	
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
                                        <li class="active"><a href="Login.php">Login/Register</a></li>
							      	</ul>
		    					</div>
							</nav>
                              
						</div>
								
							</div>
						</div>
						
			
						
				</div>
			</div><!--header_bottom-->
		</div><!--header-->
        <div class="loginbox">
        <h1 class="header_main" >SIGN UP</h1>
        <form class="reg_form" method="post" action="register.php" id="login">
      
        <input type="text" name="username" placeholder="Name" required><span></span><br><br>
        <input type="text" name="email" placeholder="Email id" id="e" required><span id="show1"></span><br><br>
        <input type="password" name="password" placeholder="Password" id="pass" required><span></span><br><br>
        <input type="password" name="confirmpassword" placeholder="Confirm password" id="cpass" required><span id="show"></span><br><br>
		<input type="submit" name="submit" value="submit" id="sub"><br>
        
		<p class="message">Already Registered?&nbsp;<a href="login.php">LOGIN</a></p>  
    </form>
      
    </div>

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
					
                </div></div><!--footer-->
	</div><!--wrapper-->
</body>
</html>