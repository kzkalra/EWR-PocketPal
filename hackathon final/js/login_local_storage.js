function funLogin(){
  var phoneno = $("#phoneno").val();
  var pswd = $("#password").val();
  console.log(phoneno+"\n"+pswd);
	var flag1=0;
		var flag2=0;
		//var flag3=0;
		
		if(!$.isNumeric(phoneno))
		{
			flag1=1;
		}
		if(phoneno.length != 10){
			console.log("Enter a valid mobile phone number");
			flag2=1;
		}
		
		if(flag1==0 && flag2==0)
		{
        $.ajax({
			url: 'http://172.16.19.155/hackathon/php/login.php',
            type: 'post',
			data: {"phoneno": phoneno, "password": pswd},
            dataType: 'json',
            success: function (result) {
				console.log(result);
				
				if (typeof (Storage) !== "undefined") {
				Object.keys(result).forEach(function(k){
					console.log(k + ' - ' + result[k]);
					localStorage.setItem(k, result[k]);
					
				});
				
				//alert("local storage done");
			}
			else {
					alert("Sorry, your browser does not support web storage...");
			}
			window.location = "home_v2.html";
            }
			})
			.fail(function(data,status,err){
				console.log("Failed!!"+ data + status +err);
			});
    }
	else{
		console.log("please enter valid details.");
	}

  }
  
