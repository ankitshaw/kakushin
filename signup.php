<?php

// If user is logged in
//if($user_ok){
	//header("location: message.php?msg=NO to that weenis");
    //exit();
//}
?>
<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

// Ajax calls
if(isset($_POST["emailcheck"])){
	include_once("php_includes/db_conx.php");
	$email = mysqli_real_escape_string($connection, $_POST['emailcheck']);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		 echo"Invalid email format";
		 exit();
	 }

	$sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
  $query = mysqli_query($connection, $sql);
  $email_check = mysqli_num_rows($query);

  if ($email_check < 1) {
	    echo '<strong style="color:#009900;">' . $email . ' is OK</strong>';
	    exit();
    }
	else {
	    echo '<strong style="color:#F00;">' . $email . ' is already registered</strong>';
	    exit();
    }
}
?>
<?php
// REGISTRATION
if(isset($_POST["e"])){
	// CONNECT TO THE DATABASE
	include_once("php_includes/db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES

	$e = mysqli_real_escape_string($connection, $_POST['e']);
	$p = $_POST['p'];
	$g = preg_replace('/[^a-z]/', '', $_POST['g']);
	$n = preg_replace('/[^a-z ]/i', '', $_POST['n']);
	$i = $_POST['i'];
	$ch = preg_replace('/[^0-1]/', '', $_POST['ch']);
	$b = $_POST['b'];
	$g_year = preg_replace('/[^0-4]/', '', $_POST['g_year']);

	if($_POST['ref_by'] !="")
	  $ref_by = $_POST['ref_by'];
	else
	  $ref_by = 0;

		// Function to get the client IP address
	function get_client_ip() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
				 $ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
					$ipaddress = getenv('REMOTE_ADDR');
			else
					$ipaddress = 'UNKNOWN';
			return $ipaddress;
	}
		// gets the user IP Address
	$user_ip = get_client_ip();
  $ip = preg_replace('/[^0-9.]/', '', $user_ip);

	// -------------------------------------------
	$sql = "SELECT id FROM users WHERE email='$e' LIMIT 1";
  $query = mysqli_query($connection, $sql);
	$e_check = mysqli_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($e == "" || $p == "" || $g == "" || $n == ""){
		echo "The form submission is missing values.";
        exit();
	}else if($g_year == "" || $i == "" || $ch == "" || $b == "" ){
    echo "The form submission is missing values.";
        exit();
  }else if (!filter_var($e, FILTER_VALIDATE_EMAIL)){
		echo "Invalid email format";
		 exit();
	 }
	 else if ($e_check > 0){
        echo "That email address is already taken";
        exit();
	}  else {





		$p_hash=md5($p);
		// Add user info into the database table for the main site table
		$sql = "INSERT INTO users ( email, password, gender, name, ip, referred_by, signup, lastlogin, notescheck)
		        VALUES('$e','$p_hash','$g','$n','$ip','$ref_by','$date','$date','$date')";
		$query = mysqli_query($connection, $sql);

		$uid = mysqli_insert_id($connection);
		// Establish their row in the useroptions table
		$sql = "INSERT INTO useroptions (id, email, background) VALUES ('$uid','$e','original')";
		$query = mysqli_query($connection, $sql);

		$sql = "INSERT INTO `personaldata`(`userid`,`branch`, `institute_id`, `choice`) VALUES ('$uid','$b','$i','$ch')";
		$query = mysqli_query($connection, $sql);

		$sql = "INSERT INTO `user_purchases`(`user_id`,`date`) VALUES ('$uid', '$date')";
		$query = mysqli_query($connection, $sql);


		// Create directory(folder) to hold each user's files(pics, MP3s, etc.)
		if (!file_exists("user/$uid")) {
			mkdir("user/$uid", 0777);
			fopen("user/$uid/info.txt", "w");
		}

		// Email the user their activation link
		$name = $n;
		$to = "$e";
		$from = "support@aduera.com";
		$subject = 'Aduera.com Account Activation';
		include_once("mail.php");

		echo "signup_success";
		exit();
	}
	exit();
}
?>









<!DOCTYPE html >
<html lang="en">



    <script>

    </script>



    <!-- Sign up logic-->
		<script src="js/signup.js"></script>
    <script src="js/func.js"></script>
    <script src="js/ajax.js"></script>
    <script>
    function restrict(elem){
    	var tf = _(elem);
    	var rx = new RegExp;
    	if(elem == "email"){
    		rx = /[' "]/gi;
    	}
    	else if(elem == "name"){
    		rx = /[^a-z ]/gi;
    	}
    	tf.value = tf.value.replace(rx, "");
    }
    function emptyElement(x){
    	_(x).innerHTML = "";
    }
    function checkemail(){
    	var e = _("email").value;
    	if(e != ""){
    		_("emailstatus").innerHTML = 'checking ...';
    		var ajax = ajaxObj("POST", "signup.php");
            ajax.onreadystatechange = function() {
    	        if(ajaxReturn(ajax) == true) {
    	            _("emailstatus").innerHTML = ajax.responseText;
    	        }
            }
            ajax.send("emailcheck="+e);
    	}
    }
    function signup(){

			var ref_by = _("referred_by").value;
    	var e = _("email").value;
    	var p1 = _("pass1").value;
    	var p2 = _("pass2").value;
    	var n = _("name").value;
    	var g = _("gender").value;
			var i = _("institute_name").value;
			var ch = _("choice").value;
			var b = _("branch").value;
			var g_year = _("g_year").value;




    	var status_sign = _("status_sign");
    	if( e == "" || p1 == "" || p2 == "" || n == "" || g == "" || ch == "" || i== "" || b== "" || g_year== ""){
    		status_sign.innerHTML = "Fill out all of the form data";
    	} else if(p1 != p2){
    		status_sign.innerHTML = "Your password fields do not match";
    	} else if(g_year > 4 || g_year < 1){
    		status_sign.innerHTML = "Current year of course is not valid";

    	}
			else if( _("terms").style.display == "none"){
				$(document).ready(function() {
				if($("#terms").is(':checked')){}
				else{status_sign.innerHTML = "Please check the Aduera Terms of use";}
			});
    	} else {
    		_("signupbtn").style.display = "none";
    		status_sign.innerHTML = 'please wait ...';
    		var ajax = ajaxObj("POST", "signup.php");
            ajax.onreadystatechange = function() {
    	        if(ajaxReturn(ajax) == true) {
    	            if(ajax.responseText.trim() != "signup_success"){
    							status_sign.innerHTML = ajax.responseText;
									_("signupbtn").style.display = "block";
    							}
									else {
    								window.scrollTo(0,0);
    								_("signupform").innerHTML = '<div style="padding:20px;"><b>Congratulations '+n+',</b> check your email inbox and junk mail box at <u>'+e+'</u> in \na moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.</div>';
    							}
    	        }
            }
            ajax.send("e="+e+"&p="+p1+"&n="+n+"&g="+g+ "&ch=" + ch + "&i=" + i + "&b=" + b + "&g_year=" + g_year + "&ref_by=" + ref_by);
    	}
    }

    /* function addEvents(){
    	_("elemID").addEventListener("click", func, false);
    }
    window.onload = addEvents; */
    </script>



    <div class="row" id="signupform">
        <div class='col-sm-12 '>
            <div class="suhead">
                  <div class="row">


											<div class="col-sm-10 col-sm-offset-1">

                          <div class="progress ">
                              <div class="supb" data-number-of-steps="3" style="width:16%" role="progressbar"></div>
                          </div>
													<div  >
                          <div class="col-sm-4 small-glyph sg1 suactive">
                              <div class="testsu"><span class="fa fa-user"></span></div>
                              <p>Personal Info</p>
                          </div>
                          <div class="col-sm-4 small-glyph sg2 ">
                              <div class="testsu"><span class="fa fa-desktop"></span> </div>
                              <p> Security Info</p>
                          </div>
                          <div class="col-sm-4  small-glyph sg3">
                              <div class="testsu"><span class="fa fa-user"></span> </div>
                              <p>Academic Info</p>
                          </div>
												</div>
                      </div>
                  </div>
                  <form id="su" method="get" >
                      <div class="tab-content">
                          <div id="su1" class="tab-pane fade in active">
                              <div class="row">
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <h4>Tell Us About Yourself</h4>
                                      <div class="suform">
                                          <div class="form-group sufg">
																							<input id="name" type="text" onfocus="emptyElement('status_sign')" onkeyup="restrict('name')" placeholder="Full Name" class="form-control" maxlength="60" required>
																					</div>
                                          <div class="form-group sufg">
                                              <input id="email" type="email" onblur="checkemail()" onfocus="emptyElement('status_sign')" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="restrict('email')" maxlength="60" placeholder="Email Address" class="form-control">
																							<span id="emailstatus"></span>

																				 </div>
																				 <div class="form-group sufg">
																						<input id="referred_by" type="number" onfocus="emptyElement('status_sign')" onkeyup="restrict('name')" placeholder="Referred By (optional)" class="form-control" required>
																				</div>

                                          <div class="form-group sufg">
                                              <label />Gender:
                                              <select id="gender" onfocus="emptyElement('status_sign')" class="form-control" >

                                                  <option value="m">Male</option>
                                                  <option value="f">Female</option>
                                              </select>
                                          </div>
																					<a data-toggle="collapse" data-target="#demo">If you have an email id provided by your institute <br>(eg: yourname@ves.ac.in, yourname@somaiya.edu, etc) <br>then please use that for signup</a>

																					<div id="demo" class="collapse">
																						because this helps us to verify that you belong to that Institute.<br>
																						If you don't have such then don't worry, you just need to pass a small Institute verification step.
																					</div>
                                          <button data-toggle="tab" href="#" type="submit" class="btn btn-danger sub sunext1">Next</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="su2" class="tab-pane fade in">
                              <div class="row">
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <h3>Security</h3>
                                      <div class="suform">
																				<div class="form-group sufg">
																						<input id="pass1" type="password" onfocus="emptyElement('status_sign')" maxlength="16" placeholder="Password" class="form-control"> </div>
																				<div class="form-group sufg">
																						<input id="pass2" type="password" onfocus="emptyElement('status_sign')" maxlength="16" placeholder="Confirm Password" class="form-control"> </div>

																				<div class="form-group sufg">
																						<label >Only want deals within your Insititute:</label>
																						<select id="choice" onfocus="emptyElement('status')"  class="form-control">
																								<option value="0">Yes, only from institute</option>
																								<option value="1">No</option>
																						</select>
																				</div>
																							<div class="form-group sufg">
																								<div class="checkbox">
  																								<label><input id="terms" type="checkbox" checked value="">I accept the Aduera Terms of Use.</label>
																						  	</div>
																							</div>
																							<br />
																							<br />
                                          <button data-toggle="tab" href="#" type="button" class="btn btn-danger sub sunext2">Next</button>
                                          <button data-toggle="tab" href="#su1" type="button" class="btn btn-default sub suprev2">Previous</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="su3" class="tab-pane fade in">
                              <div class="row">
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <h3>Some more details</h3>
                                      <div class="suform">

                                          <div class="form-group sufg">
																						<label >Institute name :</label>
																						<select id="institute_name" onfocus="emptyElement('status')" class="form-control" >
																							<?php include("college_list.php"); ?>
																						</select>
																					</div>

                                          <div class="form-group sufg">

																						<select  id="branch" name="branch" class="form-control" ><?php include("branch.php");?></select>
																					</div>
																					<div class="form-group sufg">
                                            <input id="g_year" type="number" placeholder="Graduation Year: 1 | 2 | 3 | 4" class="form-control" max="4" min="1">
																					</div>
																					<span id="status_sign"></span>
																					<br />
									                        <button data-toggle="tab" id="signupbtn" onclick="signup()"  class="btn btn-danger sub sunext3">Submit</button>
									                        <button data-toggle="tab" href="#su2" type="button" class="btn btn-default sub suprev3">Previous</button>
                                        </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                  </form>
            </div>
        </div>
    </div>
