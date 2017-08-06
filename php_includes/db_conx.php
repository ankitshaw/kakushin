<?php
  //$connection = mysqli_connect("58595efc0c1e66862a000192-wordpressever.rhcloud.com:49476","adminEFFKHsN","xWrC7AjTJQEm","aduera");
  $connection=mysqli_connect("localhost","root","","kakushin");
  if(mysqli_connect_errno())
    echo "Problem with database connection";

date_default_timezone_set('Asia/Kolkata');

?>
