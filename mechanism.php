<?php
include_once("php_includes/check_login_status.php");

if(isset($_POST['event_name'])){
  //for event registration
  $event_name = $_POST['event_name'];
  $event_date = $_POST['event_date'];
  $event_time = $_POST['event_time'];

  $fund_gen = $_POST['fund_gen'];
  $vol_req = $_POST['vol_req'];
  $min_score = $_POST['min_score'];
  $log_id = 1;

  $datetime = $event_date.' '.$event_time;
  $datetime = date("Y-m-d H:i:s",strtotime($datetime));

  $sql = "INSERT INTO `event` (`name`, `ngo_id`, `date`, `fund-generated`,  `volunteers_req`, `min_profile_score`)
          VALUES ('$event_name', $log_id, '$datetime' , $fund_gen, $vol_req, $min_score)";
  $query = mysqli_query($connection, $sql);

  echo $sql;

  //Sending msg to registered volunteers
  include('way2sms/way2sms-api.php');
  $sql = "SELECT * FROM `interested` WHERE ngo_id = '$log_id'";
  $all_volunteer = mysqli_query($connection, $sql);
  $check = mysqli_fetch_assoc($all_volunteer);
  echo $sql;

    if(isset($check) && count($check)) :
    foreach ($all_volunteer as $key => $volunteers) :
      $volunteer_id = $volunteers['volunteer_id'];
      //echo '<br>'.$volunteer_id;
      $sql = "SELECT * FROM `volunteers` WHERE id = '$volunteer_id'";
      //echo $sql;
      $query = mysqli_query($connection, $sql);
      $v_values = mysqli_fetch_assoc($query);

      $recepient = $v_values['phone'];
      $profile_score = $v_values['profile_score'];
      //echo $profile_score.$recepient.'<br>';

      if($min_score < $profile_score){
        $message = "NGO Id : $log_id is organizing event on $event_date at $event_time you can Accept this event name $event_name by clicking on this link : http://adeuera.com";
        sendWay2SMS ( '9619674909' , 'H6289E' , $recepient ,$message);
      }


    endforeach;
    else :
    endif;
}

?>
