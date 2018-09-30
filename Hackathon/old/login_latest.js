<html>
<head>
  <title>
    Login Page
  </title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="signup.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

<style>
    div {
      text-align: center;
    }
    b {
      color: grey;
      text-align: left;
    }
  img
  {
    width: 30%;
    height: 30%;
  }
.space
{
  height: 10%;
}

</style>

</head>

<body class="card-panel teal lighten-2">
    <div class="card-panel red accent-1">
      <div class="space">
        <h1>EWR POCKET PAL</h1>
      </div>
    </div>

    <div class="container">
      <div class="container">
        <div class="card-panel grey lighten-5">


          <div class="login">
          <form method="POST" action="login.php" id="loginform">
          <div class="container">
            <br>
             <label><b><font size = "4"> Phone Number</font></b></label>
             <input type="text" placeholder="Enter your Name" name="phoneNo" required>

             <label><b><font size = "4">Password</font></b></label>
             <input type="password" placeholder="Enter your Password" name="password" required>

             <button class="waves-effect waves-light btn" type="submit" onclick="OnLoginSubmit()">Login</button>
           </div>
           </form>
           <p id="signup">Don't have account? <a class="snup" href="#" id="signup">Sign up here</a></p>
         </div>



       <div class="signup">
         <form method="POST" action="signup.php" id="signupform">

         <div class="container">
            <br><br>
            <p class="contact"><label for="name">Name</label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">     
                <p class="contact"><label for="username">Create a username</label></p> 
          <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
           
                <p class="contact"><label for="password">Create a password</label></p> 
          <input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
          <input type="password" id="repassword" name="repassword" required=""> 
        
           
               <p class="contact"><label for="Birthday">Birthday</label></p> 
              <input type="date" name="BirthDay"> 
              <div >

              <p ><label for="gender">Gender</label></p> 
                <input type="text" id="gender" name="gender" placeholder="Female or male" required=""> 
           
          </div>

              <p class="contact"><label for="state">State</label></p> 
          <input type="text" id="state" name="state" required=""  > 

           <p class="contact"><label for="state">District</label></p> 
          <input type="text" id="district" name="district" required=""  > 
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">    

           <button class="waves-effect waves-light btn" type="submit" onclick="OnSignUpSubmit()">Register</button>
          </div>
          </form>
        <p id="login">Already have an account? <a class="sign" href="#" id="login">Sign in</a></p>
        </div>


          </div>
        </div>
      </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>

  $(document).ready(function(){
      $(".signup").hide();
      $("#signup").click(function(event){
          event.preventDefault();
          $(".login").fadeToggle("slow");
          $(".signup").toggle(1000);
      });
      $("#login").click(function(event){
          event.preventDefault();
          $(".signup").fadeToggle("slow");
          $(".login").toggle(1000);
      });
  });
  
  function OnLoginSubmit() {
    //send data to the autentication php script
    
          
            //change the ids to the one in vidhi's html code
          var name = $("#uname").val();
          var password = $("#psw").val();
          //var dataString = 'name1='+ name + '&password1='+ password;
          if(name==''||password=='')
          {
            alert("Please Fill All Details");
          }
          else
          {
            // AJAX Code To Submit Form.
            var formData = $("loginform").serialize();
            $.ajax({
              type: "POST",
              url: "https://localhost/C:/xampp/htdocs/project/login.php", //change to shubham's php script name
              data: formData,
              cache: false,
              })
              .done(function(result){
              	if(result == 'true'){
        		window.open("home.html");
                alert("You logged in successfully!");
        		}
        		else{
        		alert("Login Failed! Please try again.");
        		}
            })
                
              .fail(function(data) {
                alert("Login Failed! Please try again.");
                document.getElementById("loginform").reset();
              });
			}
	}
	
	function OnSignUpSubmit(){
  
        //change the ids to the one in vidhi's html code
      var name = $("#name").val();
      var state = $("#state").val();
      var district = $("#district").val();
      var password = $("#password").val();
      var phone = $("#phone").val();
      // Returns successful data submission message when the entered information is stored in database.
      if(name==''||state==''||password==''||district==''||contact=='')
      {
        alert("Please Fill All Details");
      }
      else
      {
        // AJAX Code To Submit Form.
        var formData = $("#signupform").serialize();
        $.ajax({
        type: "POST",
        url: "https://localhost/C:/xampp/htdocs/project/signup.php", //change to shubham's php script name
        data: formData,
        cache: false,
        })
        .done(function(result){
        	if(result == 'true'){
        		window.open("home.html");
          		alert("You signed up successfully!");
        	}
        	else{
        		alert("Login Failed! Please try again.");
        	}
          
        //alert(result);
        })
        .fail(function(data) {
                alert("Connection Failed! Please try again.");
                //document.getElementById("signupform").reset();
        });
        
      }
      //return false; end of onclick function
    
}//end of onsignupsubmit

  
</script>
</body>
</html>
