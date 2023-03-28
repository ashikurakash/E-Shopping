<?php
	$Remail = $_POST['Remail'];
	$Rpass = $_POST['Rpass'];

	// Database connection
	$conn = new mysqli('localhost','root','','e_shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from registration where Remail= ?");
		$stmt->bind_param("s", $Remail);
		$stmt->execute();
        $stmt_result = $stmt-> get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result -> fetch_assoc();

            if($data['Rpass']===$Rpass){

                echo "<h2>Successful </h2>";
                 header("Location: http://localhost/E-Shopping/After_login/home.php");

            }
            else {
                echo "<h2>Invalid </h2>";
             header("Location: http://localhost/E-Shopping/ELogIn.php");
            }
        }
		
	}
?>