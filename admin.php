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
<!--		table to display product details-->
		<table width="70%" border="2px">
         <thead>
            <tr>
               <th>Product Images</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Buy</th>
             </tr>
        </thead>
		<tbody>
			<?php
//			connecto to database
           require ("mysqli_connect.php");
//			get data from database
			$q="select * from product";
//			store query to result variable
          	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
//			start loop to fetch rows
			while($row = mysqli_fetch_array($r))
			{
       			echo "<form action='products.php?id=".$row['id']."&product_name=".$row['product_name']."&image=".$row['image']."&price=".$row['price']."&quantity=".$row['quantity']."' method='post' enctype='multipart/form-data'>";
				echo "<tr>";
//				get image, product name, price, quantity 
				echo "<td>";?><img src="images/<?php echo $row["image"]; ?>" height="200" width="200"><?php echo "</td>";
				echo "<td>"; echo $row["product_name"]; echo "</td>";
				echo "<td>"; echo $row["price"]; echo "</td>";
				echo "<td>"; echo $row["quantity"] ; echo "</td>";
				echo "<td> <input type ='submit' value='Buy Now'>";echo "</td>";
				echo "</tr>";
				echo "</form>";
    		}
			?>
			</tbody>
		</table>
  </div>
</div>
	
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

      

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

</body>
</html>
