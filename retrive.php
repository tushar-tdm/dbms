<?php
    include_once 'db.php';

    $obj = json_decode($_GET["x"],false);
    
    if( $obj[0] == 1 && $obj[1] == 0 ){ //veg
        $sql = "SELECT * FROM cat_food WHERE veg = $obj[0] AND cat_id= 1";
    }
    else if($obj[1] == 1 && $obj[0] == 0){ //non-veg
        $sql = "SELECT * FROM cat_food WHERE non = $obj[1] AND cat_id= 1";
    }
    else { //both
        $sql = "SELECT * FROM cat_food WHERE cat_id= 1";
    }
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($row);
?>