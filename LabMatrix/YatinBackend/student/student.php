<?php
// Initialize the session
session_start();
  
// Include config file
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

<link rel="stylesheet" href="studenthomepage.css">
<style>
  /* given to all attributes */
*{
    margin: 0px;
    padding: 0px;
}
/* html tag properties */
html{
    scroll-behavior: smoooth;
}
/* root properties */
/* :root{
    --navbar-height: 80px;
} */

body { 
    
    background-image: url('bg.png'); 
     
    
    
    height: 100vh;
    /* width: 100vh; */

    background-size: cover; 
    background-position: center center;
    
}

/* ___________________________________________________NAVBAR PROPERTIES__________________________________________________________________ */



#navbar{
    display: flex;
    
    /* align-items: center; */
    position: sticky; /* to make it remain at the top of the website */
    /* top: 0px; */
    justify-content: space-between; 
    
}



#logo{
    margin-top: 14px ;
    margin-left: 146.58px ;
    
}

#logo img{
    height: 45.01px;
    margin: 3px 6px;
}

#navbar form{
    margin-top: 30px;
    display: flex;
    justify-content: flex-end;
    list-style: none;
    font-size: 1.3rem;
    margin-right: 146.58px;
    font-family: 'Inter', sans-serif;
    
    
}

#navbar form li a{
    color: white;
    padding: 15px 32px;
    border-radius: none;
    text-decoration: none;
}

#navbar form li a:hover{
     

     background-color: #AC80FF; /* Green */
    color: rgb(255, 255, 255);
}



/* ___________________________________________________SECTION PROPERTIES__________________________________________________________________ */

.signinbox{
    margin-top: 60vh;
    width: 100vh;
    height: 280px;
    
    font-family: 'Inter', sans-serif;
    font-size: 1.3rem;
    
    margin-left: 28vh;
    

}





.but1{
    
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        background-color: #40BDFC;
        border: none;
        color: black;
        padding: 15px 59px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition-duration: 0.4s;
        

}
    

        
      
      
.but1:hover {
        background-color: black; /* Green */
        color: rgb(255, 255, 255);
}

.linkk{
    color: #40BDFC;
    text-decoration: none;
    font-weight: bolder;
}
 

.but2{
    
    font-family: 'Inter', sans-serif;
    font-size: 1.3rem;
    background-color: transparent;
    
    border: 2px solid #40BDFC;
    color: white;
    padding: 15px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition-duration: 0.4s;
    margin-left: 18px;
    
    
    
    /* margin-left: 110.5vh;
    margin-top: 55vh; */
    
   
    
}


    
  
  
.but2:hover {
    background-color: rgb(255, 255, 255); /* Green */
    color: rgb(0, 0, 0);
}

.linkk{
    color: #40BDFC;
    text-decoration: none;
    font-weight: bolder;
    
}

.link{
    
    width: 70vh;
    color: white;
    
}
</style>
<!-- font imports -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


</head>
<body>

     <!--- ___________________________________________________NAVBAR PROPERTIES________________________________________________________ -->

     <nav id="navbar">
        <!-- Logo -->
        <div id="logo">
            <img src="logo.png" alt="LabMatrix" >
        </div>
        <!-- Navbar -->
        <form>
            <li class="item">
                <a href="student.php"><u>Home</u></a>
            </li>
            <li class="item">
                <a href="profile.php">Register your profile</a>
            </li>

            <li class="item">
                <a href="attendance.php">Attendance</a>
            </li>

            <li class="item">
                <a href="equipment.php">Borrow Equipments</a>
            </li>
            
        </form>
    </nav>



   <!--- ___________________________________________________SECTION PROPERTIES________________________________________________________ -->

   <div class="signinbox">
    
        <div class="buttot">
        
        <input class="but1" type="button" value="Logout" onclick="location.href='../logout.php';">
         </div>
       </form><br>
  
  
</div> 

