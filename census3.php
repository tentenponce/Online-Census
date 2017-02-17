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
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
  </head>
  <body>
    <?php include_once('nav.php');?>
    <form method='post' action='ajax/addCensusForm.php' class='container' style="margin-top:75px;">
      <button type='submit' class="btn btn-primary" style="outline-style:none;width:60px;font-size:24px;height:60px;border-radius:100%;bottom:0; right:0;margin:50px; margin-right:50px; margin-top:20px; position:fixed; z-index: 998"><span class="glyphicon glyphicon-menu-right"></span></button>

      <h4 class='text-center'><b>Form 2D</b></h4>
      <hr />
      <div class='row'>
        <!--house_type-->
        <div class='col-md-6'>
          <p class='title'>Type of building/house</p>

          <div class="radio">
            <label><input type="radio" name="house_type" value='1' required>Single House</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="house_type" value='2' required>Duplex</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="house_type" value='3' required>Multi-unit residential (three units or more)</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="house_type" value='4' required>Commercial/industrial/agricultural (office, factory, and others)</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="house_type" value='5' required>Institutional living quarter (hotel, hospital, and others)</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="house_type" value='6' required>Other housing units (boat, cave, and others)</label>
          </div>
        </div>
        <!--construction-->
        <div class='col-md-6'>
          <p class='title'>Construction materials of the roof</p>

          <div class="radio">
            <label><input type="radio" name="construction" value='1' required>Galvanized iron/aluminum</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='2' required>Tile concrete/clay tile</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='3' required>Half galvanized iron and half concrete</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='4' required>Wood</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='5' required>Cogon/nipa/anahaw</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='6' required>Asbestos</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='7' required>Makeshift/salvaged/improvised materials</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="construction" value='8' required>Others</label>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <!--materials-->
        <div class='col-md-6'>
          <p class='title'>Construction materials of the outer walls</p>

          <div class="radio">
            <label><input type="radio" name="materials" value='1' required>Concrete/brick/stone</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='2' required>Wood</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='3' required>Half concrete/brick/stone and half wood</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='4' required>Galvanized iron/aluminum</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='5' required>Bamboo/sawali/cogon/nipa</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='6' required>Asbestos</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='7' required>Glass</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='8' required>Makeshift/salvaged/improvised materials</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='9' required>Others</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="materials" value='9' required>No Walls</label>
          </div>
        </div>
        <!--repair-->
        <div class='col-md-6'>
          <p class='title'>State of repair of the building/house</p>

          <div class="radio">
            <label><input type="radio" name="repair" value='1' required>Needs no repair/needs minor repair</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='2' required>Needs major repair</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='3' required>Dilapidated/condemned</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='4' required>Under renovation/being repaired</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='5' required>Under construction</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='6' required>Unfinished construction</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="repair" value='7' required>Not Applicable</label>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <!--built_year-->
        <div class='col-md-6'>
          <p class='title'>When was this building/house built?</p>

          <div class="form-group">
            <label><small></small></label>
            <input id='built_year_input' class="form-control" type='date' name='built_year' required>
          </div>
        </div>
        <!--floor_area-->
        <div class='col-md-6'>
          <p class='title'>What is the estimated floor area of this housing unit?</p>

          <div class="radio">
            <label><input type="radio" name="floor_area" value='1' required>Less than 5 sq. m/less than 54 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='2' required>5 - 9 sq. m/54 - 107 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='3' required>10 - 19 sq. m/106 - 209 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='4' required>20 - 29 sq. m/210 - 317 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='5' required>30 - 49 sq. m/318 - 532 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='6' required>50 - 69 sq. m/533 - 748 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='7' required>70 - 89 sq. m/749 - 963 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='8' required>90 - 119 sq. m/964 - 1286 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='9' required>120 - 149 sq. m/1287 - 1609 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='10' required>150 - 199 sq. m/1610 - 2147 sq. ft.</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='11' required>200 sq. m - over/2148 sq. ft. - over</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="floor_area" value='12' required>Not Applicable</label>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <!--tenure-->
        <div class='col-md-6'>
          <p class='title'>Did you own or amortize this lot occupied by your household or do you rent it, do you occupy it rent-free with consent of owner, or rent-free without consent of owner?</p>

          <div class="radio">
            <label><input type="radio" name="tenure" value='1' required>Owned/being amortized</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="tenure" value='2' required>rented</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="tenure" value='3' required>Rent-free with consent of owner</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="tenure" value='4' required>Rent-free without consent of owner</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="tenure" value='5' required>Not Applicable</label>
          </div>
        </div>
        <!--remarks-->
        <div class='col-md-6'>
          <p class='title'>Remarks</p>

          <div class="form-group">
            <label></label>
            <textarea class="form-control" rows="5" name='remarks' required></textarea>
          </div>
        </div>
      </div>
    </form>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>

  <!-- <script type="text/javascript" src="js/census2.js"></script> -->
</html>
