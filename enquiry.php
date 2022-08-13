<?php require('connect.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" type="text/css" href="enquiry.css">
    <!-- google fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">


    <!-- font awesome connection -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate on scroll cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/homepage-styles/footer.css">
    <link rel="stylesheet" type="text/css" href="css/achievement-styling/achievement.css">

    <!-- achievements counter style CDN -->
    <link rel="stylesheet" href="css/achievement-counter-styling/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/achievement-counter-styling/Page-7.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <title>Contact Us</title>
  </head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>
  <body>
    <?php require_once 'enquiry_process.php'; ?>
    <!-- Start of the navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white; box-shadow: 0 0px 8px 0 rgba(0,0,0,0.5);">
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

      <div class="image-container" style="background-image: url('gallery/header.JPG');">
    <div class="text">Enquiry</div>
  </div>

  <div class="container" style="margin-top: 100px; margin-bottom: 100px;" data-aos="zoom-in-down">
    <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">

      <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);  
      ?>
      
    </div>
    <?php endif; ?>


    <!-- Contact us Section -->
         <section class="page-section">
          <p class="instructorHeader">Contact Us</p>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div style="padding-top: 20px; padding-bottom: 40px;">
                    <div class="getintouch">            
                         <h3><b>Get in Touch</b></h3>
                         <br>
                         <p>Have a question or a comment? Feel free to enquire with us.</p>
                         <p>We conduct Bharathanatyam classes, workshops, and programmes all around India.</p>
                         <p>Drop us an E-Mail or fill out the enquiry forms below and we will get back to you soon.</p> 
                      </div>
                  </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-details"> -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5); border-radius: 50px 10px 50px 10px; padding-top: 20px; padding-bottom: 40px;">
                    <div class="contact">            
                         <h3><b>PadmaSri Kalamandir</b></h3>
                         <br>
                         <p>HO: #27, I Floor, 100 Feet Road,</p>
                         <p>New ASTC Hudco, Hosur - 635109,</p>
                         <p>Tamil Nadu, India</p>
                         <br>
                         <a href="https://mail.google.com/mail/?view=cm&fs=1&to=padmasrikalamandirhosur@gmail.com">padmasrikalamandirhosur@gmail.com</a>
                         <a href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@padmasrikalamandir.com">contact@padmasrikalamandir.com</a>      
                      </div>
                  </div>  
                </div>
            </div>
        </section>


    <div style="margin-top: 100px;">
      <p class="instructorHeader" style="margin-bottom: 50px;">Enquiry</p>
      <button class="tablink" onclick="openPage('student', this, '#c5e1a5')" id="defaultOpen">Admission</button>
      <button class="tablink" onclick="openPage('program', this, '#81d4fa')" id="yes">Programme</button>
      <button class="tablink" onclick="openPage('workshop', this, '#9fa8da')" id="no">Workshop</button>

      <div id="student" class="tabcontent" >
        <div class="row justify-content-center" style="margin-top: 40px; color: black;">
          <form action="enquiry_process.php" method="POST" style="width: 600px;">
            <div class="form-group" style="text-align: center;">
              <h3><b>Admission Enquiries</b></h3>
            </div>
            <div class="form-group">
              <!-- <label>Name</label> -->
              <input type="text" required name="name" maxlength="20" class="form-control" placeholder="Enter Student's name*">
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Number</label> -->
                  <input type="text" pattern="^[789]\d{9}$" required maxlength="10" title="Enter valid Mobile Number!" name="number" class="form-control" placeholder="Student's Mobile Number*">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Mail</label> -->
                  <input type="email" name="email"  required class="form-control" placeholder="Student's Mail Id*">
                </div>              
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Grade</label> -->
                  <input type="text" name="grade" maxlength="40" required class="form-control" placeholder="Grade / Qualification*">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>School</label> -->
                  <input type="text" name="school" maxlength="50" required class="form-control" placeholder="School / College Name*">
                </div>            
              </div>
            </div>
            <div class="form-group">
              <!-- <label>Father Name</label> -->
              <input type="text" name="pname" maxlength="20" required class="form-control" placeholder="One of the Parent's Name*">
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Number</label> -->
                  <input type="text" pattern="^[789]\d{9}$" maxlength="10" title="Enter valid Mobile Number!" name="pnumber" required class="form-control" placeholder="Parent's Mobile Number*">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Mail</label> -->
                  <input type="email" name="pmail"  required class="form-control" placeholder="Parent's Mail Id*">
                </div>              
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label for="city" class="required">Country</label> -->
                  <select name="country" class="countries form-control" id="countryId" required>
                      <option value="">Select Country</option>
                  </select>
                </div>            
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label for="city" class="required">State</label> -->
                  <select name="state" class="states form-control" id="stateId" required>
                      <option value="">Select State</option>
                  </select>
                </div>            
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label for="city" class="required">City</label> -->
                  <select name="city" class="cities form-control" id="cityId" required>
                      <option value="">Select City</option>
                  </select>
                </div>            
              </div>
            </div>
            <div class="form-group">
              <label class="required"><b>Requirement*</b></label> <!-- Change to RADIO BUTTON -->
              <br>
              <!-- <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="req" value="Dance" checked>Dance</label>
              </div>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="req" value="Nattuvangam" > Nattuvangam</label>
              </div>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="req" value="Choreography"> Choreography</label>
              </div> -->
              <div style="display: inline-block; margin: 10px;">
              	<input type="checkbox" id="req1" name="req1" value="Dance" checked>
			  	<label for="vehicle1"> Dance</label><br>
              </div>
              <div style="display: inline-block; margin: 10px;">
              	<input type="checkbox" id="req2" name="req2" value="Nattuvangam">
			  	<label for="vehicle2"> Nattuvangam</label><br>
              </div>
              <div style="display: inline-block; margin: 10px;">
              	<input type="checkbox" id="req3" name="req3" value="Choreography">
			  	<label for="vehicle3"> Choreography</label><br>
              </div>
            </div>
            <div class="form-group">
              <textarea required class="form-control" name="message" placeholder="Message*" rows="5"></textarea>
            </div>
            <div class="form-group" style="text-align: center;">
              <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px;" name="student_submit">Submit</button>
            </div>
          </form>
        </div>  
      </div>

      <div id="program" class="tabcontent">
        <div class="row justify-content-center" style="margin-top: 40px; color: black;">
          <form action="enquiry_process.php" method="POST" style="width: 600px;">
            <div class="form-group" style="text-align: center;">
              <h3><b>Programme / Presentation Enquiries</b></h3>
            </div>
            <div class="form-group">
              <!-- <label>Occassion</label> -->
              <input type="text" required name="occasion"  class="form-control" placeholder="Enter the Occassion / Programme*">
            </div>
            <div class="form-group">
              <!-- <label>Occassion</label> -->
              <input type="text" required name="venue"  class="form-control" placeholder="Venue / Location*">
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Grade</label> -->
                  <input placeholder="Date of Programme" class="form-control" name="date" required="true" type="text" onfocus="(this.type='date')" id="date">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>School</label> -->
                  <input type="number" name="days"  class="form-control" placeholder="Number of Days of stay*">
                </div>            
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Number</label> -->
                  <input type="number" name="number" pattern="[789][0-9]{9}" class="form-control" placeholder="Contact Number*">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Mail</label> -->
                  <input type="email" name="email"  class="form-control" placeholder="Contact Mail Id*">
                </div>              
              </div>
            </div>
            <div class="form-group">
              <label class="required"><b>Accomodation Provided? *</b></label> <!-- Change to RADIO BUTTON -->
              <br>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="accom" value="Yes" checked> Yes</label>
              </div>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="accom" value="No" > No</label>
              </div>
            </div>
            <div class="form-group">
              <textarea required class="form-control" name="message" placeholder="message*" rows="5"></textarea>
            </div>
            <div class="form-group" style="text-align: center;">
              <button type="submit" class="btn btn-primary" name="program_submit">Submit</button>
            </div>
          </form>
        </div>
      </div>

      <div id="workshop" class="tabcontent">
        <div class="row justify-content-center" style="margin-top: 40px; color: black;">
          <form action="enquiry_process.php" method="POST" style="width: 600px;">
            <div class="form-group" style="text-align: center;">
              <h3><b>Workshop Enquiries</b></h3>
            </div>
            <div class="form-group">
              <!-- <label>Occassion</label> -->
              <input type="text" required name="institution"  class="form-control" placeholder="Enter Institution Name*">
            </div>
            <div class="form-group">
              <!-- <label>Occassion</label> -->
              <input type="text" required name="venue"  class="form-control" placeholder="Venue / Location*">
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Grade</label> -->
                  <input placeholder="From Date" class="form-control" name="fromdate" required="true" type="text" onfocus="(this.type='date')" id="fromdate">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>Grade</label> -->
                  <input placeholder="To Date" class="form-control" name="todate" required="true" type="text" onfocus="(this.type='date')" id="todate">
                </div>            
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Number</label> -->
                  <input type="number" name="number" pattern="[789][0-9]{9}" class="form-control" placeholder="Contact Number*">
                </div>      
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <!-- <label>parent Mail</label> -->
                  <input type="email" name="email"  class="form-control" placeholder="Contact Mail Id*">
                </div>              
              </div>
            </div>
            <div class="form-group">
              <label class="required"><b>Accomodation Provided? *</b></label> <!-- Change to RADIO BUTTON -->
              <br>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="accom" value="Yes" checked> Yes</label>
              </div>
              <div class="radio" style="display: inline-block; margin: 10px;">
                <label><input type="radio" name="accom" value="No" > No</label>
              </div>
            </div>
            <div class="form-group">
              <textarea required class="form-control" name="message" placeholder="message*" rows="5"></textarea>
            </div>
            <div class="form-group" style="text-align: center;">
              <button type="submit" class="btn btn-primary" name="workshop_submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    
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
                <li><a class="linkedin" href="https://bit.ly/3i79Tdu" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
    </footer>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      document.getElementById("defaultOpen").click();

      function openPage(pageName, elmnt, color) 
      {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) 
        {
          if(tabcontent[i] != "defaultOpen")
          {
            tabcontent[i].style.display = "none";
          }   
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) 
        {
          if(tablinks[i] != "defaultOpen")
          {
            tablinks[i].style.backgroundColor = "";
          }
        }
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
      }
    </script>
    <script type="text/javascript">
      AOS.init();
    </script>
  </body>
</html>