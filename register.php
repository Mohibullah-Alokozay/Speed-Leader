<?php
    include "config.php";

    session_start();
    
    error_reporting(0);

    if(isset($_SESSION['username'])) {
        header("location: home.php");
    }
    if(isset($_POST['submit'])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $cpassword = md5($_POST["cpassword"]);
        if($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($con, $sql);
            if(!$result->num_rows > 0) {
                $sql = "INSERT INTO `users` (username, email, password) 
                VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($con, $sql);
                if($result) {
                    // $row = mysqli_fetch_assoc($result);
                    // $_SESSION["username"] = $row["username"];
                    header("location: home.php");
                    echo "<script>alert('Wow! User Registration Complated')</script>";
                    // $username = "";
                    // $email = "";
                    // $_POST["password"] = "";
                    // $_POST["cpassword"] = "";
                
                }
                else {
                     echo "<script>alert('Noops! Something Wrong Went.')</script>";
                }
            }
            else {
                echo "<script>alert('Noops! Email Already Exists.')</script>";
            }
        }
        else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    } 
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/AFG1.jpg">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Registration Form</title>
</head>
<body>
   <div class="col-lg-6 col-md-6 col-sm-12 container">
        <div class="login-email" >
            <form action="" method="post">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">register</p>  
                <div class="form-group">
                    <input type="text" placeholder="Enter Your Username" name="username" value="<?php echo $username; ?>" required>
                </div>  
                <div class="form-group">
                    <input type="email" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>" required>
                </div>  
                <div class="form-group">
                    <input type="password" placeholder="Enter Your Password" name="password" value="<?php echo $_POST["password"]; ?>" required>
                </div>  
                <div class="form-group">
                    <input type="password" placeholder="Enter Your Re-password" name="cpassword" value="<?php echo $_POST["cpassword"]; ?>" required>
                </div>  
                <div class="form-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="login-register-text">Have an Account<a href="index.php"> Login Here!!!</a></p>
            </form>
        </div>
   </div>
</body>
</html>