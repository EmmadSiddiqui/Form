<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="" method="POST">
        <div class="container">

            <h1><b>Login</b></h1><hr>
    
          <label for="email"><b>E-mail</b></label>
          <input type="email" placeholder="Enter your e-mail" name="email" required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="password" required>

    
          <button type="submit" name="subbtn">Login</button>
    
          <button type="button" class="cancelbtn"><a href="#">Cancel</a></button>
          <button type="button" class="accexist"><a href="login.html">Forgot Password?</a></button>
          
        </div>
      </form>
</body>
</html>

<?php

session_start();
include("form.php");
error_reporting(0);

if(isset($_POST['subbtn']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$_SESSION["status"]=false;
    
$check_signup_email="SELECT * FROM signup WHERE email = '$email' && password='$password'";
$result = mysqli_query($conn, $check_signup_email);
$count = mysqli_num_rows($result);

if($count == 1){
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION["status"]=true;
    header('location: home.php');
    exit();
}
else{
    echo '<script>alert("Invalid email or password.")</script>';
}
}

?>