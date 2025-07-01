<!DOCTYPE html>
<html>
<head>
	<title>Email Field</title>
</head>
<body>
	<?php

  $emailError="";
  $email="";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_REQUEST["email"])) {
    $emailError = "Email field cannot be empty";

  } else {

    $email = $_REQUEST["email"];

    $aPosition= stripos($email,"@");
    $fdot= strrpos($email,".");
    
    if ($aPosition>0 && strlen($email)>($fdot+1) && !stripos($email," ") ) {

     	    echo $email;

     	}else{

  	         echo "Invalid email";

           }

       }
   }
   

  ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email: <br><br><input type="text" id="email" name="email" value="" >
           <span>* <?php echo $emailError;?></span> <br><br>
           
           <input type="submit" name="submit" value="Submit">

   </form>
</body>
</html>