<?php
    include_once 'db.php';

    $obj = json_decode($_GET["x"],false);

    if($obj[0] == 0){
        //hindu
        $sql = "SELECT * FROM hindu WHERE cat_id=$obj[1]";
    }else if($obj[0] == 1){
        $sql = "SELECT * FROM muslim WHERE cat_id=$obj[1]";
    }else{
        $sql = "SELECT * FROM christ WHERE cat_id=$obj[1]";
    }

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($row);

?>