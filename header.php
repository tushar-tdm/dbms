<?php
	$uid = $_SESSION['uid'];
?>
<html>
	
<header>
		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="index.html">
					<i class="far fa-gem"></i>WedKnot</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
								<li class="nav-item">
								  <a class="nav-link cool" href="index.php">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
								  <a class="nav-link cool" href="about.html">About</a>
								</li>
								
								<li class="nav-item">
										<a class="nav-link cool" href="contact.html">Contact</a>
								</li>
								<div class="topnav-right">	
									<li class="nav-item" style="float:right">
										<a class="nav-link cool" href="login/login.html"> Log In </a>
									</li>
									<li class="nav-item" style="float:right">
										<a class="nav-link cool" href="login/signup.html"> Sign Up </a>
									</li>
								</div>
						</ul>
			
				</div>

			</nav>

		</div>
    </header>
    </html>