<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<td colspan="3">
		<div align="center">
		<form method="POST" action="login_check.php">

			  <fieldset style="width: 400px">
				<legend>Log in</legend>
                  <table style="border: none;width: 400px;">
                  	<tr>
                  	  <td style="border-bottom: none;">
                     <div>
                     	<?php

	                          if(isset($_GET['error'])){
		
		                         if($_GET['error'] == "empty_username"){
			                            echo "user name empty";
		                                 }

		                             if($_GET['error'] == "empty_password"){
			                            echo "Give your password";
		                                }

		                             if($_GET['error'] == "invalid_user"){
			                            echo "user Invalid";
		                                  }

		                              if ($_GET['error'] == "password_invalid") {
		                              	echo "invalid Password";
		                              }
	                                }

                                 ?>
                     </div><br>
                       </td>
                       </tr>
                       <tr><br>
                       	<td style="border-bottom: none;">
                       	
					User Name: <input type="text" id="name" name="name"> <br><br> 

                    Password:  <input type="Password" name="password"> <br>

                    <hr>

                    <input type="checkbox" name="remember" value=""> Remember Me<br><br>

                    <input type="submit" name="submit" value="Submit">

                    <a href="forgot_password.php">Forgot Password?</a>
                     </td>
                    </tr>

                  </table>
				</fieldset>
			</form>
			
		 </div>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="3"><h2>Copy Right</h2></td>
	</tr>
</table>
</body>
</html>