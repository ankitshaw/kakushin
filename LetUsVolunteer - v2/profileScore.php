<?php
require(connect.php);

    //$id = $_SESSION['userid'];
    $id = 1;
    $queryuser = "SELECT * FROM `volunteer` WHERE id='$id'" ;
    $resultuser = mysqli_query($connection, $queryuser) or die(mysqli_error($connection));
    $rowuser = mysqli_fetch_array($resultuser,MYSQL_ASSOC);
    $age = $rowuser['age'];
    if($age<18)
        $ageScore = 10;
    elseif($age>=18 && $<22)
        $ageScore = 15;
    else
        $ageScore = 20;
    $qual = $rowuser['qualCat']; //highSchool = 1, undergrad = 2, postgrad = 3
    if($qual == 1)
        $qualScore = 10;
    elseif($qual == 2)
        $qualScore = 15;
    elseif($qual == 3)
        $qualScore = 20;
    $queryexp = "SELECT COUNT(expid),sectorid FROM `experience` WHERE userid='$id' Group By sectorid" ;
    $resultexp = mysqli_query($connection, $queryexp) or die(mysqli_error($connection));
    //$rowexp = mysqli_fetch_array($resultuser,MYSQL_ASSOC);
    /// secid orph=1,woman emp=2,old age=3,env=4,edu=5
    if$resultexp->num_rows > 0){
        for($x = 1; $x < 5; $x++){
            $querySector = "SELECT COUNT(expid),sectorid
                            FROM `experience`
                            WHERE userid='$id' AND sectorid='$x';
                            Group By sectorid"
            $resultexp = mysqli_query($connection, $querySector) or die(mysqli_error($connection));
            $rowexp = mysqli_fetch_array($resultexp,MYSQL_ASSOC);
            $sec = $rowexp['sectorid'];
            $secscore[$sec] = 20;
        }
        $expScore = array_sum($secscore);
    }
    $score = 0.2*$ageScore + 0.3*$qualScore + 0.5*expScore;
    $queryinsert = "INSERT INTO `volunteer` (profilescore) VALUES ('$score')";
    $resultorder = mysqli_query($connection, $queryinsert);
 ?>