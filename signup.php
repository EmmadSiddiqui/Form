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
          <input type="tel" name="telNo" placeholder="+921112223334" pattern="[\+]\d{2}\d{10}" maxlength="13" minlength="13" required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="password" onchange="onChange()" required>

          <label for="password"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm your Password" name="conpassword" onchange="onChange()" required>
    
          <button type="submit" name="subbtn">Sign Up</button>
    
          <button type="button" class="cancelbtn"><a href="#">Cancel</a></button>
          <button type="button" class="accexist"><a href="login.php">Already have an account?</a></button>
          
        </div>
      </form>
</body>
</html>

<?php

if(isset($_POST['subbtn']))
{
$un=$_POST['username'];
$em=$_POST['email'];
$tn=$_POST['telNo'];
$pw=$_POST['password'];
$cpw=$_POST['conpassword'];

$check_duplicate_email="SELECT email FROM signup WHERE email = '$em'";
$result = mysqli_query($conn, $check_duplicate_email);
$count = mysqli_num_rows($result);

if($count>0){
    echo '<script>alert("Accout already exist! Login now.")</script>';
    return false;
}

if($un!="" && $un!="" && $un!="" && $un!="" && $un!=""){
    
$query="INSERT INTO SIGNUP VALUES ('$un','$em','$tn','$pw','$cpw')";
$data=mysqli_query($conn,$query);

if($data){
    echo "Data inserted into a database.";
}
}
else{
    echo "Failed to insert into a database.";
}
}
?>
