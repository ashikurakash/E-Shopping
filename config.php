<?php
	$conn = new mysqli("localhost","root","","e_shopping");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>