<!DOCTYPE html>
<html>
<head>
	<title>employee Register</title>
</head>
<body>
<div align="center">
	<form>
		<fieldset style="width: 550px">
			<legend>Add Employee</legend>
			<table border="1px solid black" style="width: 500px;">
		         <tr>
			        <th colspan="3"> <h2>Add Employee</h2> </th>
		        </tr>
		        <tr >
			        <td >Name</td>
			        <td ><input type="text" id="name" name="name" value=""></td>
			        <td ><span id="name_err"></span></td>

		        </tr>
		        <tr>
		        	<td>Email</td>
		        	<td><input type="text" id="contact" name="contact"><br>

                      

		        	</td>
		        	<td ><span id="contact_err"></span></td>
		        </tr>
		        <tr>
		        	<td>Gender</td>
		        	<td>
		        		<input type="text" id="uname" name="uname" value="">
                    
		        	</td>
		        	<td ><span id="uname_err"></span></td>
		        </tr>
		        <tr>
		        	<td>Date of Birth</td>
		        <td>
		        	<input type="password" id="password" name="password" value="">
		        </td>
		        	<td ><span id="pass_err"></span></td>
		        </tr>
		 
		        <tr>
		        	<td align="right" colspan="3">
		        		<input type="button" name="Insert" value="Insert" onclick= "return registerValidation()">
		        		<input type="reset" value="Reset" >
		        	</td>
		        </tr> 
	        </table>
		</fieldset>
	</form>
</div>


<script type="text/javascript" src="../javaScript/register_validation.js"></script>
</body>
</html>