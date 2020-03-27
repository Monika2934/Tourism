

<?php
//
//session_start();
//
//if(isset($_SESSION['login'])){
//    if(($_SESSION['login'])==false)
//    {
//        header("Location:index.php");
//    }
//}
?>


<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
	<!-- <script type="text/javascript">
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
	    	$('.header_bottom').addClass("sticky");
	  	}
	  	else
	  	{
	    	$('.header_bottom').removeClass("sticky");
	  	}
	});
	</script> -->
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
							<nav class="navbar" id="myNavbar">
		    					<div class="navbar-header">
		      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
		    					</div>
		    					<div class="collapse navbar-collapse" id="myNavbar">
							      	<ul class="nav navbar-nav">
                                        <li class="active" ><a href="index.php">Home</a></li>
							        	
							        	<li class="active" ><a href="Gallery.html">Collection</a></li>
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
		
		<!--slider-->
		<div class="place">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 place_first">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_first">   
						<img src="images/paris.jpg" class="img-responsive">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_content">
						<div class="place_first_content_title">
							<h3>Paris</h3>
							<!-- <?php echo $country_name ?>-->
							
						</div>
						<div class="place_first_content_subtitle">
                            <h6>From $235.00</h6>
							
						</div>
						<div class="place_button">
							<a href="#">View All Offers</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 place_first">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_first">
                        <img src="images/singapore-1065091_1280.jpg" class="img-responsive">
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_content">
						<div class="place_first_content_title">
							<h3>Singapore</h3>
						</div>
						<div class="place_first_content_subtitle">
							<h6>From $58.00</h6>
						</div>
						<div class="place_button">
							<a href="#">View All Offers</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 place_second">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_second_content">
						<div class="place_first_content_title">
							<h3>Maldives</h3>
						</div>
						<div class="place_first_content_subtitle">
							<h6>From $187.00</h6>
						</div>
						<div class="place_button">
							<a href="#">View All Offers</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_first">
						<img src="images/Maldives.jpg" class="img-responsive">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 place_second">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_second_content">
						<div class="place_first_content_title">
							<h3>London</h3>
						</div>
						<div class="place_first_content_subtitle">
							<h6>From $223.00</h6>
						</div>
						<div class="place_button">
							<a href="#">View All Offers</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 place_first_first">
						<img src="images/London.jpg" class="img-responsive">
					</div>
				</div>
			</div>
		
		</div><!--deals-->
		<div class="media">
			<div class="container">
				<div class="media_title">
					<h2>WHY My TRIP?</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part media_main">
					
					<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
						<div class="media_first">
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 media_first_left">

								<i class="fa fa-plane" aria-hidden="true"></i>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 media_first_right">
								<h4>Travel with Confidence.</h4>
								<p>Be served by travel agents that know! 24/7 service just a phone-call away.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
						<div class="media_first">
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 media_first_left">

								<i class="fa fa-compass" aria-hidden="true"></i>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 media_first_right">
								<h4>OUR BEST DEALS</h4>
								<p>Prices to worldwide destinations are constantly updated due to our one-of-a-kind enhanced software engine.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
        
	
	
    </div>
</body>
</html>