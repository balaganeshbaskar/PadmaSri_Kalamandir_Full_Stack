<?php

	session_start();
	error_reporting(E_ERROR | E_PARSE);

	require('connect.php');

	// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysql_error($mysqli));

	$update = false;
	$rcounter = 0;

	$name = '';
	$dob = '';
	$snumber = 0;
	$address = '';
	$country = '';
	$state = '';
	$city = '';
	$school = '';
	$grade = 0;
	$photo_id = '';

	$fname = '';
	$focc = '';
	$fnum = 0;
	$fmail = '';
	$mname = '';
	$mocc = '';
	$mnum = 0;
	$mmail = '';

	$doa = '';
	$type = 0;

	$rollno = '';
	$level = 0;
	$centre = '';
	$doj = '';
	$p_id = 0;
	$pi_id = 0;
	$alumni = 0;
	$year = '';
	$status = 'Applied';
	$attendance = 0;

	// For roll number generation
	$cities = [];
	$codes = [];
	$rollcounter = [];

	$result1 = $mysqli->query("SELECT * FROM citycodes") or die($mysqli->error());
	$roll = $mysqli->query("SELECT * FROM rollnumber") or die($mysqli->error());
	while ($rn = $roll->fetch_assoc())
	{
		array_push($rollcounter , $rn['rcounter']);
	}

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$snumber = $_POST['snumber'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$school = $_POST['school'];
		$grade = $_POST['grade'];

		$fname = $_POST['fname'];
		$focc = $_POST['focc'];
		$fnum = $_POST['fnum'];
		$fmail = $_POST['fmail'];
		$mname = $_POST['mname'];
		$mocc = $_POST['mocc'];
		$mnum = $_POST['mnum'];
		$mmail = $_POST['mmail'];

		$doa = $_POST['today'];
		$type = $_POST['type'];


		//******************************** Uploading image STARTS here ********************************

		$target_dir = "profilepics/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		  if($check != false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  }
		  else
		  {
		    echo "File is not an image.";
		    $uploadOk = 0;

			$_SESSION['message'] = "Image not uploaded! Try Again...";
			$_SESSION['msg_type'] = "danger";
		  }

		// Check if file already s
		if (file_exists($target_file))
		{
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;

		  $_SESSION['message'] = "Image already Exists! Try renaming it...";
			$_SESSION['msg_type'] = "danger";
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 2000000)
		{
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;

		  $_SESSION['message'] = "Image size too large! Image size should be < 2MB";
		  $_SESSION['msg_type'] = "danger";
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		  echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
		  $uploadOk = 0;

		  $_SESSION['message'] = "Image Format is wrong!";
		  $_SESSION['msg_type'] = "danger";
		}

		$temp = explode(".", $_FILES["fileToUpload"]["name"]);
		$newfilename = $name."_".$fname.".jpg";
		$target_file = $target_dir . $newfilename;

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0)
		{
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		  $photo_id = '';
		} 
		else
		{
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		  	$photo_id = $newfilename;
		  }
		  else
		  {
		    echo "Sorry, there was an error uploading your file.";
		    $photo_id = '';

		    $_SESSION['message'] = "Error during upload! Try Again...";
			$_SESSION['msg_type'] = "danger";
		  }
		}

		//******************************** Uploading image ENDS here ********************************

		if($photo_id != '')
		{
			while ($row1 = $result1->fetch_assoc())
			{
				$cit = $row1['city'];
				$cod = $row1['code'];

				array_push($cities , $cit);
				array_push($codes , $cod);
			}

			$first = date("Y"); // current year
			$second = ''; // XX based on city
			$third = '';
			$fourth = 'D';


			$foundcode = 0;
			for ($x = 0; $x < count($cities); $x++)
			{
				if($cities[$x] == $city)
				{
					$second = $codes[$x];
					$foundcode = 1;
					break;
				}
			}

			if($foundcode == 0)
			{		
				for($x=1; $x<strlen($city); $x++)
				{
					$temp = $city[0];
					$temp .= strtoupper($city[$x]);

					$repeat = 0;
					for($y=0; $y<count($cities); $y++)
					{
						if($temp == $codes[$y])
						{
							$repeat = 1;
							break;
						}
					}

					if($repeat == 0)
					{
						$second = $temp;
						echo "</br>";  
						echo "New Code Generated ! ";
						echo $second;
						$mysqli->query("INSERT INTO citycodes (city, code) VALUES ('$city', '$second')") or die($mysqli->error);
						break;
					}
				}
			}

			// for THIRD part of the rollnumber
			sort($rn);
			$rcounter = $rollcounter[count($rollcounter)-1] + 1;
			if($rollcounter[1] != 1)
			{
			  $rcounter = 1;
			}
			else
			{
			  for($x=1; $x<count($rollcounter); $x++)
			  {
			      if(($rollcounter[$x] - 1) != $rollcounter[$x -1])
			      {
			              $rcounter = $rollcounter[$x-1] + 1;
			              break;
			      }
			  }
			}

			$third = sprintf('%03d', $rcounter);
			
			$rollno .= $first;
			$rollno .= $second;
			$rollno .= $third;
			$rollno .= $fourth;

			$mysqli->query("INSERT INTO rollnumber (rcounter, rnumber) VALUES ($rcounter, '$rollno')") or die($mysqli->error);


			$mysqli->query("INSERT INTO parents (fname, focc, fnum, fmail, mname, mocc, mnum, mmail) VALUES ('$fname', '$focc', '$fnum', '$fmail', '$mname', '$mocc', '$mnum', '$mmail')") or die($mysqli->error);


			$id = $mysqli->query("SELECT * FROM parents where fname = '$fname'") or die($mysqli->error());
			$temp = $id->fetch_array();
			$p_id = $temp['p_id'];



			$mysqli->query("INSERT INTO personal (name, dob, snumber, address,country, state, city, school, grade, photo_id) VALUES ('$name', '$dob', '$snumber', '$address', '$country', '$state', '$city', '$school', $grade, '$photo_id')") or die($mysqli->error);

			$id = $mysqli->query("SELECT * FROM personal where name = '$name' and dob = '$dob'") or die($mysqli->error());
			$temp = $id->fetch_array();
			$pi_id = $temp['pi_id'];

			if($type == "0")
			{
				$classtype = "Physical";
			}
			else
			{
				$classtype = "Online";
			}

			$centre = $second;

			$mysqli->query("INSERT INTO student (roll_no, level, centre, doj, doa, type, year, status, alumni, attendance, p_id, pi_id) VALUES ('$rollno', '$level', '$centre', '$doj', '$doa', '$classtype', '$year', '$status', '$alumni', '$attendance', '$p_id', '$pi_id') ") or die($mysqli->error);


			$att = $mysqli->query("SELECT DISTINCT year FROM attendance") or die($mysqli->error);
			while($a = $att->fetch_assoc())
			{	
				$yr = $a['year'];
				$mysqli->query("INSERT INTO attendance(roll_no, year, jan, feb, mar, apr, may, june, july, aug, sept, oct, nov, december, total) VALUES ('$rollno', $yr, 0,0,0,0,0,0,0,0,0,0,0,0,0)") or die($mysqli->error);
			}

			$_SESSION['message'] = "Record has been saved!";
			$_SESSION['msg_type'] = "success";
		}
		// else
		// {
		// 	$_SESSION['message'] = "Record not saved! Try Again... changed changed changed";
		// 	$_SESSION['msg_type'] = "danger";
		// }
		
		header("location: enrollment.php");
	}


	// if(isset($_GET['delete']))
	// {
	// 	$id = $_GET['delete'];
	// 	$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

	// 	$_SESSION['message'] = "Record has been deleted!";
	// 	$_SESSION['msg_type'] = "danger";

	// 	header("location: index.php");
	// }


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

	// if(isset($_POST['update']))
	// {
	// 	$id = $_POST['id'];
	// 	$name = $_POST['name'];
	// 	$location = $_POST['location'];

	// 	$mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id") or die($mysqli->error());

	// 	$_SESSION['message'] = "Record has been updated!";
	// 	$_SESSION['msg_type'] = "warning";

	// 	header("location: index.php");
	// }


?>