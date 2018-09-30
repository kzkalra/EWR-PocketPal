function funLogin(){
  var phoneno = $("#phoneno").val();
  var password = $("#password").val();
  alert(phoneno+"\n"+password);
	var form=check_form();
	if(form==true){
  $.getJSON("php/login.php","phone="+phoneno+"&password="+password,function(data){
      alert(data);
		
  })
  .done(function(){
	  window.open("home_test.html");
  })
  .fail(function(data,status,err){
    alert("Failed!!"+ data + status +err);
  });
	}
	else{
		alert("please enter valid details.");
	}
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
		
		if(flag1==0 && flag2==0)
			return true;
		
	}
}