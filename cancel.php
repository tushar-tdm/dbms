<?php
    include_once 'db.php';
    session_start();

    $obj = json_decode($_GET["b"],false);

    if($obj[1] == 0){
        //hall booking
        $sql = "DELETE FROM hall_booking WHERE book_id='$obj[0]'";
        $result = mysqli_query($conn,$sql);

    }else{
        //cat booking
        $sql = "DELETE FROM cat_booking WHERE book_id='$obj[0]'";
        $result = mysqli_query($conn,$sql);
    }

    echo json_encode($obj);
?>