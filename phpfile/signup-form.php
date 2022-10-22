<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="../cssfile/signup-style.css">
</head>
<body>
    <div id="container">
     
<!-- form start-->
    <div id="signup-form">
        <div class="pic-box">
            <video src="../images/pexels-ekaterina-bolovtsova-5385341.mp4"loop autoplay muted></video>
        </div>
        <div class="form-box">
            <a href="index.php"><div class="back"> <img class="backarrow" src="../images/left-arrow.png" alt=""> Back</div></a>

          <u> <h1>Signup</h1></u>
           <div class="inputbox">
            <form action="signup.php" method="post">
                
                <input class="input-data" type="text" name="firstname" required placeholder="Enter First Name...">
                <input type="number" name="age" id="" required placeholder="Age...">
                <label for="">Gender :</label>
                <input type="radio" name="gender" id="" value="Male"><span class="radio">Male</span>
                <input type="radio" name="gender" id="" value="Female"><span class="radio">Female</span>
                <input type="text" class="marginleft" name="address" id="" placeholder="Complete Address...">
                <input type="text" name="occupation" id="" placeholder="Your Job...">
                <label for="">Home Type :</label>
                <input type="radio" name="hometype" id="" value="Own"><span class="radio">Own</span>
                <input type="radio" name="hometype" id="" value="Rent"><span class="radio">Rent</span>
                <input type="tel" name="phno" id="" required placeholder="Phone Number...">
                <input type="email" name="email" id="" required placeholder="Email...">
                <input type="password" name="password" id="" required placeholder="Password...">
                <input class="submit-btn" type="submit" value="Signup">
                <p class="login-p"><br> OR <br>Already have an account <a href="login.php"> log in</a></p>
                <a href="details.php"><div class="view"> Details <img class="viewarrow" src="../images/pink-right-arrow.png" alt=""></div></a>  
            </form>
        
            </div>
            
        </div>
    </div>
<!-- form end -->
    </div>

</body>

</html>
