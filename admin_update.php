<?php 

session_start();
error_reporting(E_ERROR | E_PARSE);

require('connect.php');

 // $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));

$data = [];
$rvalue = '';
$code = '';
 
 // isset($_POST['submit'])
if(!empty($_POST))  
{  

      $name = $_POST["name"];
      $dob = $_POST["dob"];
      $snumber = $_POST["snumber"];
      $address = $_POST["address"];
      $school = $_POST["school"];
      $grade = $_POST["grade"];
      $roll_no = $_POST["roll_no"];
      //$centre = $_POST["centre"];
      $level = $_POST["level"];
      $doj = $_POST["doj"];
      $year = $_POST["year"];
      $status = $_POST["status"];

      
      $country = $_POST["country"];
      $state = $_POST["state"];
      $city = $_POST["city"];
      $type = $_POST["type"];
      $alumni = $_POST["alumni"];
      $attendance = $_POST["attendance"];
      $photo_id = $_POST["photo_id"];
      $doa = $_POST["doa"];  


      $fname = $_POST["fname"];
      $focc = $_POST["focc"];
      $fnum = $_POST["fnum"];
      $fmail = $_POST["fmail"];
      $mname = $_POST["mname"];
      $mocc = $_POST["mocc"];
      $mnum = $_POST["mnum"];
      $mmail = $_POST["mmail"];

      $emp_id = $_POST["employee_id"];

      $rvalue .=$roll_no[6];
      $rvalue .=$roll_no[7];
      $rvalue .=$roll_no[8];

      $rcounter = intval($rvalue);

      $centre .=$roll_no[4];
      $centre .=$roll_no[5];


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

      $_SESSION['message'] = " Image not uploaded! Try Again...";
      $_SESSION['msg_type'] = "danger";
      }

      // Check if file already s
      if (file_exists($target_file))
      {
        echo "Sorry, file already exists.";
        $uploadOk = 0;

        $_SESSION['message'] = " Image already Exists! Try renaming it...";
        $_SESSION['msg_type'] = "danger";
      }

      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 2000000)
      {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;

        $_SESSION['message'] = " Image size too large! Image size should be < 2MB";
        $_SESSION['msg_type'] = "danger";
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;

        $_SESSION['message'] = " Image Format is wrong!";
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

          $_SESSION['message'] = "Error during upload! Try Again...";
        $_SESSION['msg_type'] = "danger";
        }
      }

    //******************************** Uploading image ENDS here ********************************


      if($_POST["employee_id"] != '')  
      {

        $mysqli->query("UPDATE student SET roll_no='$roll_no', level='$level', centre='$centre', doj='$doj', type='$type', year='$year',status='$status', alumni='$alumni', attendance='$attendance', doa='$doa' where roll_no='$emp_id'") or die($mysqli->error());

        echo "1";
      $mysqli->query("UPDATE rollnumber SET rnumber='$roll_no', rcounter='$rcounter' where rnumber='$emp_id'") or die($mysqli->error());

        echo "2";
        $id = $mysqli->query("SELECT * FROM student where roll_no = '$roll_no'") or die($mysqli->error());
        $temp = $id->fetch_array();
        $pi_id = $temp['pi_id'];
        $p_id = $temp['p_id'];

        echo "3";
        $mysqli->query("UPDATE parents SET fname='$fname', focc='$focc', fnum='$fnum', fmail='$fmail', mname='$mname', mocc='$mocc', mnum='$mnum', mmail='$mmail' where p_id='$p_id'") or die($mysqli->error);

        echo "4";
        $mysqli->query("UPDATE personal SET name='$name', dob='$dob', snumber='$snumber', address='$address', country='$country', state='$state', city='$city', school='$school', grade='$grade', photo_id='$photo_id' where pi_id='$pi_id'") or die($mysqli->error);

        echo "5";

        // $mysqli->query("INSERT INTO student (roll_no, level, centre, doj, doa, type, year, status, alumni, attendance, p_id, pi_id) VALUES ('$rollno', '$level', '$centre', '$doj', '$doa', '$classtype', '$year', '$status', '$alumni', '$attendance', '$p_id', '$pi_id') ") or die($mysqli->error);

          echo "6";
          // $data += array('message' => "Record updated Successfully !");
          // $data += array('msg_type' => "success");

          $_SESSION['message'] = "Record has been saved!";
          $_SESSION['msg_type'] = "success";

      } 
      else 
      {
          // $data += array('message' => "Error - IF not working!");
          // $data += array('msg_type' => "danger");

          $_SESSION['message'] = "Error saving record! Try again...";
          $_SESSION['msg_type'] = "danger";
      }
 
 }  
 // echo json_encode($data);  
 header("location: adminpanel.php");
 ?>