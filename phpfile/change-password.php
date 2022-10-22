<?php
include "config.php";


if(isset($_POST['but_submit'])){

    //$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    //$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$email=$_POST['em'];
$pss=$_POST['ps'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"interiordesign");
$sql = "UPDATE client SET pass='$pss' WHERE email='$email'";

if (mysqli_query($con, $sql)) {

     $_SESSION['email'] = $email;
     echo '<script>alert("password is changed")</script>' ;
            header('Location: login.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfile/signup-style.css">
    <title>Document</title>
    
</head>
<body>





    <div id="signup-form">
        <div class="form-box">
            <a href="index.php"><div class="back"> <img class="backarrow" src="../images/left-arrow.png" alt=""> Back</div></a>
          <u> <h1>Login</h1></u>
           <div class="inputbox">
        <form method="post" action="">              
            <input type="text" class="textbox" id="em" name="em" placeholder="Email" />  
            
            <input type="password" class="textbox" id="ps" name="ps" placeholder=" New Password"/>
            <input type="password" class="textbox" id="rps" name="rps" placeholder=" Recheck Password" />    
            <input class="submit-btn" type="submit" onclick="checkpass()" value="Submit" name="but_submit" id="but_submit" />
                
    </form>
    
        </div>
     
        </div>
        <div class="pic-box">
            <video src="../images/pexels-ekaterina-bolovtsova-5385341.mp4"loop autoplay muted></video>
        </div>
    </div>
    
<!-- form end -->

    </div>
</body>
<script src="../jsfile/change-password.js"></script>
</html>