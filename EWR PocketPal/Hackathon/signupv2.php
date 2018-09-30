<?php
$conn = mysqli_connect("localhost","root","","ewr_data") 
or die(mysqli_error($conn));
parse_str($_POST['serialize'], $data);
$name=$data['name'];
$username=$data['username'];
$password=$data['password'];
$gender=$data['gender'];
$Zipcode=$data['Zipcode'];
$phone=$data['phone'];
$state=$data['state'];
$district=$data['district'];
$dob=$data['BirthDay'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ewrinfo(`name`,`username`,`password`,`gender`,`zipcode`,`phoneno`,`state`,`district`,`dob`) VALUES ('$name','$username','$password','$gender','$Zipcode','$phone','$state','$district','$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	//$myJSON= json_decode($conn);
//echo $myJSON;
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>