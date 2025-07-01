<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<style>

	ul li{
            display: inline;
           }

      table{
      	border: 1px solid black;
      	border-collapse: collapse;
      }

      td{
        	border-bottom: 1px solid black;
        }

    </style>
</head>
<body>
  <?php

   session_start();

    $nameError="";
    $emailError="";
    $unameError="";
    $passError="";
    $cpassError="";
    $genderError="";
    $dateError="";
    
	
    
    $name="";
    $email="";
    $uname="";
    $password="";
    $cpassword="";
    $gender="";
    $date="";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])) {

        $nameError = "Name cannot be Empty";

        header('location: registration.php');

  } elseif(!empty($_POST["name"])) {

    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
     $nameError = "Must start with a letter, And Only letters and white space allowed";

      header('location: registration.php');

    }
   } 
   if(!empty($_POST["name"])){
       $name = test_input($_POST["name"]);
        $n=strlen($name);
        $m=2;
        if ($n < $m) {
        $nameError="Required at least two words";

        header('location: registration.php');
     }else{
      
         $_SESSION['user_name'] = "$name";
      }

     }

     /*--------Email validation-------*/

      if (empty($_REQUEST["email"])) {

    $emailError = "Email field cannot be empty";

     header('location: registration.php');

     } else {

    $email = test_input($_REQUEST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailError = "Invalid email format";

      header('location: registration.php');

    }

    $_SESSION['user_email'] = "$email";

    }

    /*-------Uname Validation-----*/

    if (empty($_POST["uname"])) {

    $unameError = "You have to Give an userName";

    header('location: registration.php');

  } elseif(!empty($_POST["uname"])) {

    $uname = test_input($_POST["uname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
      $unameError = "Must start with a letter, And Only letters and white space allowed";

      header('location: registration.php');
    }
   } 
   if(!empty($_POST["uname"])){
       $uname = test_input($_POST["uname"]);
        $n=strlen($uname);
        $m=2;

        if ($n < $m) {
        $unameError="Required at least two words";
        header('location: registration.php');

     }else{
      
      
         $_SESSION['user_uname'] = "$uname";
      }

     }

     /*----------PassWord------------*/

      if (empty($_REQUEST["password"])) {

         $passError = "Give a password";
         header('location: registration.php');

         } else {
           $password = test_input($_REQUEST["password"]);
          
           $_SESSION['user_password'] = "$password";
          
        } 

     /*--------Confirm Password------*/

     if (empty($_REQUEST["cpassword"])) {

         $cpassError = "confirm your password";
         header('location: registration.php');

         } else {

         	$cpassword = test_input($_REQUEST["cpassword"]);

             if ($password == $cpassword ) {

             	$_SESSION['user_cpassword'] = "$cpassword";
         		
         	}else{

         		$cpassError="password did not matched";
         		header('location: registration.php');

         	}
           
        } 

    /*-------Gender Validation------*/

      if (empty($_REQUEST["gender"])) {

         $genderError = "Gender is required";

         header('location: registration.php');

         } else {

           $gender = test_input($_REQUEST["gender"]);
          
          $_SESSION['user_gender'] = "$gender";
        }


    /*---------Date Of Birth-------*/
    
          if (empty($_REQUEST["date"])) {

         $dateError = "Enter date of Birth";
         header('location: registration.php');

         } else{

          $date= test_input($_REQUEST["date"]);

         $_SESSION['user_dob'] = "$date";

        }

if (strlen($nameError)==0 && strlen($emailError)==0 && strlen($unameError)==0 && strlen($passError==0) && strlen($cpassError)==0 && strlen($genderError)==0 && strlen($dateError)==0) {

      	  header('location: login.php');
         	
         }   

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


	?>


<!----------Html_code----------->

  <table width="100%">
  	<tr style="height: 30px">
		<td><img align="left" src="logo.PNG" height="60px" width="100px"></td>
		<td width="700px"></td>
		<td >
			<ul type="none" >
				<li><a href="Public_home.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="registration.php">Registration</a></li>
			</ul>
		</td>
	</tr>
    <tr>
    	<td colspan="3" >

    	<div align="center">

          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          	<fieldset style="width: 700px; height: 470px;">
          		<legend> Registration</legend>

	          <table style="width: 670px; height: 460px; border: none;" >
		         
		        <tr >
			        <td >Name</td>
			        <td >:<input type="text" id="name" name="name" value="<?php echo $name;?>">
			        	    <span>* <?php echo $nameError;?></span>

			        </td>
			        
		        </tr>
		        <tr>
		        	<td>Email</td>
		        	<td>:<input type="email" id="email" name="email">
		        		  <span>* <?php echo $emailError;?></span>
		        	</td>
		        	
		        </tr>
		        <tr>
		        	<td>User Name</td>
		        	<td>:<input type="text" id="uname" name="uname">
		        		 <span>* <?php echo $unameError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Password</td>
		        	<td>:<input type="Password" id="password" name="password">
		        		<span>* <?php echo $passError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Confierm Password</td>
		        	<td>: <input type="Password" id="cpassword"  name="cpassword">
		        		<span>* <?php echo $cpassError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Gender</td>
		        	<td>
		        		:<input type="radio" id="male" name="gender" value="Male"> Male
                        <input type="radio" id="female" name="gender" value="Female"> Female
                        <input type="radio" id="other" name="gender" value="Other"> Other 
                        <span >* <?php echo $genderError;?></span>
		        	</td>
		        	
		        </tr>
		        <tr>
		        	<td>Date of Birth</td>
		        	<td>:<input type="Date" id="date" name="date">
		        		<span >* <?php echo $dateError;?></span>
		        	</td>
		        	
		        </tr>

		       
		        <tr>
		        	<td  align="right" colspan="2" style="border-bottom: none;">
		        		<input type="submit" name="submit" value="Submit">
		        		<input type="reset" name="reset" value="Reset" >
		        	</td>
		        </tr>
	        </table>
	      </fieldset>
       </form>
      </div>
     </td>
    </tr>

    <tr>
    	<td align="center" colspan="3"><h2>CopyRight</h2></td>
    </tr>

  </table>

</body>
</html>