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
 <label for="eqname">Enter equipment name to be borrowed</label> 
<input type="text" name = "eqname" class="form-control" placeholder="equipment name" aria-label="equipment name" aria-describedby="basic-addon1">
<button type="submit" class="btn btn-primary" name="submit">Submit</button> 
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

    <link rel="stylesheet" href="../../studentborrowequipment.css">
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
   <div class="loginbox">
    <form class="formm" method="post">
        <label class="email1">Equipment name to be borrowed</label> <br>
        <input class="boxx1" type="text" name="eqname" style="font-size: 1.5rem;" /> <br><br>
        
        <button type="submit" class="but1" name="submit">Submit</button> 
    
       </form><br>
       <?php
if(isset($_POST['submit']))
{
    $eqname = $_POST['eqname'];
$id = $_SESSION['id'];
$reg;
$sql = "SELECT * FROM users";
$query = mysqli_query($link,$sql);
if($query)
{
    while($row = mysqli_fetch_assoc($query))
    {
        if($row['id'] == $id)
        {
            $reg = $row['reg_no'];
        }
    }
}
$sq = "INSERT INTO equipment(eq_name,student_reg_no) VALUES('$eqname',$reg)";
$qu = mysqli_query($link,$sq);

}




?> 
  
  
</div> 

</body>
</html>