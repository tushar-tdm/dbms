<?php
include_once 'db.php';
    session_start();

    $obj = json_decode($_GET["b"],false);

    if($obj[1] == 0){
        $_SESSION['hid'] = $obj[0];

    }else{
        $_SESSION['cid'] = $obj[0];
    }
