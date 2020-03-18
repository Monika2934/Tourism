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
	 $image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));

       $target_file="uploads/".basename($_FILES['image']['name']);
	
	
	
	
	$q= "SELECT * FROM mytrips where  tripname ='$tripname'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
	
	if((isset($_FILES['image'])) ||!empty($tripname) || !empty($category)|| !empty($description)|| !empty($price))
	    
		{
			
			 if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) 
    {
//		insert the data to database
    	$q="insert into mytrips(tripname,image,category,description,price)values('$tripname','$image','$category','$description','$price')";
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
		
		
	else
	{
		echo "<h3>All fields are mandetory</h3>";
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
  <h2>Add Trips</h2>
  <form action="admin.php" method="post" enctype="multipart/form-data">
      
      
      
      <div class="form-group">
      <label>Trip Name</label>
      <input type="text" class="form-control" id="tripname" placeholder="Enter trip" name="tripname" >
    </div>
	   <div class="form-group">
      
      <input type="file"  class="form-control" id="image"  name="image" required>
		
		     
		   
    </div>
   
    <div class="form-group">
      <label >Category:</label>
        <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" >
    </div>
	  
	 
	  
	   <div class="form-group">
      <label >Description:</label>
           <textarea rows="4" cols="50" type="textfield" class="form-control" id="description" placeholder="Enter Description" name="description" ></textarea>
    </div>
      
	  
	    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" >
    </div>

      

    <button type="submit" class="btn btn-primary">Add Trip</button>
  </form>
              <table border="2">
          <tr>
              <th>Trip Name</th>
			  <th>Image</th>
               <th>Category</th>
               <th>Description</th>
               <th>Price</th>
			  <th>Action</th>
          </tr>
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
			  			.$image.
							echo '<img src="uploads/'.$image.'" height="200" width="200">';
				   echo '</td>';
          echo '<td>'.$category.'</td>'; 
          echo '<td>'.$description.'</td>';
          echo '<td>'.$price.'</td>';
        //  echo '<td>'; echo'<a href="admin.php?edit=$row ">' echo<'/td'>;
			  echo '<td>';
			 echo '<a href="process.php?delete='.$row['tripid'].'" class="btn btn-danger">Delete</a>';
				  echo'</td>';
          echo '</tr>';
          }
          ?>
      </table>
</div>

</body>
</html>
