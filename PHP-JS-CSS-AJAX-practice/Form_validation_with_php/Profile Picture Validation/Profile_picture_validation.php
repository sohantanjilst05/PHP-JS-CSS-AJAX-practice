<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture Upload</title>
</head>
<body>
	<?php
	$idError="";
	$id="";
	$picError="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (empty($_REQUEST["number"])) {

         $idError = "Enter Your Id";

         } elseif(!empty($_REQUEST["number"])) {


           $id=test_input($_REQUEST["number"]);
           
           if(is_numeric($id)!= 1)
           {
           	$idError = "Your id must be number";

           }
          echo "<h3> Id check:</h3>";
          echo $id;
        } 

        if (empty($_POST["Picture"])) {
          $picError = "Picture field cannot be empty";
              }
        
    }

    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  } 

    ?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
		<legend>Profile Picture</legend>
		 User Id  <input type="text" id="name" name="number">
		 <span >* <?php echo $idError;?></span> <br><br>
		
		 Picture  <input type="file" id="picture" name="picture">
		 <span >* <?php echo $picError;?></span>
		 <hr>
         <input type="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>