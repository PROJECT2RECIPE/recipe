<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="Database";
	//connection
	$conn=mysqli_connect($server,$user,$pass,$db);
	//check connection
	if(!$conn)
	{ 
		die("connection failed".mysqli_connect_error());
	}
	$stmt="CREATE TABLE food(recipe_name varchar(100),recipe_info varchar(10000))";
	if (mysqli_query($conn, $stmt)) {
		echo "Table 'food' created successfully.";
	} 
	else
	{
		echo "Error creating table: " . mysqli_error($conn);
	}
	mysqli_close($conn);
 ?>
