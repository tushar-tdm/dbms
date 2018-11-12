<?php
    session_start();
    include_once 'db.php';
    $cid = $_SESSION['cid'];

    $uid = $_SESSION['uid'];
    if($uid){
        include_once 'header_login.php';
        $sql = "SELECT * FROM `users` WHERE `user_id` = '$uid'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    }
    else{
        header("Location: login/login.html?Login_To_Continue");
        exit();
    }
?>

<html>
    <head>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    </head>

    <body>
    <section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">REVIEW US</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="#" method="post">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " disabled />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name"><?php echo $row['fname']." ".$row['lname']; ?></span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="rating" type="number" max="10" min="1" id="input-14" placeholder="Rate Us (1-10)" required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="rating"></span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder="" required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="">Subject</span>
							</label>
                            </span>
                            
							<textarea class="input__field input__field--chisato" name="review" type="text" id="input-15" placeholder="Your Review Here..." required="" ></textarea>
							<!-- <label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="">Review</span>
							</label> -->
							
<!-- 							<input placeholder="Your Review Here..." required="" name="review"> -->
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
    </body>
</html>

<?php 
    $rat = mysqli_real_escape_string($conn,$_POST['rating']);
    $rev = mysqli_real_escape_string($conn,$_POST['review']);

    $sql = "INSERT INTO `cat_review` (`cat_id`,`review`,`rating`,`user_id`) VALUES ('$cid','$rev','$rat','$uid')";
    $result = mysqli_query($conn,$sql);

?>