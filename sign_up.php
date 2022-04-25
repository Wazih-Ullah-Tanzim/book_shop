<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style_1.css">


</head>

<body>
    <div class="back-image">
        <p id="pu"> <img id="logo" height="150px" width="250px" src="logo.png"></p>

        <div class="sign-up-form">
            <img id="pp" src="profile.png">
            <h3>Customer Sign Up Form</h3>
            <form action="sign_up.php" method="post" enctype="multipart/form-data">

                <input id="full_name" name="name" class="input-box" placeholder="Enter Your Username"><br />
                <input id="email" name="email" type="email" class="input-box" placeholder="Enter Your Email"><br />
                <input id="pass" name="pass" type="password" class="input-box" placeholder="Enter Your password"><br />
                <input id="mobile" name="mobile" type="tel" class="input-box" placeholder="Enter Your Mobile No"><br />

                <label for="country">Choose Your location : </label>
                <select id="country" name="loc">
                    <option value="dhaka">DHK</option>
                    <option value="chittagong">CTG</option>
                    <option value="comilla">COM</option>
                    <option value="rajshahi">RAJ</option>
                    <option value="khulna">KHL</option>
                    <option value="rongpur">RONG</option>
                    <option value="mymensingh">MMSH</option>
                </select><br><br>
                <label for="dob">Date of Birth :</label>
                <input type="date" id="dob" name="dob"><br><br>


                <label for="gender">Select Gender : </label><br>
                <input id="male" name="gender" value="male" type="radio"> Male<br>
                &nbsp; <input id="female" name="gender" value="female" type="radio"> Female<br><br>

                <label for="image">Enter Your Image : </label>
                <input type="file" id="image" name="pic"><br><br>



                <p><span><input type="checkbox"></span>I agree to the terms of services</p>
                <button type="submit" value="submit" name="submit" class="signup-btn">Sign up</button>
                <hr>
                <p class="or">OR</p>
                <button type="button" class="twitter-btn"><a href="https://twitter.com/i/flow/login"
                        target="_blank">Login
                        with Twitter</a></button>
                <p>Do you have an account?
                    <button type="button" class="signin-btn"><a href="login.php">Sign In</a></button>
            </form>
        </div>
    </div>


</body>

</html>

<?php
include("connection.php");
if(isset($_POST['submit'])){

    //to receive value from the input feilds

    $name = $_POST['name'];
    $email = $_POST['email'];
    $loc = $_POST['loc'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $pass =$_POST['pass'];
    
    //customer id generate

    $num=rand(10,10000);

    //echo $num;

    $cus_id = "c-".$num;
    
    //image upload code
    
    $ext = explode(".",$_FILES['pic']['name']);
    $c = count ($ext);
    $ext =$ext[$c-1];

    //echo $ext;

    $date = date("D:M:Y");
    $time = date("h:i:s");

    //echo $date.$time.$cus_id;

    $image_name = md5($date.$time.$cus_id);
    $image = $image_name.".".$ext;

    //echo $image;

    $query = "insert into customer values ('$cus_id','$name','$loc','$gender',$mobile,'$dob','$email','$image','$pass')";

    if(mysqli_query($con,$query))
    {
        //echo "Successfully inserted !!!";
        echo '<h3 style="color:#008000 ;text-align:center;">Successfully inserted !!!</h3>';
        if($image !=null){
            move_uploaded_file($_FILES['pic']['tmp_name'],"uploadedimage/$image");
        }
    }
    else{
        echo "error".mysqli_error($con);
    }

}
?>