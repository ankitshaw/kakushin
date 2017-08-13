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

  <link rel="stylesheet" href="css/volunteer.css">
</head>
</head>
<body>

<?php 
  include_once('header.php');
?>

</section>
  <section id="content">
    <div id="main2">
        <div id="main2pic">
          <img id = "cart" src="images/Lighthouse.jpg" style="width:100%; height:300px">
        </div>
        <div id="main2end">
          <h2 align="center">Let Us Volunteer. Contribute to the society. Donate. Buy</h2>
        </div>
    </div>
    <div id="main3">
      <div id="main3head">
        <h2 align="center"> How It Works? </h2>
      </div>
      <div id ="main3mid">
        <div id="main3pic">
          <!-- <img id = "hiw" src="img/step1.jpg" > -->
          <p>1. Register at the Website.</p>
          <p>Profile Score Generated once you generated that help both ngo and you get a better match.</p>
        </div>
        <div id="main3pic">
          <!-- <img id = "hiw" src="img/step2.png" > -->
          <p>2. Use filter to Search for Openings.</p>
          <p>Search for ngo of you interest. Or Get notified if an ngo has an opening that we feel you might be interest in.</p>
        </div>
        <div id="main3pic">
          <!-- <img id = "hiw" src="img/step3.png" > -->
          <p>3. Confirm the offer.</p>
          <p>Once you find job of you interest confirm it,Or if we notified you for an event. </p>
        </div>
      </div>  
    </div>
    <div id="mainget">
      <div id="btncont">
        <p ><a id="button" type= "button" href="">SUBSCRIBE</a></p>
        <p ><a id= "button" type= "button" href="hteepg1.php">Search</a></p>
      </div>
    </div>
  </section>    

<footer id="foot">
        <div id="flogo">
          <a href="home.php"><img src="#" height="15%" width="15%"></a>
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
