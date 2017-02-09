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
    <form method='post' action='ajax/addMember.php' class='container' style="margin-top:75px;">
      <button type='button' onclick='nextPage()' class="btn btn-primary" style="outline-style:none;width:60px;font-size:24px;height:60px;border-radius:100%;bottom:0; right:0;margin:50px; margin-right:50px; margin-top:20px; position:fixed;"><span class="glyphicon glyphicon-menu-right"></span></button>

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
          <p class='title'>Who is the <span id='household_member_span'></span> of this household?</p>

          <div class="form-group">
            <label><small>Household Member Name</small></label>
            <input id='member_name_input' onkeyup='householdName()' class="form-control" name='member_name' required>
          </div>
        </div>
        <div class='col-md-3'>
          <p class='title'>What is <span class='household_member_name_span'></span> relationship to the head of the household?</p>

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
          <p class='title'>Is <span class='household_member_name_span'></span> male or female?</p>

          <div class="form-group">
            <label><small>Gender</small></label>
            <select class='form-control' name='gender' required>
              <option value='1'>Female</option>
              <option value='2'>Male</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p class='title'>In what date was <span class='household_member_name_span'></span> born?</p>

          <div class="form-group">
            <input type="date" class="form-control" name='born_date' required>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <div class='col-md-3'>
          <p class='title'>What is <span class='household_member_name_span'></span>'s age as of his/her last birthday?</p>

          <div class="form-group">
            <input type="number" class="form-control" name='age' required>
            <label><small></small></label>
          </div>
        </div>
        <div class='col-md-3'>
          <p class='title'>Was <span class='household_member_name_span'></span>'s birth registered with the Civil Registry Office?</p>

          <div class="form-group">
            <select class='form-control' name='is_registered' required>
              <option value='1'>Yes</option>
              <option value='2'>No</option>
              <option value='2'>Don't Know</option>
            </select>
          </div>
        </div>
        <div class='col-md-3'>
          <p class='title'>Is <span class='household_member_name_span'></span> single, married, widowed, divorced/separated, or in a comon-law/live-in arrangement?</p>

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
          <p class='title'>What is <span class='household_member_name_span'></span> religious affliation?</p>

          <div class="form-group">
            <select id='religious_select' class='form-control' name='religious' required>
            </select>
          </div>
        </div>
        <!--Page 3-->
        <div class='col-md-12'><br /></div>
        <div class='col-md-4'>
          <p class='title'>Is <span class='household_member_name_span'></span> a citizen of the Philippines?</p>

          <div class="form-group">
            <select id='citizenship_select' onchange='citizenshipChange()' class='form-control' name='citizenship' required>
              <option value='1'>Yes (Filipino Citizen)</option>
              <option value='2'>Yes (Filipino with dual citizenship)</option>
              <option value='3'>No</option>
            </select>
          </div>

          <div id='country_div' style='display: none;'>
            <p class='title'>What country/other country is <span id='household_member_span'></span> a citizen of?</p>

            <div class="form-group">
              <label><small>Country</small></label>
              <input id='country_input' class="form-control" name='country' required>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <p class='title'>What is <span class='household_member_name_span'></span>'s ethnicity by blood? Is he/she a/an </p>

          <div class="form-group">
            <select id='ethnicity_select' class='form-control' name='ethnicity' required>
            </select>
          </div>
        </div>
        <div class='col-md-4'>
          <p class='title'>Does <span class='household_member_name_span'></span> have any physical or mental disability?</p>

          <div class="form-group">
            <select id='disability_select' class='form-control' name='disability' required>
              <option value='1'>Yes</option>
              <option value='2'>No</option>
            </select>
          </div>
        </div>

        <div id='5_year_div' class='col-md-12 row'>
          <h4 class='col-md-12'><b>For All 5 Years Old and Over</b></h4>

          <div class='col-md-3'>
            <p class='title'>Does <span class='household_member_name_span'></span> have any difficulty/problem in:</p>

            <div class="checkbox">
              <label><input type="checkbox" name='seeing' value="1">Seeing, even when wearing eyeglasses</label>
            </div>
            <div class="checkbox">
              <label><input name='hearing' type="checkbox" value="1">Hearing, even when using a hearing aid</label>
            </div>
            <div class="checkbox">
              <label><input name='walking' type="checkbox" value="1">Walking or climbing steps</label>
            </div>
            <div class="checkbox">
              <label><input name='remembering' type="checkbox" value="1">Remembering or concentrating</label>
            </div>
            <div class="checkbox">
              <label><input name='self_caring' type="checkbox" value="1">Self-caring (bathing or dressing)</label>
            </div>
            <div class="checkbox">
              <label><input name='communicating' type="checkbox" value="1">Communicating using his/her usual language</label>
            </div>
          </div>

          <div class='col md-3'>
            <p class='title'>In what City/Municipality did <span class='household_member_name_span'></span> reside on May 1, 2005?</p>

            <div class="form-group">
              <select id='city_municipality_select' class='form-control' name='city_municipality' required>
                <option value='1'>Same City/Municipality</option>
                <option value='2'>Foreign Country</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class='col-md-12'>
        <button type='submit' class='btn btn-block btn-success'>Add Member</button>
      </div>
    </form>

    <!--list of the added members-->
    <br />
    <div class='container' style='margin-bottom: 20px'>
      <div class='row' id='household_div'>
        <?php
          if (isset($_SESSION['members'])) {
            foreach ($_SESSION['members'] as $member) {
              $gender = "";
              if ($member->{'gender'} == 1) {
                $gender = "Female";
              } else {
                $gender = "Male";
              }

              $member_relationship = "";
              switch ($member->{'member_relationship'}) {
                case 1:
                  $member_relationship = "Head";
                  break;
                case 2:
                  $member_relationship = "Spouse";
                  break;
                case 3:
                  $member_relationship = "Son";
                  break;
                case 4:
                  $member_relationship = "Daughter";
                  break;
                case 21:
                  $member_relationship = "Stepson";
                  break;
                case 22:
                  $member_relationship = "Stepdaughter";
                  break;
                case 23:
                  $member_relationship = "Son-in-law";
                  break;
                case 24:
                  $member_relationship = "Daughter-in-law";
                  break;
                case 31:
                  $member_relationship = "Grandson";
                  break;
                case 32:
                  $member_relationship = "Granddaughter";
                  break;
                case 33:
                  $member_relationship = "Father";
                  break;
                case 34:
                  $member_relationship = "Mother";
                  break;
                case 41:
                  $member_relationship = "Brother";
                  break;
                case 42:
                  $member_relationship = "Sister";
                  break;
                case 43:
                  $member_relationship = "Uncle";
                  break;
                case 44:
                  $member_relationship = "Aunt";
                  break;
                case 55:
                  $member_relationship = "Nephew";
                  break;
                case 56:
                  $member_relationship = "Niece";
                  break;
                case 57:
                  $member_relationship = "Other relative";
                  break;
                case 58:
                  $member_relationship = "Nonrelatie";
                  break;
                case 65:
                  $member_relationship = "Boarder";
                  break;
                case 66:
                  $member_relationship = "Domestic Helper";
                  break;
              }

              echo "
              <div class='col-md-6'>
                <p><b>" . $member->{'member_name'} . "</b>
                <br />$member_relationship of the head of the household
                <br />$gender
                <br /><b>Birth Date: </b>" . date("M d, Y", strtotime($member->{'born_date'})) . "
                <br /><b>Age: </b>" . $member->{'age'} . "
                </p>
                <button type='button' onclick=\"removeMember('" . $member->{'member_name'} . "')\" class='btn btn-block btn-danger'>Remove</button>
              </div>";
            }
          }
        ?>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/census2.js"></script>
</html>
