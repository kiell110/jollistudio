<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>JolliStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" type="images/x-icon" href="favicon_io/favicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader"> </div>
	<div class="header">
     <div class="navbar">
         <div class="logo">
		 <br>
             <a href="JolliStudio.php"><img src="images/logo.png"></a>
         </div>
         <div class="menu">
             <ul>
                 <li><a href="JolliStudio.php">Home</a></li>
                 <li><a href="about.html">About</a></li>
                 <li><a href="studio.php">Studio</a></li>
                 <li><a href="https://www.jollibee.com.ph/">Store</a></li>
                 <li><a href="contact.html">Contact</a></li>
             </ul>
         </div>
         <?php
         if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
             // User is logged in
             echo '<div class="login-btn"> <a href="logout.php">Logout</a></div>';
         } else {
             // User is not logged in
             echo '<div class="login-btn"> <a href="log.html">Login</a></div>';
         }
      ?>
   
  </div>   

     <div class="banner">
         <div class="app-text">
             <h3>JolliStudio's</h3>
            <h1>SHARE<br> THE <span id="js-rotating">JOY, LOVE, VIBE </span></h1>
             <p>Lahat tayo ay may joy na naranasan. Sa Jollibee may JOY na di mo malilimutan!</p>
             <div class="btn-group">
                 <div class="signup-btn"><a href="sign.html">Inquire Now</a></div>
                 <a href="https://www.youtube.com/watch?v=D8tOGCZVSx4">
			   <div class="play-btn">
                     <div class="play-btn-inner">
                       <i class="fa fa-play"></i></a>
                     </div>
                     <span>How it works</span>
                 </div>
             </div>
         </div>
         <div class="app-picture">
           <video width="640" height="360" id="myvideo" controls autoplay>
  <source class="active" src="movie.mp4" type="video/mp4">
  <source src="images/Mother’s Day Tribute 2020_ Pasasalamat.mp4" type="video/mp4">
  <source src="I Love You Sabado!.mp4" type="video/mp4">
  <source src="Ang Sarap Ang Saya Maging Pilipino.mp4" type="video/mp4">
        </video>
         </div>
         </div>
     <div class="about-services">
        <br><br>
        <a href="studio.html"><h1>Mother's Day Special</h1></a>
         <ul>
             <li>
                <br><br>
                 <video src="images/MOTHERS.mp4" controls>
                </video>
                 <h1>Kwentong Jollibee Mother's Day 2019: Schoolboy</h1>
                 <marquee><p>This Mother’s Day, let’s give thanks to our Mothers who are always with us through our self-doubts and triumphs.</p></marquee>
                
             </li>
             <li>
                <br><br>
                 <video src="images/videoplayback (5).mp4" controls>
                </video>
                 <h1>Kwentong Jollibee Mother’s Day Special 2022: Hinga (Breathe)</h1>
                  <marquee><p>In times when we are most afraid, there's always someone we can count on to lead us. </p></marquee>
             </li>
             <li>
                <br><br>
                 <video src="images/3.mp4" controls>
                </video>
                 <h1>Kwentong Jollibee Mother’s Day Special: Pangako (Promise)</h1>
                 <marquee> <p>Who taught us to love wholeheartedly? Watch this heartwarming #KwentongJollibee Mother’s Day special. ❤️</p></marquee>
             </li>
         </ul>
     </div>

    </div>
    <footer>
        <div class="footer-content">
            <h3>JolliStudio</h3>
            <p>PRESS PLAY FOR JOY</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/JollibeePhilippines/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/Jollibee"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/jollibee/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/@JollibeeStudios/featured"><i class="fa fa-youtube"></i></a></li>
            </ul>
            NEWSLETTER
            <form>
            <input type="email" placeholder="Your Email Address" required>
            <br>
            <button type="submit"> SUBSCRIBE NOW</button>        
        </form>
        </div>
        
        <div class="footer-bottom">
            <p>copyright &copy;2023 JolliStudio. designed by <span>Kiel Raneses</span></p>
        </div>
    </footer>
</div>
</div>
<script src="javascript/jquery.min.js"></script> 
<script src="javascript/video.js"></script>
<script src="javascript/preloader.js"></script>
<script src="javascript/rotating.js"></script>
</body>
</html>
