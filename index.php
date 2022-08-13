

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- adding a external style sheet - styles.css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/heroimage.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/aboutus.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/achievements.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/curriculum.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/contactus.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-styles/footer.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- google fonts integration -->
    <!-- font for the entire page -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">

    <!-- font awesome connection -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate on scroll cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- achievements counter style CDN -->
    <link rel="stylesheet" href="css/achievement-counter-styling/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/achievement-counter-styling/Page-7.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 2.26.4, nicepage.com">

    <!-- swiper js CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
    <style type="text/css">      
      .swiper-container {
        width: 100%;
        height: 100%;

      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        border-radius: 5%;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
/*      html,
      body {
        position: relative;
        height: 100%;
      }*/
    </style>
    <title>Home</title>
  </head>

  
  <body>
    <!-- start of progress bar -->
    <!-- <div class="header">
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>  
    </div> -->

    <!-- end of  progress bar -->
    <!-- Start of the navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white; box-shadow: 0 0px 8px 0 rgba(0,0,0,0.5); ">
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
            <a class="nav-link navLinks" href="#aboutus">About Us  <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="#achievements">Achievements  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="#gallery">Gallery  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="#curriculum">Curriculum  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="#contactus">Contact Us  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navLinks" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end of the navbar -->
    <!-- starting of vision statement -->
    
    <!-- end of vision statement -->
    <!-- start of the hero image -->
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out">
            <div class="heroClassText" data-aos="zoom-out" data-aos-delay="100">
                <!-- <p class="heroClassTextHeader">PadmaSri Kalamandir</p> -->
                <div class="alignment" style="display: block; margin-left: auto; margin-right: auto;  width: 80%; margin-bottom: 30px;">
                  <img src="images/heroImage/preview-new.jpg" style="width: 100%;">
                </div>
                <p class="heroClassTextTagLine"><b><i>A Temple of Classical Dance</i></b></p>
            </div> 
          </div>         
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/selected/scrolling/1.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/2.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/3.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/4.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/5.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/6.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/7.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/8.JPG" class="heroClassImage"></div>
                    <div class="swiper-slide"><img src="images/selected/scrolling/9.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/10.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/11.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/12.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/13.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/14.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/15.JPG" class="heroClassImage"></div>
                   <div class="swiper-slide"><img src="images/selected/scrolling/16.JPG" class="heroClassImage"></div>
                  </div>
                </div>
          </div>
        </div>
    </div>
    <!-- end of the hero image -->
    <!-- start of about us -->
    <div class="aboutUs" id="aboutus"> 
      <div class="container">
        <div class="aboutUsContent">
          <div class="" data-aos="fade-up">
            <h3><span style="font-weight: 700;">Get to know more</span><span style="color: #ae41d9; font-weight: 700;"> About Us</span></h3>
          </div>
          <div class="aboutUsContentText" data-aos="fade-up">
            <p>Padmasri Kalamandir Hosur Hosur Hosur, Hosur, is a registered renowned institution is functioning since 2007, teaching Bharathanatyam & Carnatic Music for the people of Hosur to uphold the classial tradition and culture of our country. The phenomenal growth of this institution is mainly due to the continued patronage by the dedicated disciples, their parents and all the well-wishers around us. We are thankful for them.</p>
          </div>
        </div>        
      </div>
      <div class="teachers">
        <div class="teacherContent">
          <div class="container">
            <div class="row custom-gutter">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="teachersCard">
                  <div class="imgClass">
                    <img src="gallery/krishnanmaster.jpg">
                  </div>
                  <div class="paraClass">
                    <h4><span><b>Guru</b></span> Shri S. Krishnan</h4>
                    <!-- Designation or contribution to the SSL department -->
                    <p>Founder-Director</p>
                    <!-- <a href="#" class="button instagram"><span class="gradient"></span>know More</a> -->
                  </div>                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  data-aos="fade-left">
                <div class="teachersCard">
                  <div class="imgClass">
                    <img src="gallery/anjanamaster.jpg">
                  </div>
                  <div class="paraClass">
                    <h4><span><b>Guru</b></span> Smt. Anjana Krishnan</h4>
                    <!-- Designation or contribution to the SSL department -->
                    <p>Admistrator</p>
                    <!-- <a href="#" class="button instagram"><span class="gradient"></span>know More</a> -->
                  </div>                  
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="about-us.php"><button class="button instagram"><span style="color: black;">Know More</span></button></a> 
    </div>
    <!-- end of about us -->
    <!-- start of achievements -->
    <div class="achievements" id="achievements">
      <div class="achievementsHeader" style="margin-top: 30px;">
        <p>Achievements</p>
      </div>
      <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-1" id="carousel_5e50">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-repeater u-list-1">
            <div class="u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                <h3 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">450<br>
                </h3>
                <h6 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-9">Students<br>
                </h6>
              </div>
            </div>
            <div class="u-align-center-lg u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <h3 class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">350<br>
                </h3>
                <h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-9">Alumni<br>
                </h6>
              </div>
            </div>
            <div class="u-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <h3 class="u-align-center u-custom-font u-font-oswald u-text u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">25</h3>
                <h6 class="u-align-center u-custom-font u-font-oswald u-text u-text-9">Salangai Pooja<br>
                </h6>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                <h3 class="u-custom-font u-font-oswald u-text u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">2</h3>
                <h6 class="u-custom-font u-font-oswald u-text u-text-9">Arangetram</h6>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container achievements">

        <div class="row achievementCards" data-aos="zoom-out">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <img src="images/acheivements/A1.JPG" class="achievementCardsImage" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="text-align: center;">
            <h3><b>Accomplished 25 Salangai Pooja</b></h3>
            <div class="achievementCardsText">
              <p>PSK has successfully completed 25 Salangai Pooja events so far since 2009. About 400 disciples have performed their Salangai Pooja till date, under the able guidance of Gurus Shri. S. Krishnan & Smt. Anjana Krishnan.</p>              
            </div>
          </div>          
        </div>

        <div class="row achievementCards" data-aos="zoom-out">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <img src="images/acheivements/A2.JPG" class="achievementCardsImage" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="text-align: center;">
            <h3><b>Guinness World Record</b></h3>
            <div class="achievementCardsText">
              <p>Around 50 of our disciples were trained to participate in the Guinness World Record Programme organized by Hidden Idol for the cause of farmers at SFS College, Bangalore on 31st December, 2017 was placed in Asia book of Records.</p>              
            </div>
          </div>          
        </div>

        <div class="row achievementCards" data-aos="zoom-out">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <img src="images/acheivements/A3.JPG" class="achievementCardsImage" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="text-align: center;">
            <h3><b>National Level Dance Competition (2017)</b></h3>
            <div class="achievementCardsText">
              <p>During May 2017, 12 dedicated disciples of PSK bagged 1st prize in group category and also won accolades in Solo & Duet performances, in the “National Cultural Meet” organized by Akhil Lokkala Cultural Organisation at Aurangabad.</p>              
            </div>
          </div>          
        </div>

      </div>
      <a href="achievements.php"><button class="button instagram"><span class="" style="color: black;">Know More</span></button></a>   
    </div>
    <!-- end of achievements -->
    <!-- start of gallery -->
    
    <div class="gallery" id="gallery">
      <div class="container">      
        <div class="galleryHeader" data-aos="zoom-out" style="margin-top: 30px;">
          <p>Gallery</p>
        </div>
        <div class="row galleryRows">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_11.JPG" class="galleryImages" data-aos="zoom-out">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_12.JPG" class="galleryImages" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_13.JPG" class="galleryImages" data-aos="zoom-out" data-aos-delay="100">
          </div>
        </div>
        <div class="row galleryRows">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_21.JPG" class="galleryImages" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_22.JPG" class="galleryImages" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 galleryImagesAlign">
            <img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" src="gallery/home_gallery_23.JPG" class="galleryImages" data-aos="zoom-out" data-aos-delay="100">
          </div>
        </div>
        <a href="gallery.php"><button style="margin-top: 50px;" class="button instagram"><span class="" style="color: black;">View More</span></button></a>   
      </div>      
    </div>

    <!-- end of gallery -->
    <!-- start of curriculum -->
    <div class="curriculum">
      <div class="container" id="curriculum">
        <div class="curriculumWrapper">      
          <div class="curriculumHeader" data-aos="zoom-out">
            <p>Curriculum</p>
          </div>
          <div class="curriculumText">
            <p>Our institution is fully committed to teaching <span style="font-weight: 700; color: purple;">Bharathanatyam &amp; other
                Classical dance forms</span> to the enthusiastic people around the globe including
                children &amp; elders,<span style="font-weight: 700; color: purple;"> who are dedicated &amp; passionate to learn the dance art</span>. We
                are following a professional <span style="font-weight: 700; color: purple;"> 8 Level Structure</span> as curriculum which includes the
                learning of Theoretical aspects &amp; Skill development such as Nattuvangam,
                Choreography &amp; Teaching techniques.</p>
          </div>
          <div class="curriculumTable">
            <table border="2" class="curriculum" data-aos="zoom-out">
              <tr>
                <th>LEVELS</th>
                <th>PHASE</th>
                <th>DESCRIPTION</th>
                <!-- <th>DURATION OF STUDY</th>
                <th>EQUIVALENT TO</th> -->
              </tr>
              <tr>
                <td>I</td>
                <td>LAYA</td>
                <td rowspan="2">BASIC LEVELS</td>
                <!-- <td rowspan="2">2 to 3 years</td>
                <td rowspan="3">PRIMARY EDUCATION</td> -->
              </tr>
              <tr>
                <td>II</td>
                <td>MUKULA</td>            
              </tr>
              <tr>
                <td>III</td>
                <td>NOOPURA</td>
                <td>SALANGAI POOJA LEVEL</td>
                <!-- <td>1 year</td> -->
              </tr>
              <tr>
                <td>IV</td>
                <td>PAYANA</td>
                <td rowspan="2">IMPROVEMENT AND REFINEMENT LEVEL</td>
                <!-- <td rowspan="2">2 to 3 years</td>            
                <td rowspan="3">SECONDARY EDUCATION</td>  -->           
              </tr>
              <tr>
                <td>V</td>
                <td>HRUDAYA</td>
              </tr>
              <tr>
                <td>VI</td>
                <td>MAYURA</td>
                <td>ARANGETRAM LEVEL</td>
                <!-- <td>1 year</td> -->
              </tr>
              <tr>
                <td>VII</td>
                <td>JWALA</td>
                <td rowspan="2">PROFESSIONAL EXCELLENCE</td>
                <!-- <td rowspan="2">2 to 3 years</td>
                <td rowspan="2">COLLEGE EDUCATION</td> -->
              </tr>
              <tr>
                <td>VIII</td>
                <td>MOKSHA</td>
              </tr>
            </table>
          </div>
        </div>
        <a href="curriculum.php"><button class="button instagram"><span class="" style="color: black;">Know More</span></button></a>   
        
      </div>
    </div>

    <!-- end of curriculum -->

    <!-- start of contact us -->    
     <div class="container">
        <div class="contactUs" id="contactus" style="padding-top: 100px;">
          <div class="contactUsHeader" data-aos="zoom-out">
              <p>Contact Us</p>
          </div>
          <div class="row" data-aos="zoom-out">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="text-center">
                <img style="width: 100%; height: 500px; vertical-align: middle;" src="gallery/contactus.svg">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div style="text-align: center;">
                <h3>Services offered</h3>
              </div>
              <div class="curriculumText">
                <ul>
                  <li data-aos="fade-in"><p>Learn Bharathanatyam in a systematic way : 8 Level Course Structure</p></li>
                  <li data-aos="fade-in"><p>Get introduced to other classical dance forms : Kuchipudi, Mohiniyattam &amp; Kathak</p></li>
                  <li data-aos="fade-in"><p>Nattuvangam Course</p></li>
                  <li data-aos="fade-in"><p>Workshops for learning a dance item (Online / Direct)</p></li>
                  <li data-aos="fade-in"><p>Workshops on Nattuvangam, Teaching Techniques &amp; Methods of Choreography (Online / Direct)</p></li>
                  <li data-aos="fade-in"><p>Programmes / Stage Events – Live or Online</p></li>
                </ul>
              </div>
            </div>        
          </div>
          <a href="enquiry.php"><button class="button instagram" style="margin-top: 30px;"><span class="" style="color: black;">Get in Touch</span></button></a>
        </div>
      </div>
    <!-- end of contact us -->

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
                <li><a href="#aboutus" data-aos="zoom-out">About Us</a></li>
                <li><a href="#achievements" data-aos="zoom-out">Achievements</a></li>
                <li><a href="#gallery" data-aos="zoom-out">Gallery</a></li>
                <li><a href="#curriculum" data-aos="zoom-out">Curriculum</a></li>
                <li><a href="#contactus" data-aos="zoom-out">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <!-- <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by <a href="#">Padmasri Kalamandir</a>. -->
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
    <!-- end of footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
    // swiper initialization
    var mySwiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      }
    })


    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar").css("background-color", "white"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          $(".navLinks").css("color", "black");
          $(".navbar-brand").css("color", "black");
        } else {
          $(".navbar").css("background-color", "white"); // if not, change it back to transparent
          $(".navLinks").css("color", "black");
          $(".navbar-brand").css("color", "black");
        }
      });
    });

    AOS.init();
    </script>
  </body>
</html>