<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- external style sheet link -->
    <!-- <link rel="stylesheet" type="text/css" href="styles_gallery.css"> -->
    <link rel="stylesheet" href="styles_gallery.css?v=<?php echo time(); ?>">

    
    <!-- google fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Gallery</title>
  </head>
  <script>
    document.cookie="width="+window.innerWidth;

    // Carousel slideshow control
    var slideIndex = 1; 
    // Next/previous controls
    function plusSlides(n)
    {
      console.log("calling plusSlides!");
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n)
    {
      console.log("calling currentSlide!");
      showSlides(slideIndex = n);
    }


    function showSlides(n)
    {
      console.log("n: ");
      console.log(n);
      var i;
      var slides = document.getElementsByClassName("carousel-item");
      console.log("slides: ");
        console.log(slides);
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) 
      {
        slides[i].style.display = "none";
      }
      slides[slideIndex-1].style.display = "block";
    }

  </script>

  <body>  
       <!-- Start of the navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white; box-shadow: 0 0px 8px 0 rgba(0,0,0,0.5);font-size: 20px;">
          <a class="navbar-brand" href="index.php" style="font-weight: 700;">PadmaSri Kalamandir</a>
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

        <?php

          $curdir = $_GET['link'];
          $temp = explode("\\", $curdir);
          $name = $temp[count($temp)-1];

          function getDirFolders($dir, &$results = array())
          {
              $files = scandir($dir);
              foreach ($files as $key => $value) 
              {
                  $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
                  if (!is_dir($path)) 
                  {
                      $results[] = $path;
                  } 
              }
              return $results;
          }

          echo '<div class="image-container">
                  <div class="text">'.$name.'</div>
                </div>

                <div class="container-fluid">
                  <section class="page-section gallery">
                    <div class="text-center">
                      <div class="row">
                ';

          $w = $_COOKIE['width'];

          $column1 = '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">';
          $column2 = '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">';
          $column3 = '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">';

          $carousel = '<div class="carousel-inner" id="carousel-inner">';

          $res = getDirFolders('images/gallery/'.$curdir.'/');
          $count = 0;
          foreach ($res as $value)
          {
              $imgname = explode("\\", $value);
              $imagepath = 'images/gallery/'.$curdir."/".$imgname[count($imgname)-1];
              $imagepath_hd = 'gallery/'.$curdir."/".$imgname[count($imgname)-1];

              if($w < 500)
              {
                   $cur = '<img
                      src="'.$imagepath.'"
                      loading="lazy"
                      class="w-100 shadow-1-strong rounded mb-4"
                      alt=""
                    />
                    ';
              }
              else
              {
                   $cur = '<img
                      src="'.$imagepath.'"
                      loading="lazy"
                      class="trial w-100 shadow-1-strong rounded mb-4"
                      onclick="currentSlide('.($count+1).');"
                      data-target = "#myModal"
                      data-toggle = "modal"
                      alt=""
                    />
                    ';
              }

             

              switch($count%3)
              {
                case 0:
                  $column1 = $column1.$cur;
                  break;

                case 1:
                  $column2 = $column2.$cur;
                  break;

                case 2:
                  $column3 = $column3.$cur;
                  break;

                default:
                  echo "SOMETHING WRONG IN GALLERY !!";
              }

              // for carousel Modal display
              if($count == 0)
              {
                $each = '<div class="carousel-item active">
                            <div class="parent d-flex justify-content-center">
                              <img class="trial d-block zoom" loading="lazy" src="'.$imagepath_hd.'" alt="Card image cap"> 
                            </div>
                          </div>';

                $carousel = $carousel.$each;
              }
              else
              {
                $each = '<div class="carousel-item">
                            <div class="parent d-flex justify-content-center">
                              <img class="trial d-block zoom" loading="lazy" src="'.$imagepath_hd.'" alt="Card image cap"> 
                            </div>
                          </div>';

                $carousel = $carousel.$each;
              }


              $count = $count + 1;
                // echo '<div class="col-lg-4 col-md-12"> 
                //         <div class="card hero-sub-images rounded">
                //           <a href="">
                //             <img class="card-img-top" loading="lazy" src="'.$imagepath.'" alt="Card image cap">
                //           </a>
                //         </div>
                //       </div>';        
              

          }

          $column1 = $column1.'</div>';
          $column2 = $column2.'</div>';
          $column3 = $column3.'</div>';

          $carousel = $carousel.'</div>';

          echo $column1;
          echo $column2;
          echo $column3;

          echo '     </div>
                    </div>
                  </section>
                </div>  
                ';

          echo ' <div id="myModal" class="modal fade"  role="dialog" data-backdrop="static"> 
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                            <div class="modal-header"> 
                                 <button type="button" class="close" data-dismiss="modal">&times;</button> 
                            </div>  
                            <div class="modal-body text-center">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner" id="carousel-inner">'.$carousel.'
                                  </div>
                                   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" onclick="plusSlides(-1)" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" onclick="plusSlides(+1)" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </div>  
                       </div>  
                    </div>  
                  </div>
                ';
        ?>
                

        <div id="myModal" class="modal fade"  role="dialog" data-backdrop="static"> 
          <div class="modal-dialog modal-xl">
             <div class="modal-content">
                  <div class="modal-header"> 
                       <button type="button" class="close" data-dismiss="modal">&times;</button> 
                  </div>  
                  <div class="modal-body text-center">
                    <!-- <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"> -->

                    <!-- Carousel -->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                          <li data-target="#myCarousel" data-slide-to="7"></li>
                          <li data-target="#myCarousel" data-slide-to="8"></li>
                        </ol> -->
                        <div class="carousel-inner" id="carousel-inner">
                          <!-- <div class="carousel-item active">
                            <div class="parent d-flex justify-content-center">
                              <img class="d-block zoom" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg">
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="parent d-flex justify-content-center">
                              <img class="d-block zoom" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg">
                            </div>
                          </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" onclick="plusSlides(-1)" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" onclick="plusSlides(+1)" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                  </div>  
             </div>  
          </div>  
        </div>

      <footer class="site-footer" style="margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6 data-aos="zoom-out">About</h6>
              <p class="text-justify" data-aos="zoom-out">PadmaSri Kalamandir (PSK) is a registered and a renowned institution in Hosur, striving to bring a revolution in the field of Bharatanatyam since 2007. It attempts to inculcate the traditional values and culture of our land through the teaching of Bharatanatyam. The institution follows a curriculum divided amongst eight levels as per the outline of Natya Shastra. This ensures the coverage of both theoretical and practical knowledge of Bharatanatyam.</p>
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
              <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by <a href="#">PadmaSri Kalamandir</a>. <br>Powered by <a href="https://tybon.in/">Tybon</a>
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

</body>
</html>
