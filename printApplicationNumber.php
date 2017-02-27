<?php
  session_start();
  require "db.php";
  if($_SESSION['account'] == null) {
    header("location:login.php");
  }

  if(isset($_GET['logout'])) {
    session_destroy();
    header("location:admin.php");
    exit();
  }

  if (!$db->has("application_form", ["application_number" => $_GET['application_number']])) {
    header("location:admin.php");
  } else {
    $applicationForm = $db->get("application_form", "*", ["application_number" => $_GET['application_number']]);
  }
?>
<html>
  <head>
    <title>Online-Census</title>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body onload='window.print();' class='container'>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <p class='text-center'>Application Number</p>
    <h1 class='text-center' style='font-size: 90px;'><?php echo $_GET['application_number']; ?></h1>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <p class='text-center'>Date Submitted</p>
    <h3 class='text-center'><?php echo date("M d, Y h:i A", strtotime($applicationForm['date_submit'])); ?></h3>
    <br /><br /><br /><br /><br /><br />
    <p class='text-center'>Date Approved</p>
    <h3 class='text-center'><?php echo date("M d, Y h:i A", strtotime($applicationForm['date_approved'])); ?></h3>
    <div class='text-center'>
      <img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F192.168.8.101/census/printForm.php?application_id=<?php echo $_GET['application_number']; ?>' />
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <p class='text-right'>____________________________________</p>
  </body>
</html>
