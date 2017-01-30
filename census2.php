<?php //FRONT END
  session_start();
  //page kung san sila mag fifill up ng census
  $thisPage = "ApplicationForm";

  if (isset($_SESSION['census_2'])) {
    header ("Location: census3.php");
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
    <form method='post' action='#' onsubmit='return addMember()' class='container' style="margin-top:75px;">
      <button type='button' onclick='submitForm()' class="btn btn-primary" style="outline-style:none;width:60px;font-size:24px;height:60px;border-radius:100%;bottom:0; right:0;margin:50px; margin-right:50px; margin-top:20px; position:fixed;"><span class="glyphicon glyphicon-menu-right"></span></button>

      <div>
        <p class='text-center'><b>HOUSEHOLD MEMBERSHIP</b></p>

        <p><small>LIST THE PERSONS OR HOUSEHOLD MEMBERS IN THIS ORDER:</small></p>

        <ul>
          <li>Head</li>
          <li>Spouse of the head</li>
          <li>Never-married children of head/spouse from oldest to the youngest</li>
          <li>Ever-married children of head/spouse and their families from oldest to the youngest</li>
          <li>Other relatives</li>
          <li>Nonrelatives</li>
        </ul>
      </div>

      <hr />

      <div class='row text-center'>
        <div class='col-md-3'>
          <p>Who is the <span id='household_member_span'></span> of this household?</p>
          <div class="form-group">
            <label><small>Household Member Name</small></label>
            <input id='member_name_input' onkeyup='householdName()' class="form-control" name='member_name' required>
          </div>
        </div>
        <div class='col-md-3'>
          <p>What is <span class='household_member_name_span'></span> relationship to the head of the household?</p>

          <div class="form-group">
            <label><small>Choices</small></label>
            <select class='form-control' name='member_relationship' required>
              <option value='1'>Head</option>
              <option value='2'>Spouse</option>
              <option value='3'>Son</option>
              <option value='4'>Daughter</option>
              <option value='21'>Stepson</option>
              <option value='22'>Stepdaughter</option>
              <option value='23'>Son-in-law</option>
              <option value='24'>Daughter-in-law</option>
              <option value='31'>Grandson</option>
              <option value='32'>Granddaughter</option>
              <option value='33'>Father</option>
              <option value='34'>Mother</option>
              <option value='41'>Brother</option>
              <option value='42'>Sister</option>
              <option value='43'>Uncle</option>
              <option value='44'>Aunt</option>
              <option value='55'>Nephew</option>
              <option value='56'>Niece</option>
              <option value='57'>Other relative</option>
              <option value='58'>Nonrelative</option>
              <option value='65'>Boarder</option>
              <option value='66'>Domestic Helper</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p>Is <span class='household_member_name_span'></span> male or female?</p>

          <div class="form-group">
            <label><small>Gender</small></label>
            <select class='form-control' name='gender' required>
              <option value='1'>Female</option>
              <option value='2'>Male</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p>In what date was <span class='household_member_name_span'></span> born?</p>

          <div class="form-group">
            <input type="datetime-local" class="form-control" name='born_date' required>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <div class='col-md-3'>
          <p>What is <span class='household_member_name_span'></span>'s age as of his/her last birthday?</p>
          <div class="form-group">
            <input type="number" class="form-control" name='age' required>
            <label><small>Age</small></label>
          </div>
        </div>
        <div class='col-md-3'>
          <p>Was <span class='household_member_name_span'></span>'s birth registered with the Civil Registry Office?</p>

          <div class="form-group">
            <select class='form-control' name='is_registered' required>
              <option value='1'>Yes</option>
              <option value='2'>No</option>
              <option value='2'>Don't Know</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p>Is <span class='household_member_name_span'></span> single, married, widowed, divorced/separated, or in a comon-law/live-in arrangement?</p>

          <div class="form-group">
            <select class='form-control' name='arrangement' required>
              <option value='1'>Single</option>
              <option value='2'>Married</option>
              <option value='3'>Widowed</option>
              <option value='4'>Divorced/Separated</option>
              <option value='5'>Common-law/Live-in</option>
              <option value='6'>Unknown</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p>What is <span class='household_member_name_span'></span> religious affliation?</p>

        </div>
      </div>

      <div class='col-md-12'>
        <button type='submit' class='btn btn-block btn-success'>Add Member</button>
      </div>
    </form>

    <!--list of the added members-->
    <div id='household_div' class='container'>

    </div>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/census2.js"></script>
</html>
