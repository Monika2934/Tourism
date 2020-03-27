<!DOCTYPE html>
<?php
session_start();
require ("mysqli_connect.php");//connect to mysql
$tripid=0;
$update=false;
$tripname='';
$category='';
$description='';
$price='';


if(!empty($_GET['tripid'])){
	$update=true;
	$q= 'SELECT * FROM mytrips where  tripid ="'.$_GET['tripid'].'"';
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	 while ($row=mysqli_fetch_array($r)){
			 
              $tripname=$row['tripname'];
			  $image=$row['image'];
               $category=$row['category'];
               $description=$row['description'];
               $price=$row['price'];
}
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
    
    //create two variables
 $tripname = $_POST['tripname'];
	

 $category = $_POST['category'];
 $description = $_POST['description'];
 $price = $_POST['price'];
	 $image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));

       $target_file="uploads/".basename($_FILES['image']['name']);
	
	
	
	
	$q= "SELECT * FROM mytrips where  tripname ='$tripname'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
	
	if((isset($_FILES['image'])) ||!empty($tripname) || !empty($category)|| !empty($description)|| !empty($price))
	    
		{
		 if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) 		 
    {
			 if($update==true)
		{
			$tripid= $_GET['tripid'];

$tripname = $_POST['tripname'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 $price = $_POST['price'];
$image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));
$q= "UPDATE  mytrips set tripname='$tripname',image='$image',category='$category',description='$description' where tripid=$tripid";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
echo $q;


	header('location:admin.php');
		}
		else{
//		insert the data to database
    	$q="insert into mytrips(tripname,image,category,description,price)values('$tripname','$image','$category','$description','$price')";
	
			 
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
		}
		
		
	else
	{
		
		echo ' <div class="alert alert-primary container" style="width:500px;" role="alert"><h3>All fields are mandetory</h3></div>';
	}
	
			
	

       }
	
       

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
	    <style>
div {
  
  margin-right: 300px;
  margin-left: 250px;
    opacity: 0.9;
    

}
        h2
        {
            text-align: center;
            font-style: normal;
            background-color: #2980B9;
            border-radius: 10px;
            margin-left: 150px;
            margin-right: 200px;
            color:white;
            font-size:50px;
            
            
        }
    </style>
<body>
	<div class="collapse navbar-collapse" id="myNavbar">
							      	<ul class="nav navbar-nav">
                                        <li class="active" ><a href="index.php">Home</a></li>
							        	
							        	<li class="active" ><a href="Gallery.html">Collection</a></li>
                                        <li class="active"><a href="aboutus.html">About Us</a></li>
							        	<li class="active"><a href="contact.php">Contact Us</a></li>
                                        <li class="active"><a href="login.php">Login/Register</a></li>
							      	</ul>
		    					</div>

        <div class="container">
	<div class="addtrip">
  <h2>Add Trips</h2>
  <form  method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="tripid" value="<?php echo $tripid; ?>">
     
      <label>Trip Name</label>
      <input type="text" class="form-control" id="tripname" placeholder="Enter trip" name="tripname" value="<?php echo $tripname; ?>">
  
       <label>Add Image</label>
      <input type="file"  class="form-control" id="image" value="<?php echo $image; ?>" name="image" required>
	
      <label >Category:</label>
        <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" value="<?php echo $category; ?>" >

      <label >Description:</label>
           <textarea rows="4" cols="50" type="textfield" class="form-control" id="description" placeholder="Enter Description" name="description"><?php echo $description; ?></textarea>
	
      <label >Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $price; ?>" >
  <br>
	   <?php
	   if($update == true):
	   ?>
	  <center> <button type="submit" class="btn btn-primary" name="update">Update Trip</button></center>
	   <?php else: ?>
	   <center> <button type="submit" name="add" class="btn btn-primary">Add Trip</button></center>
	   <?php endif;?>
  </form>
			</div>
            <table class="table table-bordered">
    <thead>
      <tr class="bg-primary">
        <th>Trip Name</th>
        <th>Image</th>
        <th>Category</th>
        <th>Description</th>
        <th>price</th>
        <th>Action</th>
      </tr>
    </thead>
    
  
          <?php
                  $q= "SELECT * FROM mytrips ";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
          while ($row=mysqli_fetch_array($r)){
			  
              $tripname=$row['tripname'];
			  $image=$row['image'];
               $category=$row['category'];
               $description=$row['description'];
               $price=$row['price'];
			
          echo '<tr>';
          echo '<td>'.$tripname.'</td>';
			       echo '<td>';
			  		
				   echo '<img src="uploads/'.$image.'" height="200" width="200">';
				   echo '</td>';
          echo '<td>'.$category.'</td>'; 
          echo '<td>'.$description.'</td>';
          echo '<td>'.$price.'</td>';
        echo '<td>'; 
			 echo '<a href="admin.php?tripid='.$row['tripid'].'" class="btn btn-primary">Edit</a>';
			echo '&nbsp';
			 echo '<a href="delete.php?tripid='.$row['tripid'].'" class="btn btn-danger">Delete</a>';
				  echo'</td>';
          echo '</tr>';
          }
          ?>
      </table>
</div>

</body>
	<script>  
//	funtion to get data
 function getmessage() {
     if (window.XMLHttpRequest) {
         // code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp=new XMLHttpRequest();
       } else {  // code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
       }
       xmlhttp.onreadystatechange=function() {
         if (this.readyState==4 && this.status==200) {
           document.getElementById("display").innerHTML=this.responseText;
         }
       }
       xmlhttp.open("GET","admin.php",true);
       xmlhttp.send();
 }
//function to post the data
  function postdata() {
      var formData = new FormData();
      formData.append("tripname", document.getElementById("tripname").value);
      formData.append("category", document.getElementById("category").value);
	   formData.append("description", document.getElementById("description").value);
	   formData.append("image", document.getElementById("image").value);
	   formData.append("price", document.getElementById("price").value);
	  
	  
      var request = new XMLHttpRequest();
      request.open("POST", "admin.php");
      request.send(formData);
  }
  getmessage();
  setInterval(function(){
      getmessage();
  },1000);
 </script>
</html>
