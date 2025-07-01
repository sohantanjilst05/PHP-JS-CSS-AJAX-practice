<?php
if(!isset($_REQUEST['submit'])){
	echo "Select a Gender";
}else{
	$gen=$_REQUEST['gender'];
	echo "$gen";
}
?>