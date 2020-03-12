<?php
session_start();

if(isset($_SESSION['errMsg'])){
    echo $_SESSION['errMsg'];
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    
       <div class="container">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
        
        <div class="container">
  <h2>Register</h2>
  <form action="register.php" method="post">
      
      <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
   
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

       <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmpassword" placeholder="Enter password" name="confirmpassword">
    </div>
      
       <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
         <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
       
    </body>
</html>