<?php require('session.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">

    <!-- google fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">


    <!-- font awesome connection -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate on scroll cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="styles_login.css?v=<?php echo time(); ?>">

</head>
<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "adminpanel.php";
    </script>
    <?php
}
?>
<body>

  <div class="bg-image" style="background-image: url('bg.jpg');"></div>

  <!-- <div class="bg-text">
    
    <h1>Login</h1>
    <form action="#" method="POST">
      <input type="text" placeholder="username" class="field">
      <input type="password" placeholder="password" class="field" style="margin-top: 10px;">
      <input type="submit" value="login" class="btn" style="margin-top: 30px;">
    </form>
    
    <div class="pass-link"  style="margin-top: 10px;">
      <a href="#" >Lost your password?</a>
    
    </div>  
  </div> -->

  <div class="container">
    <img src="logo.jpg" style="width: 90%; height: 50px; margin-top: 10px;">
    <h1>Login</h1>
    
    <form action="processlogin.php" method="POST">
      <input type="text" name="uname" placeholder="username" class="field">
      <input type="password" name="pass" placeholder="password" class="field" style="margin-top: 10px;">
      <input type="submit" value="login" name="btnlogin" class="btn" style="margin-top: 30px; font-size: 25px;">
    </form>
    
    <!-- <div class="pass-link">
      <a href="" >Lost your password?</a>
    </div>  --> 
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript">
    AOS.init();
  </script>
</body>
</html>
