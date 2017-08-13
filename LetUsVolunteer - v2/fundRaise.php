
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/fund.css">
</head>
</head>
<body>

<?php 
  include_once('header.php');
?>

<div class="container-fluid">
  <h3 style="text-align: center;padding-top: 10px">“The greatest part of our existence enfold in service of humanity.” </h3>
  <div class="row">
    <div class="col-sm-7" style=" padding: 30px 30px 30px 30px">
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
        <img src="images/fund.jpg" alt="Los Angeles" style="width:110%; height:500px;">
      </div>

      <div class="item">
        <img src="images/fund.jpg" alt="Los Angeles" style="width:110%; height:500px;">
      </div>
    
      <div class="item">
        <img src="images/fund.jpg" alt="Los Angeles" style="width:110%; height:500px;">
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
     
    </div>
    <div class="col-sm-5" style="padding-left: 50px;" >
      <h2 style="padding-top: 10px"><b>Lorem ipsum dolor</b></h2>
      <h4>NGO - Drishti</h4>
      <p style="padding-top: 10px;padding-right: 20px;"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</b></p>         
        <div id="btn">
          <br>
          <button id= "btn1" onclick="">Contribute</button>
          <button id= "btn1" onclick="">Share</button>
          <br><br>
          <h2>Rs 1,00,000</h2>
          <p>raised of Rs 3,00,000</p>
          <div class="progress" style="width:80%">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $p.'%'?>">
              <?php echo $p.'%'?>
            </div>
          </div>
          <h3><b>5</b> Supporters</h3>
          <h3><b>10</b> Days to go</h3>
        </div>
    </div>
  </div>
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
