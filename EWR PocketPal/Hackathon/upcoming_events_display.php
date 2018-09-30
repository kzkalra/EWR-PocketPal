

<?php

//php script for upcoming events DISPLAY
$conn = mysqli_connect("localhost","root","","ewr_data") 
or die(mysqli_error($conn));
parse_str($_POST['serialize'], $data);
$state=$data['state'];
$district=$data['district'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM events WHERE (state=".$state."&& district=".$district."&& date>=CURDATE() && tag=".$tag.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	//$myJSON= json_decode($conn);
//echo $myJSON;

while($row = mysqli_fetch_array($result))
{
	$obj=>header = $row['header'];
	$obj=>date = $row['date'];
}

echo json_encode($obj);


}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
