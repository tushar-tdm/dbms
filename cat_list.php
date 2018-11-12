<?php 
    include_once 'db.php';
    session_start();
    $uid = $_SESSION['uid'];

    if($uid){
		include 'header_login.php';
	}else{
		include 'header.php';
    }
    

     if(isset($_POST['cat_submit'])){
        $catcity = mysqli_real_escape_string($conn,$_POST['cat_city']);
        $city = strtolower($catcity);

        $sql = "SELECT * FROM `wed_cat` WHERE city='$city'";
        $result = mysqli_query($conn,$sql);
    }
    else{
        $sql = "SELECT * FROM `wed_cat`";
        $result = mysqli_query($conn,$sql);
    } 

    
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>WED KNOT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Jewel a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <style>
    .visit{
        width: 70px;
        height:25px;
        border-radius: 4px;
        background-color: #66ff00;
        font-weight:bold;
        color: white;
        float:right;
        cursor:pointer;
        border-color:transparent;
    }

    .cat_img{
        width:240px;
        height:200px;
    }

    .cat_item{
        border:solid 2px white;
    }

    </style>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
</head>

<body>

<br><br><br>
    <h3 style="font-family: 'Quicksand', sans-serif;text-align:center;"> CATERINGS </h3><br>
    <div class="container">
    <?php
        
    ?>
        <div class="row ">
            <?php 
            $count = 0;
                 while($row = mysqli_fetch_assoc($result)){
                    $cat_id = $row['cat_id']; 
                    $count++; 
            
            ?>

            <form action="catering_page.php" id="<?php echo $count; ?>" method="POST">
                <input type="hidden" value="<?php echo $cat_id; ?>" name="cid">
                
            <div class="col-lg-3 cat_item" style="margin-bottom:50px;">            
                <div class="ima">
                    <?php  
                        $loc = "images/c".$row['cat_id']."/1.jpg";
                    ?>
                    <img src="<?php echo $loc; ?>" alt="catering" class="cat_img">
                </div>
                <div class="det">
                    <span><?php echo $row['cat_name'] ?></span>
                    <p class="rating" style="float:right;margin-right:5px;"><img src="images/star.jpg" class="star"><?php echo $row['rating']; ?></p> 
                    <p class="address"> <?php echo $row['city']; ?></p>
                    <span class="no_of_rev"> 5 reviews <button class="visit" type="submit" name="csubmit"> VISIT!</button> </span>
                </div>
            </div>
            </form>

            <?php
                
            }
            ?>
        </div>
        <?php
                
            ?>
    </div>

</body>
</html>

<?php
include_once 'footer.php';
?>