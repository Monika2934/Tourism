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
  <h2>Add Trips</h2>
  <form action="admin.php" method="post">
      
      
      
      <div class="form-group">
      <label>Trip</label>
      <input type="text" class="form-control" id="tripname" placeholder="Enter trip" name="tripname" required>
    </div>
   
    <div class="form-group">
      <label >Category:</label>
        <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" required>
    </div>
	  
	 
	  
	   <div class="form-group">
      <label >Description:</label>
           <textarea rows="4" cols="50" type="textfield" class="form-control" id="description" placeholder="Enter Description" name="description" required></textarea>
    </div>
      
	  
	    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>
    </div>

      

    <button type="submit" class="btn btn-primary">Add Trip</button>
  </form>
              <table border="2">
          <tr>
              <th>Trip Name</th>
               <th>Category</th>
               <th>Description</th>
               <th>Price</th>
          </tr>
          <?php
                  $q= "SELECT * FROM mytrips ";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
          while ($row=mysqli_fetch_array($r)){
              $tripname=$row['tripname'];
               $category=$row['category'];
               $description=$row['description'];
               $price=$row['price'];
          echo '<tr>';
          echo '<td>'.$tripname.'</td>';
          echo '<td>'.$r['category'].'</td>'; 
          echo '<td>'.$r['description'].'</td>';
          echo '<td>'.$r['price'].'</td>';
          echo '</tr>';
          }
          ?>
      </table>
</div>

</body>
</html>
