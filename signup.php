<?php
include("form.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <link rel="stylesheet" href="signup.css">
    <script src="passValidation.js"></script>
</head>
<body>
    <form action="" method="POST">
        <div class="container">

            <h1><b>Sign Up</b></h1><hr>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter your Username" pattern="[a-zA-Z0-9]*" name="username" required>
    
          <label for="email"><b>E-mail</b></label>
          <input type="email" placeholder="Enter your e-mail" name="email" required>

          <label for="telNo"><b>Phone Number</b></label>
          <input type="tel" name="telephone" placeholder="+921112223334" pattern="[\+]\d{2}\d{10}" maxlength="13" minlength="13" required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="password" onchange="onChange()" required>

          <label for="password"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm your Password" name="conpassword" onchange="onChange()" required>
    
          <button type="submit" name="subbtn">Sign Up</button>
    
          <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button>
          <button type="button" class="accexist" onclick="location.href='login.php'">Already have an account?</button>
          
        </div>
      </form>
</body>
</html>

<?php

   

if(isset($_POST['subbtn']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];

$pass = password_hash($password,PASSWORD_BCRYPT);
$conpass = password_hash($conpassword,PASSWORD_BCRYPT); 
 
$check_duplicate_email="SELECT email FROM signup WHERE email = '$email'";
$result = mysqli_query($conn, $check_duplicate_email);
$count = mysqli_num_rows($result);

if($count>0){
    echo '<script>alert("Accout already exist! Login now.")</script>';
    return false;
}
    
$query="INSERT INTO `signup`(`username`, `email`, `telno`, `password`, `confirmpassword`) VALUES ('$username','$email','$telephone','$pass','$conpass')";
$data=mysqli_query($conn,$query);

if($data){
    echo '<script>alert("SignUp Successful.")</script>';
}

else{
    echo '<script>alert("UnSuccessful.")</script>';
}
}


?>
