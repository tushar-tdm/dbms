<?php
	include_once 'db.php';
	session_start();

	if($_SESSION['uid']){
		include_once 'header_login.php';

		$uid = $_SESSION['uid'];
		if(isset($_POST['hsubmit'])) {
			$hid = mysqli_real_escape_string($conn,$_POST['hid']);
			$sql = "SELECT * FROM wed_hall WHERE ven_id=$hid";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
	
			$sql = "SELECT * FROM `users` WHERE `user_id`='$uid'";
			$result = mysqli_query($conn,$sql);
	
			$row2 = mysqli_fetch_assoc($result);
			$_SESSION['hid'] = $hid;
	
			$picloc = "images/".$hid."/1.jpg";
		}
		else{
			if($_SESSION['hid']){
				$hid = $_SESSION['hid'];
				$sql = "SELECT * FROM wed_hall WHERE ven_id=$hid";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
	
			$sql = "SELECT * FROM `users` WHERE `user_id`='$uid'";
			$result = mysqli_query($conn,$sql);
	
			$row2 = mysqli_fetch_assoc($result);
			$picloc = "images/".$hid."/1.jpg";
			}
			
		}
	}
	else{
		header("Location: login/login.html?Login_To_Continue");
        exit();
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
			
			#bookbutton,#avail{
				margin-left:30%;
				background-color:#66FF00 ;
				border-color: transparent;
				color:white;
				font-weight:bold;
				width:160px;
				height:66px;
				border-radius: 10px;
			}

			.halimg{
				width: 80%;
				margin-left: 10%;
				height:600px;
			}

			.sets{
				border: solid 2px black;
				width:200px;
				height:75px;
				background-color: white;
				color:black;
				font-weight:bold;
				cursor:pointer;		
				/* -webkit-transition : 2s; */
				margin-left:43%;
				font-family: 'Quicksand', sans-serif;
			}
			.setl{
				border: solid 2px black;
				width:200px;
				height:75px;
				background-color: white;
				color:black;
				font-weight:bold;
				cursor:pointer;		
				/* -webkit-transition : 2s; */
				margin-left:23%;
				font-family: 'Quicksand', sans-serif;
			}

			.dateset_btn:hover{
				border: solid 2px white;
				background-color:#f13c20;
				color:white;
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
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">

</head>

<body class="yui3-skin-sam">

	<div class="banner-inner">
		<img src="<?php echo $picloc; ?>" class="halimg">
	<!-- go to styles.css and change the image -->
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
			<h3 class="tittle text-center"><?php echo $row['hall_name']; ?></h3>
			<div class="row inner-sec-wthree-agileits">
				<div class="col-lg-7 bt-bottom-info ab">
				<?php $p = "images/".$hid."/2.jpg"; ?>
					<img src="<?php echo $p; ?>" class="img-fluid" alt="">
				</div>
				<div class="col-lg-5 bt-bottom-info">
					<h5>Why choose us</h5>
					<p class="ab-para"><?php echo $row['desc']; ?></p>
				</div>
			</div>

    <br><br><br>
			<!-- /.row -->
			<div class="row inner_stat">
				<div class="col-md-3 stats_left counter_grid text-center">
					<p class="counter"><?php echo $row['cost1']; ?></p>
					<h4>1 DAY</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid1 text-center">
					<p class="counter"><?php echo $row['cost2']; ?></p>
					<h4>2 DAYS</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid2 text-center">
					<p class="counter"><?php echo $row['cost3']; ?></p>
					<h4>3 DAYS</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid3 text-center">
					<p class="counter"><?php echo $row['cost4']; ?></p>
					<h4>4 DAYS</h4>
				</div>

			</div>
		</div>
	</section>
<!-- BOOKING -->
	<button id="book_btn" class="shaata" onclick="booking()"> BOOK NOW </button><br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<button id="start" class="sets" style="display:none;" onclick="setstart()"> SET AS START DATE </button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" >
					<button id="last" class="setl" style="display:none;" onclick="setlast()"> SET AS LAST DATE </button>					
				</div>
			</div>
		</div>
		<br><br><br>
		<p id="date"> 

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div id="democal" class="yui3-skin-sam yui3-g" style="display:none;"> <!-- You need this skin class -->
					<div id="leftcolumn" class="yui3-u">
					<!-- Container for the calendar -->
						<div id="mycalendar"></div>
					</div>
					<div id="rightcolumn" class="yui3-u">
						<div id="links" style="padding-left:20px;">
							<!-- The buttons are created simply by assigning the correct CSS class -->
							<br>
							<span id="select-date" style="display:none;">Selected date:</span> <span id="selecteddate"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="book_hall.php" method="POST" id="bookingform">
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row2['user_id']; ?>" disabled style="display:none;margin-bottom:10px;" name="name" placeholder="NAME"><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row2['email']; ?>" disabled style="display:none;margin-bottom:10px;" name="email" placeholder="EMAIL"><br>
					<input class="bookid input__field input__field--chisato" type="text" value="<?php echo $row2['contact']; ?>" disabled style="display:none;margin-bottom:10px;" name="phone" placeholder="PHONE"><br>
					<input class="bookid input__field input__field--chisato" type="date" value=""  id="sidate" style="display:none;margin-bottom:10px;" name="sdate" placeholder="STARTING DATE">
					<input class="bookid input__field input__field--chisato" type="date" value=""  id="lidate" style="display:none;margin-bottom:10px;" name="ldate" placeholder="LAST DATE">
<!-- 					<input class="bookid" id="bookbutton" type="submit" value="BOOK NOW!" style="display:none;-" name="hallbook"><br>
 -->				<button class="bookid" id="avail" type="button" style="display:none;" onclick="checkavail()"> BOOK NOW!! </button>
				</form>
			</div>
		</div>
	</div>

	
<br><br><br>
<hr>

		
	<!--//banner-->


	<!--//app-->
	<!--reviews_sec-->
	<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">Our Happy Customers</h3>
			<div class="inner-sec-wthree-agileits">
				<!---->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="images/t3.jpg" alt=" " class="img-fluid" />
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
										<img src="images/t1.jpg" alt=" " class="img-fluid" />
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
										<img src="images/t4.jpg" alt=" " class="img-fluid" />
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
				<!--  Option to read all the reviews --><br>
		<a class="review_button" href="reviews.php"> <span>See More<span> </a>
			</div>
		</div>
	</section>

	<section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">Contact Us</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="#" method="post">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
							</label>
							</span>
							<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
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
	</section>

    <?php include './footer.php'; ?>

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
		// for calender
		YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {

		// Create a new instance of calendar, placing it in
		// #mycalendar container, setting its width to 340px,
		// the flags for showing previous and next month's
		// dates in available empty cells to true, and setting
		// the date to today's date.
		var calendar = new Y.Calendar({
		contentBox: "#mycalendar",
		width:'340px',
		showPrevMonth: true,
		showNextMonth: true,
		date: new Date()}).render();

		// Get a reference to Y.DataType.Date
		var dtdate = Y.DataType.Date;

		// Listen to calendar's selectionChange event.
		calendar.on("selectionChange", function (ev) {

		// Get the date from the list of selected
		// dates returned with the event (since only
		// single selection is enabled by default,
		// we expect there to be only one date)
		var newDate = ev.newSelection[0];

		// Format the date and output it to a DOM
		// element.
		Y.one("#selecteddate").setHTML(dtdate.format(newDate));
		});


		// When the 'Show Previous Month' link is clicked,
		// modify the showPrevMonth property to show or hide
		// previous month's dates
		Y.one("#togglePrevMonth").on('click', function (ev) {
		ev.preventDefault();
		calendar.set('showPrevMonth', !(calendar.get("showPrevMonth")));
		});

		// When the 'Show Next Month' link is clicked,
		// modify the showNextMonth property to show or hide
		// next month's dates
		Y.one("#toggleNextMonth").on('click', function (ev) {
		ev.preventDefault();
		calendar.set('showNextMonth', !(calendar.get("showNextMonth")));
		});
		});
	</script>

		<script>
			function booking(){
				document.getElementById("democal").style.display = "block";				
				document.getElementById("start").style.display = "block";
				document.getElementById("last").style.display = "block";
				document.getElementById("select-date").style.display = "block";
				for(i=0;i<6;++i){
					document.getElementsByClassName("bookid")[i].style.display = "block";
				}
				
			}

			function setstart(){
				var x = document.getElementById("selecteddate").innerHTML;
				var z = document.getElementById("sidate");
				z.value = x;
			}

			function setlast(){
				var z = document.getElementById("lidate");
				var x = document.getElementById("selecteddate").innerHTML;
				z.value = x;
			}

			function checkavail(){
				var d1 = document.getElementById("sidate").value;
				var d2 = document.getElementById("lidate").value;

				var d = [];
				//give $hid to d[2]
				d[0] = d1; d[1] = d2; d[2] = 1;

				var date = JSON.stringify(d);
				var x = new XMLHttpRequest();

				x.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200)
					{
						var respObj = JSON.parse(this.responseText);
						if(respObj == 1){
							//alert("Hall is AVAILABLE for booking !!");
							//book the hall
							document.getElementById("bookingform").submit();
						}
						else if(respObj == 0){
							alert("Hall is NOT available for booking. Please check for another date");
						}else{
							alert("Please choose a valid date");
						}
					}

				};

				x.open("GET","hall_avail.php?x="+date);
				x.send();
			}
		</script>
</body>

</html>