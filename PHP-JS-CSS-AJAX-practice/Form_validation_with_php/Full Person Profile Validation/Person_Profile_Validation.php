<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
	<style>
		span {
			color: orange;
		}
		td,tr{
			border: 1px solid black;
			height: 40px;
	
		     }

		th{
			height: 70px;
		  }

		table{
			border-collapse: collapse;
		     }

	</style>
</head>
<body>
	<?php

    $nameError="";
    $emailError="";
    $genderError="";
    $dateError="";
	$bloodError="";
	$picError="";
    $degError="";
    
    $name=""; 
    $email="";
	$gender="";
    $date="";
    $bloodgroup="";
    $degree="";

 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*----------Name Validation----------*/
    

		if (empty($_POST["name"])) {

    $nameError = "Name cannot be Empty";

  } elseif(!empty($_POST["name"])) {

    $name=$_POST["name"];

    if(!ctype_alpha($name)){

     $nameError="Only letters Allowed";
   }
}

   if(!empty($_POST["name"])){
      $name = test_input($_POST["name"]);
     $n=strlen($name);
      $m=2;
      if ($n < $m) {
      $nameError="Required at least two words";
    }else{
      echo "<h3> My Input Check:</h3>";
      echo $name;
    }

   }

     /*--------Email validation-------*/

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

    /*-------Gender Validation------*/

      if (empty($_REQUEST["gender"])) {
         $genderError = "Gender is required";
         } else {
           $gender = test_input($_REQUEST["gender"]);
          
          echo "<h3> Gender Input Check:</h3>";
          echo $gender; 
        } 

    /*---------Date Of Birth-------*/
    
          if (empty($_REQUEST["date"])) {
         $dateError = "Enter date of Birth";
         } elseif(!empty($_REQUEST["date"])) {

           $date=$_REQUEST["date"];
           if(is_numeric($date)!= 0)
           {
           	$dateError = "Date must be valid number";

           }
          echo "<h3> Date Input check:</h3>";
          echo $date;
        } 
    /*---------Blood Group--------*/

       if (empty($_REQUEST["blood"])) {
         $bloodError = "Blood group must be selected";
         } else {
           $bloodgroup = test_input($_REQUEST["blood"]);
          
          echo "<h3>Blood group Check:</h3>";
          echo $bloodgroup; 
        } 

    /*------Degree validation--------*/
    
    if (empty($_REQUEST["checkbox"])) {

          $degError = "You have to check at least one degree";

         } else {
           $degree = $_REQUEST["checkbox"];

           echo "<h3> Degree Input check:</h3>";
          
           foreach ($degree as $dg ) {
  	 
           echo $dg."<br>";
          }  
        }     

    /*-------Profile Picture------*/
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
<div align="center">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	          <table border="1px solid black" style="width: 700px;">
		         <tr>
			        <th colspan="3"> <h2>Person Profile</h2> </th>
		        </tr>
		        <tr >
			        <td >Name</td>
			        <td><input type="text" id="name" name="name" value="" >
                         <span>* <?php echo $nameError;?></span>
                     </td>
			        <td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Email</td>
		        	<td><input type="text" id="email" name="email" value="" >
                        <span>* <?php echo $emailError;?></span></td>
		        	<td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Gender</td>
		        	<td>
		        		<input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other  
                        <span >* <?php echo $genderError;?></span>
		        	</td>
		        	<td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Date of Birth</td>
		        	<td><input type="Date" id="date" name="date">
		                <span >* <?php echo $dateError;?></span></td>
		        	<td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Blood Group</td>
		        	<td>
		        		<select name="blood" id="cars">
  	                    <option value="">  </option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="Ab+">AB+</option>
                        <option value="O+">O+</option>
                       </select>
                      <span >* <?php echo $bloodError;?></span>
		        	</td>
		        	<td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Degree</td>
		        	<td>
		        		<input type="checkbox" id="ssc" name="checkbox[]" value="Ssc">Sse
    
                        <input type="checkbox" id="hsc" name="checkbox[]" value="Hsc">Hsc
   
                        <input type="checkbox" id="bsc" name="checkbox[]" value="Bsc">Bsc 
                        <span>* <?php echo $degError;?></span>
		        	</td>
		        	<td width="20px"></td>
		        </tr>
		        <tr>
		        	<td>Photo</td>
		        	<td colspan="2"><input type="file" id="picture" name="picture">
		                            <span >* <?php echo $picError;?></span>
		             </td>
		        	
		        </tr>
		        <tr>
		        	<td colspan="3"></td>
		        </tr>
		        <tr>
		        	<td align="right" colspan="3">
		        		<input type="submit" value="Submit">
		        		<input type="reset" value="Reset" >
		        	</td>
		        </tr>
	        </table>
</form>
</div>
</body>
</html>