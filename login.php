
<?php
require ("mysqli_connect.php");//connect to mysql
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $username = mysqli_real_escape_string($dbc, $_POST['username']);
 $password = mysqli_real_escape_string($dbc, $_POST['password']);
// sql query to select users

$q= "SELECT * FROM userinfo    where  username ='$username' and password= '$password'";
   
$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));// @ is used to display just errors

$num =mysqli_num_rows($r);

//
 if ($num== 1) {
     $row = mysqli_fetch_row($r);
     $_SESSION["login"]=true;
    if($row[6]==1)
    {
        header("Location:admin.php");
    }
     else
     {
     header("Location:home.php");
     }
  } 
else 
{
    $_SESSION["login"]=false;//set session login to false
    $_SESSION['errMsg'] = "Invalid Login";
    
     header("Location:index.php");
     
  }

}
?>

