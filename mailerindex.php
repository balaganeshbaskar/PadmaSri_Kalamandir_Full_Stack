<!DOCTYPE html>
<?php 
	include 'mailer/send-mail.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Mailer Form</title>
</head>
<body>
	<?php
        if(array_key_exists('testing', $_POST)) {
            mailing("balaganeshbaskar@gmail.com", "Function Name");
        }
    ?>
    <form action="" method = "POST">
        <input type="submit" name="testing" value="Send Mail">
    </form>
</body>
</html>