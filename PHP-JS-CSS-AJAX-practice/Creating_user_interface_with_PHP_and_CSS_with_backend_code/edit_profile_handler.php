<?php

   session_start();

    $name="";
    $email="";
    $gender="";
    $date="";
/*-----edit name validation-----*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["editName"])) {

        /*$nameError = "What is your new name";*/

        header('location: edit_profile.php?error=empty_username');

  } elseif(!empty($_POST["editName"])) {

    $name = test_input($_POST["editName"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

     /*$nameError = "Must start with a letter, And Only letters and white space allowed";*/

      header('location: edit_profile.php?error=name_incorrect');

    }
   } 
   if(!empty($_POST["editName"])){

       $name = test_input($_POST["editName"]);
        $n=strlen($name);
        $m=2;
        if ($n < $m) {
        /*$nameError="Required at least two words";*/

        header('location: edit_profile.php?error=at_least_two_letters');
     }else{
      
         $_SESSION['user_name'] = "$name";
      }

     }

     /*-------Edit Email Validation-----*/

     if (empty($_REQUEST["editEmail"])) {

    /*$emailError = "Email field cannot be empty";*/

     header('location: edit_profile.php?error=email_empty');

     } else {

    $email = test_input($_REQUEST["editEmail"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

     /*$emailError = "Invalid email format";*/

      header('location: edit_profile.php?error=incorrect_email');

    }

    $_SESSION['user_email'] = "$email";

    }

    /*-----Edit gender Validation---*/

    if (empty($_REQUEST["egender"])) {

         /*--$genderError = "Gender is required";*/

         header('location: edit_profile.php?error=gender_required');

         } else {

           $gender = test_input($_REQUEST["egender"]);
          
          $_SESSION['user_gender'] = "$gender";
        }


    /*--Edit date of birth Validation--*/

     if (empty($_REQUEST["editDate"])) {

         /*--$dateError = "Enter date of Birth";*/

         header('location: edit_profile.php?error=date_empty');

         } else{

          $date= test_input($_REQUEST["editDate"]);

         $_SESSION['user_dob'] = "$date";

     }

 header('location: edit_profile.php');

 }else{

 	header('location: edit_profile.php');
 }

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>