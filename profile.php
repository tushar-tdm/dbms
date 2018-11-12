<?php
    session_start();
    include_once 'db.php';

    $uid = $_SESSION['uid'];
    if($uid){
        include_once 'header_login.php';
        $sql = "SELECT * FROM `users` WHERE `user_id` = '$uid'";
        $result = mysqli_query($conn,$sql);
        
        $row = mysqli_fetch_assoc($result);
       /*  $hids = array();
        $cids = array(); */
    }
    else{
        header("Location: login/login.html");
        exit();
    }
   
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Wed Knot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Jewel a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
        <script>
                // Create a new YUI instance and populate it with the required modules.
                YUI().use('calendar', function (Y) {
                    // Calendar is available and ready for use. Add implementation
                    // code here.
                });
        </script>
        <style>
            .yui3-button {
            margin:10px 0px 10px 0px;
            color: #fff;
            background-color: #3476b7;
			}
			
			#bookbutton{
				margin-left:30%;
				background-color:#66FF00 ;
				border-color: transparent;
				color:white;
				font-weight:bold;
				width:160px;
				height:66px;
				border-radius: 10px;
			}

            .booking{
				margin-left:40%;
				background-color:#f13c20;
				border:solid 2px black;
				color:white;
				font-weight:bold;
				width:160px;
				height:66px;
                cursor:pointer;
			}

            .collapsible {
                background-color: #777;
                color: white;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
            }

            .active, .collapsible:hover {
                background-color: #555;
            }

            .content {
                padding: 0 18px;
                display: none;
                overflow: hidden;
                background-color: #f1f1f1;
            }

            .dp{
                width: 300px;
                height:300px;
                border-radius: 150px;
                border-color:transparent;
            }

            .review{
                background-color: blue;
                color: white;
                font-weight: bold;
                border-color: transparent;
                border-radius: 10px;
            }
            .cancel{
                background-color: red;
                color: white;
                font-weight: bold;
                border-color: transparent;
                border-radius: 10px;
            }
        </style>
	<script>

		addEventListener("load", function(){
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">

<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-lg-6">
            <div class="dp_container">
                <?php 
                    $sql = "SELECT * FROM `images` WHERE `user_id` = '$uid'";
                    $result = mysqli_query($conn,$sql);
                    $row2 = mysqli_fetch_assoc($result);

                    if($row2['stat'] == 0){
                        $picloc = "images/profile/default.jpg";
                    }
                    else{
                        $picloc = "images/profile/profile".$row2['user_id'].".".$row2['format'];
                    }
                ?>
                <img class="dp" src="<?php echo $picloc ?>" alt="profile">
            </div>
        </div>
        <div class="col-lg-6">
                <form action="" id=""><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row['fname']; ?>"  style="margin-bottom:10px;" name="fname"><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row['lname']; ?>"  style="margin-bottom:10px;" name="lname"><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row['email']; ?>"  style="margin-bottom:10px;" name="email" ><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row['contact']; ?>"  style="margin-bottom:10px;" name="phone"><br>
                    
				</form>
        </div>
    </div>
    <br><br>
        <h3 style="font-weight:bold;margin-left:40%;"> MY BOOKINGS </h3>
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>

    <div class="row hall_bookings">
        <div class="col-lg-12">
            <button class="collapsible">Hall Bookings</button>
            <div class="content">
            <?php 
                $sql = "SELECT * FROM hall_booking WHERE `user_id` = '$uid'";
                $result = mysqli_query($conn,$sql);
                $nor = mysqli_num_rows($result);
                $count = -1;

                while($row = mysqli_fetch_assoc($result)){    
                    $hid = $row['hall_id'];
                    $sql = "SELECT * FROM wed_hall WHERE ven_id='$hid'";
                    $result = mysqli_query($conn,$sql);
                    $row2 = mysqli_fetch_assoc($result);
                    $count = $count + 1;
                    $ct = "hall".(string) $count;
                    /* array_push($hids,$row['hall_id']); */
            ?>
            
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="<?php echo $ct; ?>">
                            <p style="font-weight:bold;"> HALL NAME </p>
                            <?php echo $row2['hall_name']; ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="<?php echo $ct; ?>">
                        <p style="font-weight:bold;"> RATING </p>
                        <?php echo $row2['rating']; ?>
                    </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="<?php echo $ct; ?>">
                        <p style="font-weight:bold;"> START DATE </p>
                        <?php echo $row['s_date']; ?>
                    </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="<?php echo $ct; ?>">
                        <p style="font-weight:bold;"> END DATE </p>
                        <?php echo $row['e_date']; ?>
                    </div>
                    </div>
                    <button class="review <?php echo $ct; ?>" onclick="review(<?php echo $row['hall_id']; ?>,0)" style="margin-top:10px;margin-left:10px;margin-bottom:20px;"> REVIEW CATERING </button>
                    <button class="cancel <?php echo $ct; ?>" onclick="cancel(<?php echo $row['book_id']; ?>,0,<?php echo $count; ?>)" style="margin-top:10px;margin-left:10px;margin-bottom:20px;"> CANCEL BOOKING </button>
                    <br><hr>
                </div>
            
            <?php
                }
            ?>
            </div>
        </div>
    </div>

    <div class="row hall_bookings">
        <div class="col-lg-12">
        <button class="collapsible">Catering Bookings</button>
            <div class="content">
            <?php 
                $count = -1;
                $sql = "SELECT * FROM cat_booking WHERE `user_id` = '$uid'";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){ 
                    $count = $count + 1;
                    $ct = "cat".(string) $count;
                    /* array_push($cids,$row['cat_id']); */
            ?>
            
        
                <div class="row">
                    <div class="col-lg-4">
                        <div class="<?php echo $ct; ?>">
                            <p style="font-weight:bold;"> STARTERS </p>
                            <p class="s"> <?php echo $row['s1']; ?> </p><p class="s"> <?php echo $row['s2']; ?></p><p class="s"><?php echo $row['s3']; ?> </p><p class="s"><?php echo $row['s4']; ?> </p><p class="s"><?php echo $row['s5']; ?> </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="<?php echo $ct; ?>">                        
                            <p style="font-weight:bold;"> DESSERTS </p>
                            <p class="d"><?php echo $row['d1']; ?></p><p class="d"><?php echo $row['d2']; ?></p><p class="d"><?php echo $row['d3']; ?></p><p class="d"><?php echo $row['d4']; ?></p><p class="d"><?php echo $row['d5']; ?></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="<?php echo $ct; ?>">
                            <p style="font-weight:bold;"> MAIN COURSE </p>    
                            <p class="m"><?php echo $row['m1']; ?></p><p class="m"><?php echo $row['m2']; ?></p><p class="m"><?php echo $row['m3']; ?></p><p class="m"><?php echo $row['m4']; ?></p><p class="m"><?php echo $row['m5']; ?></p>
                        </div>
                    </div>
                    <button class="review <?php echo $ct; ?>" onclick="review(<?php echo $row['cat_id']; ?>,1)" style="margin-top:10px;margin-left:10px;"> REVIEW CATERING </button>
                    <button class="cancel <?php echo $ct; ?>" onclick="cancel(<?php echo $row['book_id']; ?>,1,<?php echo $count; ?>)" style="margin-top:10px;margin-left:10px;"> CANCEL BOOKING </button>                    
                </div>
            <br><hr>
            <?php
               }
            ?>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<script>

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }

    //take book_id;
    function cancel(id,y,clid){
        if(y == 0){
            //4 things to hide
            var c = "hall"+clid.toString();
            for(i=0;i<6;++i){
                var h = document.getElementsByClassName(c)[i];
                h.style.display = "none";
            }
        }
        else{ //3 things to hide
            var c = "cat"+clid.toString();
            for(i=0;i<5;++i){
                var h = document.getElementsByClassName(c)[i];
                h.style.display = "none";
            }
        }
        var det = [id,y];
            var d = JSON.stringify(det); 

            var x = new XMLHttpRequest();
            x.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                var resp = JSON.parse(this.responseText);
                console.log(resp[0]+" "+resp[1]);
                }
            };
            x.open("GET","cancel.php?b="+d,true);
            x.send();
    }

    function review(c,y){
        var det = [c,y];
        
            var d = JSON.stringify(det); 

            var x = new XMLHttpRequest();
            x.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                
                }
            };
            x.open("GET","setid.php?b="+d,true);
            x.send();

        if(y==0){
            window.location.href = '/web/review_hall.php';    
        }else{
        window.location.href = '/web/review_cat.php';
        }
    }
</script>
<?php include_once 'footer.php'; ?>