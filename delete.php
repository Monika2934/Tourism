<?php
require ("mysqli_connect.php");

	
$tripid= $_GET['tripid'];
$q= "DELETE FROM mytrips where  tripid ='$tripid'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));


if($r){
			echo ' <div class="alert alert-success container" style="width:500px;" role="alert">Record Deleted From table</div>';
	header('location:admin.php');
}
else{
	 echo ' <div class="alert alert-danger container" style="width:500px;" role="alert">Failure</div>';
}

?>