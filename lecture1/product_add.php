<?php 
	require_once("db.php");
	if (isset($_POST["product_name"],$_POST["description"])) {
		$name=mysqli_real_escape_string($conn,$_POST["product_name"]);
		$desc=mysqli_real_escape_string($conn,$_POST["description"]);
		$sql="INSERT INTO `products` (`product_name`, `description`) 
			VALUES ('$name', '$desc')";

		if ($conn->query($sql) === TRUE) {
			echo 'Added ' . $name . "! " . '<a href="index.php">check table</a>';
		}
		else{
			"error:". $conn->error;
		}
	}
?>
