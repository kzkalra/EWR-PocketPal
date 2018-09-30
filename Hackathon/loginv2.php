<?php
header('Access-Control-Allow-Origin: *');
 $conn = mysqli_connect("localhost","root","","ewr_data") 
or die(mysqli_error($conn));

parse_str($_POST['serialize'], $data);
$username=$data['phoneNo'];
$password=$data['password'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT `password` FROM `ewrinfo` where `username` = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		if($row["password"] === $password)
		{
			$user_type = $row["user"];
			if ($user_type == "admin")
			{
				$url = "admin_homepage.html";
				header('Access-Control-Allow-Origin: *'); 
				header('Content-type: application/json');

				echo json_encode($url);//url goes here
			}
			//echo "password: " . $row["password"].  "<br>";
			elseif ($user_type == "ewr") {
				# code...
				$outpt=>$district = $row["district"];
				$outpt=>$state = $row["state"];
				$outpt=>$url = "ewr_homepage.html";
				header('Access-Control-Allow-Origin: *'); 
				header('Content-type: application/json');

				echo json_encode($outpt);
			}
			

				// we are sending district and state as a json
		}
		else{
			$a = 'X';
			header('Access-Control-Allow-Origin: *'); 
			header('Content-type: text/html');

			echo $a;
			//we are returning a null json object when authentication fails
		
    }
}
} else {
    $b = 'Y';
    header('Access-Control-Allow-Origin: *'); 
	header('Content-type: text/html');
	echo $b;
	//we are returning a null json object when authentication fails
}

$conn->close();
?>