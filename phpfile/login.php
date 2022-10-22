 <!-- <?php
include "config.php";


if(isset($_POST['but_submit'])){

    //$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    //$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$email=$_POST['em'];
$pss=$_POST['ps'];

    if ($email != "" && $pss != ""){
	

        $sql_query = "select count(*) as cntInteriordesign from client where email='".$email."' and pass='".$pss."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntInteriordesign'];

        if($count > 0){
            $_SESSION['email'] = $email;
			
            
			echo "<script>alert('login successfully');
			window.location.href='index.php';</script>";
			
			
        }else{
            echo '<script>alert("Email or Password is Wrong")</script>' ;
        }

    }

}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../cssfile/signup-style.css">
    <link rel="stylesheet" href="../cssfile/login.css">
</head>
<body>
<div id="signup-form">
        <div class="form-box">
            <a href="index.php"><div class="back"> <img class="backarrow" src="../images/left-arrow.png" alt=""> Back</div></a>
          <u> <h1>Login</h1></u>
           <div class="inputbox">
<form class="log" style="background-color:transparent;" method="post" action="">              
                <input type="text" id="em" name="em" required placeholder="Email" />         
           <br>
                <input type="password" id="ps" name="ps" required placeholder="Password"/> 
                <input type="submit" class="submit-btn" value="Submit" name="but_submit" id="but_submit" />
                <p class="login-p"> <br> OR <br> <br> <a href="change-password.php">Forget password</a></p>
                <p class="login-p"> <br> Create an account <a href="signup-form.php"> Sign In</a></p>
                <a href="details.php"><div class="details"> Details <img class="viewarrow" src="../images/pink-right-arrow.png" alt=""></div></a>  
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
</html>