<?php

	$RFname = $_POST['RFname'];
	$RLname = $_POST['RLname'];
	$Remail = $_POST['Remail'];
	$Rpass = $_POST['Rpass'];
	$Rphone = $_POST['Rphone'];

	// Database connection
	$conn = new mysqli('localhost','root','','e_shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(RFname, RLname, Remail, Rpass, Rphone) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $RFname, $RLname, $Remail, $Rpass, $Rphone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		header("Location: http://localhost/E-Shopping/USignUpS.html");
		$stmt->close();
		$conn->close();
	}
?>