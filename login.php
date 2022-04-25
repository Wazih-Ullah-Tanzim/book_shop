<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>Sign In</title>
    <link rel=" stylesheet" href="style_1.css">


</head>

<body>
    <div class="back-image">
        <p id="pu"> <img id="logo" height="150px" width="250px" src="logo.png"></p>
        <div class="sign-in-form">
            <img id="pp" src="profile.png">
            <h3>Customer Sign In Form</h3>

            <!-- action e je page jabo,tar file dite hbe-->

            <form action="login.php" method="post">

                <input id="uid" name="id" type="text" class="input-box" placeholder="Enter Customer ID"><br />
                <input id="pass" name="pass" type="password" class="input-box" placeholder="Enter Your password"><br />


                <!-- login e  main home page er link dite hbe-->
                <button type="submit" value="Signin" name="login" class="login-btn">Log IN</button>
                <hr>

                <p class="or">OR</p>
                <button type="button" class="twitter-btn"><a href="https://twitter.com/i/flow/login"
                        target="_blank">Login
                        with Twitter</a></button>

            </form>
        </div>
    </div>

</body>

</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    
    $sql="select userid,password from admin where userid='$id' and password='$pass' ";
    $sql1="select cus_id,password from customer where cus_id='$id' and password='$pass' ";
            $r=mysqli_query($con,$sql);
            $r1=mysqli_query($con,$sql1);
            
            if(mysqli_num_rows($r)>0)
            {
                $_SESSION['user_id']=$id;
                $_SESSION['admin_login_status']="loged in";
                header("Location:admin/home.php");
            }
            else if(mysqli_num_rows($r1)>0)
            {
                $_SESSION['user_id']=$id;
                $_SESSION['customer_login_status']="loged in";
                header("Location:customer/home.php");
            }
            else{
                echo "<p style='color:red;'>Incorrect UserId or Password</p> ";
            }
}




?>