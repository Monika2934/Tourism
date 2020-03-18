<?php
require ("mysqli_connect.php");

	
$tripid= $_GET['tripid'];
$q= "DELETE FROM mytrips where  tripid ='$tripid'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));


if($r){
	echo"Record Deleted from table";
	header('location:admin.php');
}
else{
	echo "Failed";
}

?>