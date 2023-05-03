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
    <title>ENROLL STUDENTS</title>
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
    <p>Registered students</p>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">student registration number</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope = "">ENROLL</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM students";
    $query = mysqli_query($link,$sql);
    if($query)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            $reg =$row['student_reg_no'];
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            echo '<tr>
            <th scope="row">'.$reg.'</th>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td><div class="form-check">
            <input class="form-check-input" type="checkbox" value='.$reg.' name="enroll[]" id="flexCheckDefault" >
            
          </div></td>
          
          </tr>';
        }
    }
    
    ?>
    
  
  </tbody>

</table>
<p>classes</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">class id</th>
      <th scope="col">name</th>
      
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
</table>
<p> enter class id to enroll all the studentd </p>
<input type="text" name = "classid" class="form-control" placeholder="class id" aria-label="class id" aria-describedby="basic-addon1">         
<button type="submit" class="btn btn-primary" name="submit">Submit</button>        
</form>        
 <?php
 if(isset($_POST['submit']))
 {  $classid = $_POST['classid'];
    $enroll = $_POST['enroll'];
    
    $reg;
    $idd = $_SESSION["id"];
   
    $sql4 = "SELECT * FROM users";
    $query4 = mysqli_query($link, $sql4);
    if ($query4) {
        while ($row = mysqli_fetch_assoc($query4)) {
            if ($row['id'] == $idd) {
                $reg = $row['reg_no'];

            }
        }

    }
  
    if(!empty($enroll))
    {
       $n = count($enroll);
       for($i=0;$i<$n;$i++)
       {     $sql5 = "SELECT *  FROM enrollment where student_reg_no=$enroll[$i] and faculty_reg_no = $reg and class_id = $classid ";
        $query5 = mysqli_query($link,$sql5);
        if(mysqli_num_rows($query5)>0)
        {   die("already exists");
            
        }
        else
        {   $enrollid='';
            $sql2 = "INSERT INTO enrollment(student_reg_no,faculty_reg_no,class_id) VALUES ('$enroll[$i]','$reg','$classid')";
            $query2 = mysqli_query($link,$sql2);
            $s2 ="SELECT *  FROM enrollment where student_reg_no=$enroll[$i] and faculty_reg_no = $reg and class_id = $classid " ;
            $q2 = mysqli_query($link,$s2);
            if($q2)
            {
              while($row = mysqli_fetch_assoc($q2))
              {
                  $enrollid = $row['enrollment_id'];
              }
            }
            $sw4 = "INSERT INTO  marks(enrollment_id,student_reg_no,class_id) VALUES ('$enrollid','$enroll[$i]','$classid')";
            $qw4 = mysqli_query($link,$sw4);
        }
        
       }
    }
 } 

 
 ?>        
          


       
    
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabMatrix</title>

    <link rel="stylesheet" href="facultyenrollstudents.css">
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
   
        



   <div >
    
       <form method="post">
    <p>Registered students</p>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">student registration number</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope = "">ENROLL</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM students";
    $query = mysqli_query($link,$sql);
    if($query)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            $reg =$row['student_reg_no'];
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            echo '<tr>
            <th scope="row">'.$reg.'</th>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td><div class="form-check">
            <input class="form-check-input" type="checkbox" value='.$reg.' name="enroll[]" id="flexCheckDefault" >
            
          </div></td>
          
          </tr>';
        }
    }
    
    ?>
    
  
  </tbody>

</table>
<p>classes</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">class id</th>
      <th scope="col">name</th>
      
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
</table>
<p> enter class id to enroll all the studentd </p>
<input type="text" name = "classid" class="form-control" >         
<button type="submit" class="" name="submit">Submit</button>        
</form>        
 <?php
 if(isset($_POST['submit']))
 {  $classid = $_POST['classid'];
    $enroll = $_POST['enroll'];
    
    $reg;
    $idd = $_SESSION["id"];
   
    $sql4 = "SELECT * FROM users";
    $query4 = mysqli_query($link, $sql4);
    if ($query4) {
        while ($row = mysqli_fetch_assoc($query4)) {
            if ($row['id'] == $idd) {
                $reg = $row['reg_no'];

            }
        }

    }
  
    if(!empty($enroll))
    {
       $n = count($enroll);
       for($i=0;$i<$n;$i++)
       {     $sql5 = "SELECT *  FROM enrollment where student_reg_no=$enroll[$i] and faculty_reg_no = $reg and class_id = $classid ";
        $query5 = mysqli_query($link,$sql5);
        if(mysqli_num_rows($query5)>0)
        {  
            
        }
        else
        {   $enrollid='';
            $sql2 = "INSERT INTO enrollment(student_reg_no,faculty_reg_no,class_id) VALUES ('$enroll[$i]','$reg','$classid')";
            $query2 = mysqli_query($link,$sql2);
            $s2 ="SELECT *  FROM enrollment where student_reg_no=$enroll[$i] and faculty_reg_no = $reg and class_id = $classid " ;
            $q2 = mysqli_query($link,$s2);
            if($q2)
            {
              while($row = mysqli_fetch_assoc($q2))
              {
                  $enrollid = $row['enrollment_id'];
              }
            }
            $sw4 = "INSERT INTO  marks(enrollment_id,student_reg_no,class_id) VALUES ('$enrollid','$enroll[$i]','$classid')";
            $qw4 = mysqli_query($link,$sw4);
        }
        
       }
    }
 } 

 
 ?>        
          


  
</div> 