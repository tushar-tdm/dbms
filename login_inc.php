<?php

	session_start();
	include_once 'db.php';

	if(isset($_POST['login'])){
	
		$user = mysqli_real_escape_string($conn,$_POST['uid']);
		$pass = mysqli_real_escape_string($conn,$_POST['pwd']);

		//echo $user." ".$pass;

		if(empty($user) || empty($pass)){
			header("Location: login/login.html?login=emptyfield");
			exit();
		}
		else{
			$sql = "SELECT * from `users` WHERE `user_id`='$user'";
			$result = mysqli_query($conn,$sql);
			$result_check = mysqli_num_rows($result);

			if($result_check == 0){
				//echo 'user not found!';
				header("Location: login/login.html?login=no user found");
				exit();
			}
			else{
				if($row = mysqli_fetch_assoc($result))
				{
					if(password_verify($pass,$row['pass'])){
						$_SESSION['uid'] = $user;
						header("Location: index.php?login=success");						
					}
					else{
						header("Location: login/login.html?login=wrong_password");
					}
				}
			}
		}
	}
