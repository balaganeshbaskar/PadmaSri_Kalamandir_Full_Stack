<?php require('connect.php'); ?>

<!DOCTYPE html>

<html>
<head>
	<title>PSK</title>
	<!-- Bootstrap CDN Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Google fonts CDN -->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">

	 <!-- font awesome connection -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- animate on scroll cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- External Style sheet link -->
    <link rel="stylesheet" type="text/css" href="enrollment-styles.css">
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

<script type="text/javascript">
	function SetDate()
	{
	var date = new Date();

	var day = date.getDate();
	var month = date.getMonth() + 1;
	var year = date.getFullYear();

	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;

	var today = year + "-" + month + "-" + day;

	document.getElementById('today').value = today;
	}
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<body onload="SetDate();">
	<?php require_once 'enroll_process.php'; ?>
	<!-- <?php
		// $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli)); 

############################################# DELETE FROM HERE TO REMOVE TABLE ####################################################
		// $student = $mysqli->query("SELECT * FROM student") or die($mysqli->error);
############################################# DELETE TILL HERE TO REMOVE TABL #####################################################
	?> -->

	<!-- Start of the navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white;">
      <a class="navbar-brand" href="index.php" style="font-weight: 700;">Padmasri Kalamandir</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link navLinks" href="#">Home  <span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link navLinks" href="about-us.php">About Us  <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="achievements.php">Achievements  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="gallery.php">Gallery  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="curriculum.php">Curriculum  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="enquiry.php">Contact Us  </a>
          </li>
        </ul>
      </div>
    </nav>

    <?php if(isset($_SESSION['message'])): ?>
	<div style="margin-top: 80px" class="alert alert-<?=$_SESSION['msg_type']?>">

		<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);	
		?>
		
	</div>
	<?php endif; ?>	
    
	<div class="image-container">
	  <div class="text">Enrollment Form </div>
	</div>

	<div class="container" style="background-color: white;" data-aos="zoom-in">
		<div class="align-items-center" style="">
			<div class="enrollment-card">
			<form action="enroll_process.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="form-group">
							<!-- <label><b>Disciple's Details</b></label>	 -->
						</div>
						<div class="form-group">
							<!-- <label class="required">Name of Disciple</label> -->
							<input required="true" type="text" maxlength="20" name="name"  class="form-control" placeholder="Enter your name*">
						</div>
						<div class="form-group">
							<!-- <label class="required">Date of Birth</label> -->
							<input placeholder="Enter the Date of Birth*" class="form-control" name="dob" required="true" type="text" onfocus="(this.type='date')" id="date">
						</div>
						<div class="form-group">
							<!-- <label class="required">Contact Number</label> -->
							<input type="Number" name="snumber" pattern="[789][0-9]{9}" required="true" class="form-control" placeholder="Enter your Mobile Number*">	
						</div>
						<div class="form-group">
							<!-- <label class="required">Address</label> -->
							<input type="text" name="address" maxlength="80" required="true" class="form-control" placeholder="Enter your Address*">
						</div>
						<div class="form-group">
							<!-- <label>Name of School</label> -->
							<input type="text" name="school" maxlength="50" required="true" class="form-control" placeholder="Enter your School Name*">
						</div>
						<div class="form-group">
							<!-- <label class="required">Grade / Class</label> -->
							<input type="number" name="grade" required="true" class="form-control" placeholder="Enter your Grade*">
								
							</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="form-group" class="image-justify">
							<img id="output" class="output" style="border: 1px solid black;" />
							<input type="file" style="display: none;" name="fileToUpload" onchange="loadFile(event)" id="fileToUpload" style="margin-top: 10px;">
							<p style="font-size: 12px; color: red;">(Size < 2MB, Formats: JPG, JPEG, and PNG)</p>
							<input type="button" value="Browse" style="margin-top: 20px; " onclick="document.getElementById('fileToUpload').click();" />
							<label class="required">Disciple's Photo</label>					
						</div>						
					</div>	
				</div>
				<hr style="width: 70%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<!-- <label for="city" class="required">Country</label> -->
							<select name="country" required="true" class="countries form-control" id="countryId">
							    <option value="">Select Country</option>
							</select>
						</div>						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<!-- <label for="city" class="required">State</label> -->
							<select name="state" required="true" class="states form-control" id="stateId">
							    <option value="">Select State</option>
							</select>
						</div>						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="form-group">
							<!-- <label for="city" class="required">City</label> -->
							<select name="city" required="true" class="cities form-control" id="cityId">
							    <option value="">Select City</option>
							</select>
						</div>						
					</div>
				</div>
				<hr style="width: 70%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">	
						<div class="form-group" style="text-align: center;">
							<label><b>Father's Details</b></label>	
						</div>
						<div class="form-group">
							<!-- <label class="required">Name</label> -->
							<input type="text" name="fname" maxlength="20" class="form-control" placeholder="Enter your Father's Name*" required="true">	
						</div>
						<div class="form-group">
							<!-- <label>Occupation</label> -->
							<input type="text" name="focc" maxlength="20" class="form-control" placeholder="Enter your Father's Occupation*" required="true">	
						</div>
						<div class="form-group">
							<!-- <label class="required">Contact Number</label> -->
							<input type="Number" pattern="[789][0-9]{9}" name="fnum" class="form-control" placeholder="Enter your Father's Mobile Number*" required="true">	
						</div>
						<div class="form-group" >
							<!-- <label class="required">Email Id</label> -->
							<input type="Email" name="fmail" class="form-control" placeholder="Enter your Father's Email Id*" required="true">	
						</div>						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group" style="text-align: center;">
							<label><b>Mother's Details</b></label>	
						</div>
						<div class="form-group">
							<!-- <label class="required">Name</label> -->
							<input type="text" name="mname" maxlength="20" class="form-control" placeholder="Enter your Mother's Name*" required="true">
						</div>
						<div class="form-group">
							<!-- <label>Occupation</label> -->
							<input type="text" name="mocc" maxlength="20" class="form-control" placeholder="Enter your Mother's Occupation*" required="true">	
						</div>
						<div class="form-group">
							<!-- <label class="required">Contact Number</label> -->
							<input type="Number" name="mnum" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter your Mother's Mobile Number*" required="true">	
						</div>
						<div class="form-group">
							<!-- <label class="required">Email Id</label> -->
							<input type="Email" name="mmail" class="form-control" placeholder="Enter your Mother's Email Id">	
						</div>						
					</div>
				</div>
				<hr style="width: 70%; margin-top: 20px; margin-bottom: 20px; border-top: 2px solid black;">
				<div class="form-group" style="text-align: center;">
					<label><b>Class Details</b></label>	
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="required">Preferred Class Type</label> <!-- Change to RADIO BUTTON -->
							<div class="radio">
							  <label><input type="radio" name="type" value="0" checked> In-Person (Attend classes in one of the centers)</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="type" value="1" > Online (Attend online classes remotely)</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Date of Application</label>
							<input type="Date" name="today" id="today" class="form-control" placeholder="Today's Date" readonly>	
						</div>
					</div>
				</div>
				<div class="form-group" style="text-align: center;">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>	
			</form>
			</div>
		</div>
	</div>

    <!-- start of footer --><!-- Site footer -->
      <footer class="site-footer" style="margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6 data-aos="zoom-out">About</h6>
              <p class="text-justify" data-aos="zoom-out"><i>Padmasri Kalamandir</i> is a registered renowned institution is functioning since 2007, teaching Bharathanatyam & Carnatic Music for the people of Hosur to uphold the classial tradition and culture of our country. The phenomenal growth ofthis institution is mainly due to the continued patronage by the dedicated disciples, their parents and all the well-wishers around us. <i>We are thankful for them.</i></p>
            </div>

            <div class="col-xs-6 col-md-3">
            </div>

            <div class="col-xs-6 col-md-3">
              <h6 data-aos="zoom-out">Quick Links</h6>
              <ul class="footer-links">
                <li><a href="about-us.php" data-aos="zoom-out">About Us</a></li>
                <li><a href="achievements.php" data-aos="zoom-out">Achievements</a></li>
                <li><a href="gallery.php" data-aos="zoom-out">Gallery</a></li>
                <li><a href="curriculum.php" data-aos="zoom-out">Curriculum</a></li>
                <li><a href="enquiry.php" data-aos="zoom-out">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by <a href="#">Padmasri Kalamandir</a>.
              </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="https://bit.ly/3j0LqWg" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="linkedin" href="https://bit.ly/3076PpA" target="_blank"><i class="fa fa-youtube"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
  </script>
</body>
</html>