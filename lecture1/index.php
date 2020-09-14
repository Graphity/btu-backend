<?php 
	require_once("db.php");

	$sql="SELECT * FROM `products`";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
		echo $row["id" ] . " " . $row["product_name"] . " " . $row["description"] . " " . $row["created_at"] . "<br></br>";
	}
?>
