<?php
    require('connect.php');
    //$id = $_SESSION['userid'];     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/ngoprofile.css">
</head>
</head>
<body>

<?php 
  include_once('header.php');
?>


<div class="container">
  <h2>Ngo Name</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/Lighthouse.jpg" alt="Los Angeles" style="width:100%; height:300px">
      </div>

      <div class="item">
        <img src="images/Lighthouse.jpg" alt="Chicago" style="width:100%; height:300px">
      </div>
    
      <div class="item">
        <img src="images/Lighthouse.jpg" alt="New york" style="width:100%; height:300px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </section>
  <section id="content">
    <div id="mainget">
      <div id="btncont">
        <p ><a id= "button" type= "button" href="#">Create Event</a></p>
        <p ><a id= "button" type= "button" href="#">Create NGO Store</a></p>
        <p ><a id="button" type= "button" href="#">Raise Fund</a></p>
      </div>
    </div>
  </section>

</div>
<footer id="foot">
        <div id="flogo">
          <a href="home.php"><img src="img/logo2.png" height="15%" width="15%"></a>
        </div>
        <div id="fdetail">
          <div id="fitem">
              <h3>SERVICES</h3>
              <p><a href="#contact.php">For Volunteers</a></p>
              <p><a href="#track.php">For Ngos</a></p>
              <p><a href="#acces.php">For Corporate</a></p>
          </div>
          <div id="fitem">
              <h3>COMPANY</h3>
              <p><a href="aboutus.php">About Us</a></p>
              <p><a href="">Careers</a></p>
              <p><a href="">Terms and Conditions</a></p>
              <p><a href="">Privacy Policy</a></p>
              <p><a href="">Blog</a></p>
          </div>
          <div id="fitem">
              <h3>CONNECT WITH US</h3>
              <a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i> 2.3 M People Like This</a><br>
              <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i> 120K Followers</a><br>
              <div id ="faline">
                <a href="https://www.twitter.com"><i  class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.googleplus.com"><i  class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="https://www.pinterest.com"><i  class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.apple.com"><i  class="fa fa-apple" aria-hidden="true"></i></a>
                <a href="https://www.android.com"><i  class="fa fa-android" aria-hidden="true"></i></a>
              </div>
          </div>
          <div id="fitem">
              <h3>KEEP UP TO DATE</h3>
              <form> <input id="email" type="email" placeholder="Enter Email Id"> <input id="submit" type="submit" value="SUBSCRIBE"> </form>
          </div>
        </div>
    </footer>

</body>
</html>
