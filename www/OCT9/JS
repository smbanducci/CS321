//CS321: Web-Centric Programming//
//Shawna Banducci//

//from button code used in class 9/25//

//Showing source code from a cite that I was playing around with but can not seem to find the source to take it out as I did not use their code.//

<!--script src="/javascript/forms.js></script>
  <script>
  $("document").ready(function(){
	/** This is for when user submits form with the button **/
	$("#submit").click(function(){
    
//Want to use checkName funtion to actually check name input as well as email - checkEmail and phone number - checkPhone, but the submit button is not working correctly and therefore doesn't go into checks.//
   
//w3cSchools code: https://www.w3resource.com/javascript/form/email-validation.php//    
   function checkEmail( email ){
     if(email== ""){
       console.log("Please fill in email address!");
     } else {
       if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
          {
          return (true)
     }
     console.log ("You have entered an invalid email address!");
       return (false)
     }
   } 
  }
    
    checkEmail();
   
 //from psuedo code posted in google group//
   function checkPhone( phonenum ){
   if( phonenum == "" ){
     console.log("Please fill in phone number!");
   } else {
     if( phonenum.match(/\d{3}-?\d{3}-?\d{4}$/) ){
       // Correct format
     } else {
       // Incorrect formatting
     }
   }
}
    checkPhone();
	});

		$("#name").change(function(){
		console.log( "Something Changed" );
		checkName();
		});
	});
	  function checkName(){
    if( $.trim("name").val() ) == ""){
		  console.log( "Empty" );
		  $("#errorname").html("<p>You missed your own name</p>");
		  $("#errorname").addClass( "showerror" );
	}	else{
		   $("#errorname").html("").
		   $("#errorname").removeClass( "showerror" );
		}
	}
   </script>
<form action = "#" method="POST"</form>
<label for= "firstname">First Name: </label>
	<div class= "errorfirstname"></div>
	<input type= "text" name="firstname" id= "firstname">

 <br><br>
    
  <label for= "lastname">Last Name: </label>
	<div class= "errorlastname"></div>
	<input type= "text" name="lastname" id= "lastname">

 <br><br>
  
  <label for= "email"> Email Address: </label>
	<div class= "erroremail"></div>
	<input type= "text" name="email" id= "email">

 <br><br>

  <label for= "phonenum">Phone Number: </label>
	<div class= "phonenum"></div>
	<input type= "text" name="phonenum" id= "phonenum">

 <br><br>	
  
  <input type= "button" name= "submitbutton"
	id= "submitbutton" value= "Submit" >
	</form>	
