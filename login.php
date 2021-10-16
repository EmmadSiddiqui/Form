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
    
          <button type="button" class="cancelbtn" onclick="location.href='signup.php'">Cancel</button>
          <button type="button" class="accexist" onclick="location.href='#'">Forgot Password?</button>
          
        </div>
      </form>
</body>
</html>

<?php


include("form.php");

if(isset($_POST['subbtn']))
{
$email=$_POST['email'];
$password=$_POST['password'];

    
$check_signup_email="SELECT * FROM signup WHERE email = '$email'";
$result = mysqli_query($conn, $check_signup_email);
$count = mysqli_num_rows($result);

if($count == 1){
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['password'];
    $_SESSION['username'] = $email_pass['username'];
    $pass_decode = password_verify($password,$db_pass);

    if($pass_decode){
        echo '<script>alert("Login Successful.")</script>';
        header('location: home.php');
    }else{
        echo '<script>alert("Incorrect password.")</script>';
    }

  /*  $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    exit(); */
}
else{
    echo '<script>alert("Invalid email.")</script>';
}
}



?>
