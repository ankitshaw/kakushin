<?php
session_start();
include_once("db_conx.php");
// Files that inculde this file at the very top would NOT require
// connection to database or session_start(), be careful.
// Initialize some vars
$user_ok = false;
$log_id = "";
$log_email = "";
$log_password = "";
$log_name = "";
// User Verify function

function evalLoggedUser($conx,$id,$e,$p){
	$sql = "SELECT ip FROM users WHERE id='$id' AND email='$e' AND password='$p' AND activated!='0'  LIMIT 1";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
	}
}
if(isset($_SESSION["userid"]) && isset($_SESSION["email"]) && isset($_SESSION["password"]) &&  isset($_SESSION["name"])) {
	$log_id = preg_replace('/[^0-9]/', '', $_SESSION['userid']);
	$log_email = mysqli_real_escape_string($connection, $_SESSION['email']);
	$log_password =  $_SESSION['password'];
	$log_name = $_SESSION["name"];

	// Verify the user
	$user_ok = evalLoggedUser($connection,$log_id,$log_email,$log_password);
} else if(isset($_COOKIE["id"]) && isset($_COOKIE["email"]) && isset($_COOKIE["pass"]) && isset($_COOKIE["name"])){
	$_SESSION['userid'] = preg_replace('/[^0-9]/', '', $_COOKIE['id']);
  $_SESSION['email'] = mysqli_real_escape_string($connection, $_COOKIE['email']);
  $_SESSION['password'] =  $_COOKIE['pass'];
	$_SESSION['name'] =  $_COOKIE['name'];
	$log_id = $_SESSION['userid'];
	$log_email = $_SESSION['email'];
	$log_password = $_SESSION['password'];
	$log_name = $_SESSION["name"];
	// Verify the user
	$user_ok = evalLoggedUser($connection,$log_id,$log_email,$log_password);
	if($user_ok == true){
		// Update their lastlogin datetime field
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d H:i:s');
		$sql = "UPDATE users SET lastlogin = '$date' WHERE id = '$log_id' LIMIT 1";
        $query = mysqli_query($connection, $sql);
	}
}
?>
