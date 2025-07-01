<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	 $userName ="";
      $password ="";

	$userName=$_REQUEST["name"];

	$password=$_REQUEST["password"];

	if (empty($userName)) {
		
	   header('location: login.php?error=empty_username');

	}elseif (empty($password)) {
		
		header('location: login.php?error=empty_password');
	}else{

          $s_uname = $_SESSION['user_uname'];
          $s_password=$_SESSION['user_password'];

          if ($s_uname == $userName && $s_password == $password) {
          	

          	header('location: logged_in_dashbord.php');

          }elseif ($s_uname != $userName) {


            header('location: login.php?error=invalid_user');

          }elseif ($s_password != $password) {
          	
          	header('location: login.php?error=password_invalid');
          	

          }

	}
}else{

	header('location: login.php');
}

?>