<?php
    require('connect.php');
    //$id = $_SESSION['userid'];
    $id = 1;
    $queryuser = "SELECT * FROM `volunteers` WHERE id='$id'" ;
    $resultuser = mysqli_query($connection, $queryuser) or die(mysqli_error($connection));
    $rowuser = mysqli_fetch_array($resultuser,MYSQL_ASSOC);      
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

  <link rel="stylesheet" href="css/volunteerprofile.css">
</head>
</head>
<body>

<?php 
  include_once('header.php');
?>
  
<div class="container">
  <div class="row">
    <div class="col_sm_4">
      <img  class="img-circle img-responsive" src="images/dp.jpg" alt="Cinque Terre" width="250" height="250">
    </div>
    <div class="col_sm_8">
      <h1><?php echo $rowuser['name'] ?></h1>
      <h3>Profile Score- <?php echo $rowuser['profile_score'] ?></h3>
    </div>
  </div>
  <div id = "profileActivity">
   
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
