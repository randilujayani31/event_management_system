<?php
	
	$f_Name 		= $_POST['f_Name'];
	$l_Name 		= $_POST['l_Name'];
	$address 		= $_POST['address'];
	$contact_No		= $_POST['contact_No'];
	$nic 			= $_POST['nic'];

	// db  connection
	$conn = new mysqli('localhost','root','','event_management');
	if($conn->connect_error){
		die('Connection Failed	: '.$conn->connect_error);

	} else{
		$stmt = $conn->prepare("insert into customer(f_Name, l_Name, address, contact_No, nic)
			values(?,?,?,?,?) ");
		$stmt->bind_param("sssss",$f_Name, $l_Name, $address, $contact_No, $nic);
		$stmt->execute();
		echo "Registration Successfully...";
		$stmt->close();
		$conn->close();
		    // header("Location: index.php");



	}



?>
