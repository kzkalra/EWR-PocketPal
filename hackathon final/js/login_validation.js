function check_form()
{
	var flag1=0;
	var flag2=0;
	//var flag3=0;
	
	if(!$.isNumeric(phoneno))
	{
		flag1=1;
	}
	if(phoneno.length != 10){
		alert("Enter a valid mobile phone number");
		flag2=1;
	}
	
	/*if(!password.equals(repassword)){
		alert("Both the passwords don't match!");
		flag2=1;
	}*/
	if(flag1==0 && flag2==0)
		return true;
	
}