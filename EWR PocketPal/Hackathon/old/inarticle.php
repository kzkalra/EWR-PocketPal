<?php
$conn = mysqli_connect("localhost","root","","ewr_data") 
or die(mysqli_error($conn));

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","3gp");
//$allowedExts = array("mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

/*if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg"))

&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
*/

if ((($_FILES["file"]["type"] == "video/mp4")||($_FILES["file"]["type"] == "video/3gp")
	||($_FILES["file"]["type"] == "txt")||($_FILES["file"]["type"] == "pdf")
	|| ($_FILES["file"]["type"] == "image/jpeg"))
	&&($_FILES["fileToUpload"]["size"] < 20000)
	&& in_array($extension, $allowedExts)
)

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      
      
	$vidname = $_FILES["file"]["name"] . "";
	$vidsize = $_FILES["file"]["size"] . "";
	$vidtype = $_FILES["file"]["type"] . "";
	
	$sql = "INSERT INTO schemes (name, size, type) VALUES ('$vidname','$vidsize','$vidtype')";
	
	if ($conn->query($sql) === TRUE) {} 
	else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
      
      
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>