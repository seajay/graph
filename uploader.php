<html>
<body>

<?php
if (!empty($_POST))
{
	$pass = $_POST["pass"];
	$uploadedfile = $_POST["uploadedfile"];
	$name = basename( $_FILES['uploadedfile']['name']);

	if($pass == "K77ENDx9GwU2hV3PZpZr")
	{
		if(substr_compare ( $name , ".csv" , -4) == 0)
		{
			$target_path = "uploads/";

			$target_path = $target_path . $name; 

			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
				echo "The file ".  $name. 
				" has been uploaded";
			} else{
				echo "There was an error moving the file.";
			}
		}
		else {
			echo "Only csv files can be uploaded";
		}
	}
	else {
		echo "Bad Password";
	}
}
?>

</body>
</html>