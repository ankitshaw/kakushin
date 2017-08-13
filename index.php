<?php 
	session_start();
?>

<html>
<head>

	<title>
		Let Us Volunteer
	</title>

	<script src="https://use.fontawesome.com/7bcf909bab.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		html,body {
			margin:0;
			padding:0;
			
		}
		
		#ul2{
			display:flex;
			padding-left: 0;
			padding-right: 80px;
			float: right;
			overflow: hidden;
			!max-width: 330px;
		}
		#mlist{
			display:flex;
			float: center;
			padding-top: 12;
			padding-left: 10px;
		}
		
		#logolist{
			padding-left:12%;
			padding-right:0%;
		}
		#nav{
			position: fixed;
			width: 100%;
			top: 0;
			background-color: #231f20;
			z-index: 999;
		}
		#searchinput{
			font-family: verdana;
			font-size: 12px;
			background-color: #231f20;
			border-bottom: 2px solid #1F9CBB;
			border-top: 2px solid #1F9CBB;
			border-left: 2px solid #1F9CBB;
			border-right: 2px solid #1F9CBB;
			height: 30px;
			width: 400px;
			padding-top: 0;
			padding-bottom:0;
			!padding-right: px;
			margin 0 20px 0 0;
			color: #1F9CBB;
		}
		#content{
			!margin: 67px 0 0 0;
		}
		#main1{
			background-image: url('img/banner.png');
			!background-repeat: no-repeat;
			!background-size: cover;
			!height: 140%;
			
		}
		#main1 img{
			padding-top:140px;
			padding-left: 50%;
			padding-bottom: 30px;
			!padding-right: 20%;
		}
		
		#main2{
			background-image: url('img/main2.jpg');
		}
		#main2str{
			
			padding-top: 18px;
			color: white;
			font-family: Tahoma;
			font-size: 4vw;
			font-size: 18px;
		}
		#main2pic{
			
			!padding-left:20%;
			padding-top: 10px;
			!padding-bottom: 15px;
			!display: flex;
			
		}
		#main2end{	
			padding-bottom: 20px;
			!color: white;
			font-family: Tahoma;
			font-size: 15px;
		}
		#main3{
			background-color: #eaeaea;	
		}
		#main3head{
			
			padding-top: 20px;
			color: #696969;
			font-family: Tahoma;
			font-size: 30px;
		}
		#main3mid{
			padding-bottom:15px;
			text-align: center;
			
		}
		#main3pic{
			
			font-family: Tahoma;
			margin: 4%;
			display: inline-block;
			max-width: 30%;
			position:relative;
			float: center;
			
		}
		#mainget{
			background-image: url('img/Free-2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			!padding-top: 10px;
			!padding-bottom:10px;
			background-color: white;
			text-decoration: none;
			!display: flex;
			text-align: center;
		}
		#mainget p{
			font-family: Tahoma;
			font-size: 30px;
			text-align: center;
			text-decoration: none;
			padding-top: 110px;
			padding-bottom:110px;
			!padding-left: 100px;
			!margin: 50px;
			width:50%;
		}
		#mainget a{
			color: white;
			padding: 14px 12px;
			background-color:grey; 
			border-radius: 6px;
			text-align: center;
			text-decoration: none;
		}
		#mainget a:hover{
			background-color: #161616;
		}
		#!main4{	
			background-color: #eaeaea;
			height:50%;
			margin:0;
			padding:0;
			display:flex; 
		}
		#!main4cont{
			padding-top:15px;
		}
		#btncont{
			display: flex;
			!text-align: center;
			padding-left:20%;
			padding-right:20%
			
		}
		#button{
			!padding-top: 20px;
			display: inline-block;
			!margin: 20px;
			!width:30%
			!padding-right: 90px;
			text-align: center;
			!position: absolute;
			
		}
		
		
		#foot{
			background-color: #231f20;
			padding-left:100px;
			padding-top:70px;
			padding-bottom:79px;
			!height: 58%
		}
		#flogo{
			padding-top: 0px;
		}
		#fdetail{
			display: flex;
			!padding-left: 80px;
			!padding-right:80px;
			
		}
		#fitem{
			padding-top: 20px;
			display: inline;
			margin: 5px;
			padding-right: 105px;
		}
		#fitem h3{
			font-family: verdana;
			font-size: 13px;
			color: #1F9CBB;
		}
		#fitem a{
			font-family: verdana;
			font-size: 12px;
			color: white
		}
		#fitem p{
			margin: 2px;
		}
		#fitem i{
			font-size: 15px;
			color: #1F9CBB;
			padding-bottom:10px;
			padding-right: 5px;
		}
		#faline i{
			!font-size: 15px;
			!color: #1F9CBB;
			!padding-bottom:10px;
			padding-right: 20px;
		}
		#email{
			font-family: verdana;
			font-size: 15px;
			background-color: #231f20;
			border-bottom: 2px solid #1F9CBB;
			border-top: none;
			border-left: none;
			border-right: none;
			height: 30px;
			width: 150px;
			color: #1F9CBB;
		}
		#submit{
			font-family: verdana;
			font-size: 13px;
			background-color:#1F9CBB;
			border-bottom: none;
			border-top: none;
			border-left: none;
			border-right: none;
			height: 30px;
			width: 120px;
			color: #0A0A0A;
		}
		#fdetail2{
			display: flex;
			!padding-left: 80px;
			!padding-right:80px;
			
		}
		#fitem2{
			padding-top: 20px;
			display: inline;
			margin: 5px;
			padding-right: 90px;
		}
		#fitem2 h3{
			font-family: verdana;
			font-size: 13px;
			color: #1F9CBB;
		}
		#fitem2 p{
			font-family: verdana;
			font-size: 12px;
			color: white;
			!margin: 2px;
		}
		
	</style>
</head>

<body height="100%" width="100%">
	<section>
		<header>
			<?php 
  include_once('header.php');
?>
		</header>
	</section>
	<section id="content">
		<div id="main2">
        <div id="main2pic">
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
        <img src="images/banner.png" alt="Los Angeles" style="width:100%; height:50%">
      </div>

      <div class="item">
        <img src="images/banner3.jpg" alt="Chicago" style="width:100%; height:50%">
      </div>
    
      <div class="item">
        <img src="images/banner2.png" alt="New york" style="width:100%; height:50%">
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
          <img id = "hiw" src="images/1.png" >
          <h4>Choose Opportunities that interest you.</h4>
        </div>
        <div id="main3pic">
          <img id = "hiw" src="images/2.png" >
          <h4>We will connect you to relevant NGOs.</h4>
        </div>
        <div id="main3pic">
          <img id = "hiw" src="images/3.png" >
          <h4>Go Make the world a better place.</h4>
        </div>
      </div>  
    </div>
		<div id="mainget">
			<div id="btncont">
				<p ><a id="button" type= "button" href="listing.php">NGO Search</a></p>
				<p ><a id= "button" type= "button" href="signup.php"> &nbsp &nbsp Register &nbsp &nbsp </a></p>
			</div>
		</div>
		
		<footer id="foot">
        <div id="flogo">
          
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
	</section>
	
</body>