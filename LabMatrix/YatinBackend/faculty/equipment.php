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
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lab management system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="..\welcome.php">Home</a>
        </li>
        
        </ul>
      </div>
  </div>
</nav>


<form method="post">
<input type="text" name = "eqid" class="form-control" placeholder="equipment id" aria-label="equipment id" aria-describedby="basic-addon1">
<button type="submit" class="btn btn-primary" name="submit">click to enter borrow time in the database</button> 
<button type="submit" class="btn btn-primary" name="submit1">click to enter returned time in the database</button> 

</form>
         
         
         
          


       
    
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabMatrix</title>

<link rel="stylesheet" href="../../facultyequipments.css">
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
                <a href="faculty.php"><u>Home</u></a>
            </li>

            <li class="item">
                <a href="enrollment.php">Enroll Students</a>
            </li>

            <li class="item">
                <a href="attendance.php">Attendance</a>
            </li>

            <li class="item">
                <a href="equipment.php">Equipments</a>
            </li>

            <li class="item">
                <a href="marks.php">Marks</a>
            </li>
            <li class="item">
                <a href="profile.php">Register your profile</a>
            </li>
            
        </form>
    </nav>



   <!--- ___________________________________________________SECTION PROPERTIES________________________________________________________ -->
  


   <div class="loginbox">
    
       <table class="table">
  <thead>
    <tr>
      <th scope="col">equipment id</th>
      <th scope="col">equipment name</th>
      <th scope="col">student registration number</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql1 = "SELECT * FROM equipment";
    $query1 = mysqli_query($link,$sql1);
    if($query1)
    {
        while($row = mysqli_fetch_assoc($query1))
        {
            $id =$row['eq_id'];
            $name = $row['eq_name'];
            $reg = $row['student_reg_no'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$reg.'</td>
            
            
          </tr>';
        }
    }
    
    ?>
    
  
  </tbody>
</table>
<form class="formm" method="post">
        <label class="email1">Equipment ID</label> <br>
        <input class="boxx1" type="text" placeholder="" style="font-size: 1.5rem;" name="eqid" /> <br><br>
        <div class="twobut">
        <button type="submit" class="but1" name="submit">borrow time</button><br>
        <button type="submit" class="but2" name="submit1">return time</button>
       <br> </div>
    
       </form><br>
       <?php 
 if(isset($_POST['submit']))
 {
    $eqid = mysqli_real_escape_string($link, $_POST['eqid']);

    $sl2 = "UPDATE  equipment SET borrowed_time = CURRENT_TIMESTAMP WHERE eq_id = $eqid";
    $qry = mysqli_query($link,$sl2);
    if($qry)
    {
        echo "successfully entered";
    }
    else
    {
        die(mysqli_error($link));
    }
 }
 if(isset($_POST['submit1']))
 {
    $eqid = $_POST['eqid'];
    $sql2 = "UPDATE  equipment SET returned_time = CURRENT_TIMESTAMP WHERE eq_id = $eqid";
    $qry1 = mysqli_query($link,$sql2);
 }
 
 ?>
</div> 
