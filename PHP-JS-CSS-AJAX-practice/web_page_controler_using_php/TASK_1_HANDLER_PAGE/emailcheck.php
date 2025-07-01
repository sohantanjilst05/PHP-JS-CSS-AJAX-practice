<?php

if(isset($_REQUEST['submit'])){
	$email= $_REQUEST['email'];
	echo "$email";
}else{
	echo "error";
}
?>