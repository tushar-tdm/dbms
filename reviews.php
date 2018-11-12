<?php
	include_once 'db.php';
	session_start();

	$id = mysqli_real_escape_string($conn,$_POST['id']);
	$category = mysqli_real_escape_string($conn,$_POST['category']);

	if($category == 0){
		$sql = "SELECT * FROM `cat_review` WHERE `cat_id` ='$id'";
		$result = mysqli_query($conn,$sql);
		$nor = mysqli_num_rows($result);
	}else{
		$sql = "SELECT * FROM `hall_review` WHERE `hall_id` ='$id'";
		$result = mysqli_query($conn,$sql);
		$nor = mysqli_num_rows($result);	
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
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
</head>

<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">Our Happy Customers</h3>
			<div class="inner-sec-wthree-agileits">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
                                
                                <?php 
									while($row = mysqli_fetch_assoc($result)){

                                ?>
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t1.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
											
										</div>
									</div>
									<h3><?php echo $row['user_id']; ?>    
										<span>Customer</span>
									</h3>
									<i>BANGALORE</i>
									<p><?php echo $row['review']; ?>
									</p>
                                </div>
                                
                                <?php 
                                    }
                                ?>			
                    </div>
                </div>
               </div>
				</div>
				<br>
        		<!-- <a class="review_button" href="reviews.php"> <span>See More<span> </a> -->
			</div>
		</div>
	</section>