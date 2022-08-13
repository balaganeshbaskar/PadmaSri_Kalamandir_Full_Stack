<?php require('session.php');?>
<?php require('connect.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>PSK</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- External Style sheet link -->
    <link rel="stylesheet" type="text/css" href="adminpanel.css">

	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">

	 <!-- animate on scroll cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<script> // to preview the profile pic when uploaded
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<style>
* {
  box-sizing: border-box;
}

.navLinks{
	padding-top: 15px;
	text-align: center;
}

.navbar-brand{
	padding-top: 15px;
}

/* Create two equal columns that floats next to each other */
.leftc{
  float: left;
  width: 60%;
  padding: 10px;
}

.rightc{
  float: left;
  width: 40%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media (min-width: 768px) {
  .modal-xl {
    width: 90%;
   max-width:1200px;
  }
}

table th 
{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 5;
    background-color: #E8E8E8;
}

/*styling for navbar ends here*/
.image-container {
  background-image: url("gallery/home_gallery_23.JPG"); /* The image used - important! */
  background-position: center;
  background-size: cover;
  position: relative; /* Needed to position the cutout text in the middle of the image */
  height: 200px; /* Some height */
  margin-bottom: 50px;
}

.text {
  background-color: white;
  color: black;
  font-size: 4vw; /* Responsive font size */
  font-weight: bold;
  margin: 0 auto; /* Center the text container */
  padding-top: 20px;
  width: 50%;
  text-align: center; /* Center text */
  position: absolute; /* Position text */
  top: 50%; /* Position text in the middle */
  left: 50%; /* Position text in the middle */
  transform: translate(-50%, -50%); /* Position text in the middle */
  mix-blend-mode: screen; /* This makes the cutout text possible */
}

.back-button {
  text-align: right;
  /*margin-right: 50px;*/
}

.container-fluid {
	width: 80%;
}

/*footer styling*/

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:white;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:white;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0;
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
@media (max-width:767px)
{
  .site-footer{
    text-align: center;
  }
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 240px;
  height: 280px;
  border-radius: 10px;
  background: rgba(0, 0, 0, 0);
  transition: background 0.5s ease;
}

.pic:hover .overlay {
  display: block;
  background: rgba(0, 0, 0, .3);
}

.changepic{
  position: absolute;
  width: 240px;
  height: 280px;
  color: #fff;
  left:0px;
  top: 0px;
  padding-top: 130px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.changepic a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.pic:hover .changepic {
  opacity: 1;
}

</style>

<body style="margin-bottom: 50px;">
	<!-- <?php
		//$mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli)); 
	?> -->
	<div class="image-container">
      <div class="text">Admin Panel</div>
    </div>
	<div class="container-fluid">
		<div class="back-button">
			<h3>Welcome, User</h3>
			<!-- <h3>Welcome, <?php echo  $_SESSION['USER_NAME'];?></h3> -->
			<div class="">
				<!-- <a href="logout.php"><button class="btn btn-danger">Log Out</button></a> -->
				<a href="#"><button class="btn btn-danger">Log Out</button></a>
			</div>
		</div>
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#studentdb"><b>Student DB</b></a></li>
		<li><a data-toggle="tab" href="#sattendance"><b>Attendance</b></a></li>
		<li><a data-toggle="tab" href="#fees"><b>Fees</b></a></li>
	    <li><a data-toggle="tab" href="#enquirys"><b>Student Enquiry</b></a></li>
	    <li><a data-toggle="tab" href="#enquiryp"><b>Program Enquiry</b></a></li>
	    <li><a data-toggle="tab" href="#enquiryw"><b>Workshop Enquiry</b></a></li>
	    <li><a data-toggle="tab" href="#pdf"><b>Digital Content</b></a></li>
	  </ul>

	  <div class="tab-content">

	    <div id="studentdb" class="tab-pane fade in active">
	      <div style="text-align: center;">
	      	<h3><b>Student Database</b></h3>
	      </div>

	      <hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">

			<?php if(isset($_SESSION['message'])): ?>
			<div style="margin-top: 80px" class="alert alert-<?=$_SESSION['msg_type']?>">

				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);	
				?>
				
			</div>
			<?php endif; ?>


			<!-- Filter Feature -->
			<div class="row" style="height: 60px; border: 2px solid #E8E8E8; border-radius: 5px; padding-top: 10px;">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<input type="checkbox" id="selectall" style="margin-top: 8px; height: 18px; width: 18px;" value="" onchange="selectall(this)">
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<button id="send_mail" type="button" class="btn btn-warning send_mail" disabled>Send Mail</button>
						</div>
						<!-- <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<button id="annualapp" type="button" class="btn btn-warning annualapp" disabled>Annual Appraisal</button>
						</div> -->
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<button id="promote" type="button" class="btn btn-warning promote" disabled>Promote</button>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<p style="text-align: center; margin-top: 8px;"><b>SEARCH:</b></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input class="form-control" type="text" id="namesearch" onkeyup="searchfun()" placeholder="Name" title="Type in a name">
						</div>	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="centresearch" onkeyup="searchfun()" placeholder="Centre" title="Type in a centre">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select name="type" id="typesearch" class="form-control" onchange="searchfun()" class="form-control">
								<option>Type</option>
								<option>Online</option>
								<option>Physical</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select name="level" id="levelsearch" class="form-control" onchange="searchfun()" class="form-control">
								<option>Level</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select name="status" class="form-control" id="statussearch" onchange="searchfun()" class="form-control">
								<option>Status</option>
								<option>Applied</option>
								<option>Enrolled</option>
								<option>Discontinued</option>
								<option>Alumni</option>
								<option>Rejected</option>
							</select>
						</div>	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-danger" onclick="clearfilter()">Clear Filter</button>
						</div>
					</div>
				</div>
			</div>	
			<div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				
				<?php $student = $mysqli->query("SELECT * FROM student") or die($mysqli->error); ?>

				<br>
				<!-- Student Table -->
				<table id="students" class="table table-hover students" style="font-size: 17px;">
					<thead>
						<tr style="background-color: #E8E8E8; height: 50px;">
							<th style="vertical-align: middle; text-align: center;"></th>
							<th style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey">Name</th>
							<th style="vertical-align: middle; text-align: center;">Roll Number</th>
							<th style="vertical-align: middle; text-align: center;">Centre</th>
							<th style="vertical-align: middle; text-align: center;">Level</th>
							<th style="vertical-align: middle; text-align: center;">Term</th>
							<th style="vertical-align: middle; text-align: center;">Type</th>
							<th style="vertical-align: middle; text-align: center;">City</th>
							<th style="vertical-align: middle; text-align: center;">Status</th>
							<th style="vertical-align: middle; text-align: center;">Attendance</th>
							<th style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey">Action</th>
						</tr>
					</thead>
					
					<?php while ($row = $student->fetch_assoc()): ?>
					<?php 
						$personalid = $row['pi_id'];
						$parentid = $row['p_id'];

						$personal = $mysqli->query("SELECT * FROM personal where pi_id = '$personalid'") or die($mysqli->error);
						$pi_row = $personal->fetch_assoc();

						$parent = $mysqli->query("SELECT * FROM parents where p_id = '$parentid'") or die($mysqli->error);
						$p_row = $parent->fetch_assoc();

						$currentyear = (int)date("Y");
						$attendanceval = $mysqli->query("SELECT * FROM attendance where roll_no ='".$row['roll_no']."' and year = $currentyear") or die($mysqli->error);
						$a_row = $attendanceval->fetch_assoc();
					?>
							<tr style="text-align: center; border-bottom: 2px solid lightgrey;">
								<td style="vertical-align: middle; border-left: 1px solid lightgrey;">
									<input type="checkbox" name="rows" value="" style="height: 18px; width: 18px;" onchange="rowsel()">
								</td>
								<td style="vertical-align: middle; border-left: 1px solid lightgrey"> <b><?php echo $pi_row['name']; ?></b></td>
								<td style="vertical-align: middle;"> <b><?php echo $row['roll_no']; ?></b></td>
								<td style="vertical-align: middle;"> <?php echo $row['centre']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['level']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['year']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $row['type']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $pi_row['city']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['status']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $a_row['total']; ?></td>				
								<td style="vertical-align: middle; border-left: 1px solid lightgrey; border-right: 2px solid lightgrey;">
									<button id="<?php echo $row['roll_no']; ?>" class='btn btn-success edit_data'>Full Details</button>
								</td>
							</tr>
					<?php endwhile; ?>
				</table>
			</div>
			<hr style="width: 100%; margin-top: 5px; margin-bottom: 5px; border-top: 2px solid black;">
		</div>

		<div id="send_mail_modal" class="modal fade">  
			<div class="modal-dialog modal-xl">  
			   <div class="modal-content">
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>What do you want to send?</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body text-center">
			        	<div class="row" style="margin-left: 30px;" >
			        		<br>
							<button class="btn btn-warning annualapp" id="annualapp" style="height: 250px; width: 200px; margin: 10px; font-size: 30px; white-space: normal;">Annual Appraisal</button>

							<button class="btn btn-success welcomeletter" id="welcomeletter" style="height: 250px; width: 200px; margin: 10px; font-size: 30px; white-space: normal;">Welcome Letter</button>

	       					<button class="btn btn-danger leavingletter" style="height: 250px; width: 200px; margin: 10px; font-size: 30px; white-space: normal;">Leaving Letter</button>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>

		<!-- <div id="dataModal" class="modal fade">  
			<div class="modal-dialog">  
				<div class="modal-content">  
						<div class="modal-header">  
							<button type="button" class="close" data-dismiss="modal">&times;</button>  
							<h4 class="modal-title">Student Details</h4>  
						</div>  
						<div class="modal-body" id="employee_detail">  
						</div>  
						<div class="modal-footer">  
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
						</div>  
				</div>  
			</div>  
		</div> --> 


		<div id="add_data_Modal" class="modal fade" >  
			<div class="modal-dialog modal-lg">  
				<div class="modal-content">  
						<div class="modal-header">  
							<button type="button" class="close" data-dismiss="modal">&times;</button> 
							<div style="text-align: center;">
								<h4 class="modal-title"><b>Student Details</b></h4> 
							</div>
						</div>  
						<div class="modal-body">  
							<form action="admin_update.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Name</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="name" id="name" required="true" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">D.O.B</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required ">Date of Birth</label> -->
													<input type="text" name="dob" id="dob" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Mobile</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Contact Number</label> -->
													<input type="text" name="snumber" id="snumber" class="form-control" >	
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Address</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Address</label> -->
													<input type="text" name="address" id="address" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">School</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Name of School</label> -->
													<input type="text" name="school" id="school" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Grade</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Grade / Class</label> -->
													<input type="text" name="grade" id="grade" class="form-control">		
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Roll No.</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Name of Disciple</label> -->
													<input type="text" name="roll_no" id="roll_no" class="form-control">
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Centre</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required ">Date of Birth</label> -->
													<input type="text" name="centre" id="centre"class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Level</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
												<!-- <label for="status">Select list:</label> -->
													<select name="level" id="level" class="form-control" class="form-control">
														<option>0</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">D.O.Joining</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">				
												<div class="form-group">
													<!-- <label class="required">Address</label> -->
													<input type="Text" onfocus="(this.type='date')" placeholder="Joining Date" name="doj" id="doj" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Term</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
												<!-- <label for="status">Select list:</label> -->
												<select name="year" id="year" class="form-control" class="form-control">
													<option>0</option>
													<option>Term I</option>
													<option>Term II</option>
												</select>
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Status</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="status">Select list:</label> -->
													<select name="status" class="form-control" id="status" class="form-control">
														<option>Applied</option>
														<option>Enrolled</option>
														<option>Discontinued</option>
														<option>Alumni</option>
														<option>Rejected</option>
													</select>
												</div>	
											</div>
										</div>
									</div>	
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="pic form-group" style="position: relative;">
											<img id="output" class="output" style="border: 1px solid #D3D3D3; border-radius: 10px; height: 280px; width: 240px;" />
											<div class="overlay"></div>
											<input type="file" style="display: none;" name="fileToUpload" onchange="loadFile(event)" id="fileToUpload" style="margin-top: 10px;">
											<!-- <div class="button changepic"><button type="button" class="btn btn-default">Change Photo</button></div> -->
<!-- 	asdasddsadasdasd -->				<div class="button changepic"><input type="button" class="btn btn-default" 											  value="Change Photo" onclick="document.getElementById('fileToUpload').click();" /></div>
										</div>					
									</div>	
								</div> 
								<hr style="width: 70%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Country</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">Country</label> -->
													<input type="text" name="country" id="country" class="form-control" >
												</div>						
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">State</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">State</label> -->
													<input type="text" name="state" id="state" class="form-control" >
												</div>	
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">City</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">City</label> -->
													<input type="text" name="city" id="city" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Type</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="type" id="type" class="form-control">
												</div>
											</div>
										</div>							
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Alumni?</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">Country</label> -->
													<input type="text" name="alumni" id="alumni" class="form-control" >
												</div>												
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Attendance</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">State</label> -->
													<input type="text" name="attendance" id="attendance" class="form-control" >
												</div>	
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Photo Id</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">City</label> -->
													<input type="text" name="photo_id" id="photo_id" required="true" readonly class="form-control" >
												</div>
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">D.O.Application</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">	
													<input type="text" name="doa" id="doa" class="form-control" readonly>	
												</div>					
											</div>
										</div>		
									</div>
								</div>
								<hr style="width: 70%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">	
										<div class="form-group" style="text-align: center;">
											<label><b>Father's Details</b></label>	
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Name</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Name</label> -->
													<input type="text" name="fname" id="fname" class="form-control" >	
												</div>				
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Occupation</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Occupation</label> -->
													<input type="text" name="focc" id="focc" class="form-control" >	
												</div>					
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Mobile</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Contact Number</label> -->
													<input type="text" name="fnum" id="fnum" class="form-control" >	
												</div>				
											</div>
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Mail Id</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Email Id</label> -->
													<input type="text" name="fmail" id="fmail" class="form-control">	
												</div>					
											</div>
										</div>					
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="form-group" style="text-align: center;">
											<label><b>Mother's Details</b></label>	
										</div>
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Name</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Name</label> -->
													<input type="text" name="mname" id="mname" class="form-control" >
												</div>				
											</div>
										</div>	
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Occupation</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Occupation</label> -->
													<input type="text" name="mocc" id="mocc" class="form-control" >	
												</div>
											</div>
										</div>	
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Mobile</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Contact Number</label> -->
													<input type="text" name="mnum" id="mnum" class="form-control" >	
												</div>								
											</div>
										</div>	
										<div class="row"> 
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label style="padding: 5px;" class="required">Mail Id</label>
												</div>
											</div>	
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label class="required">Email Id</label> -->
													<input type="text" name="mmail" id="mmail" class="form-control" >	
												</div>				
											</div>
										</div>	
									</div>
								</div>
								<br>
								<div>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Remove Student</button>
								</div>	
								<div class="row" style="text-align: center;"> 
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input style="height: 35px;" type="submit" name="update" id="update" value="Update Information" class="btn btn-success" />				
									</div>
								</div>
								<input type="hidden" name="employee_id" id="employee_id">
							</form>
						</div>  
						<div class="modal-footer">  
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>  
				</div>  
			</div>
		</div>  


		<div id="sattendance" class="tab-pane fade">
			<div style="text-align: center;">
	      		<h3><b>Students Attendance</b></h3>
	      	</div>
	      	<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">

	      	<!-- Filter Feature -->
			<div class="row" style="height: 60px; border: 2px solid #E8E8E8; border-radius: 5px; padding-top: 10px;">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<button id="updateall" type="button" class="btn btn-success updateall" disabled>Update All</button>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<select style="padding: 2px;" name="yearsel" id="yearsel" class="form-control" onchange="filterfun()" class="form-control">
								<?php 
								// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));
								$att = $mysqli->query("SELECT DISTINCT year FROM attendance ORDER BY year DESC") or die($mysqli->error);
								while ($row = $att->fetch_assoc())
								{
									echo "<option>".$row['year']."</option>";
								}
								?>
								<option value="">Add...</option>
							</select>
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<p style="text-align: center; margin-top: 8px;"><b>SEARCH:</b></p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<select style="padding: 2px;" name="month" id="month" class="form-control" onchange="showmonth()" class="form-control">
								<option>Month</option>
								<option>Jan</option>
								<option>Feb</option>
								<option>Mar</option>
								<option>Apr</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>Aug</option>
								<option>Sept</option>
								<option>Oct</option>
								<option>Nov</option>
								<option>Dec</option>
							</select>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input class="form-control" type="text" id="names" onkeyup="filterfun()" placeholder="Name" title="Type in a name">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="rolls" onkeyup="filterfun()" placeholder="Roll number" title="Type in a centre">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="centres" onkeyup="filterfun()" placeholder="Centre" title="Type in a centre">
						</div>	
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select name="levels" id="levels" class="form-control" onchange="filterfun()" class="form-control">
								<option>Level</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input class="form-control" type="text" id="attendances" onkeyup="filterfun()" placeholder="Attendance" title="Type in a name">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-danger" onclick="clearfilters()">Clear Filter</button>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				<br>
				<!-- Student Table -->
				<table id="studentdata" class="table table-hover" style="font-size: 17px;">
					<thead>
						<tr style="background-color: #E8E8E8; height: 50px;">
							<th style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey;">Name</th>
							<th style="vertical-align: middle; text-align: center;">Roll Number</th>
							<th style="vertical-align: middle; text-align: center;">Centre</th>
							<th style="vertical-align: middle; text-align: center; border-right: 1px solid darkgrey;">Level</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">June</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">July</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Aug</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Sept</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Oct</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Nov</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Dec</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Jan</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Feb</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Mar</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Apr</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">May</th>
							<th style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey;">Attendance</th>
							<th style="display: none;">Year</th>
						</tr>
					</thead>
					<?php $student = $mysqli->query("SELECT * FROM student") or die($mysqli->error); ?>
					<?php while ($row = $student->fetch_assoc()): ?>
					<?php 
						$personalid = $row['pi_id'];
						$parentid = $row['p_id'];

						$personal = $mysqli->query("SELECT * FROM personal where pi_id = '$personalid'") or die($mysqli->error);
						$pi_row = $personal->fetch_assoc();

						$parent = $mysqli->query("SELECT * FROM parents where p_id = '$parentid'") or die($mysqli->error);
						$p_row = $parent->fetch_assoc();

						$currentyear = (int)date("Y");
						$attendanceval = $mysqli->query("SELECT * FROM attendance where roll_no ='".$row['roll_no']."'") or die($mysqli->error);
						while($a_row = $attendanceval->fetch_assoc()): ?>
						<tr style="text-align: center; border-bottom: 2px solid lightgrey;">
							<td style="vertical-align: middle; border-left: 1px solid lightgrey; width: 15%;"><?php echo $pi_row['name']; ?></td>
							<td style="vertical-align: middle; width: 10%;"><?php echo $row['roll_no']; ?></td>
							<td style="vertical-align: middle; width: 5%;"><?php echo $row['centre']; ?></td>
							<td style="vertical-align: middle; width: 5%; border-right: 1px solid darkgrey;"><?php echo $row['level']; ?></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="june" onkeyup="attupdate(this)" placeholder="<?php echo $a_row['june']; ?>" value="<?php echo $a_row['june']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="july" onkeyup="attupdate(this)" placeholder="<?php echo $a_row['july']; ?>" value="<?php echo $a_row['july']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="aug"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['aug']; ?>" value="<?php echo $a_row['aug']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="sept" onkeyup="attupdate(this)" placeholder="<?php echo $a_row['sept']; ?>" value="<?php echo $a_row['sept']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="oct"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['oct']; ?>" value="<?php echo $a_row['oct']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="nov"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['nov']; ?>" value="<?php echo $a_row['nov']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="december"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['december']; ?>" value="<?php echo $a_row['december']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="jan"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['jan']; ?>" value="<?php echo $a_row['jan']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="feb"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['feb']; ?>" value="<?php echo $a_row['feb']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="mar"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['mar']; ?>" value="<?php echo $a_row['mar']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="apr"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['apr']; ?>" value="<?php echo $a_row['apr']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%;"><input type="text" class="form-control flag" name="may"  onkeyup="attupdate(this)" placeholder="<?php echo $a_row['may']; ?>" value="<?php echo $a_row['may']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 5%; border-left: 1px solid darkgrey;"><?php echo $a_row['total']; ?></td>
							<td style="display: none;"><?php echo $a_row['year']; ?></td>
						</tr>
					<?php endwhile; endwhile; ?>
				</table>
			</div>
	      	<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
		</div>


		<div id="fees" class="tab-pane fade">
			<div style="text-align: center;">
	      		<h3><b>Fees Details</b></h3>
	      	</div>
	      	<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">

	      	<!-- Filter Feature -->
			<div class="row" style="height: 60px; border: 2px solid #E8E8E8; border-radius: 5px; padding-top: 10px;">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button id="updatefees" type="button" class="btn btn-success updatefees" disabled>Add Fees</button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select style="padding: 2px;" name="fyearsel" id="fyearsel" class="form-control" onchange="filterfees()" class="form-control">
								<?php 
								// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));
								$att = $mysqli->query("SELECT DISTINCT year FROM attendance ORDER BY year DESC") or die($mysqli->error);
								while ($row = $att->fetch_assoc())
								{
									echo "<option>".$row['year']."</option>";
								}
								?>
							</select>
						</div>	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<p style="text-align: center; margin-top: 8px;"><b>SEARCH:</b></p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select style="padding: 2px;" name="fterm" id="fterm" class="form-control" onchange="showterm()" class="form-control">
								<option>Term I</option>
								<option>Term II</option>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input class="form-control" type="text" id="fnames" onkeyup="filterfees()" placeholder="Name" title="Type in a name">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="frolls" onkeyup="filterfees()" placeholder="Roll number" title="Type in a centre">
						</div>	
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row"> 	
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="fcentres" onkeyup="filterfees()" placeholder="Centre" title="Type in a centre">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<select name="flevels" id="flevels" class="form-control" onchange="filterfees()" class="form-control">
								<option>Level</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-danger" onclick="clearffilters()">Clear Filter</button>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				<br>
				<!-- Student Table -->
				<table id="feesdata" class="table table-hover" style="font-size: 17px;">
					<thead>
						<tr style="background-color: #E8E8E8; height: 50px;">
							<th style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey;">Name</th>
							<th style="vertical-align: middle; text-align: center;">Roll Number</th>
							<th style="vertical-align: middle; text-align: center;">Centre</th>
							<th style="vertical-align: middle; text-align: center;">Level</th>
							<th style="vertical-align: middle; text-align: center; border-right: 1px solid darkgrey;">Year</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Date I</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Amount I</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Method I</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Date II</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Amount II</th>
							<th style="vertical-align: middle; text-align: center; color: DodgerBlue;">Method II</th>
						</tr>
					</thead>
					<?php $student = $mysqli->query("SELECT * FROM student") or die($mysqli->error); ?>
					<?php while ($row = $student->fetch_assoc()): ?>
					<?php 
						$personalid = $row['pi_id'];
						$parentid = $row['p_id'];

						$personal = $mysqli->query("SELECT * FROM personal where pi_id = '$personalid'") or die($mysqli->error);
						$pi_row = $personal->fetch_assoc();

						$parent = $mysqli->query("SELECT * FROM parents where p_id = '$parentid'") or die($mysqli->error);
						$p_row = $parent->fetch_assoc();

						$attendanceval = $mysqli->query("SELECT * FROM attendance where roll_no ='".$row['roll_no']."'") or die($mysqli->error);
						while($a_row = $attendanceval->fetch_assoc()): ?>
						<tr style="text-align: center; border-bottom: 2px solid lightgrey;">
							<td style="vertical-align: middle; border-left: 1px solid lightgrey; width: 20%;"><?php echo $pi_row['name']; ?></td>
							<td style="vertical-align: middle; width: 10%;"><?php echo $row['roll_no']; ?></td>
							<td style="vertical-align: middle; width: 5%;"><?php echo $row['centre']; ?></td>
							<td style="vertical-align: middle; width: 5%;"><?php echo $row['level']; ?></td>
							<td style="vertical-align: middle; width: 10%; border-right: 1px solid darkgrey;"><?php echo $a_row['year']; ?></td>
							<td style="vertical-align: middle; width: 10%;"><input type="date" class="form-control fee" name="date1" onchange="feesupdate(this)" placeholder="<?php echo $a_row['date1']; ?>" value="<?php echo $a_row['date1']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 10%;"><input type="Text" class="form-control fee" name="amount1" onkeyup="feesupdate(this)" placeholder="<?php echo $a_row['amount1']; ?>" value="<?php echo $a_row['amount1']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 12%;">
								<select name="method1" id="method1" class="form-control fee" onchange="feesupdate(this)" class="form-control">
									<option <?php if($a_row['method1']=="Payment") echo 'selected="selected"'; ?> >Payment</option>
									<option <?php if($a_row['method1']=="Cash") echo 'selected="selected"'; ?> >Cash</option>
									<option <?php if($a_row['method1']=="UPI") echo 'selected="selected"'; ?> >UPI</option>
									<option <?php if($a_row['method1']=="Cheque") echo 'selected="selected"'; ?> >Cheque</option>
									<option <?php if($a_row['method1']=="IMPS") echo 'selected="selected"'; ?> >IMPS</option>
									<option <?php if($a_row['method1']=="NEFT") echo 'selected="selected"'; ?> >NEFT</option>
									<option <?php if($a_row['method1']=="RTGS") echo 'selected="selected"'; ?> >RTGS</option>
								</select>
							</td>
							<td style="vertical-align: middle; width: 10%;"><input type="date" class="form-control fee" name="date2" onchange="feesupdate(this)" placeholder="<?php echo $a_row['date2']; ?>" value="<?php echo $a_row['date2']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 10%;"><input type="Text" class="form-control fee" name="amount2" onkeyup="feesupdate(this)" placeholder="<?php echo $a_row['amount2']; ?>" value="<?php echo $a_row['amount2']; ?>" style="padding: 3px; text-align: center;"></td>
							<td style="vertical-align: middle; width: 12%;">
								<select name="method2" id="method2" class="form-control fee" onchange="feesupdate(this)" class="form-control">
									<option <?php if($a_row['method2']=="Payment") echo 'selected="selected"'; ?> >Payment</option>
									<option <?php if($a_row['method2']=="Cash") echo 'selected="selected"'; ?> >Cash</option>
									<option <?php if($a_row['method2']=="UPI") echo 'selected="selected"'; ?> >UPI</option>
									<option <?php if($a_row['method2']=="Cheque") echo 'selected="selected"'; ?> >Cheque</option>
									<option <?php if($a_row['method2']=="IMPS") echo 'selected="selected"'; ?> >IMPS</option>
									<option <?php if($a_row['method2']=="NEFT") echo 'selected="selected"'; ?> >NEFT</option>
									<option <?php if($a_row['method2']=="RTGS") echo 'selected="selected"'; ?> >RTGS</option>
								</select>
							</td>
						</tr>
					<?php endwhile; endwhile; ?>
				</table>
			</div>
	      	<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
		</div>


		<script>

		function feesupdate(input) // for fees
		{	
			var check = false;

			if(input.value.length > 0 && input.value != "Payment")
			{
				input.className = "form-control fee pay";
			}
			else
			{
				input.className = "form-control fee";
				input.style.backgroundColor = "white";
			}

			var allvalues = document.getElementsByClassName("pay");

			for (var i = 0; i < allvalues.length; i++)
			{
				if(allvalues[i].value.length > 0)
				{
					allvalues[i].style.backgroundColor = "#ffe0cc";
					check = true;
				}
				else
				{
					allvalues[i].style.backgroundColor = "white";
				} 
			}

			if(check)
			{
				document.getElementById("updatefees").disabled = false;
			}
			else
			{
				document.getElementById("updatefees").disabled = true;
			}
		}


		function attupdate(input) // for attendance
		{	
			var check;	
			check = false;

			if(input.value.length > 0)
			{
				input.className = "form-control flag att";
			}
			else
			{
				input.className = "form-control flag";
				input.style.backgroundColor = "white";
			}

			var allvalues = document.getElementsByClassName("att");

			for (var i = 0; i < allvalues.length; i++)
			{
				if(allvalues[i].value.length > 0)
				{
					allvalues[i].style.backgroundColor = "#ffe0cc";
					check = true;
				}
				else
				{
					allvalues[i].style.backgroundColor = "white";
				} 
			}

			if(check)
			{
				document.getElementById("updateall").disabled = false;
			}
			else
			{
				document.getElementById("updateall").disabled = true;
			}
		}


		function clearffilters() // for Fees section
		{
			var d = new Date();
			document.getElementById("fnames").value = "";
			document.getElementById("fcentres").value = "";
			document.getElementById("frolls").value = "";
			document.getElementById("flevels").value = "Level";
			document.getElementById("fyearsel").value = d.getFullYear();
			document.getElementById("fterm").value = "Term I";

			showterm();
			filterfees();
		}

		function filterfees() // for FEES Section
		{
			var n,c,r,l,y, nfilter, cfilter, rfilter , lfilter , yfilter, table, tr, td, i, txtValue;

			n = document.getElementById("fnames");
			nfilter = n.value.toUpperCase();

			r = document.getElementById("frolls");
			rfilter = r.value.toUpperCase();

			c = document.getElementById("fcentres");
			cfilter = c.value.toUpperCase();

			l = document.getElementById("flevels");
			lfilter = l.value;

			y = document.getElementById("fyearsel");
			yfilter = y.value;

			table = document.getElementById("feesdata");
			tr = table.getElementsByTagName("tr");

			for (i = 0; i < tr.length; i++) 
			{
				tr[i].style.display = "";   
			}

			// applying filter
			for (i = 0; i < tr.length; i++) 
			{
				if(n.value.length > 0)
				{	
					td = tr[i].getElementsByTagName("td")[0];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(nfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}	
				} 

				if(r.value.length > 0)
				{
					td = tr[i].getElementsByTagName("td")[1];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(rfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}	
				}

				if(c.value.length > 0)
				{
					td = tr[i].getElementsByTagName("td")[2];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(cfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}
				}

				if(l.value != "Level")
				{
					td = tr[i].getElementsByTagName("td")[3];
					if(td) 
					{
						txtValue = td.textContent;
						if (txtValue.toUpperCase().indexOf(lfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else
						{
							tr[i].style.display = "none";
						}
					}   
				}

				if(y.value != "Year")
				{
					td = tr[i].getElementsByTagName("td")[4];
					if(td) 
					{
						txtValue = td.textContent;
						if(txtValue.toUpperCase().indexOf(yfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else
						{
							tr[i].style.display = "none";
						}
					}  
				}
 
			}
		}
		filterfees();


		function showterm() // for fees
		{	
			var temp, term, table, tr, td;

			temp = document.getElementById("fterm");
			term = temp.value;

			table = document.getElementById("feesdata");
			tr = table.getElementsByTagName("tr");

			// console.log("Term: " + term);

			for (var i = 0; i < tr.length; i++) 
			{
				var cols = tr[i].children;
				for (var j = 5; j < 11; j++) 
				{
		            var cell = cols[j];
		            cell.style.display = 'none';
				}
			}

			for (var i = 0; i < tr.length; i++) 
			{
				var cols = tr[i].children;
				if(term == "Term I")
				{
					var cell = cols[5];
		            // console.log("Cell: " + cell.textContent);
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';

					var cell = cols[6];
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';

					var cell = cols[7];
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';
				}
				else if(term == "Term II")
				{
					var cell = cols[8];
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';

					var cell = cols[9];
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';

					var cell = cols[10];
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';
				}
			}		
		}
		showterm();



		function showmonth() // for attendance
		{	
			var temp, month, table, tr, td, monthval;

			temp = document.getElementById("month");
			month = temp.value;

			table = document.getElementById("studentdata");
			tr = table.getElementsByTagName("tr");

			if(month == 'Month') monthval = 0
			else if(month == 'Jan') monthval = 11
			else if(month == 'Feb') monthval = 12
			else if(month == 'Mar') monthval = 13
			else if(month == 'Apr') monthval = 14
			else if(month == 'May') monthval = 15
			else if(month == 'June') monthval = 4
			else if(month == 'July') monthval = 5 
			else if(month == 'Aug') monthval = 6
			else if(month == 'Sept') monthval = 7
			else if(month == 'Oct') monthval = 8
			else if(month == 'Nov') monthval = 9
			else if(month == 'Dec') monthval = 10

			// console.log("Month: " + month);
			// console.log("Month val: " + monthval);

			for (var i = 0; i < tr.length; i++) 
			{
				var cols = tr[i].children;
				for (var j = 4; j < 16; j++) 
				{
		            var cell = cols[j];
		            cell.style.display = 'none';
				}
			}

			for (var i = 0; i < tr.length; i++) 
			{
				var cols = tr[i].children;
				if(monthval != 0)
				{
					var cell = cols[monthval];
		            // console.log("Cell: " + cell.textContent);
					if (cell.tagName == 'TH' || cell.tagName == 'TD') cell.style.display = '';
				}
			}

			if(monthval == 0)
			{
				for (var i = 0; i < tr.length; i++) 
				{
					var cols = tr[i].children;
					for (var j = 4; j < 16; j++) 
					{
			            var cell = cols[j];
			            cell.style.display = '';
					}
				}
			}
			
		}


	 	function selectall(ele) 
		{
			var table, tr, checkboxes, check;
			
			checkboxes = document.getElementsByName('rows');
			table = document.getElementById("students");
			tr = table.getElementsByTagName("tr");
			check = false;

			// console.log("Row length: " + tr.length);
			// console.log("No of checkboxes: " + checkboxes.length);

			if (ele.checked) 
			{
				for (var i = 0; i < checkboxes.length; i++) 
				{
					if(tr[i+1].style.display == "")
					{
						checkboxes[i].checked = true;
						tr[i+1].style.backgroundColor= "#F5F5F5";
						check = true;
					}  
				}
			} 
			else 
			{
				for (var i = 0; i < checkboxes.length; i++) 
				{
					if(tr[i+1].style.display == "")
					{
						checkboxes[i].checked = false;
				 		tr[i+1].style.backgroundColor= "white";
				 		check = false;
					} 
				}
			}

			if(check)
			{
				document.getElementById("send_mail").disabled = false;
				document.getElementById("promote").disabled = false;
			}
			else
			{
				document.getElementById("send_mail").disabled = true;
				document.getElementById("promote").disabled = true;
			}		
			
		}

		function rowsel() 
		{	
			var table, tr, checkboxes, check;
			
			checkboxes = document.getElementsByName('rows');
			table = document.getElementById("students");
			tr = table.getElementsByTagName("tr");
			check = false;

			for (var i = 0; i < checkboxes.length; i++) 
			{
				if(checkboxes[i].checked)
				{
					tr[i+1].style.backgroundColor= "#F5F5F5";
					check = true;
				}
				else
				{
					tr[i+1].style.backgroundColor= "white";
				} 
			}

			if(check)
			{
				document.getElementById("send_mail").disabled = false;
				document.getElementById("promote").disabled = false;
			}
			else
			{
				document.getElementById("send_mail").disabled = true;
				document.getElementById("promote").disabled = true;
			}	
		}

		function clearfilter() // for student database section
		{

			document.getElementById("namesearch").value = "";
			document.getElementById("centresearch").value = "";
			document.getElementById("typesearch").value = "Type";
			document.getElementById("levelsearch").value = "Level";
			document.getElementById("statussearch").value = "Status";

			document.getElementById("send_mail").disabled = true;
			document.getElementById("promote").disabled = true;

			searchfun();
		}

		function searchfun() // Filter in Student Database section
		{
			var n,c,t,s,l, nfilter, cfilter, tfilter , lfilter , sfilter, table, tr, td, i, txtValue;

			n = document.getElementById("namesearch");
			nfilter = n.value.toUpperCase();

			c = document.getElementById("centresearch");
			cfilter = c.value.toUpperCase();

			t = document.getElementById("typesearch");
			tfilter = t.value;

			l = document.getElementById("levelsearch");
			lfilter = l.value;

			s = document.getElementById("statussearch");
			sfilter = s.value;

			table = document.getElementById("students");
			tr = table.getElementsByTagName("tr");


			for (i = 0; i < tr.length; i++) 
			{
				tr[i].style.display = "";   
			}

			// To clear all checkboxes when filter changed
			var checkboxes = document.getElementsByName('rows');
			document.getElementById("selectall").checked = false;
			
			for (var i = 0; i < checkboxes.length; i++) 
			{
			 	checkboxes[i].checked = false;
			 	tr[i+1].style.backgroundColor= "white";
			}

			document.getElementById("send_mail").disabled = true;
			document.getElementById("promote").disabled = true;

			// applying filter
			for (i = 0; i < tr.length; i++) 
			{

				if(n.value.length > 0)
				{	
					td = tr[i].getElementsByTagName("td")[1];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(nfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}	
				} 


				if(c.value.length > 0)
				{
					td = tr[i].getElementsByTagName("td")[3];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(cfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}
				}


				if(t.value != "Type")
				{
					td = tr[i].getElementsByTagName("td")[6];
					if(td) 
					{
						txtValue = td.textContent;
						if (txtValue.length == tfilter.length + 1 && txtValue.indexOf(tfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}
				}


				if(l.value != "Level")
				{
					td = tr[i].getElementsByTagName("td")[4];
					if(td) 
					{
						txtValue = td.textContent;
						if (txtValue.toUpperCase().indexOf(lfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else
						{
							tr[i].style.display = "none";
						}
					}   
				}


				if(s.value != "Status")
				{

					td = tr[i].getElementsByTagName("td")[8];
					if(td) 
					{
						txtValue = td.textContent;
						if (txtValue.length == sfilter.length + 1 && txtValue.indexOf(sfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					} 
				}   
 
			}
		}	

		function clearfilters() // for attendance section
		{
			var d = new Date();

			document.getElementById("names").value = "";
			document.getElementById("centres").value = "";
			document.getElementById("rolls").value = "";
			document.getElementById("levels").value = "Level";
			document.getElementById("attendances").value = "";
			document.getElementById("month").value = "Month";
			document.getElementById("yearsel").value = d.getFullYear();

			showmonth();
			filterfun();
		}

		function filterfun() // Filter in Attendance Section  
		{
			var n,c,r,l,a,y, nfilter, cfilter, rfilter , lfilter , afilter, yfilter, table, tr, td, i, txtValue;

			n = document.getElementById("names");
			nfilter = n.value.toUpperCase();

			c = document.getElementById("centres");
			cfilter = c.value.toUpperCase();

			r = document.getElementById("rolls");
			rfilter = r.value.toUpperCase();

			l = document.getElementById("levels");
			lfilter = l.value;

			a = document.getElementById("attendances");
			afilter = a.value;

			y = document.getElementById("yearsel");
			yfilter = y.value;

			table = document.getElementById("studentdata");
			tr = table.getElementsByTagName("tr");

			for (i = 0; i < tr.length; i++) 
			{
				tr[i].style.display = "";   
			}

			// applying filter
			for (i = 0; i < tr.length; i++) 
			{
				if(n.value.length > 0)
				{	
					td = tr[i].getElementsByTagName("td")[0];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(nfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}	
				} 

				if(r.value.length > 0)
				{
					td = tr[i].getElementsByTagName("td")[1];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(rfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}	
				}

				if(c.value.length > 0)
				{
					td = tr[i].getElementsByTagName("td")[2];
					if(td)
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(cfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					}
				}

				if(l.value != "Level")
				{
					td = tr[i].getElementsByTagName("td")[3];
					if(td) 
					{
						txtValue = td.textContent;
						if (txtValue.toUpperCase().indexOf(lfilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else
						{
							tr[i].style.display = "none";
						}
					}   
				}


				if(a.value.length > 0)
				{

					td = tr[i].getElementsByTagName("td")[16];
					if(td) 
					{
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(afilter) > -1 && tr[i].style.display == "") 
						{
							tr[i].style.display = "";
						} 
						else 
						{
							tr[i].style.display = "none";
						}
					} 
				} 

				if(y.value != "Year")
				{
					var d = new Date();
  					d = d.getFullYear();

					td = tr[i].getElementsByTagName("td")[17];
					if(y.value == "")
					{
						if(td) 
						{
							txtValue = td.textContent;
							if(txtValue.toUpperCase().indexOf(d) > -1 && tr[i].style.display == "") 
							{
								tr[i].style.display = "";
							} 
							else
							{
								tr[i].style.display = "none";
							}
						}
					}
					else
					{
						if(td) 
						{
							txtValue = td.textContent;
							if(txtValue.toUpperCase().indexOf(yfilter) > -1 && tr[i].style.display == "") 
							{
								tr[i].style.display = "";
							} 
							else
							{
								tr[i].style.display = "none";
							}
						}  
					}
				}
 
			}
		}
		filterfun();

		// function promote() 
		// {	
		// 	var table, tr, checkboxes, check, cols, cell;
			
		// 	checkboxes = document.getElementsByName("rows");
		// 	table = document.getElementById("students");
		// 	tr = table.getElementsByTagName("tr");
		// 	check = false;

		// 	for (var i = 0; i < checkboxes.length; i++) 
		// 	{
		// 		if(checkboxes[i].checked)
		// 		{
		// 			cols = tr[i+1].children;
		// 			cell = cols[2];
		// 			console.log(cell.textContent);
		// 		}
		// 	}	
		// }

		$(document).ready(function(){ 

		$(document).on('click', '.updatefees', function(){  // for fees
			var arr = [];
			var index = 0;

			$('input[type="date"].fee').each(function(){
				index = index + 1;
				if($(this).attr('class') == "form-control fee pay")
				{
					var roll = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(2)').text();
					var year = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(5)').text();
					//alert(roll +', '+ $(this).attr('name') +', '+ $(this).val()+', '+year);
			  		arr.push(roll +','+ $(this).attr('name') +','+ $(this).val()+','+year+'\n');
				}
			});

			index = 0;
			$('input[type="text"].fee').each(function(){
				index = index + 1;
				if($(this).attr('class') == "form-control fee pay")
				{
					var roll = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(2)').text();
					var year = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(5)').text();
					//alert(roll +', '+ $(this).attr('name') +', '+ $(this).val()+', '+year);
			  		arr.push(roll +','+ $(this).attr('name') +','+ $(this).val()+','+year+'\n');
				}
			});

			index = 0;
			$("select.fee option:selected").each(function() {
		      	index = index + 1;
				if($(this).parent().attr('class') == "form-control fee pay")
				{
					var roll = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(2)').text();
					var year = $('#feesdata tr:nth-child('+ (Math.ceil(index/2))+ ') td:nth-child(5)').text();
					//alert(roll +', '+ $(this).parent().attr('name') +', '+ $(this).val()+', '+year);
			  		arr.push(roll +','+ $(this).parent().attr('name') +','+ $(this).val()+','+year+'\n');
				}
		    });

			// var str = '';
			// $.each(arr, function( index,value ){
			// 	str = str + value;
			// });
			// alert(str);

	       	$.ajax({  
	            url:"admin_fetch.php",  
	            method:"POST",
	            data:{updatefees:arr},
	            dataType:"json", 
	            success:function(data){ 
	            	alert(data.msg);
	            	location.reload();	 		
	            }  
	       });  
		 });


	 	$('select[name=yearsel]').change(function() { // for attendance
		    if ($(this).val() == '')
		    {
		        var newThing = prompt('Enter Year to Add Attendance...');

		        if(newThing.length == 4)
		        {
		        	$.ajax({  
			            url:"admin_fetch.php",  
			            method:"POST",
			            data:{attyear:newThing},
			            dataType:"json", 
			            success:function(data){ 
			            	alert(data.msg);
			            	$(this).val(newThing);
			            }  
			       });
		        }
		    }
		});


		$(document).on('click', '.updateall', function(){  
			var arr = [];
			var index = 0;

			$('input[type="text"].flag').each(function(){
				index = index + 1;
				if($(this).attr('class') == "form-control flag att")
				{
					var roll = $('#studentdata tr:nth-child('+ Math.ceil(index/12)+ ') td:nth-child(2)').text();
					var year = $('#studentdata tr:nth-child('+ Math.ceil(index/12)+ ') td:nth-child(18)').text();
			  		arr.push(roll +','+ $(this).attr('name') +','+ $(this).val()+','+year+'\n');
				}
			});

			// var str = '';
			// $.each(arr, function( index,value ){
			// 	str = str + value;
			// });
			// alert(str);
	       	$.ajax({  
	            url:"admin_fetch.php",  
	            method:"POST",
	            data:{updateall:arr},
	            dataType:"json", 
	            success:function(data){ 
	            	alert(data.msg);
	            	location.reload();	 		
	            }  
	       });  
		 });


			$(document).on('click', '.promote', function(){
				// var texto = $('#students tr:nth-child(1) td:nth-child(3)').text();
				// alert(texto);
				var arr = [];
				var index = 0;
				$("input:checkbox[name=rows]").each(function(){
					index = index + 1;
					if(this.checked)
					{
						var texto = $('#students tr:nth-child('+ index + ') td:nth-child(3)').text();
				    	arr.push(texto);
					}
				});
		       $.ajax({  
		            url:"admin_fetch.php",  
		            method:"POST",
		            data:{selectedrolls:arr},
		            dataType:"json", 
		            success:function(data){  
				 		location.reload();
				 		alert(data.msg);
		            }  
		       });  
		  });

		$(document).on('click', '.edit_data', function(){  
		       var employee_id = $(this).attr("id");
		       $.ajax({  
		            url:"admin_fetch.php",  
		            method:"POST",  
		            data:{employee_id:employee_id},  
		            dataType:"json",  
		            success:function(data){  
						$('#roll_no').val(data.roll_no);
						$('#level').val(data.level);
						$('#centre').val(data.centre);
						$('#doj').val(data.doj);
						$('#doa').val(data.doa);
						$('#type').val(data.type);
						$('#year').val(data.year);
						$('#status').val(data.status);
						$('#alumni').val(data.alumni);
						$('#attendance').val(data.attendance);

						$('#name').val(data.name);
						$('#dob').val(data.dob);
						$('#snumber').val(data.snumber);
						$('#address').val(data.address);
						$('#country').val(data.country);
						$('#state').val(data.state);
						$('#city').val(data.city);
						$('#school').val(data.school);
						$('#grade').val(data.grade);
						$('#photo_id').val(data.photo_id);

						$('#output').attr("src", "profilepics/"+data.photo_id);

						$('#fname').val(data.fname);
						$('#focc').val(data.focc);
						$('#fnum').val(data.fnum);
						$('#fmail').val(data.fmail);
						$('#mname').val(data.mname);
						$('#mocc').val(data.mocc);
						$('#mnum').val(data.mnum);
						$('#mmail').val(data.mmail);

						$('#employee_id').val(data.roll_no);  
						$('#add_data_Modal').modal('show');  
		            }  
		       });  
		  });  


		      // $('#insert_form').on("submit", function(event){  
		      //      event.preventDefault(); 
	       //          $.ajax({  
	       //               url:"admin_update.php",  
	       //               method:"POST",  
	       //               data:$('#insert_form').serialize(),  
	       //               beforeSend:function(){
	       //                    $('#update').val("Updating");  
	       //               },  
	       //               success:function(data){  
	       //                    $('#insert_form')[0].reset();
	       //                    $('#add_data_Modal').modal('hide');
	       //                    location.reload();
	       //               }  
	       //          });  
		      // });

		      // $(document).on('click', '.view_data', function(){  
		      //      var employee_id = $(this).attr("id");  
		      //      if(employee_id != '')  
		      //      {  
		      //           $.ajax({  
		      //                url:"select.php",  
		      //                method:"POST",  
		      //                data:{employee_id:employee_id},  
		      //                success:function(data){  
		      //                     $('#employee_detail').html(data);  
		      //                     $('#dataModal').modal('show');  
		      //                }  
		      //           });  
		      //      }            
		      // }); 

		      $(document).on('click', '.edit_enquirys', function(){  
		           var s_id = $(this).attr("id");  
		           $.ajax({  
		                url:"admin_fetch.php",  
		                method:"POST",  
		                data:{s_id:s_id},  
		                dataType:"json",  
		                success:function(data)
		                {	
		                	$('#stuname').val(data.name);
							$('#stunumber').val(data.number);
							$('#stuemail').val(data.email);
							$('#stucity').val(data.city);
							$('#sturequirement').val(data.accomodation);
							$('#stupname').val(data.pname);
							$('#stupnumber').val(data.pnumber);
							$('#stupemail').val(data.pmail);
							$('#stumessage').val(data.message);
							$('#stutype').val(data.type);
							$('#stugrade').val(data.grade);
							$('#stuschool').val(data.school);
							$('#stucountry').val(data.country);
							$('#stustate').val(data.state);

							$('#stu_modal').modal('show');  
		                }  
		           });  
		      });

		      $(document).on('click', '.edit_enquiryp', function(){  
		           var pro_id = $(this).attr("id");  
		           $.ajax({  
		                url:"admin_fetch.php",  
		                method:"POST",  
		                data:{pro_id:pro_id},  
		                dataType:"json",  
		                success:function(data)
		                {	
		     				$('#venue').val(data.venue);
							$('#pronumber').val(data.number);
							$('#proemail').val(data.email);
							$('#procity').val(data.city);
							$('#accom').val(data.accomodation);
							$('#promessage').val(data.message);
							$('#prodate').val(data.date);
							$('#days').val(data.grade);

							$('#pro_modal').modal('show');  
		                }  
		           });  
		      });

		      $(document).on('click', '.edit_enquiryw', function(){  
		           var work_id = $(this).attr("id");  
		           $.ajax({  
		                url:"admin_fetch.php",  
		                method:"POST",  
		                data:{work_id:work_id},  
		                dataType:"json",  
		                success:function(data)
		                {	
		     				$('#workvenue').val(data.venue);
							$('#worknumber').val(data.number);
							$('#workemail').val(data.email);
							$('#workcity').val(data.city);
							$('#accomw').val(data.accomodation);
							$('#workmessage').val(data.message);
							$('#from').val(data.fromdate);
							$('#to').val(data.todate);

							$('#work_modal').modal('show');  
		                }  
		           });  
		      });

		      $(document).on('click', '.annual_app', function(){
		           $.ajax({  
		                url:"annualapp.php",  
		                method:"POST",  
		                data:{ap:'1'},  
		                dataType:"json",  
		                success:function(data)
		                {	
		     				$('#ap_level').val(data.level);
							$('#ap_portions_1').val(data.portions_1);
							$('#ap_portions_2').val(data.portions_2);
							$('#ap_intro').val(data.intro);
							$('#ap_note').val(data.note);
							$('#ap_sign').val(data.sign);

							var parent = $('embed#ap_embed').parent();
							var newElement = "<embed width='100%;' height='1100px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ap_embed'>";
	
							$('embed#ap_embed').remove();
							parent.append(newElement);
							$('#dc_annualapp').modal('show');  
		                }  
		           });  
		    });


		    $('#ap_form').on("submit", function(event){  
		           	event.preventDefault(); 
					$.ajax({  
					     url:"annualapp.php",  
					     method:"POST",
					     data:$('#ap_form').serialize(),  
					     success:function(data)
					     {
					     	$('#ap_level').val(data.level);
							$('#ap_portions_1').val(data.portions_1);
							$('#ap_portions_2').val(data.portions_2);
							$('#ap_intro').val(data.intro);
							$('#ap_note').val(data.note);
							$('#ap_sign').val(data.sign);
							$('#ap_fees').val(data.fees);

							var parent = $('embed#ap_embed').parent();
							var newElement = "<embed width='100%;' height='1100px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ap_embed'>";

							$('embed#ap_embed').remove();
							parent.append(newElement);

							//src=""data:application/pdf," + encodeURI(pdfString)";

							$('#dc_annualapp').modal('show');  
					     }  
					});  
		    });


		    $(document).on('click', '.send_mail', function(){

				$('#send_mail_modal').modal('show');   

		    });


		    $(document).on('click', '.annualapp', function(){ // only for SEND MAIL

		    	var arr = [];
				var index = 0;
				var txt = '';

				$("input:checkbox[name=rows]").each(function(){
					index = index + 1;
					if(this.checked)
					{
						var texto = $('#students tr:nth-child('+ index + ') td:nth-child(3)').text();
				    	arr.push(texto);
				    	txt = txt + texto;
					}
				});

				alert(txt);

	           $.ajax({  
	                url:"annualapp.php",  
	                method:"POST",  
	                data:{annualapp:'1',arr:arr},
	                dataType:"json"
	                ,beforeSend: function()
	    			{
	    				$('#send_mail_modal').modal('hide'); 
						$('#mail_sent').modal('show');
					}
	     //            ,success:function(data)
	     //            {	
	     //            	$('#ap_level').val(data.level);
						// $('#ap_portions_1').val(data.portions_1);
						// $('#ap_portions_2').val(data.portions_2);
						// $('#ap_intro').val(data.intro);
						// $('#ap_note').val(data.note);
						// $('#ap_sign').val(data.sign);

						// var parent = $('embed#ap_embed').parent();
						// var newElement = "<embed width='100%;' height='1100px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ap_embed'>";

						// $('embed#ap_embed').remove();
						// parent.append(newElement);
						// $('#dc_annualapp').modal('show');  
	     //            }  
	           });  
		    });


		     $(".ap_level").change(function(){
		     	var level = '1';
		     	$( "#ap_level option:selected" ).each(function() {
				     level= $( this ).text();
			    });

				$.ajax({  
				    url:"annualapp.php", 
				    method:"POST",  
				    data:{ap:level}, 
				    dataType:"json",
				    success:function(data)
				    {	
						$('#ap_level').val(data.level);
						$('#ap_portions_1').val(data.portions_1);
						$('#ap_portions_2').val(data.portions_2);
						$('#ap_intro').val(data.intro);
						$('#ap_note').val(data.note);
						$('#ap_sign').val(data.sign);
						$('#ap_fees').val(data.fees);

						var parent = $('embed#ap_embed').parent();
						var newElement = "<embed width='100%;' height='1100px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ap_embed'>";

						$('embed#ap_embed').remove();
						parent.append(newElement);

						//src=""data:application/pdf," + encodeURI(pdfString)";

						$('#dc_annualapp').modal('show');  
				    }  
				});
			});


		  $(document).on('click', '.welcome_letter', function(){
		           $.ajax({  
		                url:"welcomeletter.php",  
		                method:"POST",  
		                data:{wl:'1'},
		                dataType:"json",  
		                success:function(data)
		                {	
							$('#wl_intro').val(data.intro);
							$('#wl_note').val(data.note);
							$('#wl_sign').val(data.sign);

							var parent = $('embed#wl_embed').parent();
							var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='wl_embed'>";
	
							$('embed#wl_embed').remove();
							parent.append(newElement);
							$('#dc_welcomeletter').modal('show');  
		                }  
		           });  
		    });


		  $('#wl_form').on("submit", function(event){  
		           	event.preventDefault(); 
					$.ajax({
					     url:"welcomeletter.php",  
					     method:"POST",
					     data:$('#wl_form').serialize(),  
					     success:function(data)
					     {
							$('#wl_intro').val(data.intro);
							$('#wl_note').val(data.note);
							$('#wl_sign').val(data.sign);

							var parent = $('embed#wl_embed').parent();
							var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='wl_embed'>";
	
							$('embed#wl_embed').remove();
							parent.append(newElement);
							$('#dc_welcomeletter').modal('hide');  
					     }  
					});  
		    });


		  $(document).on('click', '.welcomeletter', function(){

		    	var arr = [];
				var index = 0;
				var txt = '';

				$("input:checkbox[name=rows]").each(function(){
					index = index + 1;
					if(this.checked)
					{
						var texto = $('#students tr:nth-child('+ index + ') td:nth-child(3)').text();
				    	arr.push(texto);
				    	txt = txt + texto;
					}
				});

				alert(txt);

	           $.ajax({  
	                url:"welcomeletter.php",  
	                method:"POST",  
	                data:{arr:arr},
	                dataType:"json",
	                beforeSend: function()
	    			{
	    				$('#send_mail_modal').modal('hide'); 
						$('#mail_sent').modal('show');
					}
	     //            success:function(data)
	     //            {	
						// $('#wl_intro').val(data.intro);
						// $('#wl_note').val(data.note);
						// $('#wl_sign').val(data.sign);

						// var parent = $('embed#wl_embed').parent();
						// var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='wl_embed'>";

						// $('embed#wl_embed').remove();
						// parent.append(newElement);
						// $('#dc_welcomeletter').modal('show');  
	     //            }  
	           });  
		    });


		$(document).on('click', '.leaving_letter', function(){
		           $.ajax({  
		                url:"leavingletter.php",  
		                method:"POST",  
		                data:{leavingletter:'1'},
		                dataType:"json",  
		                success:function(data)
		                {	
							$('#ll_intro').val(data.intro);
							$('#ll_sign').val(data.sign);
							$('#ll_portions').val(data.portionscov);
							$('#ll_level').val(data.level);

							var parent = $('embed#ll_embed').parent();
							var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ll_embed'>";
	
							$('embed#ll_embed').remove();
							parent.append(newElement);
							$('#dc_leavingletter').modal('show');  
		                }  
		           });  
		    });


		$('#ll_form').on("submit", function(event){  
		           	event.preventDefault(); 
					$.ajax({
					     url:"leavingletter.php",  
					     method:"POST",
					     data:$('#ll_form').serialize(),  
					     success:function(data)
					     {
							$('#ll_intro').val(data.intro);
							$('#ll_sign').val(data.sign);
							$('#ll_portions').val(data.portionscov);
							$('#ll_level').val(data.level);

							var parent = $('embed#ll_embed').parent();
							var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ll_embed'>";
	
							$('embed#ll_embed').remove();
							parent.append(newElement);
							$('#dc_leavingletter').modal('hide');  
					     }  
					});  
		    });

		$(".ll_level").change(function(){
		     	var level = '1';
		     	$( "#ll_level option:selected" ).each(function() {
				     level= $( this ).text();
			    });

				$.ajax({  
				    url:"leavingletter.php", 
				    method:"POST",  
				    data:{leavingletter:level}, 
				    dataType:"json",
				    success:function(data)
					     {
							$('#ll_intro').val(data.intro);
							$('#ll_sign').val(data.sign);
							$('#ll_portions').val(data.portionscov);
							$('#ll_level').val(data.level);

							var parent = $('embed#ll_embed').parent();
							var newElement = "<embed width='100%;' height='900px;' src='data:application/pdf;base64, " +encodeURI(data.pdf) + "' id='ll_embed'>";
	
							$('embed#ll_embed').remove();
							parent.append(newElement);

							$('#dc_leavingletter').modal('show');  
					     }  
				});
			});


		  $(document).on('click', '.leavingletter', function(){ 			// FOR MAIL

		    	var arr = [];
				var index = 0;
				var txt = '';

				$("input:checkbox[name=rows]").each(function(){
					index = index + 1;
					if(this.checked)
					{
						var texto = $('#students tr:nth-child('+ index + ') td:nth-child(3)').text();
				    	arr.push(texto);
				    	txt = txt + texto;
					}
				});

				alert(txt);

				$.ajax({
	                url:"leavingletter.php",
	                method:"POST",
	                data:{arr:arr},
	                dataType:"json",
	    			beforeSend: function()
	    			{
	    				$('#send_mail_modal').modal('hide'); 
						$('#mail_sent').modal('show');
					}
	                // ,success:function(data) // Ajax does not wait for SMTP API to return results.
	                // {
	                // 	$('#mail_sent').modal('show');   
	                // }  
	           });

		    });


		 }); 


		</script>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->	
 		<div id="mail_sent" class="modal fade">  
			<div class="modal-dialog modal-sm">  
			   <div class="modal-content">
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Email Confirmation</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>E-Mail has been sent successfully!</label>
								</div>
							</div>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>

		<div id="mail_confirmation" class="modal fade">  
			<div class="modal-dialog modal-sm">  
			   <div class="modal-content">
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Email Confirmation</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Mail Sent to: </label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group" style="margin-left: 30px;">
									<textarea required class="form-control" id="mailsent" name="mailsent" placeholder="List of students" rows="5" readonly></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Mail Not Sent to: </label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group" style="margin-left: 30px;">
									<textarea required class="form-control" id="mailnotsent" name="mailnotsent" placeholder="List of students" rows="5" readonly></textarea>
								</div>
							</div>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>


	    <div id="enquirys" class="tab-pane fade">
			<div style="text-align: center;">
				<h3><b>Student Enquiries</b></h3>
			</div>
			<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
			<br>
			<?php if(isset($_SESSION['message'])): ?>
				<div style="margin-top: 80px" class="alert alert-<?=$_SESSION['msg_type']?>">
					<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);
					?>
				</div>
				<br>
			<?php endif; ?>	

			<div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				<?php $result = $mysqli->query("SELECT * FROM enquiry where type = 'Student'") or die($mysqli->error); ?>

				<table class="table table-hover" style="font-size: 15px;">
				<thead> 
					<tr style="background-color: #E8E8E8; vertical-align: middle; text-align: center;">
						<th style="vertical-align: middle; text-align: center;">Name</th>
						<th style="vertical-align: middle; text-align: center;">Grade</th>
						<th style="vertical-align: middle; text-align: center;">School</th>
						<th style="vertical-align: middle; text-align: center;">Country</th>
						<th style="vertical-align: middle; text-align: center;">State</th>
						<th style="vertical-align: middle; text-align: center;">City</th>
						<th style="vertical-align: middle; text-align: center;">Requirement</th>
						<th style="vertical-align: middle; text-align: center;">Parent Name</th>
						<th style="vertical-align: middle; text-align: center;">Message</th>
						<th colspan="2" style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey">Action</th>
					</tr>
				</thead>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr style="text-align: center; vertical-align: middle; border-bottom: 2px solid lightgrey;">
					<td style="vertical-align: middle; border-left: 2px solid lightgrey;"> <?php echo $row['name']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['grade']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['school']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['country']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['state']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['city']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['accomodation']; ?></td>
					<td style="vertical-align: middle;"> <?php echo $row['pname']; ?></td>	
					<td style="vertical-align: middle;"> <?php echo $row['message']; ?></td>					
					<td style="vertical-align: middle; border-left: 1px solid lightgrey">
					<button id="<?php echo $row['id']; ?>" class='btn btn-info edit_enquirys'>Full Details</button>
					</td>
					<td style="vertical-align: middle; border-right: 2px solid lightgrey;">
					<a href="admin_fetch.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php endwhile; ?>
				</table>
			</div>
			<hr style="width: 100%; margin-top: 5px; margin-bottom: 5px; border-top: 2px solid black;">
	    </div>

		<div id="stu_modal" class="modal fade">  
			<div class="modal-dialog modal-lg">  
			   <div class="modal-content">  
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Student Enquiry Details</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
			            	<form method="POST" id="">
			            		<div class="form-group">
									<label>Student Details: </label>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Name: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="name" id="stuname" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group" style="text-align: center;">
													<label>Number: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="number" name="number" id="stunumber" class="form-control" readonly>
												</div>
											</div>
										</div>			
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label for="grade">Grade:</label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="grade" id="stugrade" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Mail ID:</label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Mail</label> -->
													<input type="email" name="email" id="stuemail" class="form-control" readonly>
												</div>	
											</div>
										</div>						
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Type: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Requirement</label> -->
													<input type="text" name="Requirement" id="sturequirement" class="form-control" readonly>
												</div>	
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>School: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>School</label> -->
													<input type="text" name="school" id="stuschool" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
								</div>
								<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 1px solid black;">
								<div class="form-group">
									<label>Parent Details: </label>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Name: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Father Name</label> -->
													<input type="text" name="pname" id="stupname" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Number: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>parent Number</label> -->
													<input type="number" name="pnumber" id="stupnumber" class="form-control" readonly>
												</div>	
											</div>
										</div>		
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>City: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="city" id="stucity" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Mail ID: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>parent Mail</label> -->
													<input type="email" name="pemail" id="stupemail" class="form-control" readonly>
												</div>	
											</div>
										</div>							
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Country: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label for="city" class="required">Country</label> -->
													<input type="text" name="country" id="stucountry" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>State: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="state" id="stustate" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
								</div>
								<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 1px solid black;">
								<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Message: </label>
										</div>
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<div class="form-group" style="margin-left: 30px;">
											<textarea required class="form-control" id="stumessage" name="message" placeholder="Message*" rows="5" readonly></textarea>
										</div>
									</div>
								</div>	
							</form>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div> 



	    <div id="enquiryp" class="tab-pane fade">
	      <div style="text-align: center;">
	      	<h3><b>Program Enquiries</b></h3>
	      </div>
	       <hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
	      <br>
	       <?php if(isset($_SESSION['message'])): ?>
			<div style="margin-top: 80px" class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);	
				?>
			</div>
			<br>
			<?php endif; ?>	
	      <div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				<?php
					$result = $mysqli->query("SELECT * FROM enquiry where type = 'Program'") or die($mysqli->error);
				?>
				<table class="table table-hover" style="font-size: 15px;">
					<thead>
						<tr style="background-color: #E8E8E8;">
							<th style="vertical-align: middle; text-align: center;">Occassion</th>
							<th style="vertical-align: middle; text-align: center;">Venue</th>
							<th style="vertical-align: middle; text-align: center;">Number</th>
							<th style="vertical-align: middle; text-align: center;">Email Id</th>
							<th style="vertical-align: middle; text-align: center;">Date</th>
							<th style="vertical-align: middle; text-align: center;">Days</th>
							<th style="vertical-align: middle; text-align: center;">Accomodation</th>
							<th style="vertical-align: middle; text-align: center;">Message</th>
							<th colspan="2" style="vertical-align: middle; text-align: center; border-left: 1px solid darkgrey">Action</th>
						</tr>
					</thead>
					
					<?php while ($row = $result->fetch_assoc()): ?>
							<tr style="vertical-align: middle; text-align: center; border-bottom: 2px solid lightgrey	">
								<td style="vertical-align: middle; border-left: 2px solid lightgrey"> <?php echo $row['name']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['city']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['number']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['email']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['fromdate']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $row['grade']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $row['accomodation']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['message']; ?></td>					
								<td style="vertical-align: middle; border-left: 1px solid lightgrey">
									<button id="<?php echo $row['id']; ?>" class='btn btn-info edit_enquiryp'>Full Details</button>
								</td>
								<td style="vertical-align: middle; border-right: 2px solid lightgrey;">
									<a href="admin_fetch.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
					<?php endwhile; ?>
				</table>
			</div>
			<hr style="width: 100%; margin-top: 5px; margin-bottom: 5px; border-top: 2px solid black;">
	    </div>

	    <div id="pro_modal" class="modal fade">  
			<div class="modal-dialog modal-lg">  
			   <div class="modal-content">  
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Program Enquiry Details</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
			            	<form method="POST" id="">
			            		<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Venue: </label>
										</div>
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<div class="form-group" style="margin-left: 30px;">
											<input type="text" name="venue" id="venue" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label for="grade">City:</label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="city" id="procity" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Date: </label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Father Name</label> -->
													<input type="text" name="date" id="prodate" class="form-control" readonly>
												</div>
											</div>
										</div>			
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Days: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>School</label> -->
													<input type="text" name="days" id="days" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Accomodation: </label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group" >
													<!-- <label>School</label> -->
													<input type="text" name="accom" id="accom" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group" style="text-align: center;">
													<label>Number: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="number" name="number" id="pronumber" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Mail ID:</label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Mail</label> -->
													<input type="email" name="email" id="proemail" class="form-control" readonly>
												</div>	
											</div>
										</div>						
									</div>
								</div>
								<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Message: </label>
										</div>
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<div class="form-group" style="margin-left: 30px;">
											<textarea required class="form-control" id="promessage" name="message" placeholder="Message*" rows="5" readonly></textarea>
										</div>
									</div>
								</div>	
							</form>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>


	    <div id="enquiryw" class="tab-pane fade">
	      <div style="text-align: center;">
	      	<h3><b>Workshop Enquiries</b></h3>
	      </div>
	       <hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
	      <br>
	       <?php if(isset($_SESSION['message'])): ?>
			<div style="margin-top: 80px" class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);	
				?>
			</div>
			<br>
			<?php endif; ?>	
	      <div class="row justify-content-center" style="overflow-y: auto; height: 400px;">
				<?php
					$result = $mysqli->query("SELECT * FROM enquiry where type = 'Workshop'") or die($mysqli->error);
				?>

				<table class="table table-hover" style="font-size: 15px;">
					<thead>
						<tr style="background-color: #E8E8E8;">
							<th style="vertical-align: middle; text-align: center;">Institution</th>
							<th style="vertical-align: middle; text-align: center;">Venue</th>
							<th style="vertical-align: middle; text-align: center;">Number</th>
							<th style="vertical-align: middle; text-align: center;">Email Id</th>
							<th style="vertical-align: middle; text-align: center;">From Date</th>
							<th style="vertical-align: middle; text-align: center;">To Date</th>
							<th style="vertical-align: middle; text-align: center;">Accomodation</th>
							<th style="vertical-align: middle; text-align: center;">Message</th>
							<th colspan="2" style="text-align: center; border-left: 1px solid darkgrey">Action</th>
						</tr>
					</thead>
					
					<?php while ($row = $result->fetch_assoc()): ?>
							<tr style="vertical-align: middle; text-align: center; border-bottom: 2px solid lightgrey;">
								<td style="vertical-align: middle; border-left: 1px solid lightgrey"> <?php echo $row['name']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['city']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['number']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['email']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['fromdate']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $row['todate']; ?></td>	
								<td style="vertical-align: middle;"> <?php echo $row['accomodation']; ?></td>
								<td style="vertical-align: middle;"> <?php echo $row['message']; ?></td>					
								<td style="vertical-align: middle; border-left: 1px solid lightgrey">
									<button id="<?php echo $row['id']; ?>" class='btn btn-info edit_enquiryw'>Full Details</button>
								</td>
								<td style="vertical-align: middle; border-right: 2px solid lightgrey">
									<a href="admin_fetch.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
					<?php endwhile; ?>
				</table>
			</div>
			<hr style="width: 100%; margin-top: 5px; margin-bottom: 5px; border-top: 2px solid black;">
	    </div>

	    <div id="work_modal" class="modal fade">  
			<div class="modal-dialog modal-lg">  
			   <div class="modal-content">  
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Workshop Enquiry Details</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
			            	<form method="POST" id="">
			            		<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Name: </label>
										</div>
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<div class="form-group" style="margin-left: 30px;">
											<input type="text" name="venue" id="workvenue" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label for="grade">City:</label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="text" name="city" id="workcity" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>From Date: </label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>School</label> -->
													<input type="text" name="from" id="from" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Mail ID:</label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Mail</label> -->
													<input type="email" name="email" id="workemail" class="form-control" readonly>
												</div>	
											</div>
										</div>						
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>To Date: </label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<!-- <label>Father Name</label> -->
													<input type="text" name="to" id="to" class="form-control" readonly>
												</div>
											</div>
										</div>			
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="form-group" style="text-align: center;">
													<label>Number: </label>
												</div>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input type="number" name="number" id="worknumber" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Accomodation: </label>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="form-group" >
													<!-- <label>School</label> -->
													<input type="text" name="accom" id="accomw" class="form-control" readonly>
												</div>	
											</div>
										</div>					
									</div>
								</div>
								<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
										<div class="form-group">
											<label>Message: </label>
										</div>
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<div class="form-group" style="margin-left: 30px;">
											<textarea required class="form-control" id="workmessage" name="message" placeholder="Message*" rows="5" readonly></textarea>
										</div>
									</div>
								</div>	
							</form>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>

		<div id="pdf" class="tab-pane fade">
			<div style="text-align: center;">
				<h3><b>Digital / Generated Content</b></h3>
			</div>
			<hr style="width: 100%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
			<br>
			<div class="text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button class="btn btn-warning annual_app" style="height: 250px; width: 100%; margin: 10px; font-size: 30px; white-space: normal; box-shadow: 0 9px 15px rgba(0,0,0,0.2);">Annual Appraisal</button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button class="btn btn-success welcome_letter" style="height: 250px; width: 100%; margin: 10px; font-size: 30px; white-space: normal; box-shadow: 0 9px 15px rgba(0,0,0,0.2);">Welcome Letter</button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<button class="btn btn-danger leaving_letter" style="height: 250px; width: 100%; margin: 10px; font-size: 30px; white-space: normal; box-shadow: 0 9px 15px rgba(0,0,0,0.2);">Leaving Letter</button>
						</div>
					</div>
				</div>
				
			</div>
	    </div>

	    <div id="dc_annualapp" class="modal fade">  
			<div class="modal-dialog modal-xl">  
			   <div class="modal-content">  
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Annual Appraisal Format View</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div class="row">
						  	<div class="column leftc">
								<embed id="ap_embed" src="" width="100%;" height="1100px;" />
							</div>
						  	<div class="column rightc">
						    	<h4 style="text-align: center;"><b>Custom Content</b></h4><br> 
				            	<form method="POST" id="ap_form"> 
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<div class="form-group">
												<label>Level: </label>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="form-group">
												<select name="ap_level" id="ap_level" class="form-control ap_level">
												    <option>1</option>
												    <option>2</option>
												    <option>3</option>
												    <option>4</option>
												    <option>5</option>
												    <option>6</option>
												    <option>7</option>
												    <option>8</option>
												  </select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Intro: </label>
										<textarea class="form-control" id="ap_intro" name="ap_intro" placeholder="Intro paragraph content" rows="8"></textarea>
									</div>
									<div class="form-group">
										<label>Term I: </label>
										<textarea class="form-control" id="ap_portions_1" name="ap_portions_1" placeholder="Portions covered in selected Level -> term" rows="8"></textarea>
									</div>
									<div class="form-group">
										<label>Term II: </label>
										<textarea class="form-control" id="ap_portions_2" name="ap_portions_2" placeholder="Portions covered in selected Level -> term" rows="8"></textarea>
									</div>
									<div class="form-group">
										<label>Note: </label>
										<textarea class="form-control" id="ap_note" name="ap_note" placeholder="Post Script Note" rows="6"></textarea>
									</div>
									<div class="form-group">
										<label>Sign: </label>
										<textarea class="form-control" id="ap_sign" name="ap_sign" placeholder='Regards, S.KRISHNAN, Director - PSK' rows="4"></textarea>
									</div>
									<div class="form-group" style="text-align: center; margin-top: 20px;">
									    <input class="btn btn-success ap_update" type="submit" name="ap_update" id="ap_update" value="Update"/> 
									</div>
				            	</form>
						  	</div>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>

		<div id="dc_welcomeletter" class="modal fade">  
			<div class="modal-dialog modal-xl">  
			   <div class="modal-content">
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Welcome Letter Format View</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div class="row">
						  	<div class="column leftc">
								<embed id="wl_embed" src="" width="100%;" height="1100px;" />
							</div>
						  	<div class="column rightc">
						    	<h4 style="text-align: center;"><b>Custom Content</b></h4><br> 
				            	<form method="POST" id="wl_form"> 
									<div class="form-group">
										<label>Intro: </label>
										<textarea class="form-control" id="wl_intro" name="wl_intro" placeholder="Intro paragraph content" rows="12"></textarea>
									</div>
									<div class="form-group">
										<label>Note: </label>
										<textarea class="form-control" id="wl_note" name="wl_note" placeholder="Post Script Note" rows="10"></textarea>
									</div>
									<div class="form-group">
										<label>Sign: </label>
										<textarea class="form-control" id="wl_sign" name="wl_sign" placeholder='Regards, S.KRISHNAN, Director - PSK' rows="4"></textarea>
									</div>
									<div class="form-group" style="text-align: center; margin-top: 20px;">
									    <input class="btn btn-success wl_update" type="submit" name="wl_update" id="wl_update" value="Update"/> 
									</div>
				            	</form>
						  	</div>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>


		<div id="dc_leavingletter" class="modal fade">  
			<div class="modal-dialog modal-xl">  
			   <div class="modal-content">
			        <div class="modal-header">  
			             <button type="button" class="close" data-dismiss="modal">&times;</button> 
			             <div style="text-align: center;">
			             	<h4 class="modal-title"><b>Leaving Letter Format View</b></h4> 
			             </div>
			        </div>  
			        <div class="modal-body">
			        	<div class="row">
						  	<div class="column leftc">
								<embed id="ll_embed" src="" width="100%;" height="1100px;" />
							</div>
						  	<div class="column rightc">
						    	<h4 style="text-align: center;"><b>Custom Content</b></h4><br> 
				            	<form method="POST" id="ll_form">
				            		<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<div class="form-group">
												<label>Level: </label>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="form-group">
												<select name="ll_level" id="ll_level" class="form-control ll_level">
												    <option>1</option>
												    <option>2</option>
												    <option>3</option>
												    <option>4</option>
												    <option>5</option>
												    <option>6</option>
												    <option>7</option>
												    <option>8</option>
												  </select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Portions Covered: </label>
										<textarea class="form-control" id="ll_portions" name="ll_portions" placeholder="Intro paragraph content" rows="10"></textarea>
									</div>
									<div class="form-group">
										<label>Intro: </label>
										<p>(Use # instead of student name and number of years)</p>
										<textarea class="form-control" id="ll_intro" name="ll_intro" placeholder="Intro paragraph content" rows="15"></textarea>
									</div>
									<div class="form-group">
										<label>Sign: </label>
										<textarea class="form-control" id="ll_sign" name="ll_sign" placeholder='Regards, S.KRISHNAN, Director - PSK' rows="4"></textarea>
									</div>
									<div class="form-group" style="text-align: center; margin-top: 20px;">
									    <input class="btn btn-success ll_update" type="submit" name="ll_update" id="ll_update" value="Update"/> 
									</div>
				            	</form>
						  	</div>
						</div>
			        </div>  
			        <div class="modal-footer">  
			             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
			        </div>  
			   </div>  
			</div>  
		</div>


	  </div>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
  </script>
</body>
</html>