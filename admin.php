<?php //BACK END
  //dito ung datatables ng census forms. One page lng ang admin
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online-Census</title>
    <link rel="icon" href="images/logo.png?<?php echo date('Y-m-d H:i:s'); ?>" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include_once("admin_nav.php"); ?>
    <div class="container">
      <table class="table" id="showRecords">
        <thead>
          <tr>
            <th>Action</th>
            <th>Application Number</th>
            <th>Date Submit</th>
            <th>Date Approved</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </body>
  <script src="js/admin.js"></script>
</html>
