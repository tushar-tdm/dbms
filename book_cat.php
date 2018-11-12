<?php
    include_once 'db.php';
    session_start();

    $user = $_SESSION['uid'];
    $cid = $_SESSION['cid'];
    /* $cap = 100; */
    $date = "2018-10-31";

/*     $user = $_SESSION['uid'];
    $cid = $_SESSION['cid']; */

    $obj = json_decode($_GET["b"],false);
    
    $sl = sizeof($obj->starter);
    $dl = sizeof($obj->dessert);
    $ml = sizeof($obj->main);
    $ol = sizeof($obj->other);

    //now insert these items in an array
    $s =array();
    $d =array();
    $m =array();
    $o =array();

    for($i=0;$i<$sl;++$i){
        array_push($s,$obj->starter[$i]);
    }for($i=$sl;$i<5;++$i){
        array_push($s,"");
    }

    for($i=0;$i<$dl;++$i){
        array_push($d,$obj->dessert[$i]);
    }for($i=$dl;$i<5;++$i){
        array_push($d,"");
    }

    for($i=0;$i<$ml;++$i){
        array_push($m,$obj->main[$i]);
    }for($i=$ml;$i<5;++$i){
        array_push($m,"");
    }

    for($i=0;$i<$ol;++$i){
        array_push($o,$obj->other[$i]);
    }
 
   // echo $s[1]." ".$d[0]." ".$m[0];
 /*   $d_str = (string) $o[2];
    $date_str = strtotime($o[2]); */
    
    $sql = "INSERT INTO cat_booking (`user_id`,`plates`,`cat_id`,`s_date`,`s1`,`s2`,`s3`,`s4`,`s5`,`d1`,`d2`,`d3`,`d4`,`d5`,`m1`,`m2`,`m3`,`m4`,`m5`,`cost`)
     VALUES ('$user','$o[0]','$cid','$o[1]','$s[0]','$s[1]','$s[2]','$s[3]','$s[4]','$d[0]','$d[1]','$d[2]','$d[3]','$d[4]',
        '$m[0]','$m[1]','$m[2]','$m[3]','$m[4]','$o[2]')";  

/*     $sql = "INSERT INTO cat_booking (`user_id`,`capacity`,) VALUES ()"; */
       $result = mysqli_query($conn,$sql); 
    // $sql = "INSERT INTO users (`user_id`,`name`,`contact`,`age`,`city`,`email`) VALUES ('tdm','tushar','961137485',21,'mglr','t@gmail.com');"
 
    $sql = "SELECT * FROM cat_food WHERE cat_id = 1";    
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);
    
    //echo json_encode($row); 
?>