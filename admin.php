<!DOCTYPE html>
<?php
session_start();
require ("mysqli_connect.php");//connect to mysql
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $tripname = $_POST['tripname'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 $price = $_POST['price'];
	
	$q= "SELECT * FROM mytrips where  tripname ='$tripname'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
	if(empty($tripname) || empty($category)|| empty($description)|| empty($price))
	    {
		echo "<h3>All fields are mandetory</h3>";
		}
	else
		{
//		insert the data to database
    	$q="insert into mytrips(tripname,category,description,price)values('$tripname','$category','$description','$price')";
		echo $q;
//		print msg f successfully done otherwise print failure
		if ($dbc->query($q) === TRUE) 
		{
    		echo "New record created successfully";
		}
		else
		{
				echo "failure";
		}
		} 
	
       }
	
       

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
                                                                                   
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
      
        <th>Country Name</th>
        <th>Trip Name</th>
        <th>Category</th>
		  <th>Image</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
	
        <div class="container">
  <h2>Add Trips</h2>
  <form action="admin.php" method="post">
      
      <div class="form-group">
      <label>Trip</label>
      <input type="text" class="form-control" id="tripname" placeholder="Enter trip" name="tripname">
    </div>
   
    <div class="form-group">
      <label >Category:</label>
      <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
    </div>
	  
	 
	  
	   <div class="form-group">
      <label >Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
    </div>
	  
	    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
    </div>

      

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>
