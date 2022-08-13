<?php
	
	require('connect.php');

	// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));



	if(isset($_POST["attyear"]))  
	{  	
		$data = [];
		$year = $_POST["attyear"];
		

		$student = $mysqli->query("SELECT * FROM student") or die($mysqli->error);
		while($s = $student->fetch_assoc()) 
		{	
			$roll = $s['roll_no'];
			$sql = "INSERT INTO attendance(roll_no, year, jan, feb, mar, apr, may, june, july, aug, sept, oct, nov, december, total, date1, method1, amount1, date2, method2, amount2) VALUES ('$roll', $year, 0,0,0,0,0,0,0,0,0,0,0,0,0,'','Payment',0,'','Payment',0)";

			$mysqli->query($sql) or die($mysqli->error());
		}

		$data += array('msg' => 'Year added!');
		echo json_encode($data);  
	}

	if(isset($_POST["updatefees"]))  
	{  	
		$data = [];
		$arr = $_POST["updatefees"];

		for($x=0; $x<count($arr);$x++)
		{
			$temp = explode(",",$arr[$x]);
			$roll_no = $temp[0];
			$column = $temp[1];
			$val = $temp[2];
			$year = $temp[3];

			$mysqli->query("UPDATE attendance SET $column='$val' WHERE roll_no='$roll_no' and year='$year'")or die($mysqli->error());

		}	
		
		$data += array('msg' => 'Fees details have been updated!');
		echo json_encode($data);  
	}


	if(isset($_POST["updateall"]))  
	{  	
		$data = [];
		$arr = $_POST["updateall"];

		for($x=0; $x<count($arr);$x++)
		{
			$temp = explode(",",$arr[$x]);
			$roll_no = $temp[0];
			$month = $temp[1];
			$val = $temp[2];
			$year = $temp[3];

			$mysqli->query("UPDATE attendance SET $month='$val' WHERE roll_no='$roll_no' and year='$year'") or die($mysqli->error());

			$att = $mysqli->query("SELECT * FROM attendance where roll_no='$roll_no' and year='$year'") or die($mysqli->error);
			$a = $att->fetch_assoc();
			$total = $a['jan'] + $a['feb'] + $a['mar'] + $a['apr'] + $a['may'] + $a['june'];
			$total = $total + $a['july'] + $a['aug'] + $a['sept'] + $a['oct'] + $a['nov'] + $a['december'];

		$mysqli->query("UPDATE attendance SET total='$total' WHERE roll_no='$roll_no' and year='$year'") or die($mysqli->error());
		}	
		
		$data += array('msg' => 'attendance has been updated!');
		echo json_encode($data);  
	}


	if(isset($_POST["selectedrolls"]))  
	{  	
		$data = [];
		$arr = $_POST["selectedrolls"];

		
		for($x=0; $x<count($arr);$x++)
		{
			$temp = (string)$arr[$x];
			$temp = str_replace(' ', '', $temp); // Removes all spaces

			$student = $mysqli->query("SELECT * FROM student where roll_no='$temp'") or die($mysqli->error);
			$r = $student->fetch_assoc();

			$level = $r['level'];

			if($level == 8)
			{
				$level = 8;
			}
			else
			{
				$level = $level + 1;
				$mysqli->query("UPDATE student SET level='$level' where roll_no='$temp'") or die($mysqli->error());	
			}	
		  	$data += array('msg' => 'Selected Students have been Promoted!');
		}
		
		echo json_encode($data);  
	} 

	if(isset($_GET['delete']))
	{
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM enquiry WHERE id=$id") or die($mysqli->error);

		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: adminpanel.php");
	}
	

	if(isset($_POST["employee_id"]))  
	{  		
		$student = $mysqli->query("SELECT * FROM student where roll_no='".$_POST["employee_id"]."'") or die($mysqli->error);
		$row = $student->fetch_assoc();

		$personalid = $row['pi_id'];
		$parentid = $row['p_id'];

		$personal = $mysqli->query("SELECT * FROM personal where pi_id = '$personalid'") or die($mysqli->error);
		$pi_row = $personal->fetch_assoc();

		$parent = $mysqli->query("SELECT * FROM parents where p_id = '$parentid'") or die($mysqli->error);
		$p_row = $parent->fetch_assoc();

		$currentyear = (int)date("Y");
		$attendanceval = $mysqli->query("SELECT * FROM attendance where roll_no ='".$row['roll_no']."' and year = $currentyear") or die($mysqli->error);
		$a_row = $attendanceval->fetch_assoc();

		$data = [];

		$data += array('roll_no' => $row['roll_no']);
		$data += array('level' => $row['level']);
		$data += array('centre' => $row['centre']);
		$data += array('doj' => $row['doj']);
		$data += array('doa' => $row['doa']);
		$data += array('type' => $row['type']);
		$data += array('year' => $row['year']);
		$data += array('status' => $row['status']);
		$data += array('alumni' => $row['alumni']);
		$data += array('attendance' => $a_row['total']);

		$data += array('name' => $pi_row['name']);
		$data += array('dob' => $pi_row['dob']);
		$data += array('snumber' => $pi_row['snumber']);
		$data += array('address' => $pi_row['address']);
		$data += array('country' => $pi_row['country']);
		$data += array('state' => $pi_row['state']);
		$data += array('city' => $pi_row['city']);
		$data += array('school' => $pi_row['school']);
		$data += array('grade' => $pi_row['grade']);
		$data += array('photo_id' => $pi_row['photo_id']);

		$data += array('fname' => $p_row['fname']);
		$data += array('focc' => $p_row['focc']);
		$data += array('fnum' => $p_row['fnum']);
		$data += array('fmail' => $p_row['fmail']);
		$data += array('mname' => $p_row['mname']);
		$data += array('mocc' => $p_row['mocc']);
		$data += array('mnum' => $p_row['mnum']);
		$data += array('mmail' =>$p_row['mmail']);

		echo json_encode($data);  
	}  

	if(isset($_POST["s_id"]))  
	{  	
		$enquiry = $mysqli->query("SELECT * FROM enquiry where id ='".$_POST["s_id"]."'") or die($mysqli->error);
		$row = $enquiry->fetch_assoc();

		$data = [];	

		$data += array('name' => $row['name']);
		$data += array('number' => $row['number']);
		$data += array('email' => $row['email']);
		$data += array('city' => $row['city']);
		$data += array('accomodation' => $row['accomodation']);
		$data += array('pname' => $row['pname']);
		$data += array('pnumber' => $row['pnumber']);
		$data += array('pmail' => $row['pmail']);
		$data += array('message' => $row['message']);
		$data += array('type' => $row['type']);
		$data += array('grade' => $row['grade']);
		$data += array('school' => $row['school']);
		$data += array('country' => $row['country']);
		$data += array('state' => $row['state']);

		echo json_encode($data);  
	} 

	if(isset($_POST["pro_id"]))  
	{  	
		$program = $mysqli->query("SELECT * FROM enquiry where id ='".$_POST["pro_id"]."'") or die($mysqli->error);
		$row = $program->fetch_assoc();

		$data = [];	

		$data += array('venue' => $row['name']);
		$data += array('number' => $row['number']);
		$data += array('email' => $row['email']);
		$data += array('city' => $row['city']);
		$data += array('accomodation' => $row['accomodation']);
		$data += array('message' => $row['message']);
		$data += array('grade' => $row['grade']);
		$data += array('date' => $row['fromdate']);

		echo json_encode($data);  
	}

	if(isset($_POST["work_id"]))  
	{  	
		$workshop = $mysqli->query("SELECT * FROM enquiry where id ='".$_POST["work_id"]."'") or die($mysqli->error);
		$row = $workshop->fetch_assoc();

		$data = [];	

		$data += array('venue' => $row['name']);
		$data += array('number' => $row['number']);
		$data += array('email' => $row['email']);
		$data += array('city' => $row['city']);
		$data += array('accomodation' => $row['accomodation']);
		$data += array('message' => $row['message']);
		$data += array('todate' => $row['todate']);
		$data += array('fromdate' => $row['fromdate']);

		echo json_encode($data);  
	}
?>
