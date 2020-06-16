<?php
	$servername ="localhost";
	$username ="root";
	$password ="123";
	$dbname ="projectmexico";
	
	$conn = new MySQLi($servername, $username, $password, $dbname);

	//Data Base Creation ------------------------------------------------------------------------


	if($conn -> connect_error){
		die("Connection Failed:" .$conn->connect_error);
	}
	$sql ="SELECT * FROM telemetry";
	$result =$conn-> query($sql);
	
	if($result->num_rows>0){
		while($row =$result->fetch_assoc()){
			echo "id:" .$row["id"]." ".$row["voltage"]."<br>"; 
		}
	}
	else{
		echo "0 results";
	}
	$conn->close();
	?>
