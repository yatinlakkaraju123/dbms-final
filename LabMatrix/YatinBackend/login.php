<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $sq = "SELECT * FROM users" ;
                            $a;// student or faculty
                            $q = mysqli_query($link,$sq);
                            if($q)
                            {
                                while($row = mysqli_fetch_assoc($q))
                                {
                                    if($row['id'] == $id)
                                    {
                                        $a = $row['role'];
                                    }
                                }
                            }
                            if($a=='student')
                            {   //echo 'student';
                                header("location: student/student.php");
                            }
                            else if($a=='faculty')
                            {   //echo 'faculty';
                                header("location: faculty/faculty.php");
                            }
                            // Redirect user to welcome page
                            //header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabMatrix</title>

<link rel="stylesheet" href="../loginpage.css">
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



   <!--- ___________________________________________________SECTION PROPERTIES________________________________________________________ -->
  <div class="loginbox">
    <form class="formm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <label class="email1" for="1">Username <br>
        <input class="boxx1 <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" type="text" placeholder="" style="font-size: 1.5rem;" name="username" value="<?php echo $username; ?>" /> <br>
        <span class="invalid-feedback"><?php echo $username_err; ?></span><br></label>
        <label class="pass1" for="2">Password</label> <br>
        <input class="boxx2 <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" type="password" password="" style="font-size: 1.5rem;" id="2"/> <br>
        <span class="invalid-feedback"><?php echo $password_err; ?></span><br>
        <input class="but1" type="submit" value="Login"  ><br>
    
       </form><br>
  
  <p class="para2">Don't have an account? </p><a class="linkk" href="./register.php">Sign up</a>
  
</div> 
   

</body>
</html>