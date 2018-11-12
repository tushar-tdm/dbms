<?php 
    session_start();
    include_once 'db.php';

    $uid = $_SESSION['uid'];
    if($uid){
		include 'header_login.php';
	}else{
        header("Location: login/login.html?Login_To_Continue");
        exit();
    }

    if(isset($_POST['hall_submit'])){
        $halltype = $_POST['hall_type'];
        $hallcity = $_POST['hall_city'];

        $sql = "SELECT * FROM wed_hall WHERE ven_type='$halltype' AND city='$hallcity'";
        $result = mysqli_query($conn,$sql);
    }
    else{
        $sql = "SELECT * FROM hall";
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
        cursor: pointer;
        border-color:transparent;
    }

    .ima {
    /* background: url("") no-repeat 0px 0px;  */
 	background-size:cover;
	 -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover; 
	height:200px;
	width:240px;
}

.cat_img{
        width:240px;
        height:200px;
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
    <h3 style="font-family: 'Quicksand', sans-serif;text-align:center;"> WEDDING HALLS </h3>
    <div class="container">
    <?php
        
    ?>
        <div class="row ">
            <?php 
            $count = 0;

               while($row = mysqli_fetch_assoc($result)){
                    $hall_id = $row['ven_id']; 
                    $count++;
                    $picloc = "images/".$hall_id."/1.jpg";
            ?>
            <script>
                /* var x = document.getElementsByClassName["ima"]; */
                set_back();
            </script>
            <form action="hall_page.php" id="<?php echo $count; ?>" method="POST">
                <input type="hidden" value="<?php echo $hall_id; ?>" name="hid">
              
            <div class="col-lg-3" style="margin-bottom:50px;">            
                <div class="ima">
                    <img src="<?php echo $picloc; ?>" alt="catering" class="cat_img">
                </div>
                <div class="det">
                    <span><?php echo $row['hall_name'] ?></span>
                    <p class="rating" style="float:right;margin-right:5px;"><img src="images/star.jpg" class="star"><?php echo $row['rating']; ?></p> 
                    <p class="address"> <?php echo $row['city']; ?></p>
                    <span class="no_of_rev"> 5 reviews <input class="visit" type="submit" value="VISIT!" name="hsubmit"> </span>
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

<script>
    function gotohall(id){
        document.getElementById(id).submit();
    }
</script>