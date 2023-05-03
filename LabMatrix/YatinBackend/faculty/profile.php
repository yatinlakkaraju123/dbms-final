<?php
// Initialize the session
session_start();

// Include config file
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;

}
?>
<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Faculty profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lab management system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    <div>
        <p>Enter the following details to register yourself as faculty</p>
    </div>
    <form method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
        </div>


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

<link rel="stylesheet" href="../../facultyregistrationpage.css">
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

   <div class="signinbox">
    <form class="formm"  method="post">
        <label class="username1">Name</label> <br>
        <input class="boxx1" type="text" placeholder="" style="font-size: 1.5rem;"name="name"/> <br><br>
        <label class="registration1">Email</label> <br>
        <input class="boxx2" type="text" password="" style="font-size: 1.5rem;" name="email" /> <br><br>
        <label class="registration1">Phone number</label> <br>
        <input class="boxx2" type="text" password="" style="font-size: 1.5rem;" name="phone" /> <br><br>
  
          
       
        
        
        <div class="buttot">
        <button type="submit" class="but1" name="submit">Submit</button>
       
        
       </form><br><br>
  
       
  </p>
</div> 

<?php
    if (isset($_POST["submit"])) {
        $id = $_SESSION["id"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $err = '';
        $reg;
        $isexists = 0;
        $sql = "SELECT * FROM users";
        $query = mysqli_query($link, $sql);
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['id'] == $id) {
                    $reg = $row['reg_no'];

                }
            }

        }
        
        // checking whether the student with the same registration no exists
        $sql2 = "SELECT * FROM faculty";
        $query2 = mysqli_query($link, $sql);
        if($query2)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                if($row['student_reg_no'] == $reg)
                {
                    $isexists = 1;
                    break;
                }
            }
        }
        
        if($isexists==0)
        {
           $sql1 = "INSERT INTO faculty VALUES ('$reg','$name','$phone','$email')";
           $query1 = mysqli_query($link, $sql1);
        }
        else
        {
            echo "you have already entered your data";
        }

    }





    ?>




    
</body>
</html>