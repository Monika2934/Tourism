
<?php
  session_start();

  if (isset($_SESSION['login']) && $_SESSION['login'] == true) 
  {
    echo "Welcome to your account!";
  } 
    else 
  {
   //echo "Login failed";
   //redirect to index page
    header("Location:index.html");
  }


?>