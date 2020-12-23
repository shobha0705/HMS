<?php	
	// Inialize session
	session_start();

	// All the data entered by user stored in variables below
	$server = "localhost";
	$user = "root";
	$pass = "";

	// connection variable initialization
	$connection = mysqli_connect($server, $user, $pass);	
	if (!$connection)
		die("Connection failed: " . mysqli_connect_error());

	$db = mysqli_select_db($connection,"hospital");
	if (!$db)
		die("Database selection failed: " . mysqli_connect_error());

	$pid = "";
	$name = "";
	$age = "";
	$weight = "";
	$gender = "";
	$address = "";
	$phoneno = "";
	$disease = "";
	$doctorid = "";
	
	
	if (isset($_POST['save']))
	{
		$pid = $_POST['pid'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$weight = $_POST['weight'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$phoneno = $_POST['phoneno'];
		$disease = $_POST['disease'];
		$doctorid = $_POST['doctorid'];
		
		$mysql= "INSERT INTO patient(pid, name, age, weight, gender, address, phoneno, disease, doctorid) VALUES ('$pid', '$name','$age','$weight','$gender','$address','$phoneno','$disease','$doctorid')";
		mysqli_query($connection,$mysql);
		echo "One record inserted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home2.html"> Home2 </a>';
	mysqli_close($connection);
?>