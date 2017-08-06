<?php
include_once("php_includes/check_login_status.php");

$query = "SELECT * FROM `ngo`";
// Filter query
if(isset($_POST['state'])){
$district     = $_POST['district'];
$sector       = $_POST['sector'];
$name         = $_POST['name'];
$unique_id    = $_POST['unique_id'];
$state        = $_POST['state'];


$conditions = array();
if($state != "")
    $conditions[] = "state = '$state'" ;
if($district != "")
    $conditions[] = "district = '$district'" ;
if($sector != "")
    $conditions[] = "sector = '$sector'" ;
if($name != "")
    $conditions[] = "name = '$name'" ;
if($unique_id != "")
    $conditions[] = "id = '$unique_id'" ;


if(count($conditions) > 0)
  $query .= " WHERE ".implode(' AND ', $conditions);


$all_ngo = mysqli_query($connection, $query);
$check = mysqli_fetch_assoc($all_ngo);
}
echo $query;
?>




    <?php if(isset($check) && count($check)) : ?>
    <?php foreach ($all_ngo as $key => $ngo) : ?>
        <?php
        $n = mysqli_query($connection,"SELECT * FROM `ngo` WHERE id = ".$ngo['id']);
        $n_values = mysqli_fetch_assoc($n);
        ?>
        <?php  echo
            '<div class="well well-lg">Results are  '.$ngo['id'].' '.$ngo['name'].'</div>';
        ?>




    <?php endforeach; ?>
    <?php else : ?>

      <div class="alert  alert-warning">
        <h3>Sorry, no results found! </h3>
        <h4>Please check the spelling or try searching for something else using our Filters.</h5></div>
    <?php endif; ?>
