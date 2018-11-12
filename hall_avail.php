<?php
    include_once 'db.php';
    session_start();

     $myObj = json_decode($_GET["x"]);
    $sd = $myObj[0];
    $ld = $myObj[1];
    $hid = $myObj[2];
    
        $sql = "SELECT * FROM hall_booking WHERE s_date <= '$sd' AND e_date >= '$sd' OR s_date <= '$ld' AND e_date >= '$ld' OR s_date >= '$sd' AND e_date <= '$ld' OR s_date<='$sd' AND e_date>='$ld' AND hall_id = $hid";
        $result = mysqli_query($conn,$sql);
        $nor = mysqli_num_rows($result);

        if($nor > 0){
            echo json_encode("0");
        }else{
            echo json_encode("1");
        }
    

?>

