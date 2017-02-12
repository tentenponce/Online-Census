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
        <!--Page 2-->
        <!--member_name-->
        <div class='col-md-3'>
          <p class='title'>Who is the <span id='household_member_span'></span> of this household?</p>

          <div class="form-group">
            <label><small>Household Member Name</small></label>
            <input id='member_name_input' onkeyup='householdName()' class="form-control" name='member_name' required>
          </div>
        </div>
        <!--member_relationship-->
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
        <!--gender-->
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
        <!--born_date-->
        <div class='col-md-3'>
          <p class='title'>In what date was <span class='household_member_name_span'></span> born?</p>

          <div class="form-group">
            <input type="date" class="form-control" name='born_date' required>
          </div>
        </div>
        <div class='col-md-12'><br /></div>
        <!--age-->
        <div class='col-md-3'>
          <p class='title'>What is <span class='household_member_name_span'></span>'s age as of his/her last birthday?</p>

          <div class="form-group">
            <input onkeyup='ageKeyUp()' id='age_input' type="number" class="form-control" name='age' required>
            <label><small></small></label>
          </div>
        </div>
        <!--is_registered-->
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
        <!--arrangement-->
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
        <!--religious-->
        <div class='col-md-3'>
          <p class='title'>What is <span class='household_member_name_span'></span> religious affliation?</p>

          <div class="form-group">
            <label><small>Religion</small></label>
            <input type="text" class="form-control" name='religious' required>
          </div>
        </div>
        <!--Page 3-->
        <div class='col-md-12'><br /></div>
        <!--citizenship-->
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
              <input id='country_input' class="form-control" name='country'>
            </div>
          </div>
        </div>
        <!--ethnicity-->
        <div class='col-md-4'>
          <p class='title'>What is <span class='household_member_name_span'></span>'s ethnicity by blood? Is he/she a/an </p>

          <div class="form-group">
            <select id='ethnicity_select' class='form-control' name='ethnicity' required>
              <option value='1'>O+</option>
              <option value='2'>A+</option>
              <option value='3'>B+</option>
              <option value='4'>AB+</option>
              <option value='5'>O-</option>
              <option value='6'>A-</option>
              <option value='7'>B-</option>
              <option value='8'>AB-</option>
            </select>
          </div>
        </div>
        <!--disability-->
        <div class='col-md-4'>
          <p class='title'>Does <span class='household_member_name_span'></span> have any physical or mental disability?</p>

          <div class="form-group">
            <select id='disability_select' class='form-control' name='disability' required>
              <option value='1'>Yes</option>
              <option value='2'>No</option>
            </select>
          </div>
        </div>

        <div class='col-md-12'>
          <br />
        </div>

        <div id='5_year_div' class='col-md-8 row' style='display: none;'>
          <hr class='col-md-12' />
          <h4 class='col-md-12'><b>For All 5 Years Old and Over</b></h4>
          <hr class='col-md-12' />

          <!--difficulty: seeing, hearing, walking, remembering, self_caring, communicating-->
          <div class='col-md-4'>
            <p class='title'>Does <span class='household_member_name_span'></span> have any difficulty/problem in:</p>

            <div class="checkbox">
              <label><input name='seeing' type="checkbox" value="1">Seeing, even when wearing eyeglasses</label>
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
          <!--city_municipality-->
          <div class='col-md-4'>
            <p class='title'>In what City/Municipality did <span class='household_member_name_span'></span> reside on May 1, 2005?</p>

            <div class="form-group">
              <select onchange='cityMunicipalityChange()' id='city_municipality_select' class='form-control' name='foreign_city'>
                <option value='1'>Same City/Municipality</option>
                <option value='2'>Foreign Country</option>
              </select>
            </div>

            <div id='city_municipality_div' style='display: none;'>
              <div class="form-group">
                <label><small>Province</small></label>
                <input id='province_input' class="form-control" name='province'>
              </div>

              <div class="form-group">
                <label><small>City/Municipality</small></label>
                <input id='city_municipality_input' class="form-control" name='city_municipality'>
              </div>
            </div>
          </div>
          <!--grade_year-->
          <div class='col-md-4'>
            <p class='title'>What is the heighest grade/year completed by <span class='household_member_name_span'></span>?</p>

            <select onchange='gradeYearChange()' id='grade_year_select' class='form-control' name='grade_year' required>
              <option value='0'>No grade completed</option>
              <option value='10'>Preschool</option>
              <option value='210'>Grade 1</option>
              <option value='220'>Grade 2</option>
              <option value='230'>Grade 3</option>
              <option value='240'>Grade 4</option>
              <option value='250'>Grade 5</option>
              <option value='260'>Grade 6</option>
              <option value='270'>Grade 7</option>
              <option value='280'>Elementary Graduate</option>
              <option value='310'>1st Year</option>
              <option value='320'>2nd Year</option>
              <option value='330'>3rd Year</option>
              <option value='340'>4th Year</option>
              <option value='350'>High School Graduate</option>
              <option value='410'>1st Year Post Secondary</option>
              <option value='420'>2nd Year Post Secondary</option>
              <option value='430'>3rd Year Post Secondary</option>
              <option value='810'>1st Year College</option>
              <option value='820'>2nd Year College</option>
              <option value='830'>3rd Year College</option>
              <option value='840'>4th Year College</option>
              <option value='850'>5th Year College</option>
              <option value='860'>6th Year College</option>
              <option value='900'>Post Baccalaureate</option>
            </select>
            <br />
            <div id='course_div' class="form-group" style='display: none'>
              <label><small>Course</small></label>
              <input id='course_input' class="form-control" name='course'>
            </div>
          </div>
        </div>
        <div id='10_year_div' class='col-md-4 row' style='display: none;'>
          <hr class='col-md-12' />
          <h4 class='col-md-12'><b>For All 10 Years Old and Over</b></h4>
          <hr class='col-md-12' />

          <!--overseas-->
          <div class='col-md-12'>
            <p class='title'>Is <span class='household_member_name_span'></span> an overseas worker?</p>

            <div class="form-group">
              <select id='overseas_select' class='form-control' name='overseas' required>
                <option value='1'>Yes</option>
                <option value='2'>No</option>
              </select>
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

              //is registered
              $is_registered = "No";
              if ($member->{'is_registered'} == 1) {
                $is_registered = "Yes";
              }

              $arrangement = $member->{'arrangement'};
              switch ($arrangement) {
                case 1:
                  $arrangement = "Single";
                  break;
                case 2:
                  $arrangement = "Married";
                  break;
                case 3:
                  $arrangement = "Widowed";
                  break;
                case 4:
                  $arrangement = "Divorced/Separated";
                  break;
                case 5:
                  $arrangement = "Common-law/Live-in";
                  break;
                case 6:
                  $arrangement = "Unknown";
                  break;
              }

              $citizenship = $member->{'citizenship'};
              switch ($citizenship) {
                case 1:
                  $citizenship = "Yes (Filipino Citizen)";
                  break;
                case 2:
                  $citizenship = "Yes (Filipino with dual citizenship)";
                  $country = $member->{'country'};
                  break;
                case 3:
                  $citizenship = "No";
                  $country = $member->{'country'};
                  break;
              }

              $ethnicity = $member->{'ethnicity'};
              switch ($ethnicity) {
                case 1:
                  $ethnicity = "O+";
                  break;
                case 2:
                  $ethnicity = "A+";
                  break;
                case 3:
                  $ethnicity = "B+";
                  break;
                case 4:
                  $ethnicity = "AB+";
                  break;
                case 5:
                  $ethnicity = "O+";
                  break;
                case 6:
                  $ethnicity = "A+";
                  break;
                case 7:
                  $ethnicity = "B-";
                  break;
                case 8:
                  $ethnicity = "AB-";
                  break;
              }

              $disability = $member->{'disability'};
              switch ($disability) {
                case 1:
                  $disability = "With Disability";
                  break;
                case 2:
                  $disability = "Without Disability";
                  break;
              }

              $foreign_city = $member->{'foreign_city'};
              if ($foreign_city == 2) {
                $foreign_city = $member->{'city_municipality'} . ", " . $member->{'province'};
              } else {
                $foreign_city = "Same City/Municipality";
              }

              $grade_year = $member->{'grade_year'};
              $course = "";
              if ($grade_year >= 410) {
                $course = $member->{'course'};
              }

              switch ($grade_year) {
                case 0:
                  $grade_year = "No grade completed";
                  break;
                case 10:
                  $grade_year = "Preschool";
                  break;
                case 210:
                  $grade_year = "Grade 1";
                  break;
                case 220:
                  $grade_year = "Grade 2";
                  break;
                case 230:
                  $grade_year = "Grade 3";
                  break;
                case 240:
                  $grade_year = "Grade 4";
                  break;
                case 250:
                  $grade_year = "Grade 5";
                  break;
                case 260:
                  $grade_year = "Grade 6";
                  break;
                case 270:
                  $grade_year = "Grade 7";
                  break;
                case 280:
                  $grade_year = "Elementary Graduate";
                  break;
                case 310:
                  $grade_year = "1st Year";
                  break;
                case 320:
                  $grade_year = "2nd Year";
                  break;
                case 330:
                  $grade_year = "3rd Year";
                  break;
                case 340:
                  $grade_year = "4th Year";
                  break;
                case 350:
                  $grade_year = "High School Graduate";
                  break;
                case 410:
                  $grade_year = "1st Year Post Secondary";
                  break;
                case 420:
                  $grade_year = "2nd Year Post Secondary";
                  break;
                case 430:
                  $grade_year = "3rd Year Post Secondary";
                  break;
                case 810:
                  $grade_year = "1st Year College";
                  break;
                case 820:
                  $grade_year = "2nd Year College";
                  break;
                case 830:
                  $grade_year = "3rd Year College";
                  break;
                case 840:
                  $grade_year = "4th Year College";
                  break;
                case 850:
                  $grade_year = "5th Year College";
                  break;
                case 860:
                  $grade_year = "6th Year College";
                  break;
                case 900:
                  $grade_year = "Post Baccalaureate";
                  break;
              }

              if ($member->{'overseas'} == 1) {
                $overseas = "Yes";
              } else {
                $overseas = "No";
              }

              echo "
              <div style='padding: 10px;' class='col-md-6'>
                <div class='border-top border-left border-bottom border-right' style='padding: 10px;'>
                  <h4><b>" . $member->{'member_name'} . "</b></h4>
                  <p>$member_relationship of the head of the household</p>
                  <hr />
                  <p>$gender
                  <br /><b>Birth Date: </b>" . date("M d, Y", strtotime($member->{'born_date'})) . "
                  <br /><b>Age: </b>" . $member->{'age'} . "
                  <br /><b>Registered with the Civil Registry Office: </b>$is_registered
                  <br /><b>$arrangement</b>
                  <br /><b>Religion: </b>" . $member->{'religious'} . "
                  <br /><b>Citizenship: </b>$citizenship";

                  if (isset($country)) {
                    echo "<br /><b>Country: </b>$country";
                  }

                  echo "
                  <br /><b>Blood Type: </b>$ethnicity
                  <br />$disability
                  </p>
                  <p><b>(May 01, 2015) Resides On: </b>$foreign_city</p>
                  <p><b>Highest Grade Completed: </b>$grade_year $course</p>
                  <p><b>Overseas Worker: </b>$overseas</p>
                  <hr />
                  <p class='text-left'><b>Difficulty/Problem in:</b></p>
                  <ul class='text-left'>";

                    $hasDifficulty = false;
                    if (isset($member->{'seeing'})) {
                      echo "<li>Seeing, even when wearing eyeglasses</li>";
                      $hasDifficulty = true;
                    }

                    if (isset($member->{'hearing'})) {
                      echo "<li>Hearing, even when using a hearing aid</li>";
                      $hasDifficulty = true;
                    }

                    if (isset($member->{'walking'})) {
                      echo "<li>Walking or climbing steps</li>";
                      $hasDifficulty = true;
                    }

                    if (isset($member->{'remembering'})) {
                      echo "<li>Remembering or concentrating</li>";
                      $hasDifficulty = true;
                    }

                    if (isset($member->{'self_caring'})) {
                      echo "<li>Self-caring (bathing or dressing)</li>";
                      $hasDifficulty = true;
                    }

                    if (isset($member->{'communicating'})) {
                      echo "<li>Communicating using his/her usual language</li>";
                      $hasDifficulty = true;
                    }

                    if (!$hasDifficulty) {
                      echo "<li>No Difficulty</li>";
                    }

                    echo "
                  </ul>
                  <button type='button' onclick=\"removeMember('" . $member->{'member_name'} . "')\" class='btn btn-block btn-danger'>Remove</button>
                </div>
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
