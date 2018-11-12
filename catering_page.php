<?php
	include_once 'db.php';
	session_start();
	
	if($_SESSION['uid']){
		$uid = $_SESSION['uid'];
		include 'header_login.php';
	}
	else{
		header("Location: login/login.html?Login_To_Continue");
		exit();
	}
	

	if(isset($_POST['csubmit'])){
		$cid = mysqli_real_escape_string($conn,$_POST['cid']);
		$_SESSION['cid'] = $cid;
		$sql = "SELECT * FROM wed_cat WHERE cat_id=$cid";
		$result = mysqli_query($conn,$sql);
		$roww = mysqli_fetch_assoc($result);
		$picloc = "images/c".$cid."/1.jpg";
		
	}
	else{
		if(!empty($_SESSION['cid'])){
			$cid = $_SESSION['cid'];
		}
		else{
			header("Location: index.php");
		}
		
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
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">

	<style>
		
		.banner-inner {
			background-size: cover;
			min-height: 400px;
		}

		.halimg{
				width: 80%;
				margin-left:10%;
				height:600px;
		}
	</style>
</head>

<body>

	<div class="banner-inner">
		<img src="<?php echo $picloc; ?>" class="halimg">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>

	<!--//banner-->
	<!--/banner-bottom-w3ls-agileinfo-->
	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle text-center"><?php echo $roww['cat_name']; ?></h3>
			<div class="row inner-sec-wthree-agileits">
				<div class="col-lg-7 bt-bottom-info ab">
					<?php $pic= "images/c".$cid."/2.jpg"; ?>
					<img src="<?php echo $pic; ?>" class="img-fluid" alt="">

				</div>
				<div class="col-lg-5 bt-bottom-info">
					<h5>Why choose us</h5>
					<p class="ab-para"><?php echo $roww['desc']; ?></p>
				</div>

			</div>

    <br><br><br>
		</div>
	</section>
	<!---->
	<div class="featured-items banner-bottom-w3ls-agileinfo">
		<button onclick="menu()" class="my-menu" style="cursor:pointer;"> Create My Menu!! </button>
	</div>
	<!--//banner-->
	<br><br><br>
	
	<!--//app-->
	<!--reviews_sec-->

	<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">Our Happy Customers</h3>
			<div class="inner-sec-wthree-agileits">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t3.jpg" alt=" " class="img-fluid" />
									</div>
									<h3> Joseph D'souza
										<span>Customer</span>
									</h3>
									<i>BANGALORE</i>
									<p>I hired this catering for my my sister wedding... They were deliciously amazing Loved their food and services... :)
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t2.jpg" alt="" class="img-fluid" />
										<div class="test_social_pos">
										</div>
									</div>
									<h3> Ankita D Baadkar
										<span>Customer</span>
									</h3>
									<i>DELHI</i>
									<p>Must mention unique presentation of the food & most appreciated is the creative names for the delicacies. EVERYONE is still talking about the food at the wedding! Kudos to the entire team for doing such a great job!
									</p>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t1.jpg" alt=" " class="img-fluid" />
									</div>
									<h3> Shreyas Pandith
										<span>Customer</span>
									</h3>
									<i>MUMBAI</i>
									<p>We had a wonderful experience here, special thanks to owner who listened to all our requirements and executed it perfectly. All our guests really enjoyed the food and even asked the contact number.
										My advise meet owner personally for your event.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t4.jpg" alt=" " class="img-fluid" />
										
									</div>
									<h3>Aishwarya Mishra
										<span>Customer</span>
									</h3>
									<i>DLEHI</i>
									<p>I was the one who was arranged and coordinated caterer for my friend Wedding. From the Sangeeth to the Wedding the food and services provided by here was amazing!
										Everyone from the wedding is still talking about how great the food was.
									</p>
								</div>
							</div>
						</div>

						<!-- <?php 
							$sql = "SELECT * FROM `cat_review` WHERE `cat_id` = '$cid'";
							$result = mysqli_query($conn,$sql);
							$nor = mysqli_num_rows($result);
							if($nor>0){							
							$n = ceil($nor/2);
							for($i=$n;$i>=0;--$i){
						?>
						<div class="carousel-item">
							<div class="row test-slides">
								<?php
									for($j=0;$j<2;++$j){	
										$row1 = mysqli_fetch_assoc($result);
										$u = $row1['user_id'];
										$sql2 = "SELECT * FROM `users` WHERE `user_id`='$u'";
										$result2 = mysqli_query($conn,$sql);
										$row2 = mysqli_fetch_assoc($result2);
								?>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<?php
											$sql3 = "SELECT * FROM images WHERE `user_id` = '$u'";
											$result3 = mysqli_query($conn,$sql);
											$row3 = mysqli_fetch_assoc($result3);

											$picloc = "images/profile/profile".$u.".".$row3['format'];
										?>
										<img src="<?php echo $picloc; ?>" alt=" " class="img-fluid" />
									</div>
									<h3> <?php echo $row2['fname']." ".$row2['lname']; ?>
										<span>Customer</span>
									</h3>
									<i>MUMBAI</i>
									<p> <?php echo $row1['review']; ?>
									</p>
								</div>
								<?php
									}
								?>
						<?php
							}
						}
						?> -->
						</div>
					</div>

					<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="far fa-arrow-alt-circle-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="far fa-arrow-alt-circle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
					<!--  Option to read all the reviews --><br>
					<form action="reviews.php" method="POST">
						<input type="text" value="<?php echo $cid; ?>" style="display:none;" name="id">
						<input type="text" value="<?php echo 0; ?>" style="display:none;" name="category">
						<input class="review_button" href="reviews.php" type="submit" value="SEE MORE">
					</form>
			</div>
		</div>
	</section>

<section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">Contact Us</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="send_mail.php" method="POST">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="name" type="text" id="input-13" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="email" type="email" id="input-14" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="subject" type="text" id="input-15" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
							</label>
							</span>
							<textarea name="message" placeholder="Your Query here..." required=""></textarea>
							<input type="submit" value="Submit">
						</form>
				
			</div>
			<div class="col-md-4 contact_grids_info">
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Branch 1</h4>
						<p>435 City hall,</p>
						<p>Bengaluru SD092.</p>
					</div>
				</div>
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Branch 2</h4>
						<p>8088 Jasmine hall,</p>
						<p>Mumbai SD092.</p>
					</div>
				</div>
				<div class="contact_grid" data-aos="flip-up">

					<div class="contact_grid_right">
						<h4>OFFICE 3</h4>
						<p>436 Honey hall,</p>
						<p>Delhi SD092.</p>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	

	</div>
	</section>

    <?php include './footer_book.php'; ?>

	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
									<input class="form-control" type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input class="form-control" type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul class="social_list1">
									<li>
										<a href="#" class="facebook1">
											<i class="fab fa-facebook-f"></i>

										</a>
									</li>
									<li>
										<a href="#" class="twitter2">
											<i class="fab fa-twitter"></i>

										</a>
									</li>
									<li>
										<a href="#" class="dribble3">
											<i class="fab fa-dribbble"></i>
										</a>
									</li>
								</ul>

							</div>
							<p>
								<a href="#" data-toggle="modal" data-target="#exampleModal2"> Don't have an account?</a>
							</p>
						</div>

					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="text" name="name" placeholder="Name" required="">
									<input class="form-control" type="email" name="email" placeholder="Email" required="">
									<input class="form-control" type="password" name="password" id="password1" placeholder="Password" required="">
									<input class="form-control" type="password" name="password" id="password2" placeholder="Confirm Password" required="">
									<input class="form-control" type="submit" value="Sign Up">
								</form>
							</div>
							<p>
								<a href="#"> By clicking Sign up, I agree to your terms</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->


	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
		<script>
			function menu(){
				window.location = "./menu.php";
			}
		</script>
</body>

</html>