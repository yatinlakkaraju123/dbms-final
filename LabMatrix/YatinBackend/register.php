<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password =$reg_no=$role= "";
$username_err = $password_err = $confirm_password_err =$reg_no_err=$role_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
   // validate reg no
    
   if(empty(trim($_POST["reg_no"]))){
    $reg_no_err = "Please enter a registration no.";
}
else if(!filter_var(trim($_POST["reg_no"]), FILTER_VALIDATE_INT))
{
    $reg_no_err = "Please enter valid registration number";
}
else
{
    $reg_no = trim($_POST["reg_no"]);
}
    // role
    
    
    
        if(isset($_POST['role']))
        {
            $role = $_POST['role'];
        }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,role,reg_no) VALUES (?, ?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password,$param_role,$param_reg);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_role = $role;
            $param_reg = $reg_no;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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

<link rel="stylesheet" href="../signuppage.css">
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

   <div class="signinbox">
    <form class="formm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label class="username1" for="username">Username</label> <br>
        <input class="boxx1 <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" type="text" placeholder="" style="font-size: 1.5rem;" id="fname" name="username"  value="<?php echo $username; ?>" /> <br>
        <span class="invalid-feedback"><?php echo $username_err; ?></span><br>
        <label class="registration1">Registration number</label> <br>
        <input  type="text"name="reg_no" class="boxx2 <?php echo (!empty($reg_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $reg_no; ?>" password="" style="font-size: 1.5rem;" /> <br><br>

    
        <label for="cars">Designation</label>
        <select class="select1" name="role" id="role">
        <option value="student">Student</option>
  <option value="faculty">Faculty</option>
          
        </select>
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
        <br><br>
        <label class="pass1">Password</label> <br>
        <input class="boxx2 <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" type="password" password="" style="font-size: 1.5rem;" value="<?php echo $password; ?>" /> <br>
        <span class="invalid-feedback"><?php echo $password_err; ?></span><br>
        <label class="pass1">Confirm password</label> <br>
        <input class="boxx2 <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" name="confirm_password" value="<?php echo $confirm_password; ?>" type="password" password="" style="font-size: 1.5rem;" /> <br><br>
        <div class="buttot">
        <input class="but1 " type="submit" value="Submit">
        <input class="but2" type="reset" value="Reset" > </div>
       </form><br>
  
  <p class="para2"> have an account? <a class="linkk" href="login.php">Log in</a>
  </p>
</div> 