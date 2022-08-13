<?php
	
	require('connect.php');
	
	session_start();
	error_reporting(E_ERROR | E_PARSE);

	// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysql_error($mysqli));


	$p_id = '';
	$pi_id = '';
	$type = '';


	if(isset($_GET['edit']))
	{
		$roll_no = $_GET['edit'];
		$result = $mysqli->query("SELECT * FROM student WHERE roll_no=$roll_no") or die($mysqli->error());

		if(count($result)==1)
		{
			$row = $result->fetch_array();
			$p_id = $row['p_id'];
			$pi_id = $row['pi_id'];
			$type = $row['type'];


		}
	}
?>