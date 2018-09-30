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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>

  $(document).ready(function(){
      $("#loginbtn").click(function(event){
          event.preventDefault();
      });
  $("#loginform").submit( function(){/*function OnLoginSubmit() {
    //send data to the autentication php script
            //change the ids to the one in vidhi's html code
          var nm = $("#uname").val();
          var pswd = $("#psw").val();
          var dataString = {"name": "name", "password" : "password"};
          if(nm==''||pswd=='')
          {
            alert("Please Fill All Details");
          }
          else
          {
            // AJAX Code To Submit Form.
            var formData = $("#loginform").serialize();
            //var formData = {"name":nm, "password":pswd};
            alert(formData);
            $.ajax({
              type: "POST",
              url: "loginv2.php", //change to shubham's php script name
              data: formData,
              cache: false,
              //dataType: "json"
              })
              .done(function(result){
                if(result.district == ' '){
                  window.open("home.html");
                  alert("You logged in successfully!");
                }
                else{
                  alert("Login Failed! Please try again.");
                }
              }) 
              .fail(function(data) {
                alert("Connection failed.");
              })

              .always(function (jqXHR) {
                  alert(jqXHR.status);
                //document.getElementById("loginform").reset();
              });

      }
  });*/

  var formData = $("#loginform").serialize();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("login successful");
      //document.getElementById("demo").innerHTML = this.responseText;
    }
    else
    {
      alert("connection failed. Status"+this.status);
    }
  };
  xhttp.open("POST", "loginv2.php", true);
  xhttp.send(formData);
}
);
});
  </script>
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
          <form id="loginform">
          <div class="container">
            <br>
             <label><b><font size = "4"> Phone Number</font></b></label>
             <input type="text" placeholder="Enter your Name" name="phoneNo" required>

             <label><b><font size = "4">Password</font></b></label>
             <input type="password" placeholder="Enter your Password" name="password" required>

             <button class="waves-effect waves-light btn" type="submit">Login</button>
           </div>
           </form>
           <p id="signup">Don't have account? <a class="snup" href="login_new.html" id="signup">Sign up here</a></p>
         </div>
        </div>
      </div>
    </div>
</body>
</html>
