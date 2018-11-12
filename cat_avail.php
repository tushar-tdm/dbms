<?php
    include_once 'db.php';
    session_start();

     $myObj = json_decode($_GET["b"]);
    $sd = $myObj[0];

    $cd = date("Y/m/d");

    if($cd > $sd){
        echo json_encode("0");
    }else{
        echo json_encode("1");
    }
    

?>

