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

   
<!-- font imports -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
    
    background-image: url('../../Images/faceq bg.png'); 
     
    
    
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

.loginbox{
    margin-top: 38vh;
    width: 296px;
    height: 280px;
    
    font-family: 'Inter', sans-serif;
    font-size: 1.3rem;
    
    margin-left: 17vh;
    color: white;

}

.boxx1{
    margin-top: 20px;
    width: 854px;
    height: 50px;
    
}

.boxx2{
    margin-top: 20px;
    width: 854px;
    height: 50px;
    
}

label .pass1{
    margin-top: 40px;
}

.email1{
    margin-top: 100px;
}

.but1{
    
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        background-color: #40BDFC;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition-duration: 0.4s;
        
        
        /* margin-left: 110.5vh;
        margin-top: 55vh; */
        
       
        
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
 
</style>

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

    <table >
  <thead>
    <tr>
      <th >class id</th>
      <th >name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
    $sql1 = "SELECT * FROM classes";
    $query1 = mysqli_query($link,$sql1);
    if($query1)
    {
        while($row = mysqli_fetch_assoc($query1))
        {
            $id =$row['class_id'];
            $name = $row['name'];
           
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            
          </tr>';
        }
    }
    
    ?>
    
  
  </tbody>
  


   <!--- ___________________________________________________SECTION PROPERTIES________________________________________________________ -->
   <div class="loginbox">
    <form class="formm" method="post">
        <label class="email1">Class ID</label> <br>
        <input class="boxx1" type="text" placeholder="" style="font-size: 1.5rem;" name = "classid" /> <br><br>
        <label class="pass1">PC number</label> <br>
        <input class="boxx2" type="text"  style="font-size: 1.5rem;" name = "pcno" /> <br><br>
        
        <button type="submit" class="but1" name="submit">Submit</button> 
       <br>
    
       </form><br>
  
  
</div> 
<?php
if(isset($_POST['submit']))
{
  $classid = $_POST['classid'];
  $pcno = $_POST['pcno'];
  $id = $_SESSION['id'];
  $sql = "SELECT * from users";
  $query = mysqli_query($link,$sql);
  $reg;
  if($query)
  { 
    while($row = mysqli_fetch_assoc($query))
  {
      if($row['id'] == $id)
      {
        $reg = $row['reg_no'];
      }
  }
  $sq = "INSERT INTO pc(class_id,student_reg_no,pc_no,pc_timestamp) VALUES($classid,$reg,'$pcno',CURRENT_TIMESTAMP)";
  $que = mysqli_query($link,$sq);
  }
 
 
  
}



?>
</body>
</html>