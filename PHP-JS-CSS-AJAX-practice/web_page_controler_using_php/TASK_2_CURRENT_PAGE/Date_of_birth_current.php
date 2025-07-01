<?php
if(!isset($_REQUEST['submit'])){
	echo "Enter Date of Birth";
}else{
	$dob= $_REQUEST['date'];
	echo "$dob";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date of birth</title>
</head>
<body>
<form method="post">
	<fieldset style="width: 200px;">
		<legend>DATE OF BIRTH</legend>
		<form>
         <input type="Date" id="date" name="date"><br>
         <hr>
         <input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>