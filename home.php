<?php

session_start();
include("form.php");
if($_SESSION["status"]!=true){
    header('location: login.php');
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
    <h1>Welcome!</h1><hr>
    <button class="logoutbtn" name="logout" onclick="location.href='index.php'">LogOut</button>
    </div>
</body>
</html>

<?php

if(isset($_POST['logout'])){
    header('location: logout.php');
}

?>
