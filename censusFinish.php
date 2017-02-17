<?php
  session_start();

  $thisPage = "ApplicationForm";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
  </head>
  <body>
    <?php include_once('nav.php');?>
    <div class='container text-center' style="margin-top:75px;">
      <h2>Thank you!</h2>
      <p>Your application number for your Online Census Form is</p>
      <h1><b><?php echo $_GET['application_number']; ?></b></h1>
      <p>You can use this application number to search and view your Census Form.</p>
    </div>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
