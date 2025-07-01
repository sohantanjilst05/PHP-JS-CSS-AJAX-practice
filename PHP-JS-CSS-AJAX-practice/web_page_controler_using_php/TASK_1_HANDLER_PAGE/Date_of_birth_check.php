<?php
if(!isset($_REQUEST['submit'])){
	echo "error";
}else{
	$dob= $_REQUEST['date'];
	echo "$dob";
}
?>