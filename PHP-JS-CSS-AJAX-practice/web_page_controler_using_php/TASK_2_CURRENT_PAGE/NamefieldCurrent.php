<?php
if(isset($_REQUEST['submit'])){
	$name= $_REQUEST['name'];
	echo "$name";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Field</title>
</head>
<body>
<form method="post">
	<fieldset style="width:200px;" >
		<legend>Name</legend>
		Name:<input type="text" name="name" value=""><br>
		     <hr>
		     <input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>