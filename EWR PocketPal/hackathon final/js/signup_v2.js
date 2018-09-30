function OnSignUpSubmit(){
  
      var name = $("#name").val();
      var gender = $("#gender").val();
      var dob = $("#dob").val();
	  var state = $("#listBox").val();
      var district = $("#secondlist").val();
      var pswd = $("#password").val();
	  var repassword = $("#repassword").val();
      var phoneno = $("#phoneno").val();
   
      if(name==''||state==''||pswd==''||district==''||gender==''||dob==''||phoneno=='')
      {
        alert("Please Fill All Details");
      }
      else
      {
		
		var flag1=0;
		var flag2=0;
		var flag3=0;
		
		if(!$.isNumeric(phoneno))
		{
			flag3=1;
		}
		if(phoneno.length != 10){
			alert("Enter a valid mobile phone number");
			flag1=1;
		}
		
		if(pswd.localeCompare(repassword) != 0){
			alert("Both the passwords don't match!");
			flag2=1;
		}
		if(flag1==0 && flag2==0 && flag3==0){
			alert(name + " "+state+" "+gender+" "+dob+" "+district+" "+pswd+" "+phoneno);	
	
				$.ajax({
				url: 'http://172.16.19.155/hackathon/php/signup.php',
				type: 'post',
				data: {"name": name,
							"gender": gender,"dob": dob, "state": state,  "district": district, "password": pswd, "phoneno": phoneno},
				dataType: 'json',
				success: function (result) {
               alert(result);
            },
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		
    });


		}
		else{
			alert("Please fill valid details.");
		}
	  }
      
    }
