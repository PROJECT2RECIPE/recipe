<?php
	$name=$_POST["recipe_name"];
	$recipe=$_POST["recipe_info"];
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
	$ins="insert into recipe values('$name','$recipe');";
	if (mysqli_query($conn, $ins)) 
	{
		echo "data insterted successfully into table.";
	} 
	else
	{
		echo "Error in inserting data into table: " . mysqli_error($conn);
	}
	mysqli_close($conn);
 ?>
	