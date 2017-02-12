<?php //FRONT END
  session_start();
  //page kung san sila mag fifill up ng census
  $thisPage = "ApplicationForm";

  if (isset($_SESSION['census_3'])) {
    header ("Location: census4.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
  </head>
  <body>
    <?php include_once('nav.php');?>
    <form method='post' action='ajax/addMember.php' class='container' style="margin-top:75px;">
      <button type='button' onclick='nextPage()' class="btn btn-primary" style="outline-style:none;width:60px;font-size:24px;height:60px;border-radius:100%;bottom:0; right:0;margin:50px; margin-right:50px; margin-top:20px; position:fixed;"><span class="glyphicon glyphicon-menu-right"></span></button>

      <h4 class='text-center'><b>Form 2D</b></h4>
      <hr />
      <div class='row'>
        <!--house_type-->
        <div class='col-md-3'>
          <p class='title'>Type of building/house</p>

          <div class="form-group">
            <select class='form-control' name='house_type' required>
              <option value='1'>Single House</option>
              <option value='2'>Duplex</option>
              <option value='3'>Multi-unit residential (three units or more)</option>
              <option value='4'>Commercial/industrial/agricultural (office, factory, and others)</option>
              <option value='5'>Institutional living quarter (hotel, hospital, and others)</option>
              <option value='6'>Other housing units (boat, cave, and others)</option>
            </select>
          </div>
        </div>
      </div>

    </form>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="js/census2.js"></script> -->
</html>
