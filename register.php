
<?php
session_start();
require ("mysqli_connect.php");//connect to mysql


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $username = mysqli_real_escape_string($dbc, $_POST['username']);
 $password = mysqli_real_escape_string($dbc, $_POST['password']);
 $confirmpassword = mysqli_real_escape_string($dbc, $_POST['confirmpassword']);
 $email = mysqli_real_escape_string($dbc, $_POST['email']);
 $address = mysqli_real_escape_string($dbc, $_POST['address']);
// sql query to select users

    echo $username;
$q= "SELECT * FROM userinfo where  username ='$username'";
   
$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));// @ is used to display just errors

//now start the session
$num= mysqli_num_rows($r);
   echo $num;
if($num>1){
    echo "Username already exists";
    $_SESSION['errMsg'] = "Username already exists";
     header("Location:index.php");
}
//    
    else{
        
        $reg= "insert into userinfo (username, password,confirmpassword,email,address,isadmin) values('$username', '$password','$confirmpassword','$email','$address','0')";
        mysqli_query($dbc, $reg);
        echo "Registration Successful";
    }
}





?>
