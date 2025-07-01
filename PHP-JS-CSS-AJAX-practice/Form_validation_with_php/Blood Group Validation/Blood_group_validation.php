<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>
	<?php
	$bloodError="";
	$bloodgroup="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (empty($_REQUEST["blood"])) {
         $bloodError = "Blood group must be selected";
         } else {
           $bloodgroup = test_input($_REQUEST["blood"]);
          
          echo "<h3>Blood group Check:</h3>";
          echo $bloodgroup; 
        } 
        
    }

    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
  Blood Group: <select name="blood" id="cars">
  	           <option value="">  </option>
               <option value="A+">A+</option>
               <option value="B+">B+</option>
               <option value="Ab+">AB+</option>
               <option value="O+">O+</option>
              </select>
              <span >* <?php echo $bloodError;?></span>
              <hr>
  <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>