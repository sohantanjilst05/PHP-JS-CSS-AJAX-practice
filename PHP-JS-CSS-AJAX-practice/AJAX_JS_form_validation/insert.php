<?php

require_once('service.php');


if(isset($_REQUEST['email_check'])){


  	$email_check = $_REQUEST['email_check'];

  	$flag2 = emailExist($email_check);

  	if($flag2){

  		echo "email allready exists";
  	}



  }



if(isset($_REQUEST['name'])){


if (isset($_REQUEST['name'])){

	$uname = $_REQUEST['name'];
}
if (isset($_REQUEST['email'])){


	$email = $_REQUEST['email'];
}
if (isset($_REQUEST['gender'])){

	$gender = $_REQUEST['gender'];
}
if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])){

	$day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];

	$dob = $day ."/". $month ."/". $year;

}

if (isset($_REQUEST['blood'])){

	$blood = $_REQUEST['blood'];


}

$flag = insertUser($uname,$email,$gender,$dob,$blood);

  
  if ($flag){

  	echo "DAta Inserted";

  }


}




?>

