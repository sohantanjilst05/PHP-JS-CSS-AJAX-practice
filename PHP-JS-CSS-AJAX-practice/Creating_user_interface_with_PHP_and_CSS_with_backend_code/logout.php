<?php
    session_start();
	session_destroy();


	setcookie('view_profile', 'true', time()-1000, '/');
	
	header('location: login.php');



?>