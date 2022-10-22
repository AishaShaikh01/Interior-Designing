<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS</title>
    <link rel="stylesheet" href="../cssfile/details-style.css">
</head>
<body>
    


    <div id="container"> 

    <!-- Header  -->
    <header>
            <div class="logo">
                <ul>
                    <li class="name">HOMIZ<span class="spandot">.</span></li>
                </ul>
           
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"> HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>                    
                    <li><a href="blogs.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="details.php"><span class="text-span">DETAILS</span></a></li>
                    <li class="login-margin"><a href="login.php">LOGIN</a></li>|
                    <li><a href="signup-form.php">SIGNUP</a></li>
                </ul>
    
            </nav>
        </header>
<!-- header complete -->

        <!-- <div id="popup">
            <h1>Login</h1>
            <form class="log" style="background-color:transparent;" method="post" action="">              
                <input type="text" id="em" name="em" required placeholder="Email" />         
           <br>
                <input type="password" id="ps" name="ps" required placeholder="Password"/> 
                <input type="submit" class="submit-btn" style="background-color:pink;   " value="Submit" name="but_submit" id="but_submit" /> 
    </form>
            <p>or</p>
            <button onclick="popclose()">signup</button>
          

        </div> -->



       
        <u> <h1 class="main-h1">Details</h1></u>
        <p>try to give us the details as much as possible</p>
     
<!-- section 1 -->
    <form action="detail-con.php" method="post">
    <input type="email" id="em" name="em" required placeholder="Email" required /><br><br>
        <div class="details">  
            
            <div class="box">
                <label for="">1.	How many rooms, bathrooms, lounge,kitchens do you have? lenght?</label>
                <textarea name="q1" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">2.	What do you like about the current design?</label>
                <textarea name="q2" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">3.	What changes do you prefer?</label>
                <textarea name="q3" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">4.	Your design should be residential or commercial?</label>
                <textarea name="q4" id="" cols="35" rows="8" required></textarea>
            </div>
        </div>
        <div class="details"> 
            <div class="box">
                <label for="">5.	Are there any furnishings, decor items, collections, or sentimental art pieces you absolutely want to keep?</label>
                <textarea name="q5" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">6.	What are your technical needs for any room?</label>
                <textarea name="q6" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">7.	What colours do you like to enhance your style?</label>
                <textarea name="q7" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">8.	Are there any colour combinations you like?</label>
                <textarea name="q8" id="" cols="35" rows="8" required></textarea>
            </div>
        </div>
        <div class="details"> 
            <div class="box">
                <label for="">9.	What design style(s) do you prefer?</label>
                <textarea name="q9" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                 <label for="">10.	What patterns, if any, do you like?</label>
                 <textarea name="q10" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">11.	What words would you use to describe the ideal style of the room?</label>
                <textarea name="q11" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">12.	Describe your rooms in list.</label>
                <textarea name="q12" id="" cols="35" rows="8" required></textarea>
            </div>
        </div>
        <div class="details"> 
            <div class="box">
                <label for="">13.	What are your preferences for flooring?</label>
                <textarea name="q13" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">14.	What is your budget?</label>
                <textarea name="q14" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">15.	What is your preferred time frame for having this project complete?</label>
                <textarea name="q15" id="" cols="35" rows="8" required></textarea>
            </div>
            <div class="box">
                <label for="">16.	Are there any other services you need that I can help you with?</label> 
                <textarea name="q16" id="" cols="35" rows="8" required></textarea>
            </div>
        </div>
        <div class="details">
        <input class="submit-btn" type="submit" value="Submit"> 
        </div>
    </form>
    </div>
</body>
<script type="text/javascript"> 

</script>
</html>
