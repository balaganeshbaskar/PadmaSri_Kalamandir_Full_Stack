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

          function getDirImages($dir, &$results = array())
          {
            $files = scandir($dir);
            foreach ($files as $key => $value) 
            {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
                if (!is_dir($path)) 
                {
                    $results[] = $path;
                } 
                else if ($value != "." && $value != ".." && is_dir($path)) 
                {
                    // $results[] = $path;
                    getDirImages($path, $results);
                }
            }
            return $results;
          }


          function getDirFolders($dir, &$results = array())
          {
              $files = scandir($dir);
              foreach ($files as $key => $value) 
              {
                  $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
                  // if (!is_dir($path)) 
                  // {
                  //     $results[] = $path;
                  // } 
                  if ($value != "." && $value != ".." && is_dir($path)) 
                  {
                      $results[] = $path;
                      // getDirFolders($path, $results);
                  }
              }
              return $results;
          }

          echo '<div class="image-container">
                  <div class="text">'.$curdir.'</div>
                </div>

                <div class="container-fluid">
                  <section class="page-section gallery">
                    <div class="text-center">
                      <div class="row">
                ';

          $res = getDirFolders('images/gallery/'.$curdir.'/');
          foreach ($res as $value)
          {
              $thumbnail = getDirImages($value);
              $folder = explode("\\",$value);
              $image = explode("\\",$thumbnail[0]);
              $link = $folder[count($folder)-2].'/'.$folder[count($folder)-1];
              $imagepath = 'images/gallery/'.$curdir.'/'.$folder[count($folder)-1].'/'.$image[count($image)-1];
              echo '<div class="col-lg-4 col-md-12"> 
                      <div class="card hero-sub-images rounded">
                        <a href="gallery_2.php?link='.$link.'">
                          <img class="card-img-top" loading="lazy" src="'.$imagepath.'" alt="Card image cap">
                          <div class="card-body text-white p-2"><b>'.$folder[count($folder)-1].'</b></div>
                        </a>
                      </div>
                    </div>';
          }

          echo '     </div>
                    </div>
                  </section>
                </div>  
                ';
        ?>

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
