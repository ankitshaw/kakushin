<?php
//include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
//if($user_ok == true){
	//header("location: user.php?u=".$_SESSION["username"]);
  //  exit();
//}
?>
<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_POST["e"])){
	// CONNECT TO THE DATABASE
	include_once("php_includes/db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$e = mysqli_real_escape_string($connection, $_POST['e']);
	$p = md5($_POST['p']);
	// GET USER IP ADDRESS
  $ip = preg_replace('/[^0-9.]/', '', getenv('REMOTE_ADDR'));
	// FORM DATA ERROR HANDLING
	if($e == "" || $p == ""){
		echo "login_failed";
        exit();
	}
	else {
	// END FORM DATA ERROR HANDLING
		$sql = "SELECT id, email, password, name, activated FROM users WHERE email='$e'  LIMIT 1";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_row($query);
				$db_id = $row[0];
				$db_email = $row[1];
        $db_pass_str = $row[2];
				$db_name = $row[3];
				$activated = $row[4];
		if($p != $db_pass_str){
			echo "login_failed";
            exit();
		}
		else if ($activated == '0') {
			echo "not_activated";
						exit();
		}
		/*else if ($activated == '2') {
			//Insititute verification
			session_start();
			$_SESSION['uid_idcard'] = $db_id;
			echo "institute_not_verified" ;
						exit();
		}*/
		 else {
			// CREATE THEIR SESSIONS AND COOKIES
			$_SESSION['userid'] = $db_id;
			$_SESSION['email'] = $db_email;
			$_SESSION['password'] = $db_pass_str;
			$_SESSION['name'] = $db_name;
			setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("email", $db_email, strtotime( '+30 days' ), "/", "", "", TRUE);
    	setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("name", $db_name, strtotime( '+30 days' ), "/", "", "", TRUE);
			// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
			date_default_timezone_set('Asia/Kolkata');
			$date = date('Y-m-d H:i:s');
			$sql = "UPDATE users SET ip='$ip', lastlogin='$date' WHERE email='$db_email' LIMIT 1";
            $query = mysqli_query($connection, $sql);

			 if ($db_id == '0') {
			  //admin
			  echo "min_ad" ;
				exit();
						}

			echo $db_email;
		    exit();
		}
	}
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>

<style type="text/css">
		.input-group-addon.danger {
     	color: rgb(255, 255, 255);
    	background-color: rgb(217, 83, 79);
    	border-color: rgb(212, 63, 58);
		}

		.input-group-addon.success {
	    color: rgb(255, 255, 255);
	    background-color: rgb(92, 184, 92);
	    border-color: rgb(76, 174, 76);
		}
</style>

<script src="js/func.js"></script>
<script src="js/ajax.js"></script>
<script>
$(document).ready(function() {
	$('.input-group input[required]').on('keyup change', function() {
	var $form = $(this).closest('form'),
					$group = $(this).closest('.input-group'),
		$addon = $group.find('.input-group-addon'),
		$icon = $addon.find('span'),
		state = false;

		if (!$group.data('validate')) {
		state = $(this).val() ? true : false;
   	}else if ($group.data('validate') == "email") {
		state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())
	}

	if (state) {
			$addon.removeClass('danger');
			$addon.addClass('success');
			$icon.attr('class', 'glyphicon glyphicon-ok');
	}else{
			$addon.removeClass('success');
			$addon.addClass('danger');
			$icon.attr('class', 'glyphicon glyphicon-remove');
	}


});

});
</script>



<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function login(){
	var e = _("e_mail").value;
	var p = _("password").value;
	if(e == "" || p == ""){
		_("status").innerHTML = "Fill out all of the form data";
	} else {
		_("loginbtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
						/*alert(ajax.responseText);*/
	            if(ajax.responseText.trim() == "login_failed"){
								_("status").innerHTML = "Login unsuccessful, please try again.";
								_("loginbtn").style.display = "block";
							}
							else if (ajax.responseText.trim() == "not_activated") {
								window.scrollTo(0,0);
								_("loginform").innerHTML = "<h4>Please verify your Email id to activate and access your account.</h4>"
							}
							else if (ajax.responseText.trim() == "institute_not_verified") {
								window.scrollTo(0,0);
								_("loginform").innerHTML = '<h4>Please verify your Institute,</h4><p> click on the link below to verify your academic details.</p><a href="/institute_verification.php">Verify my Institute Details</a>';
							}
							else if (ajax.responseText.trim() == "min_ad") {
								window.location = "admin/";
							}
							else {
								window.location = "my_account/";
							}
	        }
        }
        ajax.send("e="+e+"&p="+p);
	}
}
</script>
</head>
<body>
<div  style="width:300px">
<br>
  <!-- LOGIN FORM -->
  <form id="loginform" onsubmit="return false;">
		<div class="form-group">
			    <label for="pwd">Registered Email Id:</label>
					<div class="input-group" data-validate="email">
						<input type="text" class="form-control" name="validate-email" id="e_mail" onfocus="emptyElement('status')" maxlength="60" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
		</div>
		<div class="form-group">
    		<label for="pwd">Password:</label>
    		<input type="password" class="form-control" id="password" onfocus="emptyElement('status')" maxlength="100">
  	</div>

    <button id="loginbtn" class="btn btn-danger" onclick="login()">Log In</button>
		<br />
    <p id="status"></p>
		<br />
    <a href="forgot_password.php">Forgot Your Password?</a>
  </form>
  <!-- LOGIN FORM -->
</div>

</body>
</html>
