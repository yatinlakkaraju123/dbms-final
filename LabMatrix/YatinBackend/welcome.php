<?php
// Initialize the session
session_start();
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabMatrix</title>

<link rel="stylesheet" href="../style.css">
<!-- font imports -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


</head>
<body>

     <!--- ___________________________________________________NAVBAR PROPERTIES________________________________________________________ -->

    <nav id="navbar">
        <!-- Logo -->
        <div id="logo">
            <img src="../Images/logo.png" alt="LabMatrix" >
        </div>
        <!-- Navbar -->
        <form>
            <li class="item">
                <a href="login.php">Login/Signup</a>
            </li>
            
        </form>
    </nav>


    <!--- ___________________________________________________HOME PROPERTIES__________________________________________________________________ -->

   <!-- <button onclick="href='loginpage.html';"  class="loginsignup">Login/Signup</button> -->

   <form action="">
    <button class="loginsignup" href='login.php'>Login/Signup</button>
 </form>
 <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</body>
</html>
