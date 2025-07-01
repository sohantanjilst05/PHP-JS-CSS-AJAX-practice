

function formValidation(){



	var name = document.getElementById('name').value.trim();
	var email = document.getElementById('email').value.trim();
	var gender = document.regForm.gender.value.trim();
	var day = document.getElementById('day').value.trim();
	var month = document.getElementById('month').value.trim();
	var year = document.getElementById('year').value.trim();
	var bloodGroup = document.regForm.blood_group.value.trim();
	//var ssc = document.getElementById('ssc').value.trim();
	//var hsc = document.getElementById('hsc').value.trim();
	//var bsc = document.getElementById('bsc').value.trim();


   var name_flag = "";
   var email_flag = "";
   var gender_flag = "";
   var dob_flag = "";
   var bloodGroup_flag = "";
   //var ssc = "";
   //var hsc = "";
   //var bse = "";

   
   // Name Empty Check

	if (name == ""){

	   

		document.getElementById('name_err').innerHTML = "insert your name ";

		name_flag = "error";

	   

	}

	// Name must be start with a letter check

	if (name != ""){


		if (!(name[0].toLowerCase() >='a' && name[0].toLowerCase() <='z')){

          

		  document.getElementById('name_err').innerHTML = "name must be start with a letter";
      name_flag = "error";
	      

		}
	}

   // Name Cannot contain number check

   if (name != ""){

   var count = 0;
   var i=0;

   while (i < name.length){

        if ((name[i] >='0') && (name[i] <='9')){

   		count++;
   	}
   	i++
   }

   if (count != 0){

   	     

		document.getElementById('name_err').innerHTML = " only character ";

		name_flag = "error";

   }

   }

  // Name Can not contain Double Dot and Double Dash Check 

   if (name != ""){

        var dup = name.replace(/ /g, "");

        var doubleDot = dup.indexOf("..");
        var doubleDash = dup.indexOf("--");

        if (doubleDot >= 0){

        	

		 document.getElementById('name_err').innerHTML = "name cannot contain Double Dot (..) or more";
       
       name_flag = "error";
		 

        }else if (doubleDash >= 0){

          

		  document.getElementById('name_err').innerHTML = "name cannot contain Double dash (--) or more";

		  name_flag = "error";

        }


   }

   // Name can only contain A to Z or a to z and dash(-) or dot(.) check

   if(name != ""){
     
     var alphaCount = 0;
     var j = 0;

    var rpName = name.replace(/ |-/g,'');
    var dtName = rpName.replace(/\./g,'');

     while (j < dtName.length){

        if (!(dtName[j].toLowerCase() >='a' && dtName[j].toLowerCase() <='z')) {

   		  alphaCount++;

   	}

   	j++

   }

   if (alphaCount != 0){

   	     

		document.getElementById('name_err').innerHTML = " name only contain A to Z or a to z ";

		name_flag = "error";

   }


   }

   // Name Must be at least two words 

   if (name != ""){

  if (name.split(" ").length < 2){

		

		document.getElementById('name_err').innerHTML = "name must be at least two words";

		name_flag = "error";


	}

	}

  // If no error, changing the last error message with null
	
  if (name_flag == ""){

         var obj = document.getElementById('name_err').innerHTML = "";

         //return false;


    }

	

   // Email Empty Check

	if (email == ""){

	     

		document.getElementById('email_err').innerHTML = "Give your email address ";

		email_flag = "error";

		//return false;
	}

	

	if (email != ""){

        var notallowed = email.indexOf(".@");
        var notallowed1 = email.indexOf("..");
		var atposition = email.indexOf("@");
		var firstDot  = email.indexOf(".");
        var lastDot = email.lastIndexOf(".");
        var lengthOfEmail = email.length;

     if (notallowed >= 0 || notallowed1 >= 0){

          

		document.getElementById('email_err').innerHTML = "(.@) and (..) is not allowed ";

		email_flag = "error";

     }else if ( atposition < 1 || firstDot < 1 ){

         

		document.getElementById('email_err').innerHTML = "(.) and (@) is not allowed in first Position";

    email_flag = "error";

		

     }else if (!(atposition+2 < lastDot)){

         

		document.getElementById('email_err').innerHTML = "put atleast two character after(@)";

		email_flag = "error";

     }else if (!(lengthOfEmail-1 >= lastDot+2)){

         

		document.getElementById('email_err').innerHTML = "put atleast two character after last dot";

		email_flag = "error";

     }




	}

	if (email_flag == ""){

         var obj1 = document.getElementById('email_err').innerHTML = "";



    }

	if (gender == "" ){

	    

		document.getElementById('gender_err').innerHTML = "select your gender";

		gender_flag = "error";

		//return false;
	}

	if ( gender_flag == ""){

            var obj2 = document.getElementById('gender_err').innerHTML = "";

            

	}

  if (day == "" || month == "" || year == ""){

    document.getElementById('dob_err').innerHTML = "Date of Birth required";

    dob_flag = "error";



  }

  if (dob_flag == ""){

     var obj3 = document.getElementById('dob_err').innerHTML = "";

  }

  if (bloodGroup == ""){

  document.getElementById('blood_err').innerHTML = "blood group required";

  bloodGroup_flag = "error";

  }

  if (bloodGroup_flag == "" ){
     
      var obj4 = document.getElementById('blood_err').innerHTML = "";  
  }

	if( name_flag != "" || email_flag != "" || gender_flag != "" || dob_flag != "" || bloodGroup_flag != ""){

      
        return false;


	}else{

           sendToPhp();
           return true;

	}





}


function sendToPhp(){


  var name = document.getElementById('name').value.trim();
  var email = document.getElementById('email').value.trim();
  var gender = document.regForm.gender.value.trim();
  var day = document.getElementById('day').value.trim();
  var month = document.getElementById('month').value.trim();
  var year = document.getElementById('year').value.trim();
  var bloodGroup = document.regForm.blood_group.value;
  //var ssc = document.getElementById('ssc').value.trim();
  //var hsc = document.getElementById('hsc').value.trim();
  //var bsc = document.getElementById('bsc').value.trim();


  var httpr = new XMLHttpRequest();
  httpr.open('POST', 'insert.php', true);

  httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  httpr.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      
      document.getElementById('submit_response').innerHTML = this.responseText;
    }
  }


  httpr.send("name="+name+"&"+"email="+email+"&"+"gender="+gender+"&"+"day="+day+"&"+"month="+month+"&"+"year="+year+"&"+"blood="+bloodGroup);

  return true;
  
  



}

function emailCheck(){

  var email = document.getElementById('email').value.trim();

  var httpr = new XMLHttpRequest();
  httpr.open('POST', 'insert.php', true);

  httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  httpr.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){


      document.getElementById('email_exists').innerHTML = this.responseText;

    
    }
  }

  httpr.send("email_check="+email);
  

}