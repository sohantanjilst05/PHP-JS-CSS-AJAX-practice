<?php

   session_start();

   $myfile="";
   $sp="|";

 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  /*------Id validation-----*/

    if (empty($_POST['id'])) {

         $idError="give a id";

        header('location:../interface/registration.php');
    }else{

         $id=$_REQUEST['id'];

        $myfile = fopen("user.txt", "a");

        fwrite($myfile, $id);
        fwrite($myfile, $sp);
    }


    /*----------PassWord------------*/

      if (empty($_REQUEST["password"])) {

         $passError = "Give your password";
         header('location:../interface/registration.php');

         } else{
           
            $password=$_REQUEST['password'];

             fwrite($myfile, $password);
             fwrite($myfile, $sp);

        }

    /*--------Confirm Password------*/

     if (empty($_REQUEST["cpassword"])) {

         $cpassError = "confirm your password";
         header('location:../interface/registration.php');


         }else{


          $cpassword = $_REQUEST["cpassword"];

          if ($password == $cpassword ){

             fwrite($myfile, $cpassword);
             fwrite($myfile, $sp);

          }else{

            $cpassError="password did not matched";
            header('location:../interface/registration.php');
          }
        }
  
	

  /*----------Name Validation----------*/

		if (empty($_POST["user_name"])) {

        $nameError = "Name cannot be Empty";
        header('location:../interface/registration.php');
       

  } elseif(!empty($_POST["user_name"])) {

    $name = $_POST["user_name"];

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
     $nameError = "Must start with a letter";

      }
   } 
   if(!empty($_POST["user_name"])){
       $name = $_POST["user_name"];
        $n=strlen($name);
        $m=2;
        if ($n < $m) {
        $nameError="Required at least two letter";

        }else{
      
         fwrite($myfile, $name);
         fwrite($myfile, $sp);

      }

     }

     

     /*-------Type validation------*/

      if (empty($_REQUEST["type"])) {

         $typeError = "type Required";

         

         } else {

          $type= $_REQUEST['type'];
           fwrite($myfile, $type . "\n");

           header('location:../interface/registration.php');
        } 


        

    
           
         
  }


    


  ?>