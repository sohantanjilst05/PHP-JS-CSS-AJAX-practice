<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$realpassword=$_SESSION['user_password'];


	$current_pass=$_REQUEST["crpassword"];

	$new_pass=$_REQUEST["npassword"];

	$retyped_new_pass=$_REQUEST["repassword"];

	if ($realpassword == $current_pass) {

		if ($new_pass == $retyped_new_pass) {

			$_SESSION['user_password'] = $retyped_new_pass;

			header('location: logged_in_dashbord.php');

		}else{

			header('location: change_password.php?error=incorrect_newpass');
		}
	}else{

		header('location: change_password.php?error=current_pass_incorrect');

	}


}else{

	header('location: login.php');
}
?>