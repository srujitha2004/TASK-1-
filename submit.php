<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	

	// Database connection
	$conn = new mysqli("localhost","root","","register");
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name,Email) values(?, ?)");
		$stmt->bind_param("ss", $Name, $email);
	    $stmt->execute();

		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>