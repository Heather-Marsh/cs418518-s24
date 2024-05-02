<?php
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	


	// Database connection
	$conn = new mysqli('localhost','root','','course_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Profile(FirstName, LastName) 
        values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fname, $lname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Profile successfully updated...";
		$stmt->close();
		$conn->close();
	}
?>