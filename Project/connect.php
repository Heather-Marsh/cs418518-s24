<?php
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


	// Database connection
	$conn = new mysqli('localhost','root','','course_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FirstName, LastName, Email, Password, ConfirmPassword) 
        values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fname, $lname, $email, $password1, $password2);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>