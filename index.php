<?php
	include_once 'db.php';
	session_start();

		if($_SESSION['uid']){
			$uid = $_SESSION['uid'];
		}else{
			header("Location: login/login.html?Login_To_Continue");
			exit();
		}
	
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title> WED KNOT</title>
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
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">

	<style>
		.rounded{
			width:260px;
			height: 200px;
		}
	</style>
</head>

<body>
	<!--Header-->
<?php
	if($uid){
		include 'header_login.php';
	}else{
		include 'header.php';
	}
?>
	
	<!--//header-->

	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3> Wedding Halls </h3>
						<span>
							<form action="hall_list.php" method="POST">
								<select label="category" name="hall_type">
									<option value="" disabled selected hidden> Select Hall Type </option>
									<option value="indoor"> Indoor </option>
									<option value="outdoor"> Out-Door </option>
									<option value="terrace"> Terrace</option>
									<option value="pool"> Pool</option>
								</select>

								<select label="category" name="hall_city">
									<option value="" disabled selected hidden> Select City </option>
									<option value="mumbai"> Mumbai </option>
									<option value="bangalore"> Bangalore </option>
									<option value="delhi"> Delhi</option>
								</select>
								<input type="submit" placeholder="SEARCH" name="hall_submit">
							</form>
						</span>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Caterings </h3>
						<span>
							<form action="cat_list.php" method="POST">
								<select label="category" name="cat_city">
									<option value="" disabled selected hidden> Select City </option>
									<option value="mumbai"> Mumbai </option>
									<option value="bangalore"> Bangalore </option>
									<option value="delhi"> Delhi</option>
								</select>
								<input type="submit" placeholder="SEARCH" name="cat_submit">								
							</form>
						</span>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!--//banner-->
	<!--/banner-bottom-w3ls-agileinfo-->
	
	<!--//banner-->
	<section class="banner-bottom-w3ls-agileinfo">
		<!-- Portfolio -->
		<div class="portfolio" id="portfolio">
			<div class="container">
				<h3 class="tittle text-center">Exclusive Bookings!!</h3>
				<div class="inner-sec-wthree-agileits">

					<ul class="portfolio-categ filter text-center mb-lg-6 mb-3">
						<li class="port-filter all active">
							<a href="#">All</a>
						</li>
						<li class="cat-item-1">
							<a href="#" title="Category 1">Wedding Venues</a>
						</li>
						<li class="cat-item-2">
							<a href="#" title="Category 2">Caterings</a>
						</li>
						<!-- <li class="cat-item-3">
							<a href="#" title="Category 3">Category 3</a>
						</li>
						<li class="cat-item-4">
							<a href="#" title="Category 4">Category 4</a>
						</li> -->
					</ul>
					<ul class="portfolio-area clearfix">
						<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
							<div>
								<span class="image-block img-hover">
									<a class="image-zoom rounded" href="images/x1.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x1.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x2.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x2.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x3.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x3.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x3.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x4.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x5.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x5.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x6.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x6.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x9.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x9.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x8.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x8.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
						<li class="portfolio-item2" data-id="id-9" data-type="cat-item-4">
							<div>
								<span class="image-block">
									<a class="image-zoom" href="images/x7.jpg" data-gal="prettyPhoto[gallery]">
			
										<img src="images/x7.jpg" class="img-fluid rounded" alt="">
			
									</a>
								</span>
							</div>
						</li>
					</ul>
			
					<!--end portfolio-area -->
				</div>
			</div>
		</div>
	</section>
	
	<!--/blog-->

	<!-- 

	<div class="blog_sec container-fluid">
		<h3 class="tittle">Recent Bookings</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<div class="blog_date">

							<h4>Jan.05.2018</h4>

						</div>
						<h6>
							<a href="single.html">Wear a Piece of Art</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
						<div class="clearfix"></div>
						<a href="single.html" class="blog-btn">Know More</a>
					</div>
					<div class="banner-btm-inner a2">

					</div>
				</div>
				<div class="banner-btm-bottom">
					<div class="banner-btm-inner a3">

					</div>
					<div class="banner-btm-inner a4 text-left">
						<div class="blog_date">

							<h4>Jan.08.2018</h4>

						</div>
						<h6>
							<a href="single.html">Wear a Piece of Art</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
						<div class="clearfix"></div>
						<a href="single.html" class="blog-btn">Know More</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<div class="blog_date">

							<h4>Jan.25.2018</h4>

						</div>
						<h6>
							<a href="single.html">Wear a Piece of Art</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>

						<a href="single.html" class="blog-btn">Know More</a>
					</div>
					<div class="banner-btm-inner a5">

					</div>
				</div>
				<div class="banner-btm-bottom">
					<div class="banner-btm-inner a6">

					</div>
					<div class="banner-btm-inner a4 text-left">
						<div class="blog_date">

							<h4>Jan.05.2018</h4>

						</div>
						<h6>
							<a href="single.html">wear a Piece of Art</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>

						<a href="single.html" class="blog-btn">Know More</a>
					</div>
				</div>
			</div>

		</div>
	</div> -->
	<!--//blog-->
	<!--/app-->
	
	<!--//app-->
	<!--reviews_sec-->
	<!-- <section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">What our clients say</h3>
			<div class="inner-sec-wthree-agileits">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t3.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t2.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t3.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t2.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

							</div>
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
			</div>
		</div>
	</section>
 -->


	<!--footer-->
	<?php include './footer.php'; ?>
	
	<!---->
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
	<!--//model-->
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
	<!--//model-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script >
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
	<!-- required-js-files-->
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
						items:5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--//required-js-files-->
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
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- Necessary-JS-File-For-Bootstrap -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->




</body>

</html>