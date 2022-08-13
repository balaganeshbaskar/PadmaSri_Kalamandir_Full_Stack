<?php
	
	require('connect.php');
	
	session_start();
	error_reporting(E_ERROR | E_PARSE);

	// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysql_error($mysqli));


	$name = '';
	$number = '';
	$email = '';
	$city = '';
	$fromdate ='';
	$todate = '';
	$accomodation = '';
	$pname ='';
	$pnumber = '';
	$pmail ='';
	$message = '';
	$type ='';
	$grade = '';
	$school = '';
	$country ='';
	$state = '';

	if(isset($_POST['student_submit']))
	{
		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$grade = $_POST['grade'];
		$school = $_POST['school'];
		$pname = $_POST['pname'];
		$pnumber = $_POST['pnumber'];
		$pmail = $_POST['pmail'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$req1 = $_POST['req1'];
		$req2 = $_POST['req2'];
		$req3 = $_POST['req3']; 
		$req = $req1.", ".$req2.", ".$req3; // This data will be stored in accomodations column
		$message = $_POST['message'];

		$mysqli->query("INSERT INTO enquiry (name, number, email, grade, school, pname, pnumber, pmail, country, state, city, accomodation, message, type) VALUES ('$name', '$number', '$email', '$grade', '$school', '$pname', '$pnumber','$pmail', '$country', '$state', '$city', '$req','$message', 'Student')") or die($mysqli->error);

		$_SESSION['message'] = "Enquiry Form has been submitted ! We will contact you soon...";
		$_SESSION['msg_type'] = "success";

		header("location: enquiry.php");
	}


	if(isset($_POST['program_submit']))
	{
		$name = $_POST['occasion']; //name
		$city = $_POST['venue'];
		$date = $_POST['date'];
		$grade = $_POST['days']; //grade
		$number = $_POST['number'];
		$email = $_POST['email'];
		$accomodation = $_POST['accom'];
		$message = $_POST['message'];

		$mysqli->query("INSERT INTO enquiry (name, number, email, city, grade, fromdate,  accomodation, message, type) VALUES ('$name', '$number', '$email', '$city', '$grade', '$date', '$accomodation', '$message', 'Program')") or die($mysqli->error);

		$_SESSION['message'] = "Enquiry Form has been submitted ! We will contact you soon...";
		$_SESSION['msg_type'] = "success";

		header("location: enquiry.php");
	}


	if(isset($_POST['workshop_submit']))
	{
		$name = $_POST['institution']; //name
		$city = $_POST['venue'];
		$fromdate = $_POST['fromdate'];
		$todate = $_POST['todate']; //grade
		$number = $_POST['number'];
		$email = $_POST['email'];
		$accomodation = $_POST['accom'];
		$message = $_POST['message'];

		$mysqli->query("INSERT INTO enquiry (name, city, fromdate, todate, number, email, accomodation, message, type) VALUES ('$name', '$city', '$fromdate', '$todate', '$number', '$email', '$accomodation', '$message', 'Workshop')") or die($mysqli->error);

		$_SESSION['message'] = "Enquiry Form has been submitted ! We will contact you soon...";
		$_SESSION['msg_type'] = "success";

		header("location: enquiry.php");
	}





	// if(isset($_GET['edit']))
	// {
	// 	$id = $_GET['edit'];
	// 	$update = true;
	// 	$result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

	// 	if(count($result)==1)
	// 	{
	// 		$row = $result->fetch_array();
	// 		$name = $row['name'];
	// 		$location = $row['location'];
	// 	}
	// }

?>