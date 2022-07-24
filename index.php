<?php
    include "config.php";

    session_start();

    error_reporting(0);

    if(isset($_SESSION['username'])) {
        header("location: home.php");
    }

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["username"] = $row["username"];
            header("location: home.php");
        }
        else {
            echo "<script>alert('Noops! Email or Password is Wrong Or You Should Register.')</script>";
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
    <title>Login Form</title>
</head>
<body>
<h1 style="color: #fff; text-align-center; font-size:50px;">Speed Leader</h1>
   <div class="col-lg-6 col-md-6 col-sm-12 container">
        <div class="login-email" >
            <form action="" method="POST">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>  
                <div class="form-group">
                    <input type="email" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>" required>
                </div>  
                <div class="form-group">
                    <input type="password" placeholder="Enter Your Password" name="password" value="<?php echo $_POST['password']; ?>"  required>
                </div>  
                <div class="form-group">
                    <button name="submit" class="btn">Login</button>
                </div>
                <p class="login-register-text">Don't have a account <a href="register.php">Register Here!!!</a></p>
            </form>
        </div>
   </div>
</body>
</html>