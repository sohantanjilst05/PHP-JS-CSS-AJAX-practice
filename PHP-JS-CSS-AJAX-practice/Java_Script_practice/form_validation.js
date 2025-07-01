
function formValidation(){



	var name = document.getElementById('name').value.trim();
	var email = document.getElementById('email').value.trim();
	//var male = document.getElementById('male').value.trim();
	//var female = document.getElementById('female').value.trim();
	//var other = document.getElementById('other').value.trim();
	var gender = document.regForm.gender.value.trim();
	var day = document.getElementById('day').value.trim();
	var month = document.getElementById('month').value.trim();
	var year = document.getElementById('year').value.trim();
	var bloodGroup = document.regForm.bloodGroup.value.trim();
  var inputElements = document.getElementById('ch1').value;
  var inputElements = document.getElementById('ch2').value;
  var inputElements = document.getElementById('ch3').value;



	
	


   var name_flag = "";
   var email_flag = "";
   var gender_flag = "";
   var dob_flag = "";
   var blood_flag ="";
   var degree_flag = "";
   
   // Name Empty Check

	if (name == ""){

	   

		document.getElementById('name_err').innerHTML = "insert your name ";

		name_flag = "error";

	   //return false;

	}

	// Name must be start with a letter check

	if (name != ""){


		if (!(name[0].toLowerCase() >='a' && name[0].toLowerCase() <='z')){

          

		  document.getElementById('name_err').innerHTML = "name must be start with a letter";

      name_flag = "error";

	      return false; 

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

		//return false;

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

		 //return false;

        }else if (doubleDash >= 0){

          

		  document.getElementById('name_err').innerHTML = "name cannot contain Double dash (--) or more";

      name_flag = "error";

		  //return false;

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

		//return false;

   }


   }

   // Name Must be at least two words 

   if (name != ""){

  if (name.split(" ").length < 2){

		

		document.getElementById('name_err').innerHTML = "name must be at least two words";

    name_flag = "error";

		//return false;


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

		//return false;

     }else if ( atposition < 1 || firstDot < 1 ){

         

		document.getElementById('email_err').innerHTML = "(.) and (@) is not allowed in first Position";

    email_flag = "error";

		//return false;

     }else if (!(atposition+2 < lastDot)){

           

		document.getElementById('email_err').innerHTML = "put atleast two character after(@)";

    email_flag = "error";

		//return false;

     }else if (!(lengthOfEmail-1 >= lastDot+2)){

       

		document.getElementById('email_err').innerHTML = "put atleast two character after last dot";

    email_flag = "error";

		//return false;

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

  blood_flag = "error";

  }

  if (blood_flag == "" ){
     
      var obj4 = document.getElementById('blood_err').innerHTML = "";  
  }

if(!ch1.checked && !ch2.checked && !ch3.checked){

    document.getElementById('degree_err').innerHTML = "choose degree";

    degree_flag = "error";

}

if(degree_flag == ""){

  var obj5 = document.getElementById('degree_err').innerHTML = "";
}


	if( name_flag != "" || email_flag != "" || gender_flag != "" || dob_flag != "" || blood_flag != "" || degree_flag != ""){

      
        return false;


	}else{

           alert("Form submitted");

	}





}