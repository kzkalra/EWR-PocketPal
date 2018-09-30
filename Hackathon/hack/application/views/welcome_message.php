<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = $this->config->site_url();
?>
<html>
	<head>
		<title>
		Login Page
		</title>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="signup.css" media="all" />
		<link rel="stylesheet" type="text/css" href="demo.css" media="all" />

		<script>
		// Write Your Script Here
		</script>
		<style>
			div {
			text-align: center;
			}
			b {
			color: grey;
			text-align: left;
			}
			img {
			width: 30%;
			height: 30%;
			}
			.space {
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
					<form name="registration" method="post" action="<?=$base_url;?>/welcome">
						<div class="login">
							<div class="container">
								<br>
								<label>
									<b>
									<font size="4">Username</font>
									</b>
								</label>
								<input type="text" placeholder="Enter your Username" id="email" name="email" required>
								<label>
									<b>
									<font size="4">Password</font>
									</b>
								</label>
								<input type="password" placeholder="Enter your Password" name="password" id="password" required>
								<input type="submit" name="submit" id="submit" value="LOGIN" class="waves-effect waves-light btn login">
								<h6 align="center"><font style="color:red; font-size: 12px;text-align:center;"><?php if (isset($error)) {
	echo $error;
}
?></font></h6>
							</div>
							<p id="signup">Don't have account?
								<a class="snup" href="login_new.html" id="signup">Sign up here</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>