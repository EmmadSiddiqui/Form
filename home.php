<?php
session_start();
if(!isset($_SESSION['username'])){
  echo 'logged out';
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logout.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
    <h1>Welcome <?php echo $_SESSION['username']  ?> !</h1><hr>
    <a href="logout.php"><button class="logoutbtn" name="logout">LogOut</button></a>
    </div>
</body>
</html>
