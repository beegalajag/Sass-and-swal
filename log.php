<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
<body>





<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
	
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "task1";
// 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
// else
// 	echo "connected successfully";

 		$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$password =  mysqli_real_escape_string($conn,$_POST['password']);
	 	$currentDate = date('Y-m-d h:i:s');
	 	if (isset($email) && isset($password)) {
	 	

	 	$sql = "INSERT INTO logged(email,password,time) VALUES('$email','$password','$currentDate')";

		if ($conn->query($sql) === TRUE) {

		    echo '<script type="text/javascript">',
			     'swal("Information recorded successfully");',
			     '</script>';
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

}



?>


</body>
</html>
