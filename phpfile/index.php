<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfile/style.css">
    <title>HOMIZ Interior</title>
  
</head>
<body>
        <div id="container">
<!-- navbar logo header -->
            <header>
                <div class="logo">
                    <ul>
                        <li class="name">HOMIZ<span class="spandot">.</span></li>
                    </ul>
                   
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php"> <span class="text-span">HOME</span> </a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="blogs.php">BLOG</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="details.php">DETAILS</a></li>
                        <li class="login-margin"><a href="login.php">LOGIN</a></li>|
                        <li><a href="signup-form.php">SIGNUP</a></li>
                    </ul>
            
                </nav>
            </header>
<!-- header end -->
<!-- first screen section 1 -->
            <div id="first-top">
                <div class="slogan"><p class="slogan-p">GET YOUR<br>OWN STYLE<br></p>
                <a href="contact.php"><button class="slogan-btn">Contact Us</button></a>
                </div>
            </div>
<!-- sectio 1 complete -->

<!-- second screen section 2 -->
            <div id="portfolio">
                <div class="main-box"><video src="../images//Video Resizer — Resize Video Online — Clideo.mp4" loop autoplay muted></video></div>
                <div class="small-box">
                    <div class="sb">
                        <a href="gallery.php"><div class="box1">|| Bedroom</div></a>
                        <a href="gallery.php"><div class="box2">|| Bathroom</div></a>
                    </div>
                    <div class="sb">
                        <a href="gallery.php"><div class="box3">|| Kitchen</div></a>
                        <a href="gallery.php"><div class="box4">|| Lounge</div></a>
                    </div>
                     <a href="gallery.php"><button class="portfolio-btn"> View all</button></a>
                </div>
                
            </div>
<!-- section 2 complete -->
<!-- third screen section 3 -->
            <div id="slide-cards">
               
                <div class="card card-imag1" onmouseover="disteam()" onmouseleave="disnoteam()">
                    <div class="card1-text" id="team">
                        <h3 class="card-h3">Detail Discussion With Our Team</h3>
                        <p>You can choose your own team and can talk to them about your whole project and how you want your house to done. Make sure the members working on your project are as you want and they work as your instruction. We are Interior Designers and we can understand what you really want. </p>
                        <a href="about-expand.php"><button class="card-btn"> See Team</button></a>
                    </div>
                </div>
                <div class="card card-imag2" onmouseover="discolor()" onmouseleave="disnocolor()">
                    <div class="card1-text" id="color">
                        <h3 class="card-h3">Detail Discussion With Our Team</h3>
                        <p>You can choose your own team and can talk to them about your whole project and how you want your house to done. Make sure the members working on your project are as you want and they work as your instruction. We are Interior Designers and we can understand what you really want. </p>
                        <a href="about-expand.php"><button class="card-btn"> See Team</button></a>
                    </div>
                </div>
                <div class="card card-imag3" onmouseover="dissample()" onmouseleave="disnosample()">
                    <div class="card1-text" id="sample">
                        <h3 class="card-h3">Detail Discussion With Our Team</h3>
                        <p>You can choose your own team and can talk to them about your whole project and how you want your house to done. Make sure the members working on your project are as you want and they work as your instruction. We are Interior Designers and we can understand what you really want. </p>
                        <a href="about-expand.php"><button class="card-btn"> See Team</button></a>
                    </div>
                </div>
                <div class="card card-imag4" onmouseover="disdetail()" onmouseleave="disnodetail()">
                    <div class="card1-text" id="detail">
                        <h3 class="card-h3">Detail Discussion With Our Team</h3>
                        <p>You can choose your own team and can talk to them about your whole project and how you want your house to done. Make sure the members working on your project are as you want and they work as your instruction. We are Interior Designers and we can understand what you really want. </p>
                        <a href="about-expand.php"><button class="card-btn"> See Team</button></a>
                    </div>
                </div>
                
               
            </div>
<!-- section 3 complete -->
<!-- fourth screen section 4 -->
            <h2 class="ourwork-h">Our Work</h2>
            <div id="ourwork">
                <div class="ourwork-box">
                    <div class="parabox">
                        <h3 class="parabox-h">THEMES</h3>
                        <p class="parabox-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum, officiis dolorem amet id recusandae accusamus iste ducimus accusantium numquam error facere quis ipsam temporibus neque veniam totam. Dolor, atque.</p>
                    </div>
                    <a href="blogs.php"><div class="round"></div></a>
                </div>
                <div class="ourwork-box">
                <a href="blogs.php"><div class="round"></div></a>
                    <div class="parabox">
                        <h3 class="parabox-h">THEMES</h3>
                        <p class="parabox-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum, officiis dolorem amet id recusandae accusamus iste ducimus accusantium numquam error facere quis ipsam temporibus neque veniam totam. Dolor, atque.</p>
                    </div>
                </div>
            </div>
<!-- section 4 complete -->
<!-- fifth screen section 5 -->
            <div id="progress">
                <div class="progress-wowslider">
                
                </div>
                <div class="progress-text">
                    <h2 class="progress-h2">Our Progress</h2>
                   <div class="input-range">
                    <label for="" class="progress-lbl">Renovation</label>
                    <input type="range" name="" id="" value="85" readonly><span class="span-white">85%</span>
                    <label for="" class="progress-lbl">Architechture</label>
                    <input type="range" name="" id="" value="60" readonly><span class="span-white">60%</span>
                    <label for="" class="progress-lbl">Interior</label>
                    <input type="range" name="" id="" value="90" readonly><span class="span-white">90%</span>
                   </div>
                 <p><b>Interior Designing </b>is an art of maintaning the motion an structure of the house. We have worked on sevral architactures and the color theme of every several house can be maintained by our hard working team.
                We mainly focus on the interior designing of the house and priortise it.   </p>
                </div>
            </div>
<!-- section 5 complete -->
<!-- sixth screen section 6 -->
            <div id="packages">
                <h2 class="package-h2">Our Packages</h2>
                
                <div class="package-card">
                    <div class="packs">

                        <h3 class="pack-h3 bg-h31">Bronze</h3>
                        <p class="pack-price">RS. 50000/-</p>
                        <p class="pack-p">Flat wall Color <br>Cabinates designs <br>Doors Cover<br>Ceiling Designing <br></p>
                        <button class="pack-btn bg-h31">Subscribe</button>
                    </div>
                    <div class="packs">
                        <h3 class="pack-h3 bg-h32">Silver</h3>
                        <p class="pack-price">RS. 50000/-</p>
                        <p class="pack-p">Flat wall Color <br>Cabinates designs <br>Doors Cover<br>Ceiling Designing <br></p>
                        <button class="pack-btn bg-h32">Subscribe</button>
                        

                    </div>
                    <div class="packs"> 
                        <h3 class="pack-h3 bg-h33">Gold</h3>
                        <p class="pack-price">RS. 50000/-</p>
                        <p class="pack-p">Flat wall Color <br>Cabinates designs <br>Doors Cover<br>Ceiling Designing <br></p>
                        <a href=""><button class="pack-btn bg-h33">Subscribe</button></a>
                    </div>
                </div>
            </div>
<!-- section 6 complete -->
<!-- seventh screen section 7 -->
            <div id="feedback">
                <div class="portion1">
                    <h3>Feedback</h3><br>
                    <textarea name="" id="" cols="50" rows="15" placeholder="What you think about our designs..."></textarea>
                    <a href=""><button class="fb-btn">SUBMIT</button></a>
                </div>
                <div class="portion2">
                <h3> Newsletter</h3><br>
                    <p>Stay update with our latest</p><br><br>
                <div class="enter-email"> <input type="email" placeholder="ENTER EMAIL">
                    <span><div class="imgdiv"><img src="../images/right-arrow.png" width="18px" height="18px" alt=""></div></span></div>
                    <br>
                    <p>Ensuring...</p>
                </div>
                <div class="portion3">
                    <h3>Follow Us</h3><br>
                    <p>Let us be social</p><br>
                    <img src="../images/twitter.png" width="16px" class=".rs " alt="">  
                    <img width="16px" src="../images/facebook-logo.png" class="rs" alt="">
                    
                    <img src="../images/instagram.png" width="16px" class=".rs" alt="">
                </div>
            </div>
<!-- section 7 complete -->
        </div>
</body>
<script src="../jsfile/web.js"></script>

</html>