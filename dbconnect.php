
<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "reg_system";

	//connection
	$connection = mysqli_connect($servername,$username,$password,$dbname);

	//check connection
	if(!$connection)
	{
		die("Connection Failed :".mysqli_connect_error());
	}	
	
?>