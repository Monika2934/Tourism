<!--
<?php
require ("mysqli_connect.php");

	$tripname='';
	$category='';
$description='';
$price='';
$tripname = $_POST['tripname'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 $price = $_POST['price'];
$image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));
$q= "UPDATE  mytrips set  tripid =$tripid,tripname=$tripname,image=$image,$category=$category,$descrition=$description";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));


if($r){
	echo"Record Update to  table";
	header('location:admin.php');
}
else{
	echo "Failed";
}

?>-->
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


        <div class="container">
  <h2>Add Trips</h2>
  <form action="admin.php" method="post" enctype="multipart/form-data">
      
      
      
      <div class="form-group">
      <label>Trip Name</label>
      <input type="text" class="form-control" id="tripname" placeholder="Enter trip" name="tripname" value="<?php echo $tripname; ?>">
    </div>
	   <div class="form-group">
      
      <input type="file"  class="form-control" id="image"  name="image" required>
		
		     
		   
    </div>
   
    <div class="form-group">
      <label >Category:</label>
        <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" value="<?php echo $category; ?>">
    </div>
	  
	 
	  
	   <div class="form-group">
      <label >Description:</label>
           <textarea rows="4" cols="50" type="textfield" class="form-control" id="description" placeholder="Enter Description" name="description" value="<?php echo $description; ?>"></textarea>
    </div>
      
	  
	    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $description; ?>" >
    </div>

      

    <button type="submit" class="btn btn-primary">Add Trip</button>
  </form>
 
</div>
