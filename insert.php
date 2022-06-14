<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => cee_db
		$conn = mysqli_connect("localhost", "root", "", "cee_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$exmne_fullname = $_REQUEST['full_name'];
		$exmne_course = $_REQUEST['course'];
		$exmne_email = $_REQUEST['email'];
		$exmne_password = $_REQUEST['password'];
		
		
		// Performing insert query execution
		
		$sql = "INSERT INTO examinee_tbl (exmne_fullname,exmne_course,exmne_email,exmne_password) VALUES ('$exmne_fullname',
			'$exmne_course','$exmne_email','$exmne_password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.
				  Please login to continue </h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
